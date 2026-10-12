@extends('layouts.app')

@section('title', 'Fitur Forstaff | Solusi HR Terintegrasi')

@section(
    'meta',
    'Temukan fitur Forstaff untuk membantu perusahaan mengelola data karyawan, absensi, payroll, cuti, approval, KPI, organisasi, pelatihan, dan kebutuhan HR lainnya.'
)

@section('content')

@php
    /*
    |--------------------------------------------------------------------------
    | ICONS
    |--------------------------------------------------------------------------
    */

    $icons = [

        'calendar' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <rect x="3" y="5" width="18" height="16" rx="2"></rect>
                <path d="M7 3v4M17 3v4M3 10h18"></path>
            </svg>
        ',

        'users' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <circle cx="9" cy="8" r="3"></circle>
                <circle cx="17" cy="9" r="2.5"></circle>
                <path d="M3 20c0-4 2.5-7 6-7s6 3 6 7"></path>
                <path d="M14 14c3-.2 6 2 6 6"></path>
            </svg>
        ',

        'wallet' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <rect x="3" y="5" width="18" height="15" rx="2"></rect>
                <path d="M3 9h18"></path>
                <path d="M14 13h5"></path>
                <path d="M16.5 10.5v5"></path>
            </svg>
        ',

        'clock' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <circle cx="12" cy="12" r="9"></circle>
                <path d="M12 7v6l4 2"></path>
            </svg>
        ',

        'approval' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <rect x="5" y="4" width="14" height="17" rx="2"></rect>
                <path d="M9 4V2h6v2"></path>
                <path d="m9 12 2 2 4-5"></path>
            </svg>
        ',

        'chart' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M4 20V10"></path>
                <path d="M10 20V5"></path>
                <path d="M16 20v-8"></path>
                <path d="M22 20V2"></path>
                <path d="m3 9 6-4 6 4 7-7"></path>
            </svg>
        ',

        'dashboard' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <circle cx="12" cy="12" r="9"></circle>
                <path d="M12 12V6"></path>
                <path d="m12 12 5 3"></path>
                <path d="M3 12h3M18 12h3"></path>
            </svg>
        ',

        'organization' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <rect x="9" y="3" width="6" height="5" rx="1"></rect>
                <rect x="3" y="16" width="6" height="5" rx="1"></rect>
                <rect x="15" y="16" width="6" height="5" rx="1"></rect>
                <path d="M12 8v4M6 12h12M6 12v4M18 12v4"></path>
            </svg>
        ',

        'education' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="m2 9 10-5 10 5-10 5L2 9Z"></path>
                <path d="M6 11v5c3 2 9 2 12 0v-5"></path>
                <path d="M22 9v6"></path>
            </svg>
        ',

        'shield' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M12 3 20 6v6c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6l8-3Z"></path>
                <path d="m9 12 2 2 4-5"></path>
            </svg>
        ',

        'gift' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <rect x="3" y="9" width="18" height="12" rx="2"></rect>
                <path d="M12 9v12M3 13h18"></path>
                <path d="M12 9H8a3 3 0 1 1 3-3c0 2 1 3 1 3Z"></path>
                <path d="M12 9h4a3 3 0 1 0-3-3c0 2-1 3-1 3Z"></path>
            </svg>
        ',

        'logout' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M14 5V3H5v18h9v-2"></path>
                <path d="M10 12h11"></path>
                <path d="m17 8 4 4-4 4"></path>
            </svg>
        ',

        'award' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <circle cx="12" cy="9" r="5"></circle>
                <path d="m8.5 13-2 8 5.5-3 5.5 3-2-8"></path>
            </svg>
        ',

        'workflow' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <rect x="3" y="3" width="6" height="5" rx="1"></rect>
                <rect x="15" y="16" width="6" height="5" rx="1"></rect>
                <path d="M9 5.5h5a3 3 0 0 1 3 3V11"></path>
                <path d="m14 9 3 3 3-3"></path>
                <path d="M15 18.5h-5a3 3 0 0 1-3-3V13"></path>
            </svg>
        ',

        'megaphone' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M4 10v4"></path>
                <path d="M7 9v6l10 4V5L7 9Z"></path>
                <path d="m8 15 2 5h3l-2-4"></path>
                <path d="M20 9v6"></path>
            </svg>
        ',

        'user-settings' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <circle cx="9" cy="8" r="3"></circle>
                <path d="M3 20c0-4 2.5-7 6-7 2 0 3.5.8 4.5 2"></path>
                <circle cx="17" cy="17" r="3"></circle>
                <path d="M17 12v2M17 20v2M12 17h2M20 17h2"></path>
            </svg>
        ',

        'activity' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <circle cx="12" cy="12" r="9"></circle>
                <path d="M12 7v5l4 2"></path>
                <path d="M7 3 4 6M17 3l3 3"></path>
            </svg>
        ',
    ];


    /*
    |--------------------------------------------------------------------------
    | FITUR UTAMA
    |--------------------------------------------------------------------------
    */

    $mainFeatures = [

        [
            'id' => 'attendance',
            'title' => 'Attendance',
            'icon' => 'calendar',
            'image' => 'attandence.png',

            'description' =>
                'Kelola absensi, jadwal kerja, shift, dan rekap kehadiran karyawan secara terpusat.',

            'points' => [
                'Pengelolaan data absensi karyawan',
                'Rangkuman dan detail absensi',
                'Pengaturan jadwal kerja',
                'Manajemen shift karyawan',
                'Pengelolaan hari libur',
                'Rekap dan laporan kehadiran',
            ],
        ],

        [
            'id' => 'employee',

            'title' => 'Employee Management',

            'icon' => 'users',

            'image' => 'employee.png',

            'description' =>
                'Kelola data karyawan, kontrak kerja, informasi pribadi, benefit, dan dokumen kepegawaian secara terpusat.',

            'points' => [
                'Data lengkap karyawan',
                'Manajemen kontrak staff',
                'Deskripsi pekerjaan',
                'Pengelolaan benefit staff',
                'Riwayat pendidikan dan pekerjaan',
                'Dokumen serta sertifikat staff',
            ],
        ],

        [
            'id' => 'payroll',

            'title' => 'Payroll & Salary',

            'icon' => 'wallet',

            'image' => 'salary.png',

            'description' =>
                'Kelola slip gaji, penerimaan, potongan, serta riwayat gaji karyawan secara lebih terstruktur.',

            'points' => [
                'Pembuatan slip gaji',
                'Komponen penerimaan gaji',
                'Komponen potongan gaji',
                'Perhitungan total gaji',
                'History gaji staff',
                'Template penerimaan dan potongan',
            ],
        ],

        [
            'id' => 'leave',

            'title' => 'Leave & Overtime',

            'icon' => 'clock',

            'image' => 'leave.png',

            'description' =>
                'Kelola cuti, izin, kuota cuti, lembur, serta jadwal kerja karyawan dengan proses yang lebih terstruktur.',

            'points' => [
                'Pengajuan cuti dan izin',
                'Pemantauan kuota cuti',
                'Manajemen jenis cuti dan izin',
                'Pengelolaan lembur',
                'Approval lembur',
                'Pengaturan shift kerja',
            ],
        ],

        [
            'id' => 'request',

            'title' => 'Request & Approval',

            'icon' => 'approval',

            'image' => 'request.png',

            'description' =>
                'Kelola berbagai pengajuan karyawan dengan proses konfirmasi dan persetujuan yang lebih terkontrol.',

            'points' => [
                'Pengajuan cuti dan izin',
                'Pengajuan lembur',
                'Pengajuan reimburse',
                'Pengajuan tugas keluar',
                'Konfirmasi dan penolakan',
                'Pemantauan status pengajuan',
            ],
        ],

        [
            'id' => 'kpi',

            'title' => 'KPI & Performance',

            'icon' => 'chart',

            'image' => 'kpi.png',

            'description' =>
                'Kelola KPI staff berdasarkan kategori, periode, dan pengaturan penilaian yang telah ditentukan perusahaan.',

            'points' => [
                'Pengelolaan data KPI staff',
                'Pengaturan KPI',
                'Kategori hasil KPI',
                'Periode penilaian KPI',
                'Pemantauan hasil KPI',
                'Riwayat performa staff',
            ],
        ],

        [
            'id' => 'dashboard',

            'title' => 'Dashboard & Reporting',

            'icon' => 'dashboard',

            'image' => 'dashboard_hr.png',

            'description' =>
                'Pantau ringkasan informasi HR, pengajuan, kehadiran, dan aktivitas karyawan melalui dashboard terpusat.',

            'points' => [
                'Ringkasan total staff aktif',
                'Ringkasan cuti dan izin',
                'Ringkasan reimburse',
                'Ringkasan overtime',
                'Grafik data kehadiran',
                'Jejak aktivitas pengguna',
            ],
        ],

        [
            'id' => 'organization',

            'title' => 'Organization & HR Management',

            'icon' => 'organization',

            'image' => 'organization.png',

            'description' =>
                'Kelola struktur organisasi, departemen, posisi, dan pembagian peran karyawan secara lebih terstruktur.',

            'points' => [
                'Bagan organisasi perusahaan',
                'Pengelolaan departemen',
                'Pengelolaan posisi',
                'Struktur organisasi terpusat',
                'Pembagian posisi karyawan',
                'Informasi organisasi perusahaan',
            ],
        ],

        [
            'id' => 'learning',

            'title' => 'Learning & Development',

            'icon' => 'education',

            'image' => 'learning.png',

            'description' =>
                'Kelola pengajuan, konfirmasi, dan aktivitas pengembangan serta pelatihan karyawan melalui Forstaff.',

            'points' => [
                'Pengajuan pelatihan staff',
                'Menunggu konfirmasi',
                'Konfirmasi pengajuan',
                'Penolakan pengajuan',
                'Detail pelatihan',
                'Pemantauan status pelatihan',
            ],
        ],
    ];


    /*
    |--------------------------------------------------------------------------
    | FITUR LAINNYA
    |--------------------------------------------------------------------------
    */

    $otherFeatures = [

        [
            'title' => 'Role & Permission',
            'icon' => 'shield',

            'description' =>
                'Atur role dan hak akses pengguna terhadap fitur Forstaff sesuai kebutuhan perusahaan.',
        ],

        [
            'title' => 'Employee Benefits',
            'icon' => 'gift',

            'description' =>
                'Kelola jenis benefit dan manfaat yang diterima masing-masing karyawan secara terpusat.',
        ],

        [
            'title' => 'Resignation Management',
            'icon' => 'logout',

            'description' =>
                'Kelola pengajuan resign, lihat detail pengajuan, serta lakukan proses penerimaan atau penolakan.',
        ],

        [
            'title' => 'Reward & Sanction',
            'icon' => 'award',

            'description' =>
                'Kelola data penghargaan dan sanksi sebagai bagian dari administrasi karyawan perusahaan.',
        ],

        [
            'title' => 'Company Policy & Workflow',
            'icon' => 'workflow',

            'description' =>
                'Kelola alur kerja serta aturan dan regulasi perusahaan secara lebih terorganisir.',
        ],

        [
            'title' => 'Announcements & News',
            'icon' => 'megaphone',

            'description' =>
                'Publikasikan pengumuman dan berita perusahaan kepada pengguna Forstaff melalui sistem.',
        ],

        [
            'title' => 'Employee Self-Service',
            'icon' => 'user-settings',

            'description' =>
                'Berikan akses kepada staff untuk mengelola informasi pribadi dan melihat data HR mereka sendiri.',
        ],

        [
            'title' => 'Activity Log & Monitoring',
            'icon' => 'activity',

            'description' =>
                'Pantau jejak aktivitas penggunaan sistem untuk membantu proses monitoring aktivitas pengguna.',
        ],
    ];
@endphp


{{-- =========================================================
    HERO
========================================================= --}}

<section class="fs-feature-hero">

    <div class="fs-feature-container">

        <div class="fs-feature-hero-grid">


            {{-- HERO CONTENT --}}

            <div class="fs-feature-hero-content">

                <nav
                    class="fs-feature-breadcrumb"
                    aria-label="Breadcrumb"
                >

                    <a href="{{ url('/') }}">
                        Home
                    </a>

                    <span aria-hidden="true">
                        ›
                    </span>

                    <span
                        class="is-current"
                        aria-current="page"
                    >
                        Fitur
                    </span>

                </nav>


                <h1>
                    Solusi Lengkap
                    <span>
                        untuk Setiap Kebutuhan HR
                    </span>
                </h1>


                <p class="fs-feature-hero-description">
                    Kelola berbagai aktivitas HR dalam satu platform
                    terintegrasi untuk membantu pekerjaan HR menjadi
                    lebih terstruktur dan efisien.
                </p>


                {{-- SEARCH --}}

                <div class="fs-feature-search">

                    <span
                        class="fs-feature-search-icon"
                        aria-hidden="true"
                    >

                        <svg viewBox="0 0 24 24">

                            <circle
                                cx="11"
                                cy="11"
                                r="7"
                            ></circle>

                            <path
                                d="m20 20-4-4"
                            ></path>

                        </svg>

                    </span>


                    <input
                        type="search"
                        id="featureSearch"
                        class="fs-feature-search-input"
                        placeholder="Cari fitur..."
                        autocomplete="off"
                        aria-label="Cari fitur Forstaff"
                    >

                </div>

            </div>


            {{-- HERO VISUAL --}}

            <div class="fs-feature-hero-visual">

                <div
                    class="fs-feature-hero-shape"
                    aria-hidden="true"
                ></div>


                <div class="fs-feature-hero-device">

                    <img
                        src="{{ asset('images/dashboard/LAPTOP.png') }}"
                        alt="Dashboard Forstaff pada laptop"
                        class="fs-feature-hero-laptop"
                    >


                    <img
                        src="{{ asset('images/dashboard/HP.png') }}"
                        alt="Dashboard Forstaff pada smartphone"
                        class="fs-feature-hero-phone"
                    >

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    FEATURE EXPLORER
    LANGSUNG SETELAH HERO + SEARCH
========================================================= --}}

<section
    class="fs-feature-explorer"
    id="fitur-utama"
>

    <div class="fs-feature-container">

        <div class="fs-feature-explorer-grid">


            {{-- =================================================
                SIDEBAR
            ================================================= --}}

            <aside
                class="fs-feature-sidebar"
                aria-label="Daftar fitur Forstaff"
            >

                <div class="fs-feature-sidebar-head">

                    <span class="fs-feature-sidebar-head-icon">

                        <svg
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >

                            <rect
                                x="3"
                                y="3"
                                width="7"
                                height="7"
                                rx="1"
                            ></rect>

                            <rect
                                x="14"
                                y="3"
                                width="7"
                                height="7"
                                rx="1"
                            ></rect>

                            <rect
                                x="3"
                                y="14"
                                width="7"
                                height="7"
                                rx="1"
                            ></rect>

                            <rect
                                x="14"
                                y="14"
                                width="7"
                                height="7"
                                rx="1"
                            ></rect>

                        </svg>

                    </span>


                    <span>
                        Semua Fitur
                    </span>


                    <span
                        class="fs-feature-sidebar-head-arrow"
                        aria-hidden="true"
                    >
                        →
                    </span>

                </div>


                <div
                    class="fs-feature-sidebar-list"
                    role="tablist"
                    aria-label="Pilih fitur"
                >

                    @foreach ($mainFeatures as $feature)

                        <button
                            type="button"

                            id="feature-tab-{{ $feature['id'] }}"

                            class="
                                fs-feature-tab
                                {{ $loop->first ? 'is-active' : '' }}
                            "

                            data-feature-target="{{ $feature['id'] }}"

                            data-feature-search-text="
                                {{ strtolower(
                                    $feature['title']
                                    . ' '
                                    . $feature['description']
                                    . ' '
                                    . implode(' ', $feature['points'])
                                ) }}
                            "

                            role="tab"

                            aria-selected="
                                {{ $loop->first ? 'true' : 'false' }}
                            "

                            aria-controls="
                                feature-panel-{{ $feature['id'] }}
                            "
                        >

                            <span class="fs-feature-tab-icon">

                                {!! $icons[$feature['icon']] !!}

                            </span>


                            <span class="fs-feature-tab-text">

                                {{ $feature['title'] }}

                            </span>

                        </button>

                    @endforeach

                </div>

            </aside>


            {{-- =================================================
                MAIN FEATURE PANEL
            ================================================= --}}

            <div class="fs-feature-content">

                @foreach ($mainFeatures as $feature)

                    <article

                        id="feature-panel-{{ $feature['id'] }}"

                        class="
                            fs-feature-panel
                            {{ $loop->first ? 'is-active' : '' }}
                        "

                        data-feature-panel="{{ $feature['id'] }}"

                        role="tabpanel"

                        aria-labelledby="
                            feature-tab-{{ $feature['id'] }}
                        "

                        @if (!$loop->first)
                            hidden
                        @endif
                    >

                        {{-- HEADER --}}

                        <header class="fs-feature-panel-header">

                            <h2>
                                {{ $feature['title'] }}
                            </h2>


                            <p>
                                {{ $feature['description'] }}
                            </p>

                        </header>


                        {{-- IMAGE --}}

                        <div class="fs-feature-preview">

                            <div
                                class="fs-feature-preview-bg"
                                aria-hidden="true"
                            >

                                <span
                                    class="
                                        fs-feature-preview-circle
                                        fs-circle-one
                                    "
                                ></span>

                                <span
                                    class="
                                        fs-feature-preview-circle
                                        fs-circle-two
                                    "
                                ></span>

                                <span
                                    class="fs-feature-preview-dot"
                                ></span>

                            </div>


                            <div
                                class="
                                    fs-feature-preview-image-wrap
                                "
                            >

                                <img
                                    src="{{ asset(
                                        'images/dashboard/'
                                        . $feature['image']
                                    ) }}"

                                    alt="
                                        Tampilan fitur
                                        {{ $feature['title'] }}
                                        Forstaff
                                    "

                                    class="
                                        fs-feature-preview-image
                                    "

                                    loading="
                                        {{ $loop->first
                                            ? 'eager'
                                            : 'lazy'
                                        }}
                                    "

                                    decoding="async"
                                >

                            </div>

                        </div>


                        {{-- POINTS --}}

                        <div class="fs-feature-panel-bottom">

                            <ul class="fs-feature-point-list">

                                @foreach (
                                    $feature['points']
                                    as $point
                                )

                                    <li>

                                        <span
                                            class="fs-feature-check"
                                            aria-hidden="true"
                                        >
                                            ✓
                                        </span>


                                        <span>
                                            {{ $point }}
                                        </span>

                                    </li>

                                @endforeach

                            </ul>


                            <a
                                href="#fitur-lainnya"
                                class="fs-feature-more-button"
                            >

                                Lihat Fitur Lainnya

                                <span aria-hidden="true">
                                    →
                                </span>

                            </a>

                        </div>

                    </article>

                @endforeach


                {{-- SEARCH EMPTY STATE --}}

                <div
                    class="fs-feature-search-empty"
                    id="featureSearchEmpty"
                    hidden
                >

                    <p>
                        Fitur yang Anda cari tidak ditemukan.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    FITUR LAINNYA
========================================================= --}}

<section
    class="fs-other-features"
    id="fitur-lainnya"
>

    <div class="fs-feature-container">


        <div class="fs-other-features-heading">

            <span>
                Lebih Banyak Kemudahan
            </span>


            <h2>
                Fitur Lainnya
            </h2>


            <p>
                Selain fitur utama, Forstaff juga menyediakan
                fungsi pendukung untuk membantu pengelolaan
                operasional HR dan informasi perusahaan.
            </p>

        </div>


        <div class="fs-other-feature-grid">

            @foreach ($otherFeatures as $feature)

                <article
                    class="fs-other-feature-card"

                    data-other-feature-card

                    data-feature-search-text="
                        {{ strtolower(
                            $feature['title']
                            . ' '
                            . $feature['description']
                        ) }}
                    "
                >

                    <div class="fs-other-feature-icon">

                        {!! $icons[$feature['icon']] !!}

                    </div>


                    <div class="fs-other-feature-content">

                        <h3>
                            {{ $feature['title'] }}
                        </h3>


                        <p>
                            {{ $feature['description'] }}
                        </p>

                    </div>

                </article>

            @endforeach

        </div>

    </div>

</section>

</section>

<section class="fs-feature-demo">
    <div class="fs-feature-container">

        <div class="fs-feature-demo-card">

            <div class="fs-feature-demo-image-wrap">
                <img
                    src="{{ asset('images/team/ria.png') }}"
                    alt="Tim Forstaff"
                    class="fs-feature-demo-image"
                    loading="lazy"
                >
            </div>

            <div class="fs-feature-demo-content">

                <h2>
                    Ingin tahu lebih banyak
                    <span>tentang cara kerja Forstaff?</span>
                </h2>

                <p>
                    Ajukan demo dan tim kami akan membantu Anda
                    memahami fitur Forstaff sesuai kebutuhan perusahaan.
                </p>

                <button
                    type="button"
                    class="fs-feature-demo-button"
                    data-bs-toggle="modal"
                    data-bs-target="#requestDemoModal"
                >
                    Request Demo
                    <span aria-hidden="true">→</span>
                </button>

            </div>

        </div>

    </div>
</section>
@endsection