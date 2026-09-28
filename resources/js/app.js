import 'bootstrap';

// ==== Slider Logo Klien (running text + tombol kiri/kanan) ====
document.addEventListener('DOMContentLoaded', function () {
    const slider = document.querySelector('.fs-client-slider');
    if (!slider) return;

    const track = slider.querySelector('.fs-client-track');
    const btnLeft = slider.querySelector('.fs-client-arrow.left');
    const btnRight = slider.querySelector('.fs-client-arrow.right');
    if (!track) return;

    // Baca data logo dari blade (file blade tidak perlu diubah)
    const logos = Array.from(track.querySelectorAll('img')).map(function (img) {
        return { src: img.src, alt: img.alt };
    });
    if (logos.length === 0) return;

    const SPEED = 40; // kecepatan running (px per detik), ubah sesuai selera
    const GAP = 20;   // jarak antar kartu (px)

    // Bangun rail: 2 salinan logo supaya putarannya mulus tanpa putus
    const rail = document.createElement('div');
    rail.className = 'fs-client-rail';
    rail.style.gap = GAP + 'px';

    const cards = [];
    for (let copy = 0; copy < 2; copy++) {
        logos.forEach(function (logo) {
            const card = document.createElement('div');
            card.className = 'fs-client-card';
            if (copy === 1) card.setAttribute('aria-hidden', 'true');

            const img = document.createElement('img');
            img.className = 'fs-client-logo';
            img.src = logo.src;
            img.alt = copy === 0 ? logo.alt : '';
            img.draggable = false;

            card.appendChild(img);
            rail.appendChild(card);
            cards.push(card);
        });
    }
    track.innerHTML = '';
    track.appendChild(rail);

    let offset = 0;
    let pending = 0; // sisa geseran dari klik tombol
    let paused = false;
    let last = null;
    let pitch = 0;
    let setWidth = 0;

    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Jumlah logo yang terlihat: desktop 5, tablet 3, HP 2
    function getVisible() {
        if (window.innerWidth >= 992) return 5;
        if (window.innerWidth >= 576) return 3;
        return 2;
    }

    function wrap(v) {
        return ((v % setWidth) + setWidth) % setWidth;
    }

    function layout() {
        const visible = getVisible();
        const cardW = (track.clientWidth - GAP * (visible - 1)) / visible;
        if (cardW <= 0) return;
        cards.forEach(function (c) { c.style.width = cardW + 'px'; });
        pitch = cardW + GAP;
        setWidth = pitch * logos.length;
        offset = wrap(offset);
    }

    function frame(now) {
        if (last === null) last = now;
        const dt = Math.min((now - last) / 1000, 0.05);
        last = now;

        if (setWidth > 0) {
            if (!paused && !reduceMotion) offset += SPEED * dt;

            if (pending !== 0) {
                const step = Math.abs(pending) < 0.5 ? pending : pending * 0.18;
                offset += step;
                pending -= step;
            }

            offset = wrap(offset);
            rail.style.transform = 'translate3d(' + (-offset) + 'px, 0, 0)';
        }
        requestAnimationFrame(frame);
    }

    if (btnRight) btnRight.addEventListener('click', function () { pending += pitch; });
    if (btnLeft) btnLeft.addEventListener('click', function () { pending -= pitch; });

    // Berhenti sebentar saat di-hover / fokus
    track.addEventListener('mouseenter', function () { paused = true; });
    track.addEventListener('mouseleave', function () { paused = false; });
    slider.addEventListener('focusin', function () { paused = true; });
    slider.addEventListener('focusout', function () { paused = false; });

    window.addEventListener('resize', layout);

    layout();
    requestAnimationFrame(frame);
});