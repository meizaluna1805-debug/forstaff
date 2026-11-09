@extends('layouts.app')

@section('title', 'Fitur Forstaff | Solusi HR Terintegrasi')

@section(
    'meta',
    'Temukan fitur Forstaff untuk membantu perusahaan mengelola data staff, absensi, cuti dan izin, lembur, reimburse, tugas keluar, slip gaji, serta kebutuhan operasional HR lainnya.'
)

@section('content')

@php

    /*
    |--------------------------------------------------------------------------
    | ICONS
    |--------------------------------------------------------------------------
    */

    $icons = [

        'staff' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <circle cx="9" cy="8" r="3"></circle>
                <circle cx="17" cy="9" r="2.5"></circle>
                <path d="M3 20c0-4 2.5-7 6-7s6 3 6 7"></path>
                <path d="M14 14c3-.2 6 2 6 6"></path>
            </svg>
        ',

        'attendance' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <rect x="3" y="5" width="18" height="16" rx="2"></rect>
                <path d="M7 3v4M17 3v4M3 10h18"></path>
                <path d="M8 15l2 2 5-5"></path>
            </svg>
        ',

        'leave' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                <path d="M8 3v4M16 3v4M4 10h16"></path>
                <path d="M8 14h3M8 17h5"></path>
            </svg>
        ',

        'overtime' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <circle cx="12" cy="12" r="9"></circle>
                <path d="M12 7v5l4 2"></path>
            </svg>
        ',

        'reimburse' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                <path d="M8 8h8M8 12h5M8 16h3"></path>
                <path d="M16 14v5M13.5 16.5h5"></path>
            </svg>
        ',

        'outside-duty' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M12 21s7-6.1 7-12a7 7 0 1 0-14 0c0 5.9 7 12 7 12Z"></path>
                <circle cx="12" cy="9" r="2.3"></circle>
            </svg>
        ',

        'payroll' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <rect x="3" y="5" width="18" height="15" rx="2"></rect>
                <path d="M3 9h18"></path>
                <path d="M14 13h5"></path>
                <path d="M16.5 10.5v5"></path>
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
            'id' => 'staff-management',
            'title' => 'Manajemen Staff',
            'icon' => 'staff',
            'image' => 'Manage Staff.webp',

            'description' =>
                'Kelola data karyawan secara terpusat, mulai dari informasi staff, posisi, kontrak, hingga status keaktifan.',

            'points' => [
                'Tambah dan kelola data staff',
                'Import data staff',
                'Download data staff',
                'Informasi posisi karyawan',
                'Informasi periode kontrak kerja',
                'Pantau status dan pembaruan data staff',
            ],
        ],

        [
            'id' => 'attendance',
            'title' => 'Absensi',
            'icon' => 'attendance',
            'image' => 'Absensi.webp',

            'description' =>
                'Pantau data kehadiran karyawan dengan informasi jam kerja, keterlambatan, dan status presensi yang terstruktur.',

            'points' => [
                'Riwayat tanggal kerja karyawan',
                'Pencatatan jam masuk',
                'Pencatatan jam pulang',
                'Informasi keterlambatan',
                'Rekap total jam kerja',
                'Status kehadiran dan akumulasi presensi',
            ],
        ],

        [
            'id' => 'leave',
            'title' => 'Cuti & Izin',
            'icon' => 'leave',
            'image' => 'Pengajuan Cuti.webp',

            'description' =>
                'Kelola proses cuti dan izin mulai dari data pengajuan, approval, kuota, hingga status pengajuan karyawan.',

            'points' => [
                'Data pengajuan cuti dan izin',
                'Approval cuti dan izin',
                'Pengelolaan kuota cuti dan izin',
                'Pengaturan jenis cuti dan izin',
                'Informasi periode dan durasi cuti',
                'Pantau status pengajuan',
            ],
        ],

        [
            'id' => 'overtime',
            'title' => 'Lembur',
            'icon' => 'overtime',
            'image' => 'Pengajuan Lembur.webp',

            'description' =>
                'Kelola lembur karyawan secara lebih terstruktur, termasuk approval, upah per jam, estimasi upah, dan pembayaran.',

            'points' => [
                'Pengelolaan data lembur',
                'Approval pengajuan lembur',
                'Pengaturan upah lembur per jam',
                'Perhitungan estimasi upah',
                'Pantau status dan pembayaran lembur',
                'Unduh data lembur',
            ],
        ],

        [
            'id' => 'reimburse',
            'title' => 'Reimburse',
            'icon' => 'reimburse',
            'image' => 'Pengajuan Reimburse.webp',

            'description' =>
                'Kelola pengajuan reimburse dengan informasi nominal, bukti, proses approval, dan status pembayaran dalam satu tampilan.',

            'points' => [
                'Pengelolaan data reimburse',
                'Approval pengajuan reimburse',
                'Pencatatan nominal reimburse',
                'Pemeriksaan bukti pengajuan',
                'Pantau status pengajuan',
                'Pantau status pembayaran',
            ],
        ],

        [
            'id' => 'outside-duty',
            'title' => 'Tugas Keluar',
            'icon' => 'outside-duty',
            'image' => 'Pengajuan Tugas Keluar.webp',

            'description' =>
                'Pantau aktivitas tugas keluar karyawan lengkap dengan tujuan, jarak tempuh, status proses, dan informasi pembayaran.',

            'points' => [
                'Data tugas keluar karyawan',
                'Informasi tanggal kegiatan',
                'Pencatatan tujuan tugas keluar',
                'Informasi jarak tempuh',
                'Pantau status pengajuan',
                'Informasi status pembayaran',
            ],
        ],

        [
            'id' => 'payroll',
            'title' => 'Slip Gaji',
            'icon' => 'payroll',
            'image' => 'Slip Gaji.webp',

            'description' =>
                'Kelola proses penggajian karyawan melalui data gaji, riwayat, template, status publikasi, dan informasi total gaji.',

            'points' => [
                'Pembuatan data gaji baru',
                'Daftar dan riwayat gaji',
                'Pengelolaan template gaji',
                'Preview template dalam PDF',
                'Pantau status Publish dan Draft',
                'Informasi total gaji setiap staff',
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

            </div>


            {{-- HERO VISUAL --}}
            <div class="fs-feature-device-area">

                <div
                    class="fs-feature-device-bg"
                    aria-hidden="true"
                ></div>


                <div class="fs-feature-device-wrap">

                    <img
                        src="{{ asset('images/dashboard/LAPTOP.webp') }}"
                        alt="Dashboard Forstaff pada laptop"
                        class="fs-feature-hero-laptop"
                    >


                    <img
                        src="{{ asset('images/dashboard/HP.webp') }}"
                        alt="Aplikasi mobile Forstaff"
                        class="fs-feature-hero-phone"
                    >

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    FEATURE EXPLORER
========================================================= --}}

<section
    class="fs-feature-explorer"
    id="fitur-utama"
>

    <div class="fs-feature-container">

        <div class="fs-feature-explorer-grid">

            {{-- SIDEBAR --}}
            <aside
                class="fs-feature-sidebar"
                aria-label="Daftar fitur Forstaff"
            >

                <div class="fs-feature-sidebar-head">

                    <span
                        class="fs-feature-sidebar-head-icon"
                        aria-hidden="true"
                    >
                        <svg viewBox="0 0 24 24">

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
                    aria-label="Pilih fitur Forstaff"
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

                            role="tab"

                            aria-selected="{{ $loop->first ? 'true' : 'false' }}"

                            aria-controls="feature-panel-{{ $feature['id'] }}"

                            tabindex="{{ $loop->first ? '0' : '-1' }}"
                        >

                            <span
                                class="fs-feature-tab-icon"
                                aria-hidden="true"
                            >
                                {!! $icons[$feature['icon']] !!}
                            </span>


                            <span class="fs-feature-tab-text">
                                {{ $feature['title'] }}
                            </span>

                        </button>

                    @endforeach

                </div>

            </aside>


            {{-- FEATURE CONTENT --}}
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

                        aria-labelledby="feature-tab-{{ $feature['id'] }}"

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


                        {{-- SCREENSHOT --}}
                        <div class="fs-feature-preview">

                            <div class="fs-feature-preview-image-wrap">

                                <img
                                    src="{{ asset(
                                        'images/dashboard/'
                                        . $feature['image']
                                    ) }}"

                                    alt="Tampilan fitur {{ $feature['title'] }} pada sistem Forstaff"

                                    class="fs-feature-preview-image"

                                    loading="lazy"

                                    decoding="async"
                                >

                            </div>

                        </div>


                        {{-- CHECKLIST --}}
                        <div class="fs-feature-panel-bottom">

                            <ul class="fs-feature-point-list">

                                @foreach ($feature['points'] as $point)

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

                        </div>

                    </article>

                @endforeach

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

            <span class="fs-other-features-eyebrow">
                FITUR PENDUKUNG
            </span>


            <h2>
                Fitur Lainnya
            </h2>


            <p>
                Selain fitur utama, Forstaff juga menyediakan fungsi pendukung
                untuk membantu pengelolaan operasional HR dan informasi perusahaan.
            </p>

        </div>


        <div class="fs-other-feature-grid">

            @foreach ($otherFeatures as $feature)

                <article class="fs-other-feature-card">

                    <div
                        class="fs-other-feature-icon"
                        aria-hidden="true"
                    >
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


{{-- =========================================================
    REQUEST DEMO
========================================================= --}}

<section class="fs-feature-demo">

    <div class="fs-feature-container">

        <div class="fs-feature-demo-card">

            <div class="fs-feature-demo-image-wrap">

                <img
                    src="{{ asset('images/team/ria.webp') }}"
                    alt="Tim Forstaff"
                    class="fs-feature-demo-image"
                    loading="lazy"
                    decoding="async"
                >

            </div>


            <div class="fs-feature-demo-content">

                <h2>
                    Ingin tahu lebih banyak
                    <span>
                        tentang cara kerja Forstaff?
                    </span>
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

                    <span aria-hidden="true">
                        →
                    </span>
                </button>

            </div>

        </div>

    </div>

</section>

@endsection