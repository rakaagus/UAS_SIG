<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peta Wilayah Indonesia & Peta Tematik | {{ $title }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/template/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/template/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template/responsive.css') }}">
    <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/template/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <style>
        #map {
            height: 500px; /* Atur tinggi sesuai kebutuhan */
            width: 100%; /* Atur lebar sesuai kebutuhan */
            border-radius: 10px
        }
    </style>
</head>
<body>

    @include('partials.header')
    @yield('content')
    @include('partials.footer')

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="{{ asset('js/template/jquery.min.js') }}"></script>
    <script src="{{ asset('js/template/popper.min.js') }}"></script>
    <script src="{{ asset('js/template/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/template/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/template/plugin.js') }}"></script>
    <script src="{{ asset('js/template/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/template/custom.js') }}"></script>

    @stack('scripts')
</body>
</html>
