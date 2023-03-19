<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TrustyMed</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{asset('assets/stylesheets/bootstrap.css')}}">
    <script src="{{asset('assets/scripts/bootstrap.js')}}"></script>

    {{-- Custom Stylesheets --}}
    <link rel="stylesheet" href="{{asset('assets/stylesheets/styles.css')}}">
</head>
<body>
    <div id="app" class="bg-custom-white">
        <main>
            @include('layouts.flash')
            @yield('content')
        </main>
    </div>
</body>
</html>

