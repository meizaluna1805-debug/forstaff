<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Forstaff')</title>
    <meta name="description" content="@yield('meta_description', 'Akun Forstaff.')">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('page_css')
</head>
<body>
    @yield('content')

    @yield('page_js')
</body>
</html>