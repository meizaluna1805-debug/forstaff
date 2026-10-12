@extends('layouts.app')

@section('title', 'Blog & Insight | Forstaff')

@section('meta', 'Temukan artikel, insight, dan informasi seputar teknologi, manajemen SDM, serta pengembangan bisnis bersama Forstaff.')

@section('meta_description', 'Temukan artikel, insight, dan informasi seputar teknologi, manajemen SDM, serta pengembangan bisnis bersama Forstaff.')

@section('content')

@php
    /*
    |--------------------------------------------------------------------------
    | DATA BLOG SEMENTARA
    |--------------------------------------------------------------------------
    | Saat backend sudah dibuat, array ini nanti diganti data dari database.
    | Struktur Blade dan CSS tidak perlu dirombak.
    */

    $articles = [
        [
            'title' => '5 Cara Efektif Meningkatkan Produktivitas Tim di Era Digital',
            'slug' => '5-cara-efektif-meningkatkan-produktivitas-tim-di-era-digital',
            'date' => '12 Sep 2024',
            'datetime' => '2024-09-12',
            'image' => 'images/article/ARTICLE-1.png',
            'excerpt' => 'Produktivitas tim bukan hanya soal bekerja lebih keras, tetapi juga bekerja lebih cerdas. Simak tipsnya di sini.',
        ],
        [
            'title' => 'Mengapa Transformasi Digital Penting untuk Bisnis Saat Ini?',
            'slug' => 'mengapa-transformasi-digital-penting-untuk-bisnis-saat-ini',
            'date' => '5 Sep 2024',
            'datetime' => '2024-09-05',
            'image' => 'images/article/ARTICLE-2.png',
            'excerpt' => 'Transformasi digital membantu perusahaan beradaptasi dengan perubahan dan menciptakan peluang baru di tengah persaingan.',
        ],
        [
            'title' => 'Membangun Budaya Kerja Positif di Lingkungan Hybrid',
            'slug' => 'membangun-budaya-kerja-positif-di-lingkungan-hybrid',
            'date' => '28 Agu 2024',
            'datetime' => '2024-08-28',
            'image' => 'images/article/ARTICLE-3.png',
            'excerpt' => 'Lingkungan kerja hybrid menuntut pendekatan baru dalam membangun kolaborasi dan komunikasi yang efektif.',
        ],
        [
            'title' => 'Peran Teknologi dalam Mendukung Pertumbuhan Bisnis',
            'slug' => 'peran-teknologi-dalam-mendukung-pertumbuhan-bisnis',
            'date' => '20 Agu 2024',
            'datetime' => '2024-08-20',
            'image' => 'images/article/ARTICLE-4.jpg',
            'excerpt' => 'Teknologi bukan lagi sekadar alat, tetapi menjadi faktor kunci dalam menciptakan efisiensi dan inovasi di berbagai industri.',
        ],

        /*
         * Artikel 5 dan 6 sementara memakai ulang gambar yang tersedia.
         * Nanti cukup ganti nilai "image" ketika asset baru sudah ada.
         */
        [
            'title' => 'Tips Mengelola Tim yang Lebih Solid dan Adaptif',
            'slug' => 'tips-mengelola-tim-yang-lebih-solid-dan-adaptif',
            'date' => '14 Agu 2024',
            'datetime' => '2024-08-14',
            'image' => 'images/article/ARTICLE-2.png',
            'excerpt' => 'Tim yang solid dapat menghadapi tantangan dengan lebih baik. Simak beberapa tips untuk membangun tim yang adaptif.',
        ],
        [
            'title' => 'Tren Dunia Kerja yang Perlu Diperhatikan di Tahun Ini',
            'slug' => 'tren-dunia-kerja-yang-perlu-diperhatikan-di-tahun-ini',
            'date' => '8 Agu 2024',
            'datetime' => '2024-08-08',
            'image' => 'images/article/ARTICLE-1.png',
            'excerpt' => 'Dunia kerja terus berkembang. Ketahui tren terbaru yang dapat membantu perusahaan tetap relevan dan kompetitif.',
        ],
    ];
@endphp


<main class="fs-blog">

    {{-- =====================================================
         HERO BLOG
    ====================================================== --}}
    <section class="fs-blog-hero">

        <div class="fs-blog-hero-media" aria-hidden="true">

            <img
                src="{{ asset('images/team/kantor2.jpg') }}"
                alt=""
                class="fs-blog-hero-image"
            >

            <div class="fs-blog-hero-note">
                <span>Ideas</span>
                <strong>Insights</strong>
                <span>Growth</span>

                <svg
                    class="fs-blog-hero-doodle"
                    viewBox="0 0 44 44"
                    fill="none"
                    aria-hidden="true"
                >
                    <path
                        d="M17 28h10M19 32h6M22 7v5M7 21h5M32 21h5M11.5 10.5l3.5 3.5M32.5 10.5 29 14"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                    />
                    <path
                        d="M15.5 21a6.5 6.5 0 1 1 13 0c0 3-1.7 4.5-3.1 6H18.6c-1.4-1.5-3.1-3-3.1-6Z"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linejoin="round"
                    />
                </svg>
            </div>

        </div>


        <div class="fs-blog-hero-container">

            <div class="fs-blog-hero-content">

                <nav class="fs-blog-breadcrumb" aria-label="Breadcrumb">
                    <a href="{{ route('home') }}">Home</a>

                    <span
                        class="fs-blog-breadcrumb-separator"
                        aria-hidden="true"
                    >
                        ›
                    </span>

                    <span aria-current="page">
                        Blog
                    </span>
                </nav>


                <h1>
                    Insight dan Cerita<br>
                    untuk Pertumbuhan Bisnis
                </h1>

                <p>
                    Temukan berbagai artikel, tips, dan informasi seputar teknologi,
                    manajemen, dan pengembangan tim untuk mendukung kemajuan bisnis Anda.
                </p>

            </div>

        </div>

    </section>



    {{-- =====================================================
         BLOG CONTENT
    ====================================================== --}}
    <section class="fs-blog-content">

        <div class="fs-blog-container">


            {{-- SEARCH --}}
            <div class="fs-blog-search">

                <div class="fs-blog-search-field">

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        aria-hidden="true"
                    >
                        <circle
                            cx="11"
                            cy="11"
                            r="7"
                            stroke="currentColor"
                            stroke-width="1.8"
                        />

                        <path
                            d="m16.5 16.5 4 4"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                        />
                    </svg>

                    <input
                        type="search"
                        name="search"
                        placeholder="Cari artikel..."
                        aria-label="Cari artikel"
                    >

                </div>


                {{-- UI dahulu. Search backend dikerjakan nanti --}}
                <button
                    type="button"
                    class="fs-blog-search-button"
                >
                    Cari
                </button>

            </div>



            {{-- =====================================================
                 ARTICLE GRID
            ====================================================== --}}
            <div class="fs-blog-grid">

                @foreach ($articles as $article)

                    <article class="fs-blog-card">

                        <a
                            href="{{ url('/blog/' . $article['slug']) }}"
                            class="fs-blog-card-image-link"
                            aria-label="Baca {{ $article['title'] }}"
                        >

                            <img
                                src="{{ asset($article['image']) }}"
                                alt="{{ $article['title'] }}"
                                class="fs-blog-card-image"
                                loading="lazy"
                            >

                        </a>


                        <div class="fs-blog-card-body">

                            <time
                                class="fs-blog-card-date"
                                datetime="{{ $article['datetime'] }}"
                            >
                                {{ $article['date'] }}
                            </time>


                            <h2 class="fs-blog-card-title">

                                <a href="{{ url('/blog/' . $article['slug']) }}">
                                    {{ $article['title'] }}
                                </a>

                            </h2>


                            <p class="fs-blog-card-excerpt">
                                {{ $article['excerpt'] }}
                            </p>


                            <a
                                href="{{ url('/blog/' . $article['slug']) }}"
                                class="fs-blog-card-link"
                            >
                                <span>Baca Selengkapnya</span>

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
                            </a>

                        </div>

                    </article>

                @endforeach

            </div>



            {{-- =====================================================
                 PAGINATION — VIEW ONLY
            ====================================================== --}}
            <nav
                class="fs-blog-pagination"
                aria-label="Navigasi halaman blog"
            >

                <button
                    type="button"
                    class="fs-blog-page-button fs-blog-page-arrow"
                    aria-label="Halaman sebelumnya"
                >
                    ‹
                </button>


                <button
                    type="button"
                    class="fs-blog-page-button active"
                    aria-current="page"
                >
                    1
                </button>


                <button
                    type="button"
                    class="fs-blog-page-button"
                >
                    2
                </button>


                <button
                    type="button"
                    class="fs-blog-page-button"
                >
                    3
                </button>


                <button
                    type="button"
                    class="fs-blog-page-button fs-blog-page-arrow"
                    aria-label="Halaman berikutnya"
                >
                    ›
                </button>

            </nav>

        </div>

    </section>

</main>

@endsection