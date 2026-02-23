let CONTENT_SLIDER_DRAGGING = false;

function formatTime(sec) {
    sec = Math.max(0, Math.floor(sec || 0));
    const m = Math.floor(sec / 60);
    const s = sec % 60;
    return `${m}:${String(s).padStart(2, '0')}`;
}

function ensureVideoSrc(video) {
    if (!video) return;
    if (video.src) return;
    const ds = video.getAttribute('data-src');
    if (ds) {
        video.src = ds;
        // fuerza a que el browser “registre” el src
        video.load();
    }
}

function setupPhoneVideo(phone) {
    const video = phone.querySelector('.phone__video');
    const tap = phone.querySelector('.phone__tap');
    const seek = phone.querySelector('.phone__seek');
    const tcur = phone.querySelector('.phone__tcur');
    const tdur = phone.querySelector('.phone__tdur');

    tap.addEventListener('click', async () => {
        if (CONTENT_SLIDER_DRAGGING) return;

        // 1) Cargamos el src
        ensureVideoSrc(video);

        // 2) pausar otros
        document.querySelectorAll('.content-video-slider .phone__video').forEach(v => {
            if (v !== video && !v.paused) v.pause();
        });

        if (video.paused) {
            try { await video.play(); } catch (e) { }
        } else {
            video.pause();
        }
    });

    video.addEventListener('play', () => phone.classList.add('is-playing'));
    video.addEventListener('pause', () => phone.classList.remove('is-playing'));
    video.addEventListener('ended', () => phone.classList.remove('is-playing'));

    video.addEventListener('loadedmetadata', () => {
        tdur.textContent = formatTime(video.duration);
    });

    video.addEventListener('timeupdate', () => {
        const dur = video.duration || 0;
        tcur.textContent = formatTime(video.currentTime);
        if (dur > 0 && !seek.matches(':active')) {
            seek.value = Math.round((video.currentTime / dur) * 1000);
        }
    });

    seek.addEventListener('input', () => {
        const dur = video.duration || 0;
        if (dur > 0) video.currentTime = (seek.value / 1000) * dur;
    });
}

document.addEventListener('DOMContentLoaded', () => {
    CONTENT_SLIDER_DRAGGING = false;

    // 1) Setup de videos (solo dentro del slider)
    document.querySelectorAll('.content-video-slider .phone').forEach(setupPhoneVideo);

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
        0:   { 
            items: 1,
            margin: 14,
            stagePadding: 0
        },
        768: { 
            items: 2,
            margin: -100,
            stagePadding: 0 
        }
        }
    });

    // Marcar cuando el usuario está arrastrando el carrusel
    $slider.on('drag.owl.carousel', function () {
    CONTENT_SLIDER_DRAGGING = true;

    // Pausamos todo apenas empieza a arrastrar
    document.querySelectorAll('.content-video-slider .phone__video')
        .forEach(v => { if (v && !v.paused) v.pause(); });

    document.querySelectorAll('.content-video-slider .phone')
        .forEach(p => p.classList.remove('is-playing'));
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
        if (jQuery(e.target).closest('.phone__tap, .phone__video, .phone__seek').length) return;

        const pos = jQuery(this).find('.content-video-slide').data('pos');
        if (pos === undefined) return;

        $slider.trigger('to.owl.carousel', [pos, 250, true]);
    });
    
    // 4) Cuando cambia de slide: pausar todo
    $slider.on('changed.owl.carousel', function () {
        document.querySelectorAll('.content-video-slider .phone__video')
        .forEach(v => { if (v && !v.paused) v.pause(); });

        document.querySelectorAll('.content-video-slider .phone')
        .forEach(p => p.classList.remove('is-playing'));
    });
});