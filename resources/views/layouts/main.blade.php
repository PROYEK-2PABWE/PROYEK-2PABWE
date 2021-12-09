<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/fontawesome-free/css/all.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/fontawesome-free/css/fontawesome.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <title>{{ $title }}</title>
</head>

<body>
    @include('partials.header')

    <div class="container">
        @yield('container')
    </div>

    @include('partials.footer')

    <script src="{{ asset('js/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
