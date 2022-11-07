@extends('layouts.template')
@section('title', 'lugares')
@section('content')
<style>
    .marcoFoto {
    overflow: hidden;
    }
    .marcoFoto img {
        transition: all .4s ease;
    }
    .marcoFoto img:hover {
        transform:scale(1.5) rotate(1deg);
        opacity:0.6;
    }
</style>
<div class="container mt-4 mb-3 pb-5">
    <div class="row">
        <div class="text-center mb-4">
            <div class="d-inline">
                <td><a href="{{ route('lugares.search_letter', 'b') }}" class="btn btn-secondary mt-1"><p class="h6">B</p></a></td>
                <td><a href="{{ route('lugares.search_letter', 'c') }}" class="btn btn-secondary mt-1"><p class="h6">C</p></a></td>
                <td><a href="{{ route('lugares.search_letter', 'd') }}" class="btn btn-secondary mt-1"><p class="h6">D</p></a></td>
                <td><a href="{{ route('lugares.search_letter', 'a') }}" class="btn btn-secondary mt-1"><p class="h6">A</p></a></td>
                <td><a href="{{ route('lugares.search_letter', 'e') }}" class="btn btn-secondary mt-1"><p class="h6">E</p></a></td>
                <td><a href="{{ route('lugares.search_letter', 'f') }}" class="btn btn-secondary mt-1"><p class="h6">F</p></a></td>
                <td><a href="{{ route('lugares.search_letter', 'g') }}" class="btn btn-secondary mt-1"><p class="h6">G</p></a></td>
                <td><a href="{{ route('lugares.search_letter', 'h') }}" class="btn btn-secondary mt-1"><p class="h6">H</p></a></td>
                <td><a href="{{ route('lugares.search_letter', 'i') }}" class="btn btn-secondary mt-1"><p class="h6">I</p></a></td>
              </div>
              <div class="d-inline">
                <td><a href="{{ route('lugares.search_letter', 'j') }}" class="btn btn-secondary mt-1"><p class="h6">J</p></a></td>
                <td><a href="{{ route('lugares.search_letter', 'k') }}" class="btn btn-secondary mt-1"><p class="h6">K</p></a></td>
                <td><a href="{{ route('lugares.search_letter', 'l') }}" class="btn btn-secondary mt-1"><p class="h6">L</p></a></td>
                <td><a href="{{ route('lugares.search_letter', 'm') }}" class="btn btn-secondary mt-1"><p class="h6">M</p></a></td>
                <td><a href="{{ route('lugares.search_letter', 'n') }}" class="btn btn-secondary mt-1"><p class="h6">N</p></a></td>
                <td><a href="{{ route('lugares.search_letter', 'ñ') }}" class="btn btn-secondary mt-1"><p class="h6">Ñ</p></a></td>
                <td><a href="{{ route('lugares.search_letter', 'o') }}" class="btn btn-secondary mt-1"><p class="h6">O</p></a></td>
                <td><a href="{{ route('lugares.search_letter', 'p') }}" class="btn btn-secondary mt-1"><p class="h6">P</p></a></td>
                <td><a href="{{ route('lugares.search_letter', 'q') }}" class="btn btn-secondary mt-1"><p class="h6">Q</p></a></td>
              </div>
              <div class="d-inline">
                <td><a href="{{ route('lugares.search_letter', 'r') }}" class="btn btn-secondary mt-1"><p class="h6">R</p></a></td>
                <td><a href="{{ route('lugares.search_letter', 's') }}" class="btn btn-secondary mt-1"><p class="h6">S</p></a></td>
                <td><a href="{{ route('lugares.search_letter', 't') }}" class="btn btn-secondary mt-1"><p class="h6">T</p></a></td>
                <td><a href="{{ route('lugares.search_letter', 'u') }}" class="btn btn-secondary mt-1"><p class="h6">U</p></a></td>
                <td><a href="{{ route('lugares.search_letter', 'v') }}" class="btn btn-secondary mt-1"><p class="h6">V</p></a></td>
                <td><a href="{{ route('lugares.search_letter', 'w') }}" class="btn btn-secondary mt-1"><p class="h6">W</p></a></td>
                <td><a href="{{ route('lugares.search_letter', 'y') }}" class="btn btn-secondary mt-1"><p class="h6">Y</p></a></td>
                <td><a href="{{ route('lugares.search_letter', 'x') }}" class="btn btn-secondary mt-1"><p class="h6">X</p></a></td>
                <td><a href="{{ route('lugares.search_letter', 'z') }}" class="btn btn-secondary mt-1"><p class="h6">Z</p></a></td>
              </div>
          </div>
        @if(!$lugar->isEmpty())
            @foreach ($lugar as $l)

            <div class="col-md-4" style="margin-bottom: 25px;">
                <div class="card">
                    <div class="marcoFoto">
                        <a href="{{ route('lugares.show',$l->id) }}">
                            @if ($l->imagen != null)
                                <img src="{{ asset('storage').'/'.$l->imagen }}" class="card-img-top" height="200px" alt="No hay imagen disponible"/>
                            @else
                                <img src="https://plantillasdememes.com/img/plantillas/imagen-no-disponible01601774755.jpg" class="card-img-top" height="200px" alt="No hay imagen disponible">
                            @endif
                            
                        </a>
                    </div>
                    
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ route('lugares.show',$l->id) }}">
                                {{ $l->nombre }}
                            </a>
                        </h5>
                        <!--<p class="card-text">{{ $l->descripcion}}</p>-->
                        <div class="card-footer">
                            <small class="text-muted">Publicado el: {{ $l->created_at}}</small>
                        </div>
                    </div>
                </div>
            </div>
            
            @endforeach     
        @else
            <p class="text-danger h2">No hay resultados para su busqueda</p>
            <p class="text-primary h3">Intente con otra busqueda</p>
        @endif
</div>
</div>

 
@endsection