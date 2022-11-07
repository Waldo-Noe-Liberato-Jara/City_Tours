@extends('layouts.template_index')
@section('title', 'login')
@section('content')

  <div class="text-end">
    <a href="{{ route('login.index') }}" class="btn btn-warning me-2">Iniciar Sesión</a>
    <a href="{{ route('registro.index') }}" class="btn btn-outline-light">Registro</a>
  </div>
  </div>

  </div>
</nav>

<section class="m-1">
  <div class="container py-0">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="{{asset('storage').'/logo/logo_pagina.png'}}" width="483" class="img-fluid mt-3 borde-img-p" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <p class="h2 text-center text-light fw-bold borde-img-p"><b>Inicio de Sesión</b></p>
        <form action="" method="POST">
          @csrf
          <!-- Email input -->
          <div class="form-outline mb-2">
            <label class="form-label" for="name">Correo Electrónico</label>
            <input name="name" type="text" class="form-control form-control-lg" value="{{ old('name') }}"/>
          </div>
          @error('name')
          <p class="text-danger fs-6 m-0 p-0">
            <i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}
          </p>
          @enderror
          <!-- Password input -->
          <div class="form-outline mb-2">
            <label class="form-label" for="password">Contraseña</label>
            <input name="password" type="password" class="form-control form-control-lg" value="{{ old('password') }}"/>
          </div>
          @error('password')
          <p class="text-danger fs-6 m-0 p-0">
            <i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}
          </p>
          @enderror
          @error('message')
          <p class="text-danger fs-6 m-0 p-0">
            <i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}
          </p>
          @enderror

          <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Iniciar Sesión</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection