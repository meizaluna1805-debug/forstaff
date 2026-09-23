@php
    $navItems = [
        ['label' => 'Home', 'route' => 'home'],
        ['label' => 'Tentang Kami', 'route' => 'about'],
        ['label' => 'Fitur', 'route' => 'features'],
        ['label' => 'Harga', 'route' => 'pricing'],
        ['label' => 'Portofolio', 'route' => 'portfolio.index'],
        ['label' => 'Blog', 'route' => 'blog.index'],
        ['label' => 'Kontak', 'route' => 'contact'],
    ];
@endphp

<header class="fs-header">
    <nav class="navbar navbar-expand-xl fs-navbar" aria-label="Navigasi utama">
        <div class="fs-container">
            <div class="fs-navbar-inner">
                <a class="fs-brand" href="{{ url('/') }}" aria-label="Forstaff, kembali ke beranda">
                    <img
                        src="{{ asset('images/forstaff-logo.png') }}"
                        alt=""
                        width="36"
                        height="36"
                    >
                </a>

                <button
                    class="navbar-toggler fs-navbar-toggle"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#fsMainNavigation"
                    aria-controls="fsMainNavigation"
                    aria-expanded="false"
                    aria-label="Buka menu navigasi"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse fs-navbar-collapse" id="fsMainNavigation">
                    <ul class="navbar-nav fs-nav-links">
                        @foreach ($navItems as $item)
                            <li class="nav-item">
                                @if (Route::has($item['route']))
                                    <a
                                        class="nav-link {{ request()->routeIs($item['route']) ? 'active' : '' }}"
                                        href="{{ route($item['route']) }}"
                                        @if (request()->routeIs($item['route'])) aria-current="page" @endif
                                    >
                                        {{ $item['label'] }}
                                    </a>
                                @else
                                    <span class="nav-link fs-nav-pending">{{ $item['label'] }}</span>
                                @endif
                            </li>
                        @endforeach
                    </ul>

                    <div class="fs-nav-actions">
                        @if (Route::has('login'))
                            <a class="fs-button fs-button-outline" href="{{ route('login') }}">Login</a>
                        @else
                            <span class="fs-button fs-button-outline fs-button-pending">Login</span>
                        @endif

                        @if (Route::has('register'))
                            <a class="fs-button fs-button-outline" href="{{ route('register') }}">Daftar</a>
                        @else
                            <span class="fs-button fs-button-outline fs-button-pending">Daftar</span>
                        @endif

                        <button
                            class="fs-button fs-button-primary"
                            type="button"
                            data-bs-toggle="modal"
                            data-bs-target="#requestDemoModal"
                        >
                            Request Demo <span aria-hidden="true">→</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>