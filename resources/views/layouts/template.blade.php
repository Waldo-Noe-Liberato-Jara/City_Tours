<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('storage').'/logo/logo_pagina.png'}}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.2.0/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    <script src="{{ asset('fontawesome-6.1.1/js/all.js') }}"></script>
</head>
<body class="{{ auth()->user()->fondo }}">
    
    <header class="p-3 mb-3 border-bottom bg-secondary">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="{{ route('home.index') }}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="{{asset('storage').'/logo/logo_pagina.png'}}" class="borde-img-p" alt="mdo" width="32" height="32"><p class="h4">&nbsp;&nbsp;&nbsp;City Tours</p>
            </a>
    
            <ul class="ms-0 nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li class=""><a href="{{ route('lugares.index') }}" class="nav-link text-white">Lugares</a></li>
              @if(auth()->user()->rol_id == '1')
              <li class=""><a href="{{ route('admin.index') }}" class="nav-link text-white">Panel Administrativo</a></li>
              @else
              @endif
              <li class=""><a href="{{ route('home.acerca') }}" class="nav-link text-white">Acerca de</a></li>
            </ul>
    
            <form action="{{ route('lugares.search') }}" method="POST" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
              @csrf
              <input type="search" name="nombre" class="form-control text-primary" placeholder="Buscar">
            </form>
    
            <div class="dropdown text-end">
              <div href="#" class="d-block link-dark text-decoration-none dropdown-toggle Seleccionado" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                @if (auth()->user()->imagen != null)
                  <img src="{{ asset('storage').'/'.auth()->user()->imagen }}" alt="Imagen no disponible" width="45" height="50" class="rounded-circle border border-primary bg-secondary">
                @else
                  <img src="{{ asset('storage').'/users_profile_picture/imagen_null.jpg' }}" alt="Imagen no disponible" width="45" height="50" class="rounded-circle border border-danger bg-secondary">
                @endif

              </div>
              <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                <li><a class="dropdown-item" href="{{ route('auth.profile') }}">Perfil</a></li>
                <li>
                  <form action="{{ route('auth.updatebackground',auth()->user()->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @if (auth()->user()->value == 'Fondo Oscuro')
                    <button name="fondo" class="dropdown-item {{ auth()->user()->fondo }}" type="submit" role="switch" id="flexSwitchCheckDefault" value="{{ auth()->user()->value }}">{{ auth()->user()->value }} <i class="fa-solid fa-moon" style="color: white;"></i></button>
              
                    @else
                    <button name="fondo" class="dropdown-item {{ auth()->user()->fondo }}" type="submit" role="switch" id="flexSwitchCheckDefault" value="{{ auth()->user()->value }}">{{ auth()->user()->value }} <i class="fa-solid fa-sun" style="color: yellow;"></i></button>
                
                    @endif
                  </form>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('login.destroy') }}">Cerrar Sesión</a></li>
              </ul>
            </div>
          </div>
        </div>
      </header>
    <script src="{{ asset('bootstrap-5.2.0/js/bootstrap.bundle.min.js') }}"></script>
    @yield('content')
</body>
</html>