<div
    class="modal fade fs-request-demo"
    id="requestDemoModal"
    tabindex="-1"
    aria-labelledby="requestDemoModalTitle"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered fs-request-demo-dialog">
        <div class="modal-content fs-demo-modal fs-request-demo-content">

            {{-- PANEL KIRI: INFORMASI DAN GAMBAR DEVICES --}}
            <div class="fs-request-demo-panel">
                <div class="fs-request-demo-panel-copy">
                    <h3>Kelola SDM <br>Lebih Mudah <br>Bersama Forstaff</h3>
                    <p>
                        Kenali fitur Forstaff dan temukan solusi yang sesuai
                        dengan kebutuhan tim Anda.
                    </p>
                </div>

                <img
                    class="fs-request-demo-devices"
                    src="{{ asset('images/request-demo/devices.png') }}"
                    alt="Tampilan Forstaff pada laptop dan ponsel"
                >
            </div>

            {{-- PANEL KANAN: FORM REQUEST DEMO --}}
            <div class="fs-request-demo-main">
                <div class="fs-request-demo-top">
                    <div class="fs-request-demo-brand">
                        <img src="{{ asset('images/forstaff-logo.png') }}" alt="Forstaff">
                    </div>

                    <button
                        type="button"
                        class="btn-close fs-request-demo-close"
                        data-bs-dismiss="modal"
                        aria-label="Tutup pop-up Request Demo"
                    ></button>
                </div>

                <h2 id="requestDemoModalTitle">Ajukan Request Demo</h2>

                <p class="fs-request-demo-intro">
                    Isi formulir berikut dan tim kami akan menghubungi Anda
                    untuk menjadwalkan sesi demo.
                </p>

                <form id="requestDemoForm" class="fs-request-demo-form">
                    <div class="fs-request-demo-field">
                        <label for="demoFullName">
                            Nama Lengkap <span aria-hidden="true">*</span>
                        </label>
                        <input
                            id="demoFullName"
                            name="full_name"
                            type="text"
                            autocomplete="name"
                            placeholder="Masukkan nama Anda"
                            required
                        >
                    </div>

                    <div class="fs-request-demo-field">
                        <label for="demoCompanyName">
                            Nama Perusahaan <span aria-hidden="true">*</span>
                        </label>
                        <input
                            id="demoCompanyName"
                            name="company_name"
                            type="text"
                            autocomplete="organization"
                            placeholder="Masukkan nama perusahaan"
                            required
                        >
                    </div>

                    <div class="fs-request-demo-field">
                        <label for="demoEmail">
                            Email <span aria-hidden="true">*</span>
                        </label>
                        <input
                            id="demoEmail"
                            name="email"
                            type="email"
                            autocomplete="email"
                            placeholder="nama@email.com"
                            required
                        >
                    </div>

                    <div class="fs-request-demo-field">
                        <label for="demoPhone">
                            No. WhatsApp / Telepon <span aria-hidden="true">*</span>
                        </label>
                        <input
                            id="demoPhone"
                            name="phone"
                            type="tel"
                            autocomplete="tel"
                            placeholder="Contoh: 0812 3456 7890"
                            required
                        >
                    </div>

                    {{-- Jumlah karyawan diisi sendiri --}}
                    <div class="fs-request-demo-field fs-request-demo-field-wide">
                        <label for="demoEmployeeCount">Jumlah Karyawan</label>
                        <input
                            id="demoEmployeeCount"
                            name="employee_count"
                            type="number"
                            min="1"
                            inputmode="numeric"
                            placeholder="Contoh: 25"
                        >
                    </div>

                    {{-- Pilihan kebutuhan mengikuti paket Forstaff yang sudah ada --}}
                    <div class="fs-request-demo-field fs-request-demo-field-wide">
                        <label for="demoFocus">Kebutuhan / Fokus Demo</label>
                        <select id="demoFocus" name="demo_focus">
                            <option value="" selected disabled>Pilih kebutuhan Anda</option>
                            <option value="attendance">Absensi dan kehadiran karyawan</option>
                            <option value="attendance_slip_gaji">Absensi dan slip gaji</option>
                            <option value="full_hris">Manajemen HR lengkap (Full HRIS)</option>
                            <option value="konsultasi">Belum yakin, ingin konsultasi</option>
                        </select>
                    </div>

                    <div class="fs-request-demo-field fs-request-demo-field-wide">
                        <label for="demoNotes">Catatan Tambahan</label>
                        <textarea
                            id="demoNotes"
                            name="notes"
                            rows="3"
                            placeholder="Tuliskan informasi tambahan (opsional)..."
                        ></textarea>
                    </div>

                    {{--
                        Widget Google reCAPTCHA asli dipasang di sini
                        saat integrasi frontend dan backend dilakukan.
                    --}}

                    <button
                        class="fs-request-demo-submit fs-request-demo-field-wide"
                        type="button"
                        disabled
                    >
                        Kirim Request Demo <span aria-hidden="true">→</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>