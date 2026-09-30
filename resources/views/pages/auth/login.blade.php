@extends('layouts.auth')

@section('title', 'Login - Forstaff')
@section('meta_description', 'Masuk ke akun Forstaff Anda.')

@section('page_css')
    @vite('resources/css/pages/register.css')
@endsection

@section('content')
    <main class="fs-register-page">
        {{-- TAUTAN KEMBALI KE WEBSITE --}}
        <a class="fs-register-back" href="{{ url('/') }}">
            ← Kembali ke Website
        </a>

        {{-- KARTU LOGIN --}}
        <div class="fs-register-card">
            <div class="fs-register-brand">
                <img
                    src="{{ asset('images/forstaff-logo.png') }}"
                    alt="Forstaff"
                >
            </div>

            <div class="fs-register-heading">
                <h1>Masuk ke Akun Anda</h1>
                <p>Masuk untuk melanjutkan pengelolaan SDM Anda.</p>
            </div>

            {{-- FORM LOGIN — BELUM TERHUBUNG KE BACKEND --}}
            <form
                class="fs-register-form"
                id="loginForm"
                onsubmit="event.preventDefault()"
            >
                <div class="fs-register-field">
                    <label for="loginEmail">Email</label>
                    <input
                        id="loginEmail"
                        name="email"
                        type="email"
                        autocomplete="username"
                        placeholder="nama@email.com"
                        required
                    >
                </div>

                <div class="fs-register-field">
                    <label for="loginPassword">Password</label>

                    <div class="position-relative">
                        <input
                            class="pe-5"
                            id="loginPassword"
                            name="password"
                            type="password"
                            autocomplete="current-password"
                            placeholder="Masukkan password"
                            required
                        >

                        <button
                            class="position-absolute top-0 end-0 h-100 px-2 border-0 bg-transparent"
                            id="loginPasswordToggle"
                            type="button"
                            aria-label="Tampilkan password"
                            aria-controls="loginPassword"
                            aria-pressed="false"
                        >
                            <svg
                                width="18"
                                height="18"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="#63769b"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                aria-hidden="true"
                            >
                                <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z"/>
                                <circle cx="12" cy="12" r="3"/>
                                <path id="loginPasswordSlash" d="m3 3 18 18"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <button class="fs-register-submit" type="button">
                    Login
                </button>
            </form>

            {{-- GOOGLE --}}
            <div class="fs-register-divider">
                <span>atau masuk dengan</span>
            </div>

            <button
                class="fs-register-google"
                type="button"
                aria-label="Masuk dengan Google"
                title="Masuk dengan Google"
            >
                <svg
                    width="22"
                    height="22"
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                >
                    <path
                        fill="#4285F4"
                        d="M21.6 12.23c0-.71-.06-1.39-.18-2.05H12v3.86h5.38a4.6 4.6 0 0 1-2 3.02v2.51h3.24c1.9-1.75 2.98-4.32 2.98-7.34Z"
                    />
                    <path
                        fill="#34A853"
                        d="M12 22c2.7 0 4.96-.9 6.62-2.43l-3.24-2.51c-.9.6-2.04.96-3.38.96-2.6 0-4.8-1.76-5.59-4.13H3.07v2.58A10 10 0 0 0 12 22Z"
                    />
                    <path
                        fill="#FBBC05"
                        d="M6.41 13.89A6.02 6.02 0 0 1 6.1 12c0-.66.11-1.3.31-1.89V7.53H3.07A10 10 0 0 0 2 12c0 1.61.39 3.13 1.07 4.47l3.34-2.58Z"
                    />
                    <path
                        fill="#EA4335"
                        d="M12 5.98c1.47 0 2.79.5 3.82 1.5l2.87-2.87A9.58 9.58 0 0 0 12 2a10 10 0 0 0-8.93 5.53l3.34 2.58c.79-2.37 2.99-4.13 5.59-4.13Z"
                    />
                </svg>
            </button>

            {{-- TAUTAN KE REGISTER --}}
            <p class="fs-register-login">
                Belum punya akun?
                <a href="{{ route('register') }}">Daftar sekarang</a>
            </p>
        </div>
    </main>
@endsection

@section('page_js')
    <script>
        // LOGIN — TAMPILKAN / SEMBUNYIKAN PASSWORD
        (() => {
            const input = document.getElementById('loginPassword');
            const toggle = document.getElementById('loginPasswordToggle');
            const slash = document.getElementById('loginPasswordSlash');

            if (!input || !toggle || !slash) return;

            toggle.addEventListener('click', () => {
                const showPassword = input.type === 'password';

                input.type = showPassword ? 'text' : 'password';

                toggle.setAttribute('aria-pressed', String(showPassword));
                toggle.setAttribute(
                    'aria-label',
                    showPassword ? 'Sembunyikan password' : 'Tampilkan password'
                );

                slash.style.display = showPassword ? 'none' : '';
            });
        })();
    </script>
@endsection