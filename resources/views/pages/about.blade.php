@extends('layouts.app')

@section('title', 'Tentang Kami | Forstaff')

@section('content')


<section class="fs-about-hero-section">

    <div class="fs-container">

        <div class="fs-about-hero">


            <div class="fs-about-hero-content">

                <div class="fs-breadcrumb">
                    Home
                    <span>›</span>
                    Tentang Kami
                </div>


                <span class="fs-about-badge">
                    TENTANG KAMI
                </span>


                <h1>
                    Membangun Masa
                    <br>
                    Berbagai Perusahaan
                </h1>


                <p>
                    Forstaff hadir membantu banyak organisasi dan berbagai
                    industri dalam mengelola SDM dengan lebih mudah, efisien,
                    dan terintegrasi.
                </p>


            </div>



            <div class="fs-about-hero-image">

                <img
                    src="{{ asset('images/tentang_kami/hero-about-office.png') }}"
                    alt="Suasana kantor Forstaff">

            </div>



        </div>

    </div>

</section>





<!-- STATISTIC SECTION -->

<section class="fs-about-statistic">

    <div class="fs-container">

        <div class="fs-about-statistic-wrapper">



            <!-- STAT 1 -->

            <div class="fs-about-stat-item">


                <div class="fs-about-stat-icon">

                    <svg viewBox="0 0 24 24" fill="none">

                        <path
                        d="M5 20V8L12 4L19 8V20H5Z"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linejoin="round"/>

                        <path
                        d="M9 20V14H15V20"
                        stroke="currentColor"
                        stroke-width="2"/>

                        <path
                        d="M8 10H8.01M12 10H12.01M16 10H16.01"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"/>

                    </svg>
                </div>



                <div>

                    <h3>100+</h3>

                    <p>
                        Perusahaan
                        <br>
                        Telah mempercayai Forstaff
                    </p>

                </div>


            </div>





            <!-- STAT 2 -->

            <div class="fs-about-stat-item">


                <div class="fs-about-stat-icon">

                    <svg viewBox="0 0 24 24" fill="none">


                        <circle
                        cx="9"
                        cy="8"
                        r="3"
                        stroke="currentColor"
                        stroke-width="2"/>


                        <circle
                        cx="16.5"
                        cy="9"
                        r="2.5"
                        stroke="currentColor"
                        stroke-width="2"/>


                        <path
                        d="M3 20C3 16.7 5.7 14 9 14C12.3 14 15 16.7 15 20"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"/>


                        <path
                        d="M15 15C18 15 20 17 20 20"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"/>


                    </svg>

                </div>



                <div>

                    <h3>50.000+</h3>

                    <p>
                        Karyawan
                        <br>
                        Dikelola melalui sistem kami
                    </p>

                </div>


            </div>





            <!-- STAT 3 -->

            <div class="fs-about-stat-item">


                <div class="fs-about-stat-icon">

                    <svg viewBox="0 0 24 24" fill="none">


                        <path
                        d="M5 20V13"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"/>


                        <path
                        d="M12 20V8"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"/>


                        <path
                        d="M19 20V5"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"/>


                        <path
                        d="M3 20H21"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"/>


                    </svg>

                </div>



                <div>

                    <h3 class="fs-stat-industry">
                        Berbagai Industri
                    </h3>


                    <p>
                        Dari manufaktur, retail,
                        <br>
                        kesehatan, hingga jasa
                    </p>

                </div>


            </div>



        </div>

    </div>

</section>


</section>


<!-- OUR STORY -->
<section class="fs-about-story">

    <div class="fs-container">

        <div class="fs-about-story-wrapper">


            <!-- IMAGE -->

            <div class="fs-about-story-image">

                <img 
                src="{{ asset('images/tentang_kami/story-about-team.png') }}"
                alt="Tim Forstaff">

            </div>



            <!-- CONTENT -->

            <div class="fs-about-story-content">


                <span class="fs-about-story-badge">OUR STORY</span>


                <h2>
                    Perjalanan <span>Kami</span>
                </h2>


                <p>
                    Forstaff dikembangkan oleh PT Guna Teknologi Nusantara
                    dengan visi menjadi mitra perusahaan di Indonesia.
                </p>


                <p>
                    Kami percaya bahwa pengelolaan SDM yang baik merupakan
                    fondasi penting bagi pertumbuhan bisnis. Oleh karena itu,
                    kami terus berinovasi untuk memberikan layanan terbaik
                    yang sesuai dengan kebutuhan dunia kerja saat ini.
                </p>


            </div>


        </div>

    </div>

</section>



<!-- OUR PURPOSE -->
<section class="fs-about-purpose">
    <div class="fs-container">
        <div class="fs-about-purpose-layout">

            <div class="fs-about-purpose-main">
                <span class="fs-about-purpose-badge">OUR PURPOSE</span>

                <h2>Visi, Misi, dan Nilai <span>Kami</span></h2>

                <p class="fs-about-purpose-intro">
                    Kami berkomitmen untuk memberikan dampak positif melalui teknologi setiap perusahaan.
                </p>

                <div class="fs-about-purpose-cards">
                    <div class="fs-about-purpose-card">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M2.5 12S6 6.5 12 6.5 21.5 12 21.5 12 18 17.5 12 17.5 2.5 12 2.5 12Z"
                                  stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                            <circle cx="12" cy="12" r="2.5"
                                    stroke="currentColor" stroke-width="1.8"/>
                        </svg>
                        <p>Menjadi platform HR terdepan di Indonesia yang mendukung pertumbuhan bisnis berkelanjutan.</p>
                    </div>

                    <div class="fs-about-purpose-card">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <circle cx="11" cy="13" r="8"
                                    stroke="currentColor" stroke-width="1.8"/>
                            <circle cx="11" cy="13" r="4.5"
                                    stroke="currentColor" stroke-width="1.8"/>
                            <path d="M11 13 20 4M16.5 4H20v3.5"
                                  stroke="currentColor" stroke-width="1.8"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <p>Menyediakan solusi HR yang efisien dan relevan kebutuhan perusahaan di Indonesia.</p>
                    </div>

                    <div class="fs-about-purpose-card">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M6 4h12l4 5-10 11L2 9l4-5Z"
                                  stroke="currentColor" stroke-width="1.8"
                                  stroke-linejoin="round"/>
                            <path d="M2 9h20M9 4 7 9l5 11 5-11-2-5"
                                  stroke="currentColor" stroke-width="1.8"
                                  stroke-linejoin="round"/>
                        </svg>

                        <ul>
                            <li>Inovasi berkelanjutan</li>
                            <li>Integritas dalam setiap layanan</li>
                            <li>SDM Indonesia</li>
                        </ul>
                    </div>
                </div>
            </div>

            <blockquote class="fs-about-purpose-quote">
                <span class="fs-about-purpose-quote-mark" aria-hidden="true">”</span>
                <p>Kami percaya bahwa teknologi dapat menciptakan lingkungan kerja yang lebih baik untuk semua.</p>
            </blockquote>

        </div>
    </div>
</section>



{{-- =========================
     OUR TEAM
========================= --}}
<section class="fs-about-team">
    <div class="fs-container fs-about-team-layout">
        <div class="fs-about-team-content">
            <span class="fs-about-team-badge">OUR TEAM</span>

            <h2>Tim di Balik <span>Forstaff</span></h2>

            <p>
                Forstaff didukung oleh tim profesional yang berpengalaman
                di bidang teknologi, HR, dan semangat kolaborasi untuk
                terus menghadirkan solusi terbaik bagi pelanggan.
            </p>

            <a href="{{ url('/kontak') }}" class="fs-about-team-button">
                Bergabung Bersama Kami <span aria-hidden="true">→</span>
            </a>
        </div>

        <div class="fs-about-team-image">
            <img
                src="{{ asset('images/tentang_kami/team-about-forstaff.png') }}"
                alt="Tim Forstaff bekerja sama di kantor"
            >
        </div>
    </div>
</section>


{{-- =========================
     ABOUT METRICS
========================= --}}
<section class="fs-about-metrics">
    <div class="fs-container">
        <div class="fs-about-metrics-grid">
            <div class="fs-about-metrics-item">
                <strong>500+</strong>
                <span>Perusahaan Menggunakan</span>
            </div>

            <div class="fs-about-metrics-item">
                <strong>50.000+</strong>
                <span>Karyawan Terkelola</span>
            </div>

            <div class="fs-about-metrics-item">
                <strong>99%</strong>
                <span>Tingkat Kepuasan Pelanggan</span>
            </div>

            <div class="fs-about-metrics-item">
                <strong>5+</strong>
                <span>Tahun Pengalaman</span>
            </div>
        </div>
    </div>
</section>

@endsection