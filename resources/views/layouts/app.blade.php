<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/template/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/template/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template/responsive.css') }}">
    <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/template/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>
<body>

    @include('partials.header')
    @yield('content')
    @include('partials.footer')

    <script src="{{ asset('js/template/jquery.min.js') }}"></script>
    <script src="{{ asset('js/template/popper.min.js') }}"></script>
    <script src="{{ asset('js/template/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/template/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/template/plugin.js') }}"></script>
    <script src="{{ asset('js/template/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/template/custom.js') }}"></script>
</body>
</html>
