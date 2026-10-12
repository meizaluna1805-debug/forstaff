@extends('layouts.app')

@php
    /*
    |--------------------------------------------------------------------------
    | DATA ARTIKEL SEMENTARA
    |--------------------------------------------------------------------------
    | Masih tahap frontend/view.
    | Nanti data ini diganti database + Model + Controller.
    */

    $articles = [

        '5-cara-efektif-meningkatkan-produktivitas-tim-di-era-digital' => [
            'title' => '5 Cara Efektif Meningkatkan Produktivitas Tim di Era Digital',
            'category' => 'Manajemen SDM',
            'date' => '12 September 2024',
            'datetime' => '2024-09-12',
            'reading_time' => '5 menit baca',
            'author' => 'Tim Forstaff',
            'image' => 'images/article/ARTICLE-1.png',

            'lead' => 'Bangun tim yang produktif melalui komunikasi yang jelas, pengelolaan kerja yang terarah, dan pemanfaatan teknologi yang tepat.',

            'intro' => 'Produktivitas tim bukan hanya soal bekerja lebih keras, tetapi juga bekerja lebih cerdas. Pembagian tugas yang jelas, komunikasi yang terarah, dan dukungan teknologi dapat membantu tim menyelesaikan pekerjaan dengan lebih teratur.',

            'sections' => [
                [
                    'title' => 'Tetapkan tujuan dan prioritas yang jelas',
                    'content' => 'Tentukan hasil yang ingin dicapai, penanggung jawab, dan tenggat waktu setiap tugas. Susun prioritas bersama agar anggota tim memahami pekerjaan yang perlu diselesaikan terlebih dahulu.',
                ],
                [
                    'title' => 'Bangun komunikasi yang terarah',
                    'content' => 'Gunakan kanal komunikasi yang disepakati dan dokumentasikan keputusan penting. Pertemuan singkat dengan agenda yang jelas membantu tim membahas kemajuan serta menyelesaikan hambatan.',
                ],
                [
                    'title' => 'Manfaatkan teknologi sesuai kebutuhan',
                    'content' => 'Pilih perangkat digital yang memudahkan pembagian tugas dan pengelolaan informasi. Sistem SDM terintegrasi dapat membantu merapikan data karyawan, absensi, dan administrasi dalam satu tempat.',
                ],
                [
                    'title' => 'Dukung pengembangan kemampuan tim',
                    'content' => 'Berikan kesempatan belajar, berbagi pengetahuan, dan mencoba cara kerja yang lebih baik. Sesuaikan pelatihan dengan kebutuhan pekerjaan agar keterampilan baru dapat diterapkan sehari-hari.',
                ],
                [
                    'title' => 'Evaluasi proses secara berkala',
                    'content' => 'Tinjau hasil kerja dan diskusikan kendala bersama tim. Gunakan temuan tersebut untuk memperbaiki pembagian tugas, alur komunikasi, dan penggunaan teknologi secara bertahap.',
                ],
            ],

            'conclusion' => 'Produktivitas tumbuh melalui kebiasaan kerja yang konsisten. Mulailah dari prioritas yang jelas, komunikasi yang baik, dan proses yang teratur agar tim dapat bekerja lebih efektif.',

            'tags' => [
                'SDM',
                'Produktivitas',
                'Manajemen Tim',
                'Digital',
                'HR',
            ],
        ],


        'mengapa-transformasi-digital-penting-untuk-bisnis-saat-ini' => [
            'title' => 'Mengapa Transformasi Digital Penting untuk Bisnis Saat Ini?',
            'category' => 'Transformasi Digital',
            'date' => '5 September 2024',
            'datetime' => '2024-09-05',
            'reading_time' => '4 menit baca',
            'author' => 'Tim Forstaff',
            'image' => 'images/article/ARTICLE-2.png',

            'lead' => 'Transformasi digital membantu perusahaan bekerja lebih efisien, cepat beradaptasi, dan mengambil keputusan berdasarkan informasi yang lebih terstruktur.',

            'intro' => 'Perubahan teknologi membuat perusahaan perlu menyesuaikan proses kerja agar tetap relevan. Transformasi digital bukan sekadar mengganti proses manual dengan aplikasi, tetapi juga memperbaiki cara perusahaan mengelola informasi dan bekerja.',

            'sections' => [
                [
                    'title' => 'Meningkatkan efisiensi operasional',
                    'content' => 'Digitalisasi membantu mengurangi pekerjaan berulang dan membuat proses administrasi lebih terstruktur sehingga tim dapat fokus pada pekerjaan yang memiliki nilai lebih tinggi.',
                ],
                [
                    'title' => 'Membantu pengambilan keputusan',
                    'content' => 'Data yang tersimpan secara terpusat membantu perusahaan memahami kondisi operasional dan menentukan langkah berikutnya berdasarkan informasi yang lebih jelas.',
                ],
                [
                    'title' => 'Mendukung perusahaan beradaptasi',
                    'content' => 'Teknologi memberikan fleksibilitas ketika kebutuhan pelanggan, pola kerja, dan kondisi bisnis mengalami perubahan.',
                ],
            ],

            'conclusion' => 'Transformasi digital yang dilakukan secara bertahap dapat membantu perusahaan membangun proses kerja yang lebih efisien dan adaptif.',

            'tags' => [
                'Digital',
                'Teknologi',
                'Bisnis',
                'Transformasi',
            ],
        ],


        'membangun-budaya-kerja-positif-di-lingkungan-hybrid' => [
            'title' => 'Membangun Budaya Kerja Positif di Lingkungan Hybrid',
            'category' => 'Budaya Kerja',
            'date' => '28 Agustus 2024',
            'datetime' => '2024-08-28',
            'reading_time' => '4 menit baca',
            'author' => 'Tim Forstaff',
            'image' => 'images/article/ARTICLE-3.png',

            'lead' => 'Lingkungan kerja hybrid membutuhkan komunikasi, kepercayaan, dan kebiasaan kolaborasi yang tetap kuat meskipun anggota tim bekerja dari lokasi berbeda.',

            'intro' => 'Model kerja hybrid menawarkan fleksibilitas, tetapi juga membutuhkan pendekatan baru dalam menjaga hubungan antaranggota tim dan memastikan informasi tetap tersampaikan dengan baik.',

            'sections' => [
                [
                    'title' => 'Bangun komunikasi yang konsisten',
                    'content' => 'Tentukan kanal komunikasi dan kebiasaan koordinasi yang jelas agar anggota tim tetap mendapatkan informasi yang mereka butuhkan.',
                ],
                [
                    'title' => 'Bangun kepercayaan dalam tim',
                    'content' => 'Fokus pada hasil pekerjaan dan berikan ruang bagi anggota tim untuk mengatur cara kerja yang tetap sesuai dengan tanggung jawabnya.',
                ],
                [
                    'title' => 'Jaga keterlibatan seluruh anggota',
                    'content' => 'Pastikan anggota yang bekerja dari kantor maupun jarak jauh tetap memiliki kesempatan yang sama untuk berdiskusi dan berkontribusi.',
                ],
            ],

            'conclusion' => 'Budaya kerja hybrid yang sehat dibangun melalui komunikasi terbuka, kepercayaan, dan kebiasaan kolaborasi yang konsisten.',

            'tags' => [
                'Hybrid',
                'Budaya Kerja',
                'SDM',
                'Kolaborasi',
            ],
        ],


        'peran-teknologi-dalam-mendukung-pertumbuhan-bisnis' => [
            'title' => 'Peran Teknologi dalam Mendukung Pertumbuhan Bisnis',
            'category' => 'Teknologi',
            'date' => '20 Agustus 2024',
            'datetime' => '2024-08-20',
            'reading_time' => '4 menit baca',
            'author' => 'Tim Forstaff',
            'image' => 'images/article/ARTICLE-4.jpg',

            'lead' => 'Pemanfaatan teknologi yang tepat membantu perusahaan meningkatkan efisiensi, mengelola informasi, dan mendukung pertumbuhan bisnis.',

            'intro' => 'Teknologi kini menjadi bagian penting dari proses bisnis. Penggunaannya tidak hanya membantu pekerjaan menjadi lebih cepat, tetapi juga membuka peluang untuk meningkatkan kualitas proses dan layanan.',

            'sections' => [
                [
                    'title' => 'Menyederhanakan pekerjaan rutin',
                    'content' => 'Digitalisasi membantu mengurangi pekerjaan administratif yang berulang dan membuat informasi lebih mudah dikelola.',
                ],
                [
                    'title' => 'Menghubungkan informasi bisnis',
                    'content' => 'Sistem yang terintegrasi membuat data lebih mudah diakses oleh pihak yang membutuhkan sehingga koordinasi dapat dilakukan dengan lebih baik.',
                ],
                [
                    'title' => 'Mendukung pengembangan bisnis',
                    'content' => 'Dengan proses yang lebih efisien, perusahaan dapat mengalokasikan lebih banyak waktu untuk inovasi dan pengembangan.',
                ],
            ],

            'conclusion' => 'Teknologi memberikan manfaat terbesar ketika digunakan sesuai kebutuhan dan mendukung proses bisnis yang jelas.',

            'tags' => [
                'Teknologi',
                'Bisnis',
                'Digital',
                'Efisiensi',
            ],
        ],


        'tips-mengelola-tim-yang-lebih-solid-dan-adaptif' => [
            'title' => 'Tips Mengelola Tim yang Lebih Solid dan Adaptif',
            'category' => 'Manajemen Tim',
            'date' => '14 Agustus 2024',
            'datetime' => '2024-08-14',
            'reading_time' => '4 menit baca',
            'author' => 'Tim Forstaff',
            'image' => 'images/article/ARTICLE-2.png',

            'lead' => 'Tim yang solid membutuhkan tujuan bersama, komunikasi yang terbuka, dan kemampuan untuk menyesuaikan diri terhadap perubahan.',

            'intro' => 'Perubahan dalam dunia kerja membuat kemampuan tim untuk bekerja sama dan beradaptasi menjadi semakin penting.',

            'sections' => [
                [
                    'title' => 'Pastikan tujuan tim dipahami bersama',
                    'content' => 'Tujuan yang jelas membantu anggota tim memahami prioritas dan kontribusi masing-masing.',
                ],
                [
                    'title' => 'Bangun komunikasi dua arah',
                    'content' => 'Berikan ruang untuk menyampaikan ide, masukan, dan kendala agar permasalahan dapat diselesaikan lebih cepat.',
                ],
                [
                    'title' => 'Evaluasi dan belajar bersama',
                    'content' => 'Gunakan pengalaman dari setiap proyek sebagai bahan evaluasi untuk memperbaiki cara kerja tim berikutnya.',
                ],
            ],

            'conclusion' => 'Tim yang adaptif tumbuh melalui tujuan yang jelas, komunikasi terbuka, serta kemauan untuk terus belajar.',

            'tags' => [
                'Tim',
                'Manajemen',
                'SDM',
                'Kolaborasi',
            ],
        ],


        'tren-dunia-kerja-yang-perlu-diperhatikan-di-tahun-ini' => [
            'title' => 'Tren Dunia Kerja yang Perlu Diperhatikan di Tahun Ini',
            'category' => 'Insight',
            'date' => '8 Agustus 2024',
            'datetime' => '2024-08-08',
            'reading_time' => '4 menit baca',
            'author' => 'Tim Forstaff',
            'image' => 'images/article/ARTICLE-3.png',

            'lead' => 'Perubahan teknologi dan pola kerja menghadirkan tren baru yang perlu diperhatikan perusahaan dalam mengelola organisasi dan karyawan.',

            'intro' => 'Dunia kerja terus berkembang mengikuti perubahan teknologi, kebutuhan bisnis, dan ekspektasi karyawan.',

            'sections' => [
                [
                    'title' => 'Fleksibilitas kerja semakin penting',
                    'content' => 'Perusahaan mulai mencari pola kerja yang tetap produktif sekaligus memberikan fleksibilitas kepada karyawan.',
                ],
                [
                    'title' => 'Pemanfaatan data semakin luas',
                    'content' => 'Data membantu organisasi memahami kondisi tenaga kerja dan mengambil keputusan dengan lebih terarah.',
                ],
                [
                    'title' => 'Pengembangan keterampilan terus dibutuhkan',
                    'content' => 'Perubahan teknologi membuat pembelajaran dan peningkatan kemampuan menjadi bagian penting dari pengembangan tim.',
                ],
            ],

            'conclusion' => 'Perusahaan yang memahami perubahan dunia kerja akan lebih siap menyesuaikan proses dan kebutuhan organisasinya.',

            'tags' => [
                'Tren Kerja',
                'HR',
                'Digital',
                'SDM',
            ],
        ],

    ];


    /*
    |--------------------------------------------------------------------------
    | ACTIVE ARTICLE
    |--------------------------------------------------------------------------
    */

    if (!isset($articles[$slug])) {
        abort(404);
    }

    $article = $articles[$slug];


    /*
    |--------------------------------------------------------------------------
    | RELATED ARTICLES
    |--------------------------------------------------------------------------
    */

    $relatedArticles = [];

    foreach ($articles as $relatedSlug => $related) {

        if ($relatedSlug === $slug) {
            continue;
        }

        $relatedArticles[] = array_merge(
            $related,
            [
                'slug' => $relatedSlug,
            ]
        );

        if (count($relatedArticles) === 3) {
            break;
        }
    }

@endphp


@section('title', $article['title'] . ' | Forstaff')

@section('meta', $article['lead'])

@section('meta_description', $article['lead'])


@section('content')

<main class="fs-blog-detail">


    {{-- =====================================================
         ARTICLE HEADER
    ====================================================== --}}

    <section class="fs-blog-detail-header">

        <div class="fs-blog-detail-header-container">


            {{-- BREADCRUMB --}}

            <nav
                class="fs-blog-detail-breadcrumb"
                aria-label="Breadcrumb"
            >

                <a href="{{ route('home') }}">
                    Home
                </a>

                <span aria-hidden="true">
                    ›
                </span>

                <a href="{{ route('blog.index') }}">
                    Blog
                </a>

                <span aria-hidden="true">
                    ›
                </span>

                <span aria-current="page">
                    Detail Artikel
                </span>

            </nav>



            {{-- =================================================
                 BACK + CATEGORY
            ================================================== --}}

            <div class="fs-blog-detail-topbar">


                <a
                    href="{{ route('blog.index') }}"
                    class="fs-blog-detail-back"
                >

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        aria-hidden="true"
                    >
                        <path
                            d="M19 12H5M10 7l-5 5 5 5"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>

                    <span>
                        Kembali ke Blog
                    </span>

                </a>


                <span class="fs-blog-detail-category">
                    {{ $article['category'] }}
                </span>


            </div>



            {{-- TITLE --}}

            <h1>
                {{ $article['title'] }}
            </h1>



            {{-- LEAD --}}

            <p class="fs-blog-detail-lead">
                {{ $article['lead'] }}
            </p>



            {{-- =================================================
                 META
            ================================================== --}}

            <div class="fs-blog-detail-meta">


                {{-- AUTHOR --}}

                <div class="fs-blog-detail-meta-item">

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        aria-hidden="true"
                    >
                        <circle
                            cx="12"
                            cy="8"
                            r="4"
                            stroke="currentColor"
                            stroke-width="1.7"
                        />

                        <path
                            d="M5 20c.8-4 3.2-6 7-6s6.2 2 7 6"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linecap="round"
                        />
                    </svg>

                    <span>
                        {{ $article['author'] }}
                    </span>

                </div>



                {{-- DATE --}}

                <div class="fs-blog-detail-meta-item">

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        aria-hidden="true"
                    >
                        <rect
                            x="4"
                            y="5"
                            width="16"
                            height="15"
                            rx="2"
                            stroke="currentColor"
                            stroke-width="1.7"
                        />

                        <path
                            d="M8 3v4M16 3v4M4 10h16"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linecap="round"
                        />
                    </svg>

                    <time datetime="{{ $article['datetime'] }}">
                        {{ $article['date'] }}
                    </time>

                </div>



                {{-- READING TIME --}}

                <div class="fs-blog-detail-meta-item">

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        aria-hidden="true"
                    >
                        <circle
                            cx="12"
                            cy="12"
                            r="9"
                            stroke="currentColor"
                            stroke-width="1.7"
                        />

                        <path
                            d="M12 7v5l3 2"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linecap="round"
                        />
                    </svg>

                    <span>
                        {{ $article['reading_time'] }}
                    </span>

                </div>


            </div>


        </div>

    </section>



    {{-- =====================================================
         ARTICLE CONTENT
    ====================================================== --}}

    <article class="fs-blog-detail-article">


        {{-- COVER --}}

        <div class="fs-blog-detail-cover">

            <img
                src="{{ asset($article['image']) }}"
                alt="{{ $article['title'] }}"
            >

        </div>



        {{-- ARTICLE BODY --}}

        <div class="fs-blog-detail-body">


            <p class="fs-blog-detail-intro">
                {{ $article['intro'] }}
            </p>



            @foreach ($article['sections'] as $index => $section)

                <section class="fs-blog-detail-section">

                    <h2>
                        {{ $index + 1 }}.
                        {{ $section['title'] }}
                    </h2>

                    <p>
                        {{ $section['content'] }}
                    </p>

                </section>

            @endforeach



            {{-- CONCLUSION --}}

            <section class="fs-blog-detail-conclusion">

                <h2>
                    Kesimpulan
                </h2>

                <p>
                    {{ $article['conclusion'] }}
                </p>

            </section>


        </div>



        {{-- =====================================================
             TAG + SHARE
        ====================================================== --}}

        <div class="fs-blog-detail-footer">


            {{-- TAGS --}}

            <div class="fs-blog-detail-tags">

                <span class="fs-blog-detail-tags-label">
                    Tag:
                </span>

                <div class="fs-blog-detail-tag-list">

                    @foreach ($article['tags'] as $tag)

                        <span class="fs-blog-detail-tag">
                            {{ $tag }}
                        </span>

                    @endforeach

                </div>

            </div>



            {{-- =================================================
                 SHARE

                 JavaScript:
                 - copy link
                 - WhatsApp
                 diaktifkan setelah view selesai.
            ================================================== --}}

            <div class="fs-blog-detail-share">

                <span class="fs-blog-detail-share-label">
                    Bagikan:
                </span>


                <div class="fs-blog-detail-share-list">


                    {{-- COPY LINK --}}

                    <button
                        type="button"
                        class="fs-blog-detail-share-button"
                        data-share="copy"
                        aria-label="Salin tautan artikel"
                    >

                        <img
                            src="{{ asset('images/share/link.jpg') }}"
                            alt=""
                            aria-hidden="true"
                        >

                        <span class="fs-blog-detail-share-text">
                            Salin Link
                        </span>

                    </button>



                    {{-- WHATSAPP --}}

                    <button
                        type="button"
                        class="fs-blog-detail-share-button"
                        data-share="whatsapp"
                        aria-label="Bagikan artikel melalui WhatsApp"
                    >

                        <img
                            src="{{ asset('images/share/whatsapp.png') }}"
                            alt=""
                            aria-hidden="true"
                        >

                        <span class="fs-blog-detail-share-text">
                            WhatsApp
                        </span>

                    </button>


                </div>


            </div>


        </div>


    </article>



    {{-- =====================================================
         RELATED ARTICLES
    ====================================================== --}}

    <section class="fs-blog-detail-related">

        <div class="fs-blog-detail-related-container">


            {{-- HEADING --}}

            <div class="fs-blog-detail-related-heading">

                <span aria-hidden="true"></span>

                <h2>
                    Artikel Terkait
                </h2>

            </div>



            {{-- GRID --}}

            <div class="fs-blog-detail-related-grid">


                @foreach ($relatedArticles as $related)


                    <article class="fs-blog-detail-related-card">


                        {{-- IMAGE --}}

                        <a
                            href="{{ route('blog.show', ['slug' => $related['slug']]) }}"
                            class="fs-blog-detail-related-image"
                            aria-label="Baca {{ $related['title'] }}"
                        >

                            <img
                                src="{{ asset($related['image']) }}"
                                alt="{{ $related['title'] }}"
                                loading="lazy"
                            >

                        </a>



                        {{-- CONTENT --}}

                        <div class="fs-blog-detail-related-content">


                            <span class="fs-blog-detail-related-category">
                                {{ $related['category'] }}
                            </span>


                            <h3>

                                <a
                                    href="{{ route('blog.show', ['slug' => $related['slug']]) }}"
                                >
                                    {{ $related['title'] }}
                                </a>

                            </h3>


                            <time datetime="{{ $related['datetime'] }}">
                                {{ $related['date'] }}
                            </time>


                        </div>


                    </article>


                @endforeach


            </div>


        </div>

    </section>


</main>

@endsection