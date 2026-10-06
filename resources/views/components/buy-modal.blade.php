{{-- POPUP BUY — DATA PAKET --}}
@php
    $buyPackages = [
        [
            'id' => 1,
            'name' => 'Attendance',
            'price' => 'Rp 12.000',
            'minimum' => 'Minimal 20 user (Rp 240.000/bulan)',
            'server' => 'Biaya server: Rp 200.000/bulan',
        ],
        [
            'id' => 2,
            'name' => 'Attendance + Slip Gaji',
            'price' => 'Rp 17.000',
            'minimum' => 'Minimal 20 user (Rp 340.000/bulan)',
            'server' => 'Biaya server: Rp 250.000/bulan',
        ],
        [
            'id' => 3,
            'name' => 'Full HRIS',
            'price' => 'Rp 22.000',
            'minimum' => 'Minimal 20 user (Rp 440.000/bulan)',
            'server' => 'Biaya server: Rp 300.000/bulan',
        ],
    ];
@endphp

{{-- POPUP BUY — MODAL --}}
<div
    class="modal fade fs-buy-modal"
    id="buyModal"
    tabindex="-1"
    aria-labelledby="buyModalTitle"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered fs-buy-dialog">
        <div class="modal-content fs-buy-content">
            <h2 id="buyModalTitle" class="visually-hidden">
                Pemesanan Paket Forstaff
            </h2>

            <button
                class="btn-close fs-buy-close"
                type="button"
                data-bs-dismiss="modal"
                aria-label="Tutup popup pembelian"
            ></button>

            {{-- POPUP BUY — FORM PEMESANAN --}}
            <div
                class="fs-buy-order"
                id="buyOrderView"
                data-buy-view="order"
            >
                {{-- PANEL KIRI --}}
                <div class="fs-buy-panel">
                    <div class="fs-buy-brand">
                        <img
                            src="{{ asset('images/forstaff-logo.png') }}"
                            alt="Forstaff"
                        >
                    </div>

                    <div class="fs-buy-panel-copy">
                        <span class="fs-buy-panel-badge">
                            Pembelian Paket
                        </span>

                        <h3>
                            Mulai Berlangganan<br>
                            Forstaff Sekarang
                        </h3>

                        <p>
                            Kelola kehadiran, slip gaji, dan proses HR
                            sesuai paket yang Anda pilih.
                        </p>
                    </div>

                    <img
                        class="fs-buy-devices"
                        src="{{ asset('images/request-demo/devices.png') }}"
                        alt="Tampilan Forstaff pada laptop dan ponsel"
                    >
                </div>

                {{-- PANEL KANAN --}}
                <div class="fs-buy-main">
                    <div class="fs-buy-heading">
                        <span class="fs-buy-eyebrow">
                            PEMBELIAN PAKET
                        </span>

                        <h3 id="buyOrderTitle" tabindex="-1">
                            Konfirmasi Pembelian Paket
                        </h3>

                        <p>
                            Lengkapi data berikut untuk melanjutkan
                            pembelian paket Anda.
                        </p>
                    </div>

                    {{-- RINGKASAN PAKET --}}
                    <div
                        class="fs-buy-summary"
                        aria-live="polite"
                        aria-atomic="true"
                    >
                        <div class="fs-buy-summary-icon" aria-hidden="true">
                            <svg
                                width="28"
                                height="28"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path d="m12 3 10 5-10 5L2 8l10-5Z"/>
                                <path d="m2 12 10 5 10-5"/>
                                <path d="m2 16 10 5 10-5"/>
                            </svg>
                        </div>

                        <div class="fs-buy-summary-copy">
                            <span class="fs-buy-summary-label">
                                Paket yang Dipilih
                            </span>

                            <h4 id="buySelectedName">
                                Pilih paket Anda
                            </h4>

                            <p
                                class="fs-buy-summary-price"
                                id="buySelectedPriceRow"
                                hidden
                            >
                                <strong id="buySelectedPrice"></strong>
                                <span>/ user / bulan</span>
                            </p>

                            <p
                                class="fs-buy-summary-note"
                                id="buySelectedMinimum"
                                hidden
                            ></p>

                            <p
                                class="fs-buy-summary-note"
                                id="buySelectedServer"
                                hidden
                            ></p>
                        </div>

                        <button
                            class="fs-buy-change"
                            id="buyChangePackage"
                            type="button"
                            aria-controls="buyPackageView"
                        >
                            Ubah Paket
                        </button>
                    </div>

                    {{-- FORM DATA PEMBELI --}}
                    <form class="fs-buy-form" id="buyOrderForm">
                        @csrf

                        <input
                            id="buyPackageId"
                            name="package_id"
                            type="hidden"
                            value=""
                        >

                        <div class="fs-buy-field">
                            <label for="buyFullName">Nama Lengkap</label>

                            <input
                                id="buyFullName"
                                name="full_name"
                                type="text"
                                autocomplete="name"
                                placeholder="Masukkan nama lengkap"
                                required
                            >
                        </div>

                        <div class="fs-buy-field">
                            <label for="buyCompanyName">Nama Perusahaan</label>

                            <input
                                id="buyCompanyName"
                                name="company_name"
                                type="text"
                                autocomplete="organization"
                                placeholder="Masukkan nama perusahaan"
                                required
                            >
                        </div>

                        <div class="fs-buy-field">
                            <label for="buyEmail">Email</label>

                            <input
                                id="buyEmail"
                                name="email"
                                type="email"
                                autocomplete="email"
                                placeholder="Masukkan email Anda"
                                required
                            >
                        </div>

                        <div class="fs-buy-field">
                            <label for="buyPhone">Nomor WhatsApp</label>

                            <input
                                id="buyPhone"
                                name="phone"
                                type="tel"
                                autocomplete="tel"
                                placeholder="Contoh: 081234567890"
                                required
                            >
                        </div>

                        <p
                            class="fs-buy-error fs-buy-field-wide"
                            id="buyErrorMessage"
                            role="alert"
                            hidden
                        ></p>

                        <button
                            class="fs-buy-submit fs-buy-field-wide"
                            id="buySubmitButton"
                            type="submit"
                            disabled
                        >
                            <span id="buySubmitLabel">Kirim Pemesanan</span>
                            <span id="buySubmitArrow" aria-hidden="true">→</span>

                            <span
                                class="spinner-border spinner-border-sm"
                                id="buySubmitSpinner"
                                aria-hidden="true"
                                hidden
                            ></span>
                        </button>
                    </form>
                </div>
            </div>

            {{-- POPUP BUY — PILIH PAKET --}}
            <div
                class="fs-buy-package-view"
                id="buyPackageView"
                data-buy-view="packages"
                hidden
            >
                <div class="fs-buy-heading">
                    <h3 id="buyPackageTitle" tabindex="-1">
                        Pilih Paket Lain
                    </h3>

                    <p>
                        Pilih paket yang sesuai dengan kebutuhan bisnis Anda.
                    </p>
                </div>

                <fieldset class="fs-buy-package-list">
                    <legend class="visually-hidden">
                        Pilihan paket Forstaff
                    </legend>

                    @foreach ($buyPackages as $buyPackage)
                        <label class="fs-buy-package-option">
                            <input
                                class="fs-buy-package-radio"
                                type="radio"
                                name="buy_package_choice"
                                value="{{ $buyPackage['id'] }}"
                                data-package-name="Paket {{ $buyPackage['id'] }} — {{ $buyPackage['name'] }}"
                                data-package-price="{{ $buyPackage['price'] }}"
                                data-package-minimum="{{ $buyPackage['minimum'] }}"
                                data-package-server="{{ $buyPackage['server'] }}"
                            >

                            <span class="fs-buy-package-card">
                                <span class="fs-buy-package-copy">
                                    <span class="fs-buy-package-number">
                                        Paket {{ $buyPackage['id'] }}
                                    </span>

                                    <strong class="fs-buy-package-name">
                                        {{ $buyPackage['name'] }}
                                    </strong>

                                    @if ($buyPackage['id'] === 2)
                                        <span class="fs-buy-package-popular">
                                            ★ Paling Populer
                                        </span>
                                    @endif
                                </span>

                                <span class="fs-buy-package-pricing">
                                    <strong class="fs-buy-package-price">
                                        {{ $buyPackage['price'] }}
                                    </strong>

                                    <span class="fs-buy-package-period">
                                        / user / bulan
                                    </span>

                                    <span class="fs-buy-package-note">
                                        {{ $buyPackage['minimum'] }}
                                    </span>

                                    <span class="fs-buy-package-note">
                                        {{ $buyPackage['server'] }}
                                    </span>
                                </span>
                            </span>
                        </label>
                    @endforeach
                </fieldset>

                <div class="fs-buy-package-actions">
                    <button
                        class="fs-buy-button-outline"
                        id="buyCancelPackage"
                        type="button"
                    >
                        Batal
                    </button>

                    <button
                        class="fs-buy-button-primary"
                        id="buyApplyPackage"
                        type="button"
                        disabled
                    >
                        Gunakan Paket Ini
                    </button>
                </div>
            </div>

            {{-- POPUP BUY — KONFIRMASI BERHASIL --}}
            <div
                class="fs-buy-success"
                id="buySuccessView"
                data-buy-view="success"
                hidden
            >
                <div class="fs-buy-success-icon" aria-hidden="true">
                    <svg
                        width="40"
                        height="40"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <path d="m5 12 4 4L19 6"/>
                    </svg>
                </div>

                <h3 id="buySuccessTitle" tabindex="-1">
                    Permintaan Pembelian Berhasil Dikirim
                </h3>

                <p class="fs-buy-success-description">
                    Terima kasih! Data pembelian paket Forstaff Anda
                    telah kami terima. Tim kami akan menghubungi Anda
                    melalui WhatsApp atau email untuk proses pembayaran
                    dan langkah selanjutnya.
                </p>

                <div class="fs-buy-success-summary">
                    <span class="fs-buy-summary-label">
                        Detail Pesanan
                    </span>

                    <h4 id="buySuccessPackageName"></h4>

                    <p class="fs-buy-summary-price">
                        <strong id="buySuccessPackagePrice"></strong>
                        <span>/ user / bulan</span>
                    </p>

                    <p
                        class="fs-buy-summary-note"
                        id="buySuccessPackageMinimum"
                    ></p>

                    <p
                        class="fs-buy-summary-note"
                        id="buySuccessPackageServer"
                    ></p>
                </div>

                <a
                    class="fs-buy-button-primary fs-buy-home-button"
                    href="{{ url('/') }}"
                >
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
</div>