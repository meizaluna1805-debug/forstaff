@extends('layouts.app')

@section('content')
    <main>
        {{-- SECTION 1: HEADER HARGA --}}
        <section class="fs-pricing-hero" aria-labelledby="fs-pricing-title">
            <div class="fs-container fs-pricing-hero-content">
                <span class="fs-pricing-hero-label">HARGA</span>

                <h1 id="fs-pricing-title">
                    Pilih Paket Forstaff<br>
                    yang Sesuai dengan Kebutuhan Anda
                </h1>

                <p>
                    Solusi fleksibel untuk berbagai skala bisnis. Semua harga
                    di bawah menggunakan biaya normal.
                </p>
            </div>
        </section>

        {{-- SECTION 2: KARTU HARGA --}}
        @php
            $pricingPackages = [
                [
                    'number' => 1,
                    'name' => 'Attendance',
                    'description' => 'Solusi absensi dan manajemen kehadiran karyawan.',
                    'price' => 'Rp 12.000',
                    'minimum' => 'Minimal 20 user (Rp 240.000/bulan)',
                    'server' => 'Biaya server: Rp 200.000/bulan',
                    'preview' => [
                        'Dashboard (Tingkat Kehadiran Harian)',
                        'Laporan Kehadiran Staff',
                        'Log Activity Staff',
                        'Dashboard (ringkas)',
                        'Data Staff (database karyawan dasar)',
                        'Jadwal Kerja (shift, WFH, flexible)',
                    ],
                    'more' => [
                        'Data Absensi',
                        'Role Akses (dasar)',
                        'System Setting',
                        'Dashboard',
                        'Data Absensi',
                        'Shift',
                        'Profile',
                    ],
                ],
                [
                    'number' => 2,
                    'name' => 'Attendance + Slip Gaji',
                    'description' => 'Solusi lengkap untuk absensi dan pengelolaan payroll.',
                    'price' => 'Rp 17.000',
                    'minimum' => 'Minimal 20 user (Rp 340.000/bulan)',
                    'server' => 'Biaya server: Rp 250.000/bulan',
                    'preview' => [
                        'Seluruh fitur Paket 1',
                        'Total Beban Gaji Bulanan (Payroll)',
                        'Analisis Biaya Lembur (Overtime Cost)',
                        'Kontrak Staff',
                        'Gaji (template gaji, cutoff, part-time)',
                        'Manajemen Lembur (perhitungan)',
                    ],
                    'more' => [
                        'Gaji (slip gaji)',
                        'Kontrak',
                    ],
                ],
                [
                    'number' => 3,
                    'name' => 'Full HRIS',
                    'description' => 'Solusi manajemen HR lengkap untuk pertumbuhan bisnis Anda.',
                    'price' => 'Rp 22.000',
                    'minimum' => 'Minimal 20 user (Rp 440.000/bulan)',
                    'server' => 'Biaya server: Rp 300.000/bulan',
                    'preview' => [
                        'Seluruh fitur Paket 2',
                        'Headcount & Turnover Rate',
                        'Peta Sebaran Karyawan',
                        'Manajemen SOP (Penghargaan, terintegrasi Pengumuman)',
                        'Manajemen Cuti dan Ijin',
                        'Pengajuan Reimburse',
                    ],
                    'more' => [
                        'Dashboard (full)',
                        'Data Reimbursement & Klaim',
                        'Laporan KPI / Penilaian Kinerja Global',
                        'Laporan Indisipliner (Red Flags)',
                        'Top & Bottom Performers',
                        'Profile Perusahaan',
                        'Struktur Organisasi',
                        'Sanksi',
                        'Aturan Perusahaan',
                        'Benefit Staff',
                        'Manajemen Reimburse',
                        'KPI',
                        'Pengumuman',
                        'Role Akses (role pendamping)',
                        'Manajemen Tugas Keluar',
                        'Notifikasi Template Message',
                        'Pengajuan Cuti & Ijin',
                        'Pengajuan Lembur',
                        'Pengajuan Tugas Keluar',
                        'Approval (Cuti/Izin, Reimburse, Lembur, Tugas Keluar)',
                        'Sanksi',
                        'Aturan Perusahaan',
                        'Benefit',
                        'KPI',
                        'Struktur Organisasi',
                    ],
                ],
            ];
        @endphp

        <section class="fs-pricing-plans" aria-labelledby="fs-pricing-plans-title">
            <div class="fs-container">
                <h2 id="fs-pricing-plans-title" class="visually-hidden">
                    Pilihan Paket Forstaff
                </h2>

                <div class="fs-pricing-grid">
                    @foreach ($pricingPackages as $package)
                        <article class="fs-pricing-card {{ $package['number'] === 2 ? 'fs-pricing-card-popular' : '' }}">
                            @if ($package['number'] === 2)
                                <span class="fs-pricing-popular-badge">
                                    ★ Paling Populer
                                </span>
                            @endif

                            <div class="fs-pricing-card-heading">
                                <span>Paket {{ $package['number'] }}</span>

                                <h3>{{ $package['name'] }}</h3>

                                <p class="fs-pricing-description">
                                    {{ $package['description'] }}
                                </p>

                                <p class="fs-pricing-price">
                                    {{ $package['price'] }}
                                </p>

                                <p class="fs-pricing-period">
                                    / user / bulan
                                </p>

                                <p class="fs-pricing-minimum">
                                    {{ $package['minimum'] }}
                                </p>

                                {{-- BIAYA SERVER PAKET --}}
                                <p class="fs-pricing-server">
                                    {{ $package['server'] }}
                                </p>
                            </div>

                            <div class="fs-pricing-features border-top pt-3 mt-3">
                                <h4 class="fs-pricing-features-title">
                                    Fitur utama:
                                </h4>

                                <ul class="list-unstyled">
                                    @foreach ($package['preview'] as $feature)
                                        <li>{{ $feature }}</li>
                                    @endforeach
                                </ul>

                                <details class="fs-pricing-more">
                                    <summary>
                                        + {{ count($package['more']) }} fitur lainnya
                                    </summary>

                                    <ul class="list-unstyled">
                                        @foreach ($package['more'] as $feature)
                                            <li>{{ $feature }}</li>
                                        @endforeach
                                    </ul>

                                    <button
                                        type="button"
                                        class="fs-pricing-more-close"
                                        onclick="this.closest('details').open = false"
                                    >
                                        ↑ Tutup
                                    </button>
                                </details>
                            </div>

                            <div class="fs-pricing-actions">
                               <button
                                    class="fs-pricing-buy"
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#buyModal"
                                    data-buy-package="{{ $package['number'] }}"
                                >
                                    Beli Sekarang
                                </button>

                                {{-- Menuju halaman Fitur --}}
                                <a
                                    class="fs-pricing-detail-link"
                                    href="{{ url('/fitur') }}"
                                >
                                    Lihat Detail Fitur →
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- SECTION 3: KONSULTASI PAKET --}}
        <section
            class="fs-pricing-consultation"
            aria-labelledby="fs-pricing-consultation-title"
        >
            <div class="fs-container">
                <div class="fs-pricing-consultation-box">
                    <span class="fs-pricing-consultation-icon" aria-hidden="true">
                        <svg
                            width="30"
                            height="30"
                            viewBox="0 0 24 24"
                            fill="none"
                            style="width:30px;height:30px;flex:none;color:#194A97"
                        >
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.08 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.68 2.81a2 2 0 0 1-.45 2.11L8.04 9.91a16 16 0 0 0 6.05 6.05l1.27-1.27a2 2 0 0 1 2.11-.45c.91.32 1.85.55 2.81.68A2 2 0 0 1 22 16.92Z"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </span>

                    <div class="fs-pricing-consultation-text">
                        <h2 id="fs-pricing-consultation-title">
                            Butuh konsultasi untuk menentukan paket yang sesuai?
                        </h2>

                        <p>Tim kami siap membantu Anda.</p>
                    </div>

                    <a
                        class="fs-pricing-consultation-button"
                        href="{{ Route::has('contact') ? route('contact') : url('/kontak') }}"
                    >
                        Hubungi Kami
                        <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </section>

        {{-- SECTION 4: PERTANYAAN YANG SERING DIAJUKAN --}}
        @php
            $pricingFaqs = [
                [
                    'question' => 'Apakah harga sudah termasuk pajak?',
                    'answer' => 'Untuk memastikan rincian pajak pada paket yang Anda pilih, silakan hubungi tim Forstaff.',
                ],
                [
                    'question' => 'Apakah ada biaya tambahan?',
                    'answer' => 'Informasi mengenai kemungkinan biaya tambahan dapat dikonfirmasi kepada tim Forstaff sebelum Anda memilih paket.',
                ],
                [
                    'question' => 'Apakah bisa mencoba gratis?',
                    'answer' => 'Silakan hubungi tim Forstaff untuk mengetahui ketersediaan uji coba pada paket yang Anda inginkan.',
                ],
                [
                    'question' => 'Bagaimana cara pembayaran?',
                    'answer' => 'Tim Forstaff dapat menjelaskan pilihan dan proses pembayaran yang tersedia saat Anda menghubungi kami.',
                ],
                [
                    'question' => 'Apakah ada minimal jangka panjang?',
                    'answer' => 'Silakan konfirmasi ketentuan jangka waktu penggunaan paket kepada tim Forstaff sebelum melakukan pembelian.',
                ],
                [
                    'question' => 'Apakah tersedia demo sebelum membeli?',
                    'answer' => 'Anda dapat mengajukan demo melalui tombol Request Demo. Formulir permintaan demo akan muncul di halaman ini.',
                ],
            ];
        @endphp

        <section class="fs-pricing-faq" aria-labelledby="fs-pricing-faq-title">
            <div class="fs-container">
                <h2 id="fs-pricing-faq-title">
                    Pertanyaan yang Sering Diajukan
                </h2>

                <div class="fs-pricing-faq-list">
                    @foreach ($pricingFaqs as $faq)
                        <details class="fs-pricing-faq-item">
                            <summary>
                                <span>{{ $faq['question'] }}</span>

                                <span
                                    class="fs-pricing-faq-plus"
                                    aria-hidden="true"
                                ></span>
                            </summary>

                            <p>{{ $faq['answer'] }}</p>
                        </details>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
