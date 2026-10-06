@extends('layouts.app')

@section('title', 'Kontak | Forstaff')

@section('meta_description', 'Hubungi Forstaff untuk mendapatkan informasi lebih lanjut mengenai solusi pengelolaan SDM dan kebutuhan perusahaan Anda.')

@section('content')
<main class="fs-contact">

    <section class="fs-contact-hero">
        <div class="fs-contact-hero-media" aria-hidden="true">
            <img
                src="{{ asset('images/team/luna.png') }}"
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

                <nav class="fs-contact-breadcrumb" aria-label="Breadcrumb">
                    <a href="{{ route('home') }}">Home</a>

                    <span class="fs-contact-breadcrumb-separator" aria-hidden="true">
                        ›
                    </span>

                    <span aria-current="page">Kontak</span>
                </nav>

                <h1>Hubungi Kami</h1>

                <p>
                    Kami siap membantu Anda. Jangan ragu untuk menghubungi tim
                    Forstaff untuk informasi lebih lanjut, pertanyaan, atau
                    konsultasi kebutuhan perusahaan Anda.
                </p>

            </div>
        </div>
    </section>
<section class="fs-contact-main">
    <div class="fs-contact-main-container">

        <div class="fs-contact-info">

            <div class="fs-contact-section-heading">
                <span class="fs-contact-eyebrow">KONTAK</span>

                <h2>Informasi Kontak</h2>

                <p>
                    Anda dapat menghubungi kami melalui beberapa cara berikut ini.
                </p>
            </div>

            <div class="fs-contact-info-list">

                <article class="fs-contact-info-card">
                    <div class="fs-contact-info-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M12 21s7-6.1 7-12a7 7 0 1 0-14 0c0 5.9 7 12 7 12Z"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <circle cx="12" cy="9" r="2.3"
                                stroke="currentColor"
                                stroke-width="1.8"/>
                        </svg>
                    </div>

                    <div class="fs-contact-info-copy">
                        <h3>Alamat Kantor</h3>
                        <p>Alamat kantor belum dikonfirmasi.</p>
                    </div>
                </article>


                <article class="fs-contact-info-card">
                    <div class="fs-contact-info-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M7.2 3.8 9.5 7c.4.6.3 1.3-.2 1.8l-1.4 1.3c1.3 2.7 3.3 4.7 6 6l1.3-1.4c.5-.5 1.2-.6 1.8-.2l3.2 2.3c.6.4.8 1.2.5 1.8-.5 1.2-1.7 2-3 2C10.1 20.6 3.4 13.9 3.4 6.3c0-1.3.8-2.5 2-3 .6-.3 1.4-.1 1.8.5Z"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"/>
                        </svg>
                    </div>

                    <div class="fs-contact-info-copy">
                        <h3>WhatsApp / Telepon</h3>
                        <p>Nomor perusahaan belum dikonfirmasi.</p>
                    </div>
                </article>


                <article class="fs-contact-info-card">
                    <div class="fs-contact-info-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <rect x="3" y="5" width="18" height="14" rx="2"
                                stroke="currentColor"
                                stroke-width="1.8"/>
                            <path d="m4 7 8 6 8-6"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"/>
                        </svg>
                    </div>

                    <div class="fs-contact-info-copy">
                        <h3>Email</h3>
                        <p>Email perusahaan belum dikonfirmasi.</p>
                    </div>
                </article>


                <article class="fs-contact-info-card">
                    <div class="fs-contact-info-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="9"
                                stroke="currentColor"
                                stroke-width="1.8"/>
                            <path d="M12 7v5l3.5 2"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"/>
                        </svg>
                    </div>

                    <div class="fs-contact-info-copy">
                        <h3>Jam Operasional</h3>
                        <p>Jam operasional belum dikonfirmasi.</p>
                    </div>
                </article>

            </div>
        </div>


        <div class="fs-contact-form-panel">

            <div class="fs-contact-form-heading">
                <h2>Kirim Pesan untuk Kami</h2>

                <p>
                    Isi formulir berikut dan tim kami akan segera menghubungi Anda.
                </p>
            </div>

            <form class="fs-contact-form">

                <div class="fs-contact-form-grid">

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


                    <div class="fs-contact-field fs-contact-field-full">
                        <label for="contact-subject">
                            Subjek <span>*</span>
                        </label>

                        <select id="contact-subject" name="subject">
                            <option value="" selected disabled>Pilih subjek</option>
                            <option value="informasi-produk">Informasi Produk</option>
                            <option value="kerja-sama">Kerja Sama</option>
                            <option value="dukungan">Dukungan / Bantuan</option>
                            <option value="informasi-harga">Informasi Harga</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>


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
                    <span>Kirim Pesan</span>

                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M5 12h14M14 7l5 5-5 5"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"/>
                    </svg>
                </button>

            </form>

        </div>

    </div>
</section>

<section class="fs-contact-location">
    <div class="fs-contact-location-container">

        <div class="fs-contact-map-wrap">

            <div class="fs-contact-map-placeholder">
                <div class="fs-contact-map-placeholder-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none">
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
                    <strong>Lokasi Kantor Forstaff</strong>
                    <span>
                        Peta akan ditampilkan setelah alamat kantor dikonfirmasi.
                    </span>
                </div>
            </div>

        </div>


        <div class="fs-contact-location-card">

            <span class="fs-contact-location-eyebrow">
                LOKASI KAMI
            </span>

            <h2>Kunjungi Kantor Kami</h2>

            <p>
                Anda juga dapat datang langsung ke kantor kami untuk berdiskusi
                lebih lanjut mengenai kebutuhan bisnis dan solusi yang sesuai
                untuk perusahaan Anda.
            </p>

            <button
                type="button"
                class="fs-contact-map-button"
                disabled
                aria-disabled="true"
            >
                <span>Buka di Google Maps</span>

                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path
                        d="M5 12h14M14 7l5 5-5 5"
                        stroke="currentColor"
                        stroke-width="1.8"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                </svg>
            </button>
    <div class="fs-contact-location-building" aria-hidden="true">
    <svg viewBox="0 0 140 120" fill="none">

        <!-- gedung kecil -->
        <path
            d="M18 108V64L48 47V108"
            stroke="#BFD9F6"
            stroke-width="5"
            stroke-linejoin="round"
        />

        <!-- gedung besar -->
        <path
            d="M55 108V34L91 14V108"
            stroke="#BFD9F6"
            stroke-width="5"
            stroke-linejoin="round"
        />

        <!-- sisi kanan gedung besar -->
        <path
            d="M91 14L112 28V108"
            stroke="#BFD9F6"
            stroke-width="5"
            stroke-linejoin="round"
        />

        <!-- jendela -->
        <path
            d="M29 72H35
               M29 84H35
               M29 96H35

               M67 48H74
               M67 62H74
               M67 76H74
               M67 90H74

               M98 41H104
               M98 56H104
               M98 71H104
               M98 86H104"
            stroke="#BFD9F6"
            stroke-width="4"
            stroke-linecap="round"
        />

        <!-- garis bawah -->
        <path
            d="M10 108H120"
            stroke="#BFD9F6"
            stroke-width="5"
            stroke-linecap="round"
        />

    </svg>
                </div>
        </div>

    </div>
</section>

<section class="fs-contact-faq">
    <div class="fs-contact-faq-container">

        <div class="fs-contact-faq-content">

            <span class="fs-contact-faq-eyebrow">
                PERTANYAAN LAIN?
            </span>

            <h2>Masih Ada Pertanyaan?</h2>

            <p>
                Temukan informasi lebih lanjut mengenai Forstaff dan solusi
                yang kami hadirkan untuk membantu kebutuhan perusahaan Anda.
            </p>

        </div>

        <div class="fs-contact-faq-decoration" aria-hidden="true">

            <div class="fs-contact-question-bubble fs-contact-question-bubble-one">
                ?
            </div>

            <div class="fs-contact-question-bubble fs-contact-question-bubble-two">
                ?
            </div>

        </div>

        <a
            href="{{ url('/tentang-kami') }}"
            class="fs-contact-faq-button"
        >
            <span>Lihat FAQ</span>

            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path
                    d="M5 12h14M14 7l5 5-5 5"
                    stroke="currentColor"
                    stroke-width="1.8"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
            </svg>
        </a>

    </div>
</section>

</main>
@endsection