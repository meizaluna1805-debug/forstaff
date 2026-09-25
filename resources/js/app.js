
// ==== Slider Logo Klien ====
document.addEventListener('DOMContentLoaded', function () {
    const slider = document.querySelector('.fs-client-slider');
    if (!slider) return;

    const track = slider.querySelector('.fs-client-track');
    const btnLeft = slider.querySelector('.fs-client-arrow.left');
    const btnRight = slider.querySelector('.fs-client-arrow.right');

    if (!track) return;

    // Ambil data logo asli dari HTML blade (hanya dibaca, tidak dihapus dari file blade)
    const originalLogos = Array.from(track.querySelectorAll('img')).map(function (img) {
        return { src: img.src, alt: img.alt };
    });

    const total = originalLogos.length;
    if (total === 0) return;

    const SLOT_COUNT = 7; // jumlah slot maksimum (desktop). Tablet/mobile disembunyikan via CSS.
    let startIndex = 0;

    // Bangun slot tetap di dalam track
    track.innerHTML = '';
    const slots = [];
    for (let i = 0; i < SLOT_COUNT; i++) {
        const img = document.createElement('img');
        img.className = 'fs-client-logo';
        track.appendChild(img);
        slots.push(img);
    }

    function renderSlots() {
        slots.forEach(function (img, i) {
            const logo = originalLogos[(startIndex + i) % total];
            img.src = logo.src;
            img.alt = logo.alt;
        });
    }

    function goTo(direction) {
        track.classList.add('is-transitioning');
        window.setTimeout(function () {
            startIndex = (startIndex + direction + total) % total;
            renderSlots();
            track.classList.remove('is-transitioning');
        }, 180);
    }

    if (btnRight) {
        btnRight.addEventListener('click', function () {
            goTo(1);
        });
    }

    if (btnLeft) {
        btnLeft.addEventListener('click', function () {
            goTo(-1);
        });
    }

    renderSlots();
});