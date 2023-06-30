<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style-main.css') }}">
    <title>Bitemap</title>
    @yield('homepage-style')
    @yield('search-style')
    @yield('vendorDetail-style')
    @yield('profile-style')
    @yield('editProfile-style')
    @yield('favorite-style')
    @yield('category-style')
    @yield('about-style')
</head>
<body>
    @include('partial.navbar')

    @yield('main-container')

    @include('partial.footer')

    @yield('script')
</body>
</html>