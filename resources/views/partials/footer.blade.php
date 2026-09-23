@php
    $footerGroups = [
        'PERUSAHAAN' => [
            ['label' => 'Tentang Kami', 'route' => 'about'],
            ['label' => 'Portofolio', 'route' => 'portfolio.index'],
            ['label' => 'Blog', 'route' => 'blog.index'],
            ['label' => 'Kontak', 'route' => 'contact'],
        ],
        'PRODUK' => [
            ['label' => 'Fitur', 'route' => 'features'],
            ['label' => 'Harga', 'route' => 'pricing'],
        ],
        'AKUN & LEGAL' => [
            ['label' => 'Login', 'route' => 'login'],
            ['label' => 'Register', 'route' => 'register'],
            ['label' => 'Privacy Policy', 'route' => 'privacy'],
            ['label' => 'Terms & Conditions', 'route' => 'terms'],
        ],
    ];
@endphp

<footer class="fs-footer">
    <div class="fs-container">
        <div class="fs-footer-grid">
            <div class="fs-footer-company">
                <a class="fs-brand" href="{{ url('/') }}" aria-label="Forstaff, kembali ke beranda">
                    <img src="{{ asset('images/forstaff-logo.png') }}" alt="" width="36" height="36">
                </a>
                <p>PT Guna Teknologi Nusantara</p>
                <ul class="fs-footer-contact">
                    <li>
                        <span aria-hidden="true">⌖</span>
                        <span>Jl. Contoh No. 123, Jakarta, Indonesia</span>
                    </li>
                    <li>
                        <span aria-hidden="true">☎</span>
                        <span>+62 812 3456 7890</span>
                    </li>
                    <li>
                        <span aria-hidden="true">✉</span>
                        <span>halo@forstaff.id</span>
                    </li>
                </ul>
            </div>

            @foreach ($footerGroups as $heading => $items)
                <div class="fs-footer-column">
                    <h2>{{ $heading }}</h2>
                    <ul>
                        @foreach ($items as $item)
                            <li>
                                @if (Route::has($item['route']))
                                    <a href="{{ route($item['route']) }}">{{ $item['label'] }}</a>
                                @else
                                    <span class="fs-footer-pending">{{ $item['label'] }}</span>
                                @endif
                            </li>
                        @endforeach

                        @if ($heading === 'PRODUK')
                            <li>
                                <button class="fs-footer-demo" type="button"
                                    data-bs-toggle="modal" data-bs-target="#requestDemoModal">
                                    Request Demo
                                </button>
                            </li>
                        @endif
                    </ul>
                </div>
            @endforeach
        </div>

        <div class="fs-footer-bottom">
            <small>© {{ date('Y') }} Forstaff / PT Guna Teknologi Nusantara.</small>
            <div class="fs-footer-social" aria-label="Media sosial Forstaff">
                <a href="#" aria-label="LinkedIn Forstaff">
                    <span aria-hidden="true">in</span>
                </a>

                <a href="#" aria-label="Instagram Forstaff">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <rect x="3" y="3" width="18" height="18" rx="5"></rect>
                        <circle cx="12" cy="12" r="4"></circle>
                        <circle class="fs-social-dot" cx="18" cy="6" r="1"></circle>
                    </svg>
                </a>

                <a href="#" aria-label="YouTube Forstaff">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.6 12 3.6 12 3.6s-7.5 0-9.4.5A3 3 0 0 0 .5 6.2 31 31 0 0 0 0 12a31 31 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.5 9.4.5 9.4.5s7.5 0 9.4-.5a3 3 0 0 0 2.1-2.1A31 31 0 0 0 24 12a31 31 0 0 0-.5-5.8ZM9.6 15.6V8.4l6.3 3.6-6.3 3.6Z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>