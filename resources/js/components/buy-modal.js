import { Modal } from 'bootstrap';

/* POPUP BUY — INISIALISASI */

function initBuyModal() {
    const modal = document.getElementById('buyModal');

    if (!modal) return;

    const dialog = modal.querySelector('.fs-buy-dialog');
    const views = [...modal.querySelectorAll('[data-buy-view]')];
    const radios = [...modal.querySelectorAll('.fs-buy-package-radio')];

    const form = modal.querySelector('#buyOrderForm');
    const packageInput = modal.querySelector('#buyPackageId');
    const changeButton = modal.querySelector('#buyChangePackage');
    const cancelButton = modal.querySelector('#buyCancelPackage');
    const applyButton = modal.querySelector('#buyApplyPackage');

    let selectedPackageId = '';

    /* POPUP BUY — TAMPILAN */

    function focusActiveTitle() {
        const activeView = views.find((view) => !view.hidden);

        activeView?.querySelector('[tabindex="-1"]')?.focus({
            preventScroll: true,
        });
    }

    function showView(name, moveFocus = true) {
        views.forEach((view) => {
            view.hidden = view.dataset.buyView !== name;
        });

        dialog.classList.toggle('is-compact', name !== 'order');
        modal.scrollTop = 0;

        Modal.getInstance(modal)?.handleUpdate();

        if (moveFocus) {
            focusActiveTitle();
        }
    }

    /* POPUP BUY — DATA PAKET */

    function syncPackageChoices() {
        radios.forEach((radio) => {
            radio.checked = radio.value === selectedPackageId;
        });

        applyButton.disabled = !radios.some((radio) => radio.checked);
    }

    function selectPackage(id) {
        const selectedRadio = radios.find(
            (radio) => radio.value === String(id)
        );

        if (!selectedRadio) return false;

        selectedPackageId = selectedRadio.value;
        packageInput.value = selectedPackageId;

        const {
            packageName,
            packagePrice,
            packageMinimum,
            packageServer,
        } = selectedRadio.dataset;

        const content = {
            buySelectedName: packageName,
            buySelectedPrice: packagePrice,
            buySelectedMinimum: packageMinimum,
            buySelectedServer: packageServer,
            buySuccessPackageName: packageName,
            buySuccessPackagePrice: packagePrice,
            buySuccessPackageMinimum: packageMinimum,
            buySuccessPackageServer: packageServer,
        };

        Object.entries(content).forEach(([elementId, value]) => {
            const element = modal.querySelector(`#${elementId}`);

            if (element) {
                element.textContent = value;
            }
        });

        [
            'buySelectedPriceRow',
            'buySelectedMinimum',
            'buySelectedServer',
        ].forEach((elementId) => {
            const element = modal.querySelector(`#${elementId}`);

            if (element) {
                element.hidden = false;
            }
        });

        syncPackageChoices();

        return true;
    }

    /* POPUP BUY — BUKA MODAL */

    modal.addEventListener('show.bs.modal', (event) => {
        const packageId = event.relatedTarget?.getAttribute(
            'data-buy-package'
        );

        if (packageId && selectPackage(packageId)) {
            showView('order', false);
            return;
        }

        syncPackageChoices();
        showView('packages', false);
    });

    modal.addEventListener('shown.bs.modal', focusActiveTitle);

    /* POPUP BUY — UBAH PAKET */

    changeButton.addEventListener('click', () => {
        syncPackageChoices();
        showView('packages');
    });

    radios.forEach((radio) => {
        radio.addEventListener('change', () => {
            applyButton.disabled = false;
        });
    });

    cancelButton.addEventListener('click', () => {
        syncPackageChoices();

        if (selectedPackageId) {
            showView('order');
            return;
        }

        Modal.getInstance(modal)?.hide();
    });

    applyButton.addEventListener('click', () => {
        const selectedRadio = radios.find((radio) => radio.checked);

        if (selectedRadio && selectPackage(selectedRadio.value)) {
            showView('order');
        }
    });

    /* POPUP BUY — FORM */

    form.addEventListener('submit', (event) => {
        event.preventDefault();
    });
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initBuyModal, {
        once: true,
    });
} else {
    initBuyModal();
}