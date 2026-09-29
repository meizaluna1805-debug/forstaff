@extends('layouts.auth')

@section('title', 'Daftar Akun - Forstaff')
@section('meta_description', 'Daftar akun Forstaff.')
@section('page_css')
    @vite('resources/css/pages/register.css')
@endsection

@section('content')
    <main class="fs-register-page">
        <a class="fs-register-back" href="{{ url('/') }}">
            ← Kembali ke Website
        </a>

        <div class="fs-register-card">
            <div class="fs-register-brand">
                <img
                    src="{{ asset('images/forstaff-logo.png') }}"
                    alt="Forstaff"
                    
                >
            </div>

            <div class="fs-register-heading">
                <h1>Daftar Akun</h1>
                <p>Lengkapi informasi berikut untuk membuat akun Forstaff.</p>
            </div>

            {{-- Tampilan formulir dahulu; proses pendaftaran dipasang pada tahap backend. --}}
            <form class="fs-register-form" id="registerForm">
                <div class="fs-register-field">
                    <label for="registerName">Nama Lengkap</label>
                    <input
                        id="registerName"
                        name="name"
                        type="text"
                        autocomplete="name"
                        placeholder="Masukkan nama lengkap"
                        required
                    >
                </div>

                <div class="fs-register-field">
                    <label for="registerEmail">Email</label>
                    <input
                        id="registerEmail"
                        name="email"
                        type="email"
                        autocomplete="email"
                        placeholder="Masukkan alamat email"
                        required
                    >
                </div>

                <div class="fs-register-field">
                    <label for="registerPhone">No. WhatsApp / Telepon</label>
                    <input
                        id="registerPhone"
                        name="phone"
                        type="tel"
                        autocomplete="tel"
                        placeholder="Masukkan nomor WhatsApp"
                        required
                    >
                </div>

                <div class="fs-register-field">
                    <label for="registerPassword">Password</label>
                    <input
                        id="registerPassword"
                        name="password"
                        type="password"
                        autocomplete="new-password"
                        placeholder="Masukkan password"
                        required
                    >
                </div>

                <div class="fs-register-field">
                    <label for="registerPasswordConfirmation">Konfirmasi Password</label>
                    <input
                        id="registerPasswordConfirmation"
                        name="password_confirmation"
                        type="password"
                        autocomplete="new-password"
                        placeholder="Ulangi password"
                        required
                    >
                </div>

                <button class="fs-register-submit" type="button">
                    Daftar Sekarang
                </button>
            </form>

            <div class="fs-register-divider"><span>atau daftar dengan</span></div>

            {{-- Integrasi Google dipasang setelah alur autentikasi disiapkan. --}}
            <button
                class="fs-register-google"
                type="button"
                aria-label="Daftar dengan Google"
                title="Daftar dengan Google"
            >
                <svg width="22" height="22" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill="#4285F4" d="M21.6 12.23c0-.71-.06-1.39-.18-2.05H12v3.86h5.38a4.6 4.6 0 0 1-2 3.02v2.51h3.24c1.9-1.75 2.98-4.32 2.98-7.34Z"/>
                    <path fill="#34A853" d="M12 22c2.7 0 4.96-.9 6.62-2.43l-3.24-2.51c-.9.6-2.04.96-3.38.96-2.6 0-4.8-1.76-5.59-4.13H3.07v2.58A10 10 0 0 0 12 22Z"/>
                    <path fill="#FBBC05" d="M6.41 13.89A6.02 6.02 0 0 1 6.1 12c0-.66.11-1.3.31-1.89V7.53H3.07A10 10 0 0 0 2 12c0 1.61.39 3.13 1.07 4.47l3.34-2.58Z"/>
                    <path fill="#EA4335" d="M12 5.98c1.47 0 2.79.5 3.82 1.5l2.87-2.87A9.58 9.58 0 0 0 12 2a10 10 0 0 0-8.93 5.53l3.34 2.58c.79-2.37 2.99-4.13 5.59-4.13Z"/>
                </svg>
            </button>

            <p class="fs-register-login">
                Sudah punya akun?
                @if (Route::has('login'))
                    <a href="{{ route('login') }}">Login sekarang</a>
                @else
                    <span>Login sekarang</span>
                @endif
            </p>
        </div>
    </main>
@endsection