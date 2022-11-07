@extends('layouts.template')
@section('title', 'admin')
@section('content')

<div class="container my-5">
    <p class="h4 p-2 text-primary text-center"><b>Bienvenido {{auth()->user()->name}}</b></p>
</div>

<div class="container pb-5">
    <div class="card">
        <div class="card-header">
            <p class="h5 text-primary text-center">TABLA DE LUGARES</p>
        </div>

        <div class="card-body table-responsive">
            <table class="table align-middle table-dark table-hover">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Ubicación</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($lugar as $l)
            
                    <tr>
                        <td>
                            <div class="descripcion">
                                {{$l->nombre}}
                            </div>
                        </td>
                        <td>
                            <div class="descripcion">
                                {{$l->descripcion}}
                            </div>
                        </td>
                        <td>
                            <div class="descripcion">
                                {{$l->ubicacion}}
                            </div>
                        </td>
                        <td><a href="{{ route('lugares.edit', $l->id) }}" class="btn btn-success p-1">Editar</a></td>
                        <td>
                            <form action="{{ route('lugares.destroy',$l->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger p-1" type="submit">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
            
                @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5" class="text-center">
                            <a class="btn btn-primary" href="{{ route('lugares.create') }}" role="button">Crear lugar</a>
                        </td>
                    </tr>
                </tfoot>
              </table>
        </div>

        <div class="card-footer">

        </div>
    </div>
</div>

@endsection