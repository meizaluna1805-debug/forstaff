<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Forstaff')</title>
    <meta name="description" content="@yield('meta_description', 'Informasi tentang Forstaff.')">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('partials.navbar')

    <main id="main-content">
        @yield('content')
    </main>

    @include('components.footer-cta')
    @include('partials.footer')
    @include('components.request-demo-modal')
</body>
</html>