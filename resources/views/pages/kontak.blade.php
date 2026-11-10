@extends('layouts.app')

@section('title', 'Kontak | Forstaff')

@section('meta_description', 'Hubungi Forstaff untuk mendapatkan informasi lebih lanjut mengenai solusi pengelolaan SDM dan kebutuhan perusahaan Anda.')

@section('content')

<main class="fs-contact">

    {{-- =====================================================
         HERO
    ====================================================== --}}

    <section class="fs-contact-hero">

        <div class="fs-contact-hero-media" aria-hidden="true">

            <img
                src="{{ asset('images/team/luna.webp') }}"
                alt=""
                class="fs-contact-hero-image"
            >

            <div class="fs-contact-hero-note">
                <span>Diskusi</span>
                <strong>Bersama Kami</strong>
            </div>

        </div>


        <div class="fs-contact-hero-container">

            <div class="fs-contact-hero-content">

                <nav
                    class="fs-contact-breadcrumb"
                    aria-label="Breadcrumb"
                >
                    <a href="{{ route('home') }}">
                        Home
                    </a>

                    <span
                        class="fs-contact-breadcrumb-separator"
                        aria-hidden="true"
                    >
                        ›
                    </span>

                    <span aria-current="page">
                        Kontak
                    </span>
                </nav>


                <h1>
                    Hubungi Kami
                </h1>


                <p>
                    Kami siap membantu Anda. Jangan ragu untuk menghubungi tim
                    Forstaff untuk informasi lebih lanjut, pertanyaan, atau
                    konsultasi kebutuhan perusahaan Anda.
                </p>

            </div>

        </div>

    </section>


    {{-- =====================================================
         FORM KONTAK
    ====================================================== --}}

    <section class="fs-contact-main">

        <div class="fs-contact-main-container">

            <div class="fs-contact-form-panel">

                <div class="fs-contact-form-heading">

                    <h2>
                        Kirim Pesan untuk Kami
                    </h2>

                    <p>
                        Isi formulir berikut dan tim kami akan segera menghubungi Anda.
                    </p>

                </div>


                <form class="fs-contact-form">

                    <div class="fs-contact-form-grid">

                        {{-- NAMA LENGKAP --}}
                        <div class="fs-contact-field">

                            <label for="contact-name">
                                Nama Lengkap <span>*</span>
                            </label>

                            <input
                                type="text"
                                id="contact-name"
                                name="name"
                                placeholder="Masukkan nama Anda"
                                autocomplete="name"
                            >

                        </div>


                        {{-- NAMA PERUSAHAAN --}}
                        <div class="fs-contact-field">

                            <label for="contact-company">
                                Nama Perusahaan
                            </label>

                            <input
                                type="text"
                                id="contact-company"
                                name="company"
                                placeholder="Masukkan nama perusahaan"
                                autocomplete="organization"
                            >

                        </div>


                        {{-- EMAIL --}}
                        <div class="fs-contact-field">

                            <label for="contact-email">
                                Email <span>*</span>
                            </label>

                            <input
                                type="email"
                                id="contact-email"
                                name="email"
                                placeholder="nama@email.com"
                                autocomplete="email"
                            >

                        </div>


                        {{-- WHATSAPP / TELEPON --}}
                        <div class="fs-contact-field">

                            <label for="contact-phone">
                                WhatsApp / Telepon
                            </label>

                            <input
                                type="tel"
                                id="contact-phone"
                                name="phone"
                                placeholder="Contoh: 0812 3456 7890"
                                autocomplete="tel"
                            >

                        </div>


                        {{-- SUBJEK --}}
                        <div class="fs-contact-field fs-contact-field-full">

                            <label for="contact-subject">
                                Subjek <span>*</span>
                            </label>

                            <select
                                id="contact-subject"
                                name="subject"
                            >
                                <option
                                    value=""
                                    selected
                                    disabled
                                >
                                    Pilih subjek
                                </option>

                                <option value="informasi-produk">
                                    Informasi Produk
                                </option>

                                <option value="kerja-sama">
                                    Kerja Sama
                                </option>

                                <option value="dukungan">
                                    Dukungan / Bantuan
                                </option>

                                <option value="informasi-harga">
                                    Informasi Harga
                                </option>

                                <option value="lainnya">
                                    Lainnya
                                </option>
                            </select>

                        </div>


                        {{-- PESAN --}}
                        <div class="fs-contact-field fs-contact-field-full">

                            <label for="contact-message">
                                Pesan <span>*</span>
                            </label>

                            <textarea
                                id="contact-message"
                                name="message"
                                rows="5"
                                placeholder="Tulis pesan Anda di sini..."
                            ></textarea>

                        </div>

                    </div>


                    <button
                        type="button"
                        class="fs-contact-submit"
                    >
                        <span>
                            Kirim Pesan
                        </span>

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            aria-hidden="true"
                        >
                            <path
                                d="M5 12h14M14 7l5 5-5 5"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </button>

                </form>

            </div>

        </div>

    </section>


    {{-- =====================================================
         LOKASI + INFORMASI KONTAK
    ====================================================== --}}

    <section class="fs-contact-location">

        <div class="fs-contact-location-container">

            {{-- =================================================
                 KOLOM KIRI — GOOGLE MAPS
            ================================================== --}}

            <div class="fs-contact-location-card fs-contact-location-map-card">

                <span class="fs-contact-location-eyebrow">
                    LOKASI KANTOR
                </span>


                <h2>
                    Lokasi Kantor Forstaff
                </h2>


                <p>
                    Temukan lokasi kantor Forstaff untuk kebutuhan konsultasi
                    dan pertemuan secara langsung.
                </p>


                <div class="fs-contact-map-wrap">

                    {{-- Placeholder sementara sebelum koordinat tersedia --}}
                    <div class="fs-contact-map-placeholder">

                        <div
                            class="fs-contact-map-placeholder-icon"
                            aria-hidden="true"
                        >
                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                            >
                                <path
                                    d="M12 21s7-6.1 7-12a7 7 0 1 0-14 0c0 5.9 7 12 7 12Z"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />

                                <circle
                                    cx="12"
                                    cy="9"
                                    r="2.4"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                />
                            </svg>
                        </div>


                        <div class="fs-contact-map-placeholder-copy">

                            <strong>
                                Google Maps
                            </strong>

                            <span>
                                Peta akan ditampilkan setelah koordinat lokasi
                                kantor dikonfirmasi.
                            </span>

                        </div>

                    </div>


                    {{--
                        =================================================
                        GOOGLE MAPS FINAL

                        Setelah latitude / longitude atau URL embed
                        Google Maps sudah tersedia:

                        1. Hapus .fs-contact-map-placeholder di atas.
                        2. Masukkan iframe berikut.
                        3. Ganti src dengan URL embed Google Maps asli.

                        <iframe
                            class="fs-contact-map-iframe"
                            src="LINK_EMBED_GOOGLE_MAPS"
                            loading="lazy"
                            allowfullscreen
                            referrerpolicy="no-referrer-when-downgrade"
                        ></iframe>
                        =================================================
                    --}}

                </div>

            </div>


            {{-- =================================================
                 KOLOM KANAN — INFORMASI KONTAK
            ================================================== --}}

            <div class="fs-contact-location-card fs-contact-location-info-card">

                <span class="fs-contact-location-eyebrow">
                    KONTAK
                </span>


                <h2>
                    Informasi Kontak
                </h2>


                <p>
                    Hubungi tim Forstaff melalui informasi berikut untuk
                    pertanyaan, konsultasi, atau kebutuhan perusahaan Anda.
                </p>


                <div class="fs-contact-location-info-list">

                    {{-- ALAMAT KANTOR --}}
                    <article class="fs-contact-location-info-item">

                        <div
                            class="fs-contact-info-icon"
                            aria-hidden="true"
                        >
                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                            >
                                <path
                                    d="M12 21s7-6.1 7-12a7 7 0 1 0-14 0c0 5.9 7 12 7 12Z"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />

                                <circle
                                    cx="12"
                                    cy="9"
                                    r="2.3"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                />
                            </svg>
                        </div>


                        <div class="fs-contact-info-copy">

                            <h3>
                                Alamat Kantor
                            </h3>

                            <p>
                                Alamat kantor belum dikonfirmasi.
                            </p>

                        </div>

                    </article>


                    {{-- WHATSAPP / TELEPON --}}
                    <article class="fs-contact-location-info-item">

                        <div
                            class="fs-contact-info-icon"
                            aria-hidden="true"
                        >
                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                            >
                                <path
                                    d="M7.2 3.8 9.5 7c.4.6.3 1.3-.2 1.8l-1.4 1.3c1.3 2.7 3.3 4.7 6 6l1.3-1.4c.5-.5 1.2-.6 1.8-.2l3.2 2.3c.6.4.8 1.2.5 1.8-.5 1.2-1.7 2-3 2C10.1 20.6 3.4 13.9 3.4 6.3c0-1.3.8-2.5 2-3 .6-.3 1.4-.1 1.8.5Z"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </div>


                        <div class="fs-contact-info-copy">

                            <h3>
                                WhatsApp / Telepon
                            </h3>

                            <p>
                                Nomor perusahaan belum dikonfirmasi.
                            </p>

                        </div>

                    </article>


                    {{-- EMAIL --}}
                    <article class="fs-contact-location-info-item">

                        <div
                            class="fs-contact-info-icon"
                            aria-hidden="true"
                        >
                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                            >
                                <rect
                                    x="3"
                                    y="5"
                                    width="18"
                                    height="14"
                                    rx="2"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                />

                                <path
                                    d="m4 7 8 6 8-6"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </div>


                        <div class="fs-contact-info-copy">

                            <h3>
                                Email
                            </h3>

                            <p>
                                Email perusahaan belum dikonfirmasi.
                            </p>

                        </div>

                    </article>


                    {{-- JAM OPERASIONAL --}}
                    <article class="fs-contact-location-info-item">

                        <div
                            class="fs-contact-info-icon"
                            aria-hidden="true"
                        >
                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                            >
                                <circle
                                    cx="12"
                                    cy="12"
                                    r="9"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                />

                                <path
                                    d="M12 7v5l3.5 2"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </div>


                        <div class="fs-contact-info-copy">

                            <h3>
                                Jam Operasional
                            </h3>

                            <p>
                                Jam operasional belum dikonfirmasi.
                            </p>

                        </div>

                    </article>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         FAQ
         SAMA DENGAN FAQ HALAMAN HARGA EWIK
    ====================================================== --}}

    @php
        $contactFaqs = [
            [
                'question' => 'Apakah harga sudah termasuk pajak?',
                'answer' => 'Untuk memastikan rincian pajak pada paket yang Anda pilih, silakan hubungi tim Forstaff.',
            ],
            [
                'question' => 'Apakah ada biaya tambahan?',
                'answer' => 'Informasi mengenai kemungkinan biaya tambahan dapat dikonfirmasi kepada tim Forstaff sebelum Anda memilih paket.',
            ],
            [
                'question' => 'Apakah bisa mencoba gratis?',
                'answer' => 'Silakan hubungi tim Forstaff untuk mengetahui ketersediaan uji coba pada paket yang Anda inginkan.',
            ],
            [
                'question' => 'Bagaimana cara pembayaran?',
                'answer' => 'Tim Forstaff dapat menjelaskan pilihan dan proses pembayaran yang tersedia saat Anda menghubungi kami.',
            ],
            [
                'question' => 'Apakah ada minimal jangka panjang?',
                'answer' => 'Silakan konfirmasi ketentuan jangka waktu penggunaan paket kepada tim Forstaff sebelum melakukan pembelian.',
            ],
            [
                'question' => 'Apakah tersedia demo sebelum membeli?',
                'answer' => 'Anda dapat mengajukan demo melalui tombol Request Demo. Formulir permintaan demo akan muncul di halaman ini.',
            ],
        ];
    @endphp


    <section
        class="fs-contact-faq"
        aria-labelledby="fs-contact-faq-title"
    >

        <div class="fs-contact-faq-container">

            <h2 id="fs-contact-faq-title">
                Pertanyaan yang Sering Diajukan
            </h2>


            <div class="fs-contact-faq-list">

                @foreach ($contactFaqs as $faq)

                    <details class="fs-contact-faq-item">

                        <summary>

                            <span>
                                {{ $faq['question'] }}
                            </span>

                            <span
                                class="fs-contact-faq-plus"
                                aria-hidden="true"
                            ></span>

                        </summary>


                        <p>
                            {{ $faq['answer'] }}
                        </p>

                    </details>

                @endforeach

            </div>

        </div>

    </section>

</main>

@endsection