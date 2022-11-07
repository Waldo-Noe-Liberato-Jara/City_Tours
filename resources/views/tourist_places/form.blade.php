@extends('layouts.template')
@section('title', 'Lugares Turísticos')
@section('content')
<div class="jumbotron jumbotron-fluid mb-3">
    <div class="container">
        @if(isset($lugar))
            <h1 class="display-4 text-center">Editar Lugar</h1>
        @else
            <h1 class="display-4 text-center">Crear Lugar</h1>
        @endif

        @if(isset($lugar))
            <form class="lead" action="{{ route('lugares.update', $lugar->id) }}" method="POST" enctype="multipart/form-data">
                @method('put')
        @else
            <form class="lead" action="{{ route('lugares.store') }}" method="POST" enctype="multipart/form-data">
        @endif
                @csrf

                <div class="mb-1">
                    <label for="nombre" class="form-label">Nombre del lugar</label>
                    <input name="nombre" type="text" class="form-control" value="{{ old('nombre')?? @$lugar->nombre}}">
                </div>
                @error('nombre')
                <p class="text-danger fs-6 m-0 p-0">
                    <i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}
                </p>
                @enderror
            
                <div class="mb-1">
                    <label for="descripcion" class="form-label">Descripción del lugar</label>
                    <input name="descripcion" type="text" class="form-control" value="{{ old('descripcion')?? @$lugar->descripcion }}">
                </div>
                @error('descripcion')
                <p class="text-danger fs-6 m-0 p-0">
                    <i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}
                </p>
                @enderror
            
                <div class="mb-1">
                    <label for="ubicacion" class="form-label">Ubicación del lugar</label>
                    <input name="ubicacion" type="text" class="form-control" value="{{ old('ubicacion')?? @$lugar->ubicacion }}">
                </div>
                @error('ubicacion')
                <p class="text-danger fs-6 m-0 p-0">
                    <i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}
                </p>
                @enderror
            
                <div class="mb-1">
                    <label for="imagen" class="form-label">Imagen del lugar</label>
                    <input name="imagen" type="file" accept="image/png,image/jpeg" class="form-control">
                </div>
                @error('imagen')
                <p class="text-danger fs-6 m-0 p-0">
                    <i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}
                </p>
                @enderror
                

                @if(isset($lugar))
                <div class="d-flex">
                    <button type="submit" class="btn btn-success mt-2">Editar</button>
                    <a href="{{ route('admin.index') }}" class="btn btn-danger mt-2 ms-3">Cancelar</a>
                </div>
                @else
                <div class="d-flex">
                    <button type="submit" class="btn btn-success mt-2">Crear</button>
                    <a href="{{ route('admin.index') }}" class="btn btn-danger mt-2 ms-3">Cancelar</a>
                </div> 
                @endif
            </form>
    </div>
</div>
@endsection()