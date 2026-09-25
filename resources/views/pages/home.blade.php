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
                        absensi, cuti, payroll, kinerja dan proses administrasi HR
                        dalam satu platform yang terintegrasi.
                    </p>

                    <div class="fs-hero-actions">
                        <a href="#" class="fs-primary-btn">Beli Sekarang</a>
                        <a href="#" class="fs-secondary-btn">Pelajari Lebih Lanjut</a>
                    </div>

                    <div class="fs-stat-row">
                        <div>
                            <strong>500+</strong>
                            <span>Perusahaan<br>Menggunakan Forstaff</span>
                        </div>
                        <div>
                            <strong>50,000+</strong>
                            <span>Karyawan Terkelola</span>
                        </div>
                        <div>
                            <strong>99%</strong>
                            <span>Tingkat Kepuasan<br>Pelanggan</span>
                        </div>
                    </div>
                </div>

                <div class="fs-device-area">
                    <div class="fs-device-bg" aria-hidden="true"></div>
                    <div class="fs-device-wrap">
                        <img
                            src="{{ asset('images/dashboard/LAPTOP.png') }}"
                            alt="Dashboard Forstaff"
                            class="fs-home-laptop"
                        >
                        <img
                            src="{{ asset('images/dashboard/HP.png') }}"
                            alt="Aplikasi mobile Forstaff"
                            class="fs-home-phone"
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Solusi --}}
    <section class="fs-solusi">
        <div class="fs-home-container">
            <div class="fs-solusi-box">
                <h2>Solusi Lengkap untuk Operasional HR Anda</h2>

                <div class="fs-solusi-grid">
                    <div class="fs-solusi-card">
                        <div class="fs-icon" aria-hidden="true">
                            <svg viewBox="0 0 32 32">
                                <circle cx="12" cy="9" r="5"/>
                                <path d="M2 27c0-5 4-8 10-8s10 3 10 8Z"/>
                                <path d="M25 6v8M21 10h8M25 20c3 1 5 3 5 6h-5"/>
                            </svg>
                        </div>
                        <span>Data Karyawan</span>
                    </div>

                    <div class="fs-solusi-card">
                        <div class="fs-icon" aria-hidden="true">
                            <svg viewBox="0 0 32 32">
                                <rect x="5" y="6" width="22" height="23" rx="2"/>
                                <path d="M10 3v6M22 3v6M5 12h22"/>
                                <path d="M10 17h.01M16 17h.01M22 17h.01M10 22h.01M16 22h.01M22 22h.01M10 26h.01M16 26h.01"/>
                            </svg>
                        </div>
                        <span>Absensi</span>
                    </div>

                    <div class="fs-solusi-card">
                        <div class="fs-icon" aria-hidden="true">
                            <svg viewBox="0 0 32 32">
                                <path d="M16 3 27 7v9c0 6-5 10-11 14C10 26 5 22 5 16V7Z"/>
                                <path d="m11 16 4 4 7-9"/>
                            </svg>
                        </div>
                        <span>Cuti &amp; Lembur</span>
                    </div>

                    <div class="fs-solusi-card">
                        <div class="fs-icon" aria-hidden="true">
                            <svg viewBox="0 0 32 32">
                                <rect x="5" y="3" width="22" height="26" rx="2"/>
                                <path d="M10 3v26M3 9h4M3 15h4M3 21h4"/>
                                <circle cx="15" cy="9" r="1.5"/>
                                <path d="M12 15c0-2 1-3 3-3s3 1 3 3M21 13l2-5 2 5ZM14 20h9M14 24h7"/>
                            </svg>
                        </div>
                        <span>Payroll</span>
                    </div>

                    <div class="fs-solusi-card">
                        <div class="fs-icon" aria-hidden="true">
                            <svg viewBox="0 0 32 32">
                                <rect x="4" y="18" width="5" height="11" rx="2"/>
                                <rect x="13.5" y="11" width="5" height="18" rx="2"/>
                                <rect x="23" y="4" width="5" height="25" rx="2"/>
                            </svg>
                        </div>
                        <span>Kinerja</span>
                    </div>

                    <div class="fs-solusi-card">
                        <div class="fs-icon" aria-hidden="true">
                            <svg viewBox="0 0 32 32">
                                <rect x="3" y="10" width="26" height="19" rx="3"/>
                                <path d="M10 10V6a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v4M14 7h4"/>
                                <path d="m16 15 5 5-5 5-5-5Z" fill="#194A97" stroke="none"/>
                            </svg>
                        </div>
                        <span>Reporting</span>
                    </div>
                </div>

                <div class="fs-feature-more">
                    <a href="#">Lihat Semua Fitur →</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Tentang Forstaff --}}
    <section class="fs-about-preview">
        <div class="fs-home-container">
            <div class="fs-about-grid">
                <div class="fs-about-image">
                    <img src="{{ asset('images/team/team.png') }}" alt="Team Forstaff">
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

                    <a href="#" class="fs-about-btn">Tentang Forstaff</a>
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
                        <img class="fs-client-logo" src="{{ asset('images/clients/BALI-DISTRICT.png') }}" alt="Bali District">
                        <img class="fs-client-logo" src="{{ asset('images/clients/BERCUT.png') }}" alt="Bercut">
                        <img class="fs-client-logo" src="{{ asset('images/clients/CHUYU.png') }}" alt="Chuyu">
                        <img class="fs-client-logo" src="{{ asset('images/clients/GETUP.png') }}" alt="Getup">
                        <img class="fs-client-logo" src="{{ asset('images/clients/LINGKAR-MEDIKA.png') }}" alt="Lingkar Medika">
                        <img class="fs-client-logo" src="{{ asset('images/clients/LPD.png') }}" alt="LPD">
                        <img class="fs-client-logo" src="{{ asset('images/clients/MY-KIND.png') }}" alt="My Kind">
                        <img class="fs-client-logo" src="{{ asset('images/clients/ORIS-CAKE.png') }}" alt="Oris Cake">
                        <img class="fs-client-logo" src="{{ asset('images/clients/RED-GROUP.png') }}" alt="Red Group">
                        <img class="fs-client-logo" src="{{ asset('images/clients/RUMAH_SUNAT.png') }}" alt="Rumah Sunat Bali">
                        <img class="fs-client-logo" src="{{ asset('images/clients/TREEHUB.png') }}" alt="Treehub Social Space">
                        <img class="fs-client-logo" src="{{ asset('images/clients/UNIVLOX.png') }}" alt="Univlox">
                        <img class="fs-client-logo" src="{{ asset('images/clients/VIFA-HOLIDAY.png') }}" alt="Vifa Holiday">
                    </div>

                    <button type="button" class="fs-client-arrow right" aria-label="Logo berikutnya">
                        ›
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- Artikel --}}
    <section class="fs-article">
        <div class="fs-home-container">
            <h2 class="fs-article-title">Insight Terbaru</h2>

            <div class="fs-article-grid">
                <article class="fs-article-card">
                    <div class="fs-article-image">
                        <img
                            src="{{ asset('images/article/ARTICLE-1.png') }}"
                            alt="Cara meningkatkan disiplin kehadiran karyawan"
                        >
                        <span class="fs-article-category">HR MANAGEMENT</span>
                    </div>

                    <div class="fs-article-content">
                        <h3>Cara Meningkatkan Disiplin<br>Kehadiran Karyawan</h3>
                        <div class="fs-article-meta">
                            <span>
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <rect x="4" y="5" width="16" height="16" rx="2"/>
                                    <path d="M8 3v4M16 3v4M4 11h16M8 15h.01M12 15h.01M16 15h.01M8 18h.01M12 18h.01"/>
                                </svg>
                                <time datetime="2024-06-12">12 Jun 2024</time>
                            </span>
                            <span>
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M2 12s4-6 10-6 10 6 10 6-4 6-10 6S2 12 2 12Z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                                1.2K views
                            </span>
                        </div>
                    </div>
                </article>

                <article class="fs-article-card">
                    <div class="fs-article-image">
                        <img
                            src="{{ asset('images/article/ARTICLE-2.png') }}"
                            alt="Memahami komponen slip gaji karyawan"
                        >
                        <span class="fs-article-category">PAYROLL</span>
                    </div>

                    <div class="fs-article-content">
                        <h3>Memahami Komponen<br>Slip Gaji Karyawan</h3>
                        <div class="fs-article-meta">
                            <span>
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <rect x="4" y="5" width="16" height="16" rx="2"/>
                                    <path d="M8 3v4M16 3v4M4 11h16M8 15h.01M12 15h.01M16 15h.01M8 18h.01M12 18h.01"/>
                                </svg>
                                <time datetime="2024-06-10">10 Jun 2024</time>
                            </span>
                            <span>
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M2 12s4-6 10-6 10 6 10 6-4 6-10 6S2 12 2 12Z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                                950 views
                            </span>
                        </div>
                    </div>
                </article>

                <article class="fs-article-card">
                    <div class="fs-article-image">
                        <img
                            src="{{ asset('images/article/ARTICLE-3.png') }}"
                            alt="Tips mengelola cuti dengan lebih efektif"
                        >
                        <span class="fs-article-category">TIPS</span>
                    </div>

                    <div class="fs-article-content">
                        <h3>5 Tips Mengelola Cuti<br>dengan Lebih Efektif</h3>
                        <div class="fs-article-meta">
                            <span>
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <rect x="4" y="5" width="16" height="16" rx="2"/>
                                    <path d="M8 3v4M16 3v4M4 11h16M8 15h.01M12 15h.01M16 15h.01M8 18h.01M12 18h.01"/>
                                </svg>
                                <time datetime="2024-06-08">08 Jun 2024</time>
                            </span>
                            <span>
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M2 12s4-6 10-6 10 6 10 6-4 6-10 6S2 12 2 12Z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                                650 views
                            </span>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection