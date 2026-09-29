@extends('layouts.app')

@section('title', 'Portofolio | Forstaff')

@section('content')

<main class="fs-portfolio">

    {{-- =========================================================
        BAGIAN 1 - HERO PORTOFOLIO
    ========================================================== --}}
    <section class="fs-portfolio-hero">
        <div class="fs-portfolio-container">

            <div class="fs-portfolio-hero-grid">

                {{-- Hero Content --}}
                <div class="fs-portfolio-hero-content">

                    <nav class="fs-portfolio-breadcrumb" aria-label="Breadcrumb">
                        <a href="{{ route('home') }}">Home</a>

                        <span class="fs-breadcrumb-separator">
                            ›
                        </span>

                        <span>Portofolio</span>
                    </nav>

                    <h1>
                        Dipercaya oleh<br>
                        Berbagai Perusahaan
                    </h1>

                    <p>
                        Forstaff telah membantu berbagai organisasi dan berbagai
                        industri dalam mengelola SDM dengan lebih mudah, efisien,
                        dan strategis.
                    </p>

                </div>


                {{-- Hero Image --}}
                <div class="fs-portfolio-hero-image">

                    <img
                        src="{{ asset('images/team/kantor.jpg') }}"
                        alt="Lingkungan kerja Forstaff"
                    >

                    <div class="fs-portfolio-hero-note">
                        Bersama<br>
                        Membangun<br>
                        Pertumbuhan

                        <span></span>
                    </div>

                </div>

            </div>

        </div>
    </section>



    {{-- =========================================================
        STATISTIK
    ========================================================== --}}
    <section class="fs-portfolio-stats">

        <div class="fs-portfolio-container">

            <div class="fs-stats-grid">


                {{-- STATISTIK 1 --}}
                <article class="fs-stat-item">

                    <div class="fs-stat-icon" aria-hidden="true">

                        <svg viewBox="0 0 24 24" fill="none">

                            <circle
                                cx="9"
                                cy="8"
                                r="3"
                            ></circle>

                            <circle
                                cx="17"
                                cy="9"
                                r="2.4"
                            ></circle>

                            <path
                                d="M3.8 19c.3-4 2.1-6 5.2-6 3.1 0 5 2 5.3 6"
                            ></path>

                            <path
                                d="M14.3 14.2c.8-.7 1.7-1 2.8-1 2.4 0 3.7 1.6 3.9 4.8"
                            ></path>

                        </svg>

                    </div>


                    <div>

                        <strong>
                            100+
                        </strong>

                        <p>
                            Perusahaan<br>

                            <span>
                                Telah Mempercayai Forstaff
                            </span>
                        </p>

                    </div>

                </article>



                {{-- STATISTIK 2 --}}
                <article class="fs-stat-item">

                    <div class="fs-stat-icon" aria-hidden="true">

                        <svg viewBox="0 0 24 24" fill="none">

                            <circle
                                cx="8"
                                cy="8"
                                r="2.3"
                            ></circle>

                            <circle
                                cx="16"
                                cy="8"
                                r="2.3"
                            ></circle>

                            <circle
                                cx="12"
                                cy="6.5"
                                r="2.6"
                            ></circle>

                            <path
                                d="M2.8 18c.2-3.2 1.9-4.8 5-4.8"
                            ></path>

                            <path
                                d="M21.2 18c-.2-3.2-1.9-4.8-5-4.8"
                            ></path>

                            <path
                                d="M6.2 18c.3-3.8 2.2-5.7 5.8-5.7s5.5 1.9 5.8 5.7"
                            ></path>

                        </svg>

                    </div>


                    <div>

                        <strong>
                            50.000+
                        </strong>

                        <p>
                            Karyawan<br>

                            <span>
                                Dikelola melalui sistem kami
                            </span>
                        </p>

                    </div>

                </article>



                {{-- STATISTIK 3 --}}
                <article class="fs-stat-item fs-stat-item-last">

                    <div class="fs-stat-icon" aria-hidden="true">

                        <svg viewBox="0 0 24 24" fill="none">

                            <path
                                d="M5 19V13"
                            ></path>

                            <path
                                d="M12 19V9"
                            ></path>

                            <path
                                d="M19 19V4"
                            ></path>

                            <circle
                                cx="5"
                                cy="11"
                                r="1"
                            ></circle>

                            <circle
                                cx="12"
                                cy="7"
                                r="1"
                            ></circle>

                            <circle
                                cx="19"
                                cy="2"
                                r="1"
                            ></circle>

                        </svg>

                    </div>


                    <div>

                        <strong>
                            Berbagai Industri
                        </strong>

                        <p>
                            Dari skala kecil hingga enterprise<br>

                            <span>
                                lintas sektor
                            </span>
                        </p>

                    </div>

                </article>

            </div>

        </div>

    </section>



    {{-- =========================================================
        BAGIAN 2 - DAFTAR PORTOFOLIO
    ========================================================== --}}

    @php

        $clients = [

            [
                'name' => 'Bali District',
                'description' => 'Bar & Hiburan Malam',
                'image' => 'BALI-DISTRICT.png',
            ],

            [
                'name' => 'Bercut',
                'description' => 'Barbershop & Grooming',
                'image' => 'BERCUT.png',
            ],

            [
                'name' => 'Chuyu',
                'description' => 'Food & Beverage',
                'image' => 'CHUYU.png',
            ],

            [
                'name' => 'Get Up',
                'description' => 'Restaurant & Club Lounge',
                'image' => 'GETUP.png',
            ],

            [
                'name' => 'Lingkar Medika',
                'description' => 'Layanan kesehatan',
                'image' => 'LINGKAR-MEDIKA.png',
            ],

            [
                'name' => 'Lembaga Perkreditan Desa Celuk',
                'description' => 'Lembaga Perkreditan Desa',
                'image' => 'LPD.png',
            ],

            [
                'name' => 'My of Kind Beauty',
                'description' => 'Perawatan Kecantikan Alami',
                'image' => 'MY-KIND.png',
            ],

            [
                'name' => 'Oris Cake',
                'description' => 'Kue & pastry',
                'image' => 'ORIS-CAKE.png',
            ],

            [
                'name' => 'Red Group',
                'description' => 'Grup Perusahaan',
                'image' => 'RED-GROUP.png',
            ],

            [
                'name' => 'Rumah Sunat Bali',
                'description' => 'Layanan kesehatan',
                'image' => 'RUMAH_SUNAT.png',
            ],

            [
                'name' => 'The Hub',
                'description' => 'Kafe & Ruang Komunitas',
                'image' => 'TREEHUB.png',
            ],

            [
                'name' => 'Univlox',
                'description' => 'Klub & Hiburan Malam',
                'image' => 'UNIVLOX.png',
            ],

            [
                'name' => 'Vifa Holiday',
                'description' => 'Destination Management Company',
                'image' => 'VIFA-HOLIDAY.png',
            ],

        ];

    @endphp



    <section class="fs-portfolio-showcase">

        <div class="fs-portfolio-container">


            {{-- =====================================================
                INTRO PORTOFOLIO
            ====================================================== --}}
            <div class="fs-portfolio-intro">

                <span class="fs-portfolio-eyebrow">
                    PORTOFOLIO
                </span>


                <h2>
                    Kolaborasi Nyata,<br>
                    Dampak Nyata.
                </h2>


                <div class="fs-portfolio-description">

                    <p>
                        Forstaff hadir untuk membantu perusahaan dari berbagai
                        industri mengelola sumber daya manusia secara lebih
                        terstruktur. Setiap bisnis memiliki kebutuhan yang berbeda,
                        mulai dari pengaturan kehadiran, pengelolaan data karyawan,
                        hingga proses penggajian yang saling terhubung.
                    </p>


                    <p>
                        Pengalaman tersebut menjadi dasar bagi Forstaff untuk terus
                        menghadirkan solusi administrasi SDM dalam kegiatan
                        operasional sehari-hari. Melalui fitur-fitur yang dirancang
                        fleksibel dan dapat disesuaikan dengan kebutuhan
                        masing-masing perusahaan, kami percaya lebih banyak
                        perusahaan dapat menjalankan proses HR dengan lebih efisien.
                    </p>


                    <p>
                        Bagi Forstaff, setiap kolaborasi menjadi bagian dari
                        perjalanan untuk terus memahami kebutuhan dunia kerja.
                        Kami berupaya menghadirkan solusi yang relevan agar
                        perusahaan dapat lebih fokus pada pengembangan tim
                        dan pertumbuhan bisnis.
                    </p>

                </div>

            </div>



            {{-- =====================================================
                DAFTAR CLIENT
            ====================================================== --}}
            <div class="fs-client-grid">

                @foreach ($clients as $client)

                    <article class="fs-client-card">


                        {{-- Logo --}}
                        <div class="fs-client-logo">

                            <img
                                src="{{ asset('images/clients/' . $client['image']) }}"
                                alt="Logo {{ $client['name'] }}"
                                loading="lazy"
                            >

                        </div>


                        {{-- Informasi Client --}}
                        <div class="fs-client-content">

                            <h3>
                                {{ $client['name'] }}
                            </h3>

                            <p>
                                {{ $client['description'] }}
                            </p>

                        </div>

                    </article>

                @endforeach

            </div>

        </div>

    </section>

</main>

@endsection