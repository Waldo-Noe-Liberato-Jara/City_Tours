<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="{{ asset('fontawesome-6.1.1/js/all.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.2.0/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('fontawesome-6.1.1/js/all.js') }}"></script>
    <link rel="icon" href="{{asset('storage').'/logo/logo_pagina.png'}}">
</head>
<body>

    <nav class="p-3 mb-0 border-bottom bg-secondary">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="{{ route('index') }}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img src="{{asset('storage').'/logo/logo_pagina.png'}}" class="borde-img-p" alt="mdo" width="32" height="32"><p class="h4">&nbsp;&nbsp;&nbsp;City Tours</p>
                </a>


                <div class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                </div>

    <script src="{{ asset('bootstrap-5.2.0/js/bootstrap.bundle.min.js') }}"></script>            
    @yield('content')
</body>
</html>