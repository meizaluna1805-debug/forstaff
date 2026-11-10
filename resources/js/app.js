import 'bootstrap';
import './components/buy-modal';

/* =========================================================
   HOME - SLIDER LOGO KLIEN
========================================================= */

document.addEventListener('DOMContentLoaded', function () {
    const slider = document.querySelector('.fs-client-slider');

    if (!slider) return;

    const track = slider.querySelector('.fs-client-track');
    const btnLeft = slider.querySelector('.fs-client-arrow.left');
    const btnRight = slider.querySelector('.fs-client-arrow.right');

    if (!track) return;

    const logos = Array.from(
        track.querySelectorAll('img')
    ).map(function (img) {
        return {
            src: img.src,
            alt: img.alt
        };
    });

    if (logos.length === 0) return;


    const SPEED = 40;
    const GAP = 20;


    /* =====================================================
       BANGUN RAIL
    ===================================================== */

    const rail = document.createElement('div');

    rail.className = 'fs-client-rail';
    rail.style.gap = GAP + 'px';


    const cards = [];

    for (let copy = 0; copy < 2; copy++) {

        logos.forEach(function (logo) {

            const card = document.createElement('div');

            card.className = 'fs-client-card';

            if (copy === 1) {
                card.setAttribute('aria-hidden', 'true');
            }


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


    /* =====================================================
       SLIDER STATE
    ===================================================== */

    let offset = 0;
    let pending = 0;
    let paused = false;
    let last = null;

    let pitch = 0;
    let setWidth = 0;


    const reduceMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;


    /* =====================================================
       JUMLAH LOGO TERLIHAT
    ===================================================== */

    function getVisible() {

        if (window.innerWidth >= 992) {
            return 5;
        }

        if (window.innerWidth >= 576) {
            return 3;
        }

        return 2;
    }


    /* =====================================================
       LOOP POSITION
    ===================================================== */

    function wrap(value) {

        if (setWidth <= 0) {
            return 0;
        }

        return (
            (value % setWidth) + setWidth
        ) % setWidth;
    }


    /* =====================================================
       HITUNG UKURAN CARD
    ===================================================== */

    function layout() {

        const visible = getVisible();

        const cardWidth =
            (
                track.clientWidth -
                GAP * (visible - 1)
            ) / visible;


        if (cardWidth <= 0) {
            return;
        }


        cards.forEach(function (card) {
            card.style.width = cardWidth + 'px';
        });


        pitch = cardWidth + GAP;

        setWidth =
            pitch * logos.length;


        offset = wrap(offset);
    }


    /* =====================================================
       ANIMASI
    ===================================================== */

    function frame(now) {

        if (last === null) {
            last = now;
        }


        const dt = Math.min(
            (now - last) / 1000,
            0.05
        );


        last = now;


        if (setWidth > 0) {

            /*
             * Auto running
             */
            if (!paused && !reduceMotion) {
                offset += SPEED * dt;
            }


            /*
             * Gerakan dari tombol kiri / kanan
             */
            if (pending !== 0) {

                const step =
                    Math.abs(pending) < 0.5
                        ? pending
                        : pending * 0.18;


                offset += step;
                pending -= step;
            }


            offset = wrap(offset);


            rail.style.transform =
                'translate3d(' +
                (-offset) +
                'px, 0, 0)';
        }


        requestAnimationFrame(frame);
    }


    /* =====================================================
       TOMBOL SLIDER
    ===================================================== */

    if (btnRight) {

        btnRight.addEventListener(
            'click',
            function () {
                pending += pitch;
            }
        );
    }


    if (btnLeft) {

        btnLeft.addEventListener(
            'click',
            function () {
                pending -= pitch;
            }
        );
    }


    /* =====================================================
       PAUSE
    ===================================================== */

    track.addEventListener(
        'mouseenter',
        function () {
            paused = true;
        }
    );


    track.addEventListener(
        'mouseleave',
        function () {
            paused = false;
        }
    );


    slider.addEventListener(
        'focusin',
        function () {
            paused = true;
        }
    );


    slider.addEventListener(
        'focusout',
        function () {
            paused = false;
        }
    );


    /* =====================================================
       RESIZE
    ===================================================== */

    window.addEventListener(
        'resize',
        layout
    );


    layout();

    requestAnimationFrame(frame);
});


/* =========================================================
   FORSTAFF - FEATURE PAGE
   - Feature Tabs
========================================================= */

function initForstaffFeatures() {
    const featureExplorer = document.querySelector(
        '.fs-feature-explorer'
    );

    if (!featureExplorer) {
        return;
    }


    /* =====================================================
       ELEMENTS
    ===================================================== */

    const tabs = Array.from(
        featureExplorer.querySelectorAll(
            '.fs-feature-tab[data-feature-target]'
        )
    );

    const panels = Array.from(
        featureExplorer.querySelectorAll(
            '.fs-feature-panel[data-feature-panel]'
        )
    );


    if (tabs.length === 0 || panels.length === 0) {
        return;
    }


    /* =====================================================
       ACTIVATE FEATURE
    ===================================================== */

    function activateFeature(featureId, focusTab = false) {
        const selectedTab = tabs.find(
            (tab) =>
                tab.dataset.featureTarget === featureId
        );

        const selectedPanel = panels.find(
            (panel) =>
                panel.dataset.featurePanel === featureId
        );


        if (!selectedTab || !selectedPanel) {
            return;
        }


        /* Update sidebar tabs */
        tabs.forEach((tab) => {
            const isActive =
                tab.dataset.featureTarget === featureId;

            tab.classList.toggle(
                'is-active',
                isActive
            );

            tab.setAttribute(
                'aria-selected',
                isActive ? 'true' : 'false'
            );

            tab.setAttribute(
                'tabindex',
                isActive ? '0' : '-1'
            );
        });


        /* Update feature panels */
        panels.forEach((panel) => {
            const isActive =
                panel.dataset.featurePanel === featureId;

            panel.classList.toggle(
                'is-active',
                isActive
            );

            panel.hidden = !isActive;
        });


        /* Keyboard focus */
        if (focusTab) {
            selectedTab.focus();
        }
    }


    /* =====================================================
       SIDEBAR CLICK
    ===================================================== */

    tabs.forEach((tab) => {
        tab.addEventListener('click', () => {
            const featureId =
                tab.dataset.featureTarget;

            if (!featureId) {
                return;
            }

            activateFeature(featureId);
        });
    });


    /* =====================================================
       KEYBOARD NAVIGATION
    ===================================================== */

    tabs.forEach((tab) => {
        tab.addEventListener(
            'keydown',
            (event) => {
                const currentIndex =
                    tabs.indexOf(tab);

                if (currentIndex === -1) {
                    return;
                }

                let targetIndex = null;


                switch (event.key) {
                    case 'ArrowRight':
                    case 'ArrowDown':
                        targetIndex =
                            currentIndex === tabs.length - 1
                                ? 0
                                : currentIndex + 1;
                        break;


                    case 'ArrowLeft':
                    case 'ArrowUp':
                        targetIndex =
                            currentIndex === 0
                                ? tabs.length - 1
                                : currentIndex - 1;
                        break;


                    case 'Home':
                        targetIndex = 0;
                        break;


                    case 'End':
                        targetIndex =
                            tabs.length - 1;
                        break;


                    default:
                        return;
                }


                event.preventDefault();


                const targetTab =
                    tabs[targetIndex];

                const featureId =
                    targetTab?.dataset.featureTarget;


                if (!featureId) {
                    return;
                }


                activateFeature(
                    featureId,
                    true
                );
            }
        );
    });


    /* =====================================================
       INITIAL STATE
    ===================================================== */

    const initialTab =
        tabs.find(
            (tab) =>
                tab.classList.contains(
                    'is-active'
                )
        ) || tabs[0];


    if (initialTab) {
        activateFeature(
            initialTab.dataset.featureTarget
        );
    }
}


/* =========================================================
   INITIALIZE FEATURE PAGE
========================================================= */

if (document.readyState === 'loading') {
    document.addEventListener(
        'DOMContentLoaded',
        initForstaffFeatures
    );
} else {
    initForstaffFeatures();
}