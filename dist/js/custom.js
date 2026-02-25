let CONTENT_SLIDER_DRAGGING = false;

// =====================
// YouTube inline players
// =====================

const YTPlayers = new Map(); // key: phone__player DOM, value: YT.Player
let YTReady = false;
let YTQueue = [];

window.onYouTubeIframeAPIReady = function () {
    YTReady = true;
    YTQueue.forEach(fn => fn());
    YTQueue = [];
};

const YTReadyPromises = new Map(); // key: holder, value: Promise<YT.Player>

function getYTPlayerAsync(phoneEl) {
    const holder = phoneEl.querySelector('.phone__player');
    if (!holder) return Promise.resolve(null);

    let host = holder.querySelector('.yt-host');
    if (!host) {
        host = document.createElement('div');
        host.className = 'yt-host';
        holder.appendChild(host);
    }

    // si ya existe player, devolverlo
    if (YTPlayers.has(holder)) return Promise.resolve(YTPlayers.get(holder));

    // si ya hay promesa en curso, devolverla
    if (YTReadyPromises.has(holder)) return YTReadyPromises.get(holder);

    const ytId = holder.getAttribute('data-yt-id');
    if (!ytId) return Promise.resolve(null);

    const p = new Promise((resolve) => {
        runWhenYTReady(() => {
            requestAnimationFrame(() => {
                const player = new YT.Player(host, {
                    videoId: ytId,
                    playerVars: {
                        playsinline: 1,
                        controls: 1,
                        rel: 0,
                        modestbranding: 1,
                        fs: 0,
                        iv_load_policy: 3
                    },
                    events: {
                        onReady: () => {
                            // guardar y resolver
                            YTPlayers.set(holder, player);
                            phoneEl.classList.add('has-iframe');
                            resolve(player);
                        },
                        onStateChange: (ev) => {
                            const phoneEl = holder.closest('.phone');

                            if (ev.data === YT.PlayerState.PLAYING) {
                                if (phoneEl) phoneEl.classList.add('is-playing');
                                pauseAllPlayers(ev.target);
                            }

                            if (ev.data === YT.PlayerState.PAUSED || ev.data === YT.PlayerState.ENDED) {
                                if (phoneEl) phoneEl.classList.remove('is-playing');
                            }
                        }
                    }
                });
            });
        });
    });

    YTReadyPromises.set(holder, p);
    return p;
}

function runWhenYTReady(fn) {
    if (YTReady) fn();
    else YTQueue.push(fn);
}

function pauseAllPlayers(exceptPlayer) {
    YTPlayers.forEach((p, holder) => {
        if (!p) return;
        if (exceptPlayer && p === exceptPlayer) return; // NO pausar el actual
        try { p.pauseVideo(); } catch (e) { }

        // Actualizar UI del phone
        const phoneEl = holder && holder.closest ? holder.closest('.phone') : null;
        if (phoneEl) phoneEl.classList.remove('is-playing');
    });
}

function setupPhoneYouTube(phone) {
    const tap = phone.querySelector('.phone__tap');
    const holder = phone.querySelector('.phone__player');
    if (!tap || !holder) return;

    tap.addEventListener('click', async (e) => {
        e.preventDefault();
        e.stopPropagation();

        // Si venimos de drag, ignorar click fantasma
        if (CONTENT_SLIDER_DRAGGING) return;

        const player = await getYTPlayerAsync(phone);
        if (!player) return;

        let state = -1;
        try { state = player.getPlayerState(); } catch (err) {}

        // Toggle real
        if (state === YT.PlayerState.PLAYING || state === YT.PlayerState.BUFFERING) {
            try { player.pauseVideo(); } catch (err) {}
            phone.classList.remove('is-playing');
            return;
            }

            // Si no está reproduciendo: play (y pausamos los demás)
            pauseAllPlayers(player);
            try { player.playVideo(); } catch (err) {}
            phone.classList.add('is-playing');
        });
}

document.addEventListener('DOMContentLoaded', () => {
    CONTENT_SLIDER_DRAGGING = false;

    // 1) Setup de videos (solo dentro del slider);
    document.querySelectorAll('.content-video-slider .phone').forEach(setupPhoneYouTube);

    // 2) Owl init solo si existe
    if (!(window.jQuery && jQuery().owlCarousel)) {
        console.warn('OwlCarousel o jQuery no está cargado.');
        return;
    }

    const $slider = jQuery('.content-video-slider');
    // evitar doble-init por si el script corre dos veces
    if ($slider.hasClass('owl-loaded')) return;

    // Inicializacion del owlCarousel
    $slider.owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        center: true,
        responsive: {
            0: {
                items: 1,
                margin: 14,
                stagePadding: 0
            },
            768: {
                items: 2,
                margin: -200,
                stagePadding: 0
            }
        }
    });

    // Marcar cuando el usuario está arrastrando el carrusel
    $slider.on('drag.owl.carousel', function () {
        CONTENT_SLIDER_DRAGGING = true;

        // Pausamos todo apenas empieza a arrastrar
        pauseAllPlayers(null);
    });

    // Cuando termina el drag, esperamos un tick para que no caiga el click fantasma
    $slider.on('dragged.owl.carousel', function () {
        setTimeout(() => { CONTENT_SLIDER_DRAGGING = false; }, 0);
    });

    // 3) Click/tap en un slide => llevarlo al centro
    $slider.on('click', '.owl-item', function (e) {
        // si clickeás en el item central, NO mover carrusel
        if (jQuery(this).hasClass('center')) return;

        // si clickeás en controles del video, NO mover carrusel
        if (jQuery(e.target).closest('.phone__tap, iframe, .phone__player').length) return;

        const pos = jQuery(this).find('.content-video-slide').data('pos');
        if (pos === undefined) return;

        $slider.trigger('to.owl.carousel', [pos, 250, true]);
    });

    // 4) Cuando cambia de slide: pausar todo
    $slider.on('changed.owl.carousel', function () {
        pauseAllPlayers(null);
    });
});