@extends('layouts.template_index')
@section('title', 'registro')
@section('content')

        <div class="text-end">
            <a href="{{ route('login.index') }}" class="btn btn-outline-light me-2">Iniciar Sesión</a>
            <a href="{{ route('registro.index') }}" class="btn btn-warning">Registro</a>
        </div>
        </div>

        </div>
    </nav>

    <section class="mt-1 mb-1">
        <div class="container py-0">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="{{asset('storage').'/logo/logo_pagina.png'}}" width="483" class="img-fluid mt-3 borde-img-p" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <p class="h2 text-center text-light fw-bold borde-img-p"><b>Registro</b></p>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="remember" value="true">
                    <!-- Name input -->
                    <div class="form-outline mb-0">
                        <label class="form-label text-dark" for="name">Nombre</label>
                        <input name="name" type="text" class="form-control" value="{{old('name')}}"/>
                    </div>
                    @error('name')
                        <p class="text-danger fs-6 m-0 p-0">
                            <i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}
                        </p>
                    @enderror
            
                    <!-- Email input -->
                    <div class="form-outline mb-0">
                        <label class="form-label text-dark" for="email">Correo Electrónico</label>
                        <input name="email" type="email" class="form-control" value="{{old('email')}}"/>
                    </div>
                    @error('email')
                        <p class="text-danger fs-6 m-0 p-0">
                            <i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}
                        </p>
                    @enderror
        
                    <!-- Password input -->
                    <div class="form-outline mb-0">
                        <label class="form-label text-dark" for="password">Contraseña</label>
                        <input name="password" type="password" class="form-control" value="{{old('password')}}"/>
                    </div>
                    @error('password')
                        <p class="text-danger fs-6 m-0 p-0">
                            <i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}
                        </p>
                    @enderror

                    <!-- Password Confirmation input -->
                    <div class="form-outline mb-0">
                        <label class="form-label text-dark" for="password_confirmation">Validar Contraseña</label>
                        <input name="password_confirmation" type="password" class="form-control" value="{{old('password_confirmation')}}"/>
                    </div>
                    @error('password_confirmation')
                        <p class="text-danger fs-6  m-0 p-0">
                            <i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}
                        </p>
                    @enderror

                    <!-- Image input -->
                    <div class="form-outline mb-0">
                        <label class="form-label text-dark" for="imagen">Imagen</label>
                        <input name="imagen" type="file" class="form-control"/>
                    </div>
                    @error('imagen')
                        <p class="text-danger fs-6 m-0 p-0">
                            <i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}
                        </p>
                    @enderror
        
                    <div class="text-center mt-2">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Registrarse</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </section>
@endsection