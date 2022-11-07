@extends('layouts.template')
@section('title', 'profile')
@section('content')

<div class="text-center">
    <div class="carousel-inner">
        <div class="item active">
            @if (auth()->user()->imagen != null)
            <img src="{{ asset('storage').'/'.auth()->user()->imagen }}" width="345" height="350" class="rounded-circle border border-primary bg-secondary">
            @else
                <img src="{{ asset('storage').'/users_profile_picture/imagen_null.jpg' }}" width="345" height="350" class="rounded-circle border border-dark bg-secondary" alt="">
            @endif
            

            <div class="carousel-caption">

                    <a class="m-0" title="Editar foto" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        <div class="btn btn-light">
                            <div class="text-dark">Editar foto <i class="fa-solid fa-camera"></i></div>
                        </div>
                    </a>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content {{ auth()->user()->fondo }}">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Cambiar Imagen de Usuario</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('auth.updateimage', auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="mb-3 text-center">
                                            <label for="imagen" class="form-label">Nueva imagen de perfil</label>
                                            <input type="file" name="imagen" class="form-control">
                                        </div>
                                        
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                        Cancelar
                                    </button>
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>



<p class="text-center text-dark h3"><b class="{{ auth()->user()->fondo }}">{{auth()->user()->name}}</b> <a data-bs-toggle="modal" data-bs-target="#exampleModal" title="Editar Nombre de Usuario">
    <i class="fa-solid fa-pen-to-square text-primary Seleccionado"></i>
</a></p>
@error('name')
<div class="mt-2 text-center text-danger">
    <i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}
</div>
@enderror
@error('imagen')
<div class="mt-2 text-center text-danger">
    <i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}
</div>
@enderror

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content {{ auth()->user()->fondo }}">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cambiar Nombre de Usuario</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('auth.updatename', auth()->user()->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="mb-3 text-center">
                        <label for="name" class="form-label">Nombre de usuario nuevo</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                    Cancelar
                </button>
                <button type="submit" class="btn btn-success">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>




<div class="d-flex">
    <div class="p-2 flex-fill">
        <div class="text-center">
            <p class="btn btn-info"><a title="Editar Correo" data-bs-toggle="modal" data-bs-target="#exampleModal2">Cambiar Correo
                <i class="fa-solid fa-pen-to-square"></i>
            </a></p>
            @error('email')
            <div class="mt-2 text-center text-danger">
                <i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}
            </div>
            @enderror
            <!-- Modal -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content {{ auth()->user()->fondo }}">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cambiar Correo de Usuario</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('auth.updateemail', auth()->user()->id) }}" method="POST">
                                @csrf
                                @method('put')
                                <div class="mb-3 text-center">
                                    <label for="name" class="form-label">Nuevo Correo</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                Cancelar
                            </button>
                            <button type="submit" class="btn btn-success">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-2 flex-fill">
        <div class="text-center">
            <p class="btn btn-info"><a title="Editar Contraseña" data-bs-toggle="modal" data-bs-target="#exampleModal3">Cambiar contraseña <i class="fa-solid fa-pen-to-square"></i></a></p>
            @error('password')
            <div class="mt-2 text-center text-danger">
                <i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}
            </div>
            @enderror
            <!-- Modal -->
            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content {{ auth()->user()->fondo }}">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cambiar Contraseña de Usuario</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('auth.updatepassword', auth()->user()->id) }}" method="POST">
                                @csrf
                                @method('put')
                                <div class="mb-3 text-center">
                                    <label for="password" class="form-label">Nueva Contraseña</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                Cancelar
                            </button>
                            <button type="submit" class="btn btn-success">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

@endsection