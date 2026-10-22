@extends('layouts.app')

@section('title', 'Blog & Insight | Forstaff')

@section(
    'meta',
    'Temukan artikel, insight, dan informasi seputar teknologi, manajemen SDM, serta pengembangan bisnis bersama Forstaff.'
)

@section(
    'meta_description',
    'Temukan artikel, insight, dan informasi seputar teknologi, manajemen SDM, serta pengembangan bisnis bersama Forstaff.'
)


@section('content')

@php

    /*
    |--------------------------------------------------------------------------
    | DATA ARTIKEL SEMENTARA
    |--------------------------------------------------------------------------
    |
    | Saat ini project masih tahap view/frontend.
    | Nanti data ini akan dipindahkan ke database + Controller.
    |
    */

    $articles = [

        [
            'title' => '5 Cara Efektif Meningkatkan Produktivitas Tim di Era Digital',

            'slug' =>
                '5-cara-efektif-meningkatkan-produktivitas-tim-di-era-digital',

            'date' => '12 Sep 2024',

            'datetime' => '2024-09-12',

            'image' => 'images/article/ARTICLE-1.webp',

            'excerpt' =>
                'Produktivitas tim bukan hanya soal bekerja lebih keras, tetapi juga bekerja lebih cerdas. Simak tipsnya di sini.',
        ],


        [
            'title' =>
                'Mengapa Transformasi Digital Penting untuk Bisnis Saat Ini?',

            'slug' =>
                'mengapa-transformasi-digital-penting-untuk-bisnis-saat-ini',

            'date' => '5 Sep 2024',

            'datetime' => '2024-09-05',

            'image' => 'images/article/ARTICLE-2.webp',

            'excerpt' =>
                'Transformasi digital membantu perusahaan beradaptasi dengan perubahan dan menciptakan peluang baru di tengah persaingan.',
        ],


        [
            'title' =>
                'Membangun Budaya Kerja Positif di Lingkungan Hybrid',

            'slug' =>
                'membangun-budaya-kerja-positif-di-lingkungan-hybrid',

            'date' => '28 Agu 2024',

            'datetime' => '2024-08-28',

            'image' => 'images/article/ARTICLE-3.webp',

            'excerpt' =>
                'Lingkungan kerja hybrid menuntut pendekatan baru dalam membangun kolaborasi dan komunikasi yang efektif.',
        ],


        [
            'title' =>
                'Peran Teknologi dalam Mendukung Pertumbuhan Bisnis',

            'slug' =>
                'peran-teknologi-dalam-mendukung-pertumbuhan-bisnis',

            'date' => '20 Agu 2024',

            'datetime' => '2024-08-20',

            'image' => 'images/article/ARTICLE-4.jpg',

            'excerpt' =>
                'Teknologi bukan lagi sekadar alat, tetapi menjadi faktor kunci dalam menciptakan efisiensi dan inovasi di berbagai industri.',
        ],


        /*
         * Artikel 5 dan 6 sementara memakai ulang
         * aset artikel yang sudah tersedia.
         *
         * Nanti cukup ganti nilai "image"
         * setelah ARTICLE-5 dan ARTICLE-6 tersedia.
         */

        [
            'title' =>
                'Tips Mengelola Tim yang Lebih Solid dan Adaptif',

            'slug' =>
                'tips-mengelola-tim-yang-lebih-solid-dan-adaptif',

            'date' => '14 Agu 2024',

            'datetime' => '2024-08-14',

            'image' => 'images/article/ARTICLE-2.png',

            'excerpt' =>
                'Tim yang solid dapat menghadapi tantangan dengan lebih baik. Simak beberapa tips untuk membangun tim yang adaptif.',
        ],


        [
            'title' =>
                'Tren Dunia Kerja yang Perlu Diperhatikan di Tahun Ini',

            'slug' =>
                'tren-dunia-kerja-yang-perlu-diperhatikan-di-tahun-ini',

            'date' => '8 Agu 2024',

            'datetime' => '2024-08-08',

            'image' => 'images/article/ARTICLE-3.png',

            'excerpt' =>
                'Dunia kerja terus berkembang. Ketahui tren terbaru yang dapat membantu perusahaan tetap relevan dan kompetitif.',
        ],

    ];

@endphp



<main class="fs-blog">


    {{-- =====================================================
         HERO BLOG
    ====================================================== --}}

    <section class="fs-blog-hero">


        {{-- HERO IMAGE --}}

        <div class="fs-blog-hero-media" aria-hidden="true">

            <img
                src="{{ asset('images/team/kantor2.jpg') }}"
                alt=""
                class="fs-blog-hero-image"
            >

        </div>



        {{-- HERO CONTENT --}}

        <div class="fs-blog-hero-container">

            <div class="fs-blog-hero-content">


                {{-- BREADCRUMB --}}

                <nav
                    class="fs-blog-breadcrumb"
                    aria-label="Breadcrumb"
                >

                    <a href="{{ route('home') }}">
                        Home
                    </a>


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



                {{-- H1 --}}

                <h1>
                    Insight dan Cerita<br>
                    untuk Pertumbuhan Bisnis
                </h1>



                {{-- DESCRIPTION --}}

                <p>
                    Temukan berbagai artikel, tips, dan informasi seputar
                    teknologi, manajemen, dan pengembangan tim untuk
                    mendukung kemajuan bisnis Anda.
                </p>


            </div>

        </div>

    </section>



    {{-- =====================================================
         BLOG CONTENT
    ====================================================== --}}

    <section class="fs-blog-content">

        <div class="fs-blog-container">


            {{-- =====================================================
                 SEARCH
            ====================================================== --}}

            <div class="fs-blog-search">


                <div class="fs-blog-search-field">


                    {{-- SEARCH ICON --}}

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



                    {{-- SEARCH INPUT --}}

                    <input
                        type="search"
                        name="search"
                        placeholder="Cari artikel..."
                        aria-label="Cari artikel"
                    >

                </div>



                {{--
                    Saat ini tombol search masih UI.

                    Nanti saat backend:
                    - dibungkus <form method="GET">
                    - request dikirim ke /blog?search=...
                    - diproses BlogController
                --}}

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


                        {{-- ARTICLE IMAGE --}}

                        <a
                            href="{{ url('/blog/' . $article['slug']) }}"
                            class="fs-blog-card-image-link"
                            aria-label="Baca artikel {{ $article['title'] }}"
                        >

                            <img
                                src="{{ asset($article['image']) }}"
                                alt="{{ $article['title'] }}"
                                class="fs-blog-card-image"
                                loading="lazy"
                            >

                        </a>



                        {{-- ARTICLE BODY --}}

                        <div class="fs-blog-card-body">


                            {{-- DATE --}}

                            <time
                                class="fs-blog-card-date"
                                datetime="{{ $article['datetime'] }}"
                            >
                                {{ $article['date'] }}
                            </time>



                            {{-- TITLE --}}

                            <h2 class="fs-blog-card-title">

                                <a
                                    href="{{ url('/blog/' . $article['slug']) }}"
                                >
                                    {{ $article['title'] }}
                                </a>

                            </h2>



                            {{-- EXCERPT --}}

                            <p class="fs-blog-card-excerpt">
                                {{ $article['excerpt'] }}
                            </p>



                            {{-- READ MORE --}}

                            <a
                                href="{{ url('/blog/' . $article['slug']) }}"
                                class="fs-blog-card-link"
                            >

                                <span>
                                    Baca Selengkapnya
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

                            </a>


                        </div>


                    </article>


                @endforeach


            </div>



            {{-- =====================================================
                 PAGINATION
                 SEMENTARA VIEW ONLY
            ====================================================== --}}

            <nav
                class="fs-blog-pagination"
                aria-label="Navigasi halaman blog"
            >


                {{-- PREVIOUS --}}

                <button
                    type="button"
                    class="fs-blog-page-button fs-blog-page-arrow"
                    aria-label="Halaman sebelumnya"
                >
                    ‹
                </button>



                {{-- PAGE 1 --}}

                <button
                    type="button"
                    class="fs-blog-page-button active"
                    aria-current="page"
                >
                    1
                </button>



                {{-- PAGE 2 --}}

                <button
                    type="button"
                    class="fs-blog-page-button"
                >
                    2
                </button>



                {{-- PAGE 3 --}}

                <button
                    type="button"
                    class="fs-blog-page-button"
                >
                    3
                </button>



                {{-- NEXT --}}

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