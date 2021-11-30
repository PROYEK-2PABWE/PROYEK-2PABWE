<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <title>Document</title>
    <script src="{{ asset('js/a076d05399.js') }}" crossorigin='anonymous'></script>
</head>

<body>
    @include('partials.header')

    <div class="container">
        @yield('container')
    </div>

    @include('partials.footer')

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
