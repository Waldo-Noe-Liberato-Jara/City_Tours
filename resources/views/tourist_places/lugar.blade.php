@extends('layouts.template')
@section('title', 'Lugar')
@section('content')

<div class="jumbotron jumbotron-fluid pb-5">
    <div class="container">
        <h1 class="display-4">{{ $lugar->nombre }}</h1>
        <p class="lead">{{ $lugar->descripcion }}</p>
            <hr class="my-4">
        <p><b>Ubicación:</b> {{ $lugar->ubicacion }}</p>
        <p class="lead">
            @if ($lugar->imagen != null)
            <img class="card-img-top" src="{{ asset('storage').'/'.$lugar->imagen }}" alt="No hay imagen disponible">
            @else
                <img src="https://plantillasdememes.com/img/plantillas/imagen-no-disponible01601774755.jpg" width="345" height="350" class="card-img-top" alt="No hay imagen disponible">
            @endif
            
        </p>
    </div>
</div>

@endsection()