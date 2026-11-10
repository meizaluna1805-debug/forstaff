@extends('layouts.app')

@section('title', 'Forstaff')

@section('content')
{{-- Hero --}}
<section class="fs-hero-home">
    <div class="fs-home-container">
        <div class="fs-hero-grid">

            <div class="fs-hero-content">
                <span class="fs-badge">SOLUSI HR TERINTEGRASI</span>

                <h1>
                    Kelola SDM<br>
                    Lebih Mudah,<br>
                    Bisnis Lebih Fokus
                </h1>

                <p>
                    Forstaff membantu perusahaan mengelola data karyawan,
                    absensi, cuti, slip gaji, kinerja dan proses administrasi HR
                    dalam satu platform yang terintegrasi.
                </p>

                <div class="fs-hero-actions">
                    <button
                        type="button"
                        class="fs-primary-btn"
                        data-bs-toggle="modal"
                        data-bs-target="#buyModal"
                    >
                        Beli Sekarang
                    </button>

                    <a href="#solusi-forstaff" class="fs-secondary-btn">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>

            <div class="fs-device-area">
                <div class="fs-device-bg" aria-hidden="true"></div>

                <div class="fs-device-wrap">
                    <img
                        src="{{ asset('images/dashboard/LAPTOP.webp') }}"
                        alt="Dashboard Forstaff"
                        class="fs-home-laptop"
                    >

                    <img
                        src="{{ asset('images/dashboard/HP.webp') }}"
                        alt="Aplikasi mobile Forstaff"
                        class="fs-home-phone"
                    >
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Statistik --}}
    <section class="fs-home-stats" aria-label="Statistik Forstaff">
        <div class="fs-home-container">
            <div class="fs-home-stats-box">

                <div class="fs-home-stat-item">
                    <div class="fs-home-stat-icon" aria-hidden="true">
                        <svg viewBox="0 0 32 32">
                            <path d="M5 28V11l11-6 11 6v17"/>
                            <path d="M10 28v-8h12v8"/>
                            <path d="M11 14h3M18 14h3"/>
                        </svg>
                    </div>

                    <div class="fs-home-stat-content">
                        <strong>500+</strong>
                        <span>Perusahaan</span>
                        <p>Menggunakan Forstaff</p>
                    </div>
                </div>

                <div class="fs-home-stat-item">
                    <div class="fs-home-stat-icon" aria-hidden="true">
                        <svg viewBox="0 0 32 32">
                            <circle cx="12" cy="11" r="5"/>
                            <circle cx="23" cy="12" r="4"/>
                            <path d="M3 27c0-5 4-8 9-8s9 3 9 8"/>
                            <path d="M20 20c5 0 8 3 8 7"/>
                        </svg>
                    </div>

                    <div class="fs-home-stat-content">
                        <strong>50,000+</strong>
                        <span>Karyawan</span>
                        <p>Terkelola melalui Forstaff</p>
                    </div>
                </div>

                <div class="fs-home-stat-item">
                    <div class="fs-home-stat-icon" aria-hidden="true">
                        <svg viewBox="0 0 32 32">
                            <circle cx="16" cy="16" r="12"/>
                            <path d="M10 15l4 4 8-9"/>
                        </svg>
                    </div>

                    <div class="fs-home-stat-content">
                        <strong>99%</strong>
                        <span>Tingkat Kepuasan</span>
                        <p>Pelanggan Forstaff</p>
                    </div>
                </div>

            </div>
        </div>
</section>

   {{-- Solusi --}}
<section class="fs-solusi" id="solusi-forstaff">
    <div class="fs-home-container">

        <div class="fs-solusi-box">

            <h2>
                Solusi Lengkap untuk Operasional HR Anda
            </h2>


            <div class="fs-solusi-grid">

                {{-- Manajemen Staff --}}
                <div class="fs-solusi-card">

                    <div class="fs-icon" aria-hidden="true">
                        <svg viewBox="0 0 32 32">
                            <circle cx="12" cy="10" r="5"></circle>
                            <circle cx="23" cy="11" r="4"></circle>

                            <path d="M3 28c0-6 4-10 9-10s9 4 9 10"></path>

                            <path d="M20 19c5-.2 9 3 9 9"></path>
                        </svg>
                    </div>

                    <span>
                        Manajemen Staff
                    </span>

                </div>


                {{-- Absensi --}}
                <div class="fs-solusi-card">

                    <div class="fs-icon" aria-hidden="true">
                        <svg viewBox="0 0 32 32">

                            <rect
                                x="5"
                                y="6"
                                width="22"
                                height="23"
                                rx="2"
                            ></rect>

                            <path d="M10 3v6M22 3v6M5 12h22"></path>

                            <path d="m10 20 4 4 8-9"></path>

                        </svg>
                    </div>

                    <span>
                        Absensi
                    </span>

                </div>


                {{-- Cuti & Izin --}}
                <div class="fs-solusi-card">

                    <div class="fs-icon" aria-hidden="true">
                        <svg viewBox="0 0 32 32">

                            <rect
                                x="5"
                                y="6"
                                width="22"
                                height="23"
                                rx="2"
                            ></rect>

                            <path d="M10 3v6M22 3v6M5 12h22"></path>

                            <path d="M10 18h5M10 23h9"></path>

                        </svg>
                    </div>

                    <span>
                        Cuti &amp; Izin
                    </span>

                </div>


                {{-- Lembur --}}
                <div class="fs-solusi-card">

                    <div class="fs-icon" aria-hidden="true">
                        <svg viewBox="0 0 32 32">

                            <circle
                                cx="16"
                                cy="16"
                                r="12"
                            ></circle>

                            <path d="M16 9v8l6 3"></path>

                        </svg>
                    </div>

                    <span>
                        Lembur
                    </span>

                </div>


                {{-- Reimburse --}}
                <div class="fs-solusi-card">

                    <div class="fs-icon" aria-hidden="true">
                        <svg viewBox="0 0 32 32">

                            <rect
                                x="6"
                                y="4"
                                width="20"
                                height="24"
                                rx="2"
                            ></rect>

                            <path d="M11 10h10M11 15h7M11 20h5"></path>

                            <path d="M22 18v7M18.5 21.5h7"></path>

                        </svg>
                    </div>

                    <span>
                        Reimburse
                    </span>

                </div>


                {{-- Slip Gaji --}}
                <div class="fs-solusi-card">

                    <div class="fs-icon" aria-hidden="true">
                        <svg viewBox="0 0 32 32">

                            <rect
                                x="4"
                                y="6"
                                width="24"
                                height="21"
                                rx="3"
                            ></rect>

                            <path d="M4 12h24"></path>

                            <path d="M18 18h7"></path>

                            <path d="M21.5 15v6"></path>

                        </svg>
                    </div>

                    <span>
                        Slip Gaji
                    </span>

                </div>

            </div>


            <div class="fs-feature-more">

                <a href="{{ url('/fitur') }}">
                    Lihat Semua Fitur →
                </a>

            </div>

        </div>

    </div>
</section>

    {{-- Tentang Forstaff --}}
    <section class="fs-about-preview">
        <div class="fs-home-container">
            <div class="fs-about-grid">
                <div class="fs-about-image">
                    <img src="{{ asset('images/team/team.webp') }}" alt="Team Forstaff">
                </div>

                <div class="fs-about-content">
                    <span class="fs-about-label">KENAPA FORSTAFF</span>
                    <h2>Manajemen HR<br>yang Lebih Efisien</h2>

                    <p>
                        Forstaff dirancang untuk mempermudah pengelolaan HR,
                        sehingga tim Anda dapat fokus pada hal yang lebih strategis.
                    </p>

                    <ul>
                        <li><span>✓</span> Mudah digunakan</li>
                        <li><span>✓</span> Terintegrasi dalam satu sistem</li>
                        <li><span>✓</span> Dirancang untuk bisnis di Indonesia</li>
                    </ul>

                   <a href="{{ url('/tentang-kami') }}" class="fs-about-btn">
                        Tentang Forstaff
                   </a>
                </div>
            </div>

            {{-- Logo klien --}}
            <div class="fs-client-section">
                <h3>Dipercaya oleh Berbagai Perusahaan</h3>

                <div class="fs-client-slider">
                    <button type="button" class="fs-client-arrow left" aria-label="Logo sebelumnya">
                        ‹
                    </button>

                    <div class="fs-client-track">

                        {{-- Compact / simbol — mengikuti skala RED GROUP --}}
                        <img class="fs-client-logo fs-client-logo--compact"
                            src="{{ asset('images/clients/BALI-DISTRICT.webp') }}"
                            alt="Bali District">

                        {{-- Logo + tulisan — mengikuti skala RUMAH SUNAT --}}
                        <img class="fs-client-logo fs-client-logo--text"
                            src="{{ asset('images/clients/BERCUT.webp') }}"
                            alt="Bercut">

                        {{-- Compact --}}
                        <img class="fs-client-logo fs-client-logo--compact"
                            src="{{ asset('images/clients/CHUYU.webp') }}"
                            alt="Chuyu">

                        {{-- Compact --}}
                        <img class="fs-client-logo fs-client-logo--compact"
                            src="{{ asset('images/clients/GETUP.webp') }}"
                            alt="Getup">

                        {{-- Logo + tulisan --}}
                        <img class="fs-client-logo fs-client-logo--text"
                            src="{{ asset('images/clients/LINGKAR-MEDIKA.webp') }}"
                            alt="Lingkar Medika">

                        {{-- Compact --}}
                        <img class="fs-client-logo fs-client-logo--compact"
                            src="{{ asset('images/clients/LPD.webp') }}"
                            alt="LPD">

                        {{-- Compact --}}
                        <img class="fs-client-logo fs-client-logo--compact"
                            src="{{ asset('images/clients/MY-KIND.webp') }}"
                            alt="My Kind">

                        {{-- Logo + tulisan --}}
                        <img class="fs-client-logo fs-client-logo--text fs-client-logo--oris"
                            src="{{ asset('images/clients/ORIS-CAKE.webp') }}"
                            alt="Oris Cake">

                        {{-- Compact / PATOKAN --}}
                        <img class="fs-client-logo fs-client-logo--compact"
                            src="{{ asset('images/clients/RED-GROUP.webp') }}"
                            alt="Red Group">

                        {{-- Logo + tulisan / PATOKAN --}}
                        <img class="fs-client-logo fs-client-logo--text"
                            src="{{ asset('images/clients/RUMAH_SUNAT.webp') }}"
                            alt="Rumah Sunat Bali">

                        {{-- Compact — sesuai instruksi, ikut RED GROUP --}}
                        <img class="fs-client-logo fs-client-logo--compact"
                            src="{{ asset('images/clients/TREEHUB.webp') }}"
                            alt="Treehub Social Space">

                        {{-- Compact --}}
                        <img class="fs-client-logo fs-client-logo--compact"
                            src="{{ asset('images/clients/UNIVLOX.webp') }}"
                            alt="Univlox">

                        {{-- Logo + tulisan --}}
                        <img class="fs-client-logo fs-client-logo--text"
                            src="{{ asset('images/clients/VIFA-HOLIDAY.webp') }}"
                            alt="Vifa Holiday">

                    </div>

                    <button type="button" class="fs-client-arrow right" aria-label="Logo berikutnya">
                        ›
                    </button>
                </div>
            </div>
        </div>
    </section>

{{-- Insight Terbaru --}}
<section class="fs-home-insight">
    <div class="fs-home-insight-container">

        <h2 class="fs-home-insight-title">
            Insight Terbaru
        </h2>

        <div class="fs-blog-grid">

            {{-- ARTICLE 1 --}}
            <article class="fs-blog-card">

                <a
                    href="{{ url('/blog/5-cara-efektif-meningkatkan-produktivitas-tim-di-era-digital') }}"
                    class="fs-blog-card-image-link"
                    aria-label="Baca artikel 5 Cara Efektif Meningkatkan Produktivitas Tim di Era Digital"
                >
                    <img
                        src="{{ asset('images/article/ARTICLE-1.webp') }}"
                        alt="5 Cara Efektif Meningkatkan Produktivitas Tim di Era Digital"
                        class="fs-blog-card-image"
                        loading="lazy"
                    >
                </a>

                <div class="fs-blog-card-body">

                    <time
                        class="fs-blog-card-date"
                        datetime="2024-09-12"
                    >
                        12 Sep 2024
                    </time>

                    <h3 class="fs-blog-card-title">
                        <a href="{{ url('/blog/5-cara-efektif-meningkatkan-produktivitas-tim-di-era-digital') }}">
                            5 Cara Efektif Meningkatkan Produktivitas Tim di Era Digital
                        </a>
                    </h3>

                    <p class="fs-blog-card-excerpt">
                        Produktivitas tim bukan hanya soal bekerja lebih keras,
                        tetapi juga bekerja lebih cerdas. Simak tipsnya di sini.
                    </p>

                    <a
                        href="{{ url('/blog/5-cara-efektif-meningkatkan-produktivitas-tim-di-era-digital') }}"
                        class="fs-blog-card-link"
                    >
                        <span>Baca Selengkapnya</span>

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

            </article>


            {{-- ARTICLE 2 --}}
            <article class="fs-blog-card">

                <a
                    href="{{ url('/blog/mengapa-transformasi-digital-penting-untuk-bisnis-saat-ini') }}"
                    class="fs-blog-card-image-link"
                    aria-label="Baca artikel Mengapa Transformasi Digital Penting untuk Bisnis Saat Ini"
                >
                    <img
                        src="{{ asset('images/article/ARTICLE-2.webp') }}"
                        alt="Mengapa Transformasi Digital Penting untuk Bisnis Saat Ini"
                        class="fs-blog-card-image"
                        loading="lazy"
                    >
                </a>

                <div class="fs-blog-card-body">

                    <time
                        class="fs-blog-card-date"
                        datetime="2024-09-05"
                    >
                        5 Sep 2024
                    </time>

                    <h3 class="fs-blog-card-title">
                        <a href="{{ url('/blog/mengapa-transformasi-digital-penting-untuk-bisnis-saat-ini') }}">
                            Mengapa Transformasi Digital Penting untuk Bisnis Saat Ini?
                        </a>
                    </h3>

                    <p class="fs-blog-card-excerpt">
                        Transformasi digital membantu perusahaan beradaptasi
                        dengan perubahan dan menciptakan peluang baru di tengah persaingan.
                    </p>

                    <a
                        href="{{ url('/blog/mengapa-transformasi-digital-penting-untuk-bisnis-saat-ini') }}"
                        class="fs-blog-card-link"
                    >
                        <span>Baca Selengkapnya</span>

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

            </article>


            {{-- ARTICLE 3 --}}
            <article class="fs-blog-card">

                <a
                    href="{{ url('/blog/membangun-budaya-kerja-positif-di-lingkungan-hybrid') }}"
                    class="fs-blog-card-image-link"
                    aria-label="Baca artikel Membangun Budaya Kerja Positif di Lingkungan Hybrid"
                >
                    <img
                        src="{{ asset('images/article/ARTICLE-3.webp') }}"
                        alt="Membangun Budaya Kerja Positif di Lingkungan Hybrid"
                        class="fs-blog-card-image"
                        loading="lazy"
                    >
                </a>

                <div class="fs-blog-card-body">

                    <time
                        class="fs-blog-card-date"
                        datetime="2024-08-28"
                    >
                        28 Agu 2024
                    </time>

                    <h3 class="fs-blog-card-title">
                        <a href="{{ url('/blog/membangun-budaya-kerja-positif-di-lingkungan-hybrid') }}">
                            Membangun Budaya Kerja Positif di Lingkungan Hybrid
                        </a>
                    </h3>

                    <p class="fs-blog-card-excerpt">
                        Lingkungan kerja hybrid menuntut pendekatan baru
                        dalam membangun kolaborasi dan komunikasi yang efektif.
                    </p>

                    <a
                        href="{{ url('/blog/membangun-budaya-kerja-positif-di-lingkungan-hybrid') }}"
                        class="fs-blog-card-link"
                    >
                        <span>Baca Selengkapnya</span>

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

            </article>

        </div>

    </div>
</section>
@endsection