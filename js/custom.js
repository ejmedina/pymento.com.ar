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

    // Seccion PyMES content factory
    const pymesSlider = jQuery('.content-video-slider');

    // Inicializacion del owlCarousel
    // evitar doble-init por si el script corre dos veces
    if (pymesSlider.length && !pymesSlider.hasClass('owl-loaded')) {
        // INIT
        pymesSlider.owlCarousel({
            loop: true,
            nav: false,
            dots: true,
            center: true,
            responsive: {
                0: { items: 1, margin: 14, stagePadding: 0 },
                768: { items: 2, margin: -200, stagePadding: 0 }
            }
        });

         // EVENTOS
        pymesSlider.on('drag.owl.carousel', function () {
            // Marcar cuando el usuario está arrastrando el carrusel
            CONTENT_SLIDER_DRAGGING = true;
            // Pausamos todo apenas empieza a arrastrar
            pauseAllPlayers(null);
        });

        // Cuando termina el drag, esperamos un tick para que no caiga el click fantasma
        pymesSlider.on('dragged.owl.carousel', function () {
            setTimeout(() => { CONTENT_SLIDER_DRAGGING = false; }, 0);
        });

        // 3) Click/tap en un slide => llevarlo al centro
        pymesSlider.on('click', '.owl-item', function (e) {
            // si clickeás en el item central, NO mover carrusel
            if (jQuery(this).hasClass('center')) return;

            // si clickeás en controles del video, NO mover carrusel
            if (jQuery(e.target).closest('.phone__tap, iframe, .phone__player').length) return;


            const pos = jQuery(this).find('.content-video-slide').data('pos');
            if (pos === undefined) return;

            pymesSlider.trigger('to.owl.carousel', [pos, 250, true]);
        });

        // 4) Cuando cambia de slide: pausar todo
        pymesSlider.on('changed.owl.carousel', function () {
            pauseAllPlayers(null);
        });
    }

    // Seccion Content Creators CONTENT FACTORY
    const creatorsSlider = jQuery('.content-creators-slider');

    if (creatorsSlider.length && !creatorsSlider.hasClass('owl-loaded')) {
        creatorsSlider.owlCarousel({
            loop: false, // clave (evita duplicados)
            nav: true,
            dots: false,
            margin: 20,
            center: true,
            responsive: {
                0: { items: 1 },
                1024: { items: 1 }
            }
        });
    }

    const creatorVideos = document.querySelectorAll(".creator-video");

    creatorVideos.forEach(container => {
        container.addEventListener("click", function () {

            // evitar recrear iframe si ya existe
            if (this.classList.contains("loaded")) return;

            const videoId = this.dataset.ytId;

            const iframe = document.createElement("iframe");
            const embedUrl = "https://www.youtube.com/embed/HgukwsCBgNA?si=H0cshIkiBxBiKN4b";

            iframe.setAttribute("src", embedUrl);
            iframe.setAttribute("frameborder", "0");
            iframe.setAttribute("allow", "accelerometer; encrypted-media; gyroscope; picture-in-picture");
            iframe.setAttribute("allowfullscreen", "");

            iframe.style.width = "100%";
            iframe.style.height = "100%";

            // limpiar contenido (thumbnail + botón)
            this.innerHTML = "";
            this.appendChild(iframe);

            this.classList.add("loaded");
        });

    });
});

// Separacion de contenido y botones en CONTENT FACTORY:
document.addEventListener("DOMContentLoaded", function () {

    const tabs = document.querySelectorAll(".content-tab");
    const sliders = document.querySelectorAll(".content-slider");

    tabs.forEach(tab => {
        tab.addEventListener("click", function () {

            // tabs
            tabs.forEach(t => t.classList.remove("active"));
            this.classList.add("active");

            // sliders
            const target = this.dataset.target;

            sliders.forEach(s => s.classList.remove("active"));

            document.querySelector(`.content-slider-${target}`)
                .classList.add("active");
        });
    });

});

// Funcion para copiar mail en el portapapeles
document.addEventListener("DOMContentLoaded", function () {

    const emailToggle = document.querySelector(".email-toggle");
    const feedback = document.getElementById("copyFeedback");

    if (!emailToggle) return;

    emailToggle.addEventListener("click", function (e) {
        e.preventDefault();

        const user = this.dataset.user;
        const domain = this.dataset.domain;
        const email = user + "@" + domain;

        // Reemplazar contenido
        const container = this.parentElement;

        container.innerHTML = `
            <span>Email:</span>
            <span class="email-value">${email}</span>
            <a href="#" class="copy-email" data-email="${email}">Copiar</a>
        `;

        // Seleccionar nuevo botón copiar
        const copyBtn = container.querySelector(".copy-email");

        copyBtn.addEventListener("click", async function (e) {
            e.preventDefault();

            try {
                await navigator.clipboard.writeText(email);

                this.textContent = "Copiado ✓";

                setTimeout(() => {
                    this.textContent = "Copiar";
                }, 2500);

            } catch (err) {
                console.error("Error al copiar:", err);
            }
        });
    });
});