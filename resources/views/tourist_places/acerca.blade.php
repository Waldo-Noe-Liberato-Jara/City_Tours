@extends('layouts.template')
@section('title', 'Lugar')
@section('content')
<div class="col-lg-8 mx-auto p-3">

    <main class="container">
        <p class="h1">Proyeto web en Larabel <i class="fa-brands fa-laravel"></i> creado por: </p>
        <p class="h2">Liberato Jara Waldo Noe</p>
        <p class="fs-5 col-md-8">El proyecto web cuenta con:</p>
        <div class="row">
            <div class="col-lg-4">
              <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Inicio de Sesión</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Registro de Usuarios</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Tipos de Usuarios</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">C.R.U.D. de Lugares</a>
              </div>
            </div>
            <div class="fs-5 col-lg-8">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">Autentifica las credenciales ingresadas y verifica el tipo de usuario</div>
                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">Registra a todos como usuarios, foto de perfil opcional</div>
                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                    Los tipos de usuarios son:
                    
                    <ul class="icon-list ps-0">
                        <li class="d-flex align-items-start mb-1">
                            <div class="inline-flex">
                                <i class="fa-solid fa-user-gear"></i>&nbsp;
                            </div>
                            <div class="inline-flex">
                                Admistrador
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <div class="inline-flex">
                                <i class="fa-solid fa-user"></i>&nbsp;&nbsp;
                            </div>
                            <div class="inline-flex">
                                Usuario
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">Solo los usuarios tipo admistrador tienen acceso al C.R.U.D. de la tabla Lugares.</div>
              </div>
            </div>
          </div>

          <hr>

        <div class="row g-5">
            <div class="col-md-6">
                <h2>Objetivo</h2>
                <p>Los objetivos del proyecto son:</p>
                <ul class="icon-list ps-0">
                    <li class="d-flex align-items-start mb-1">
                        <div class="d-flex">
                            <div class="inline-flex">
                                <i class="fa-solid fa-circle-check"></i>&nbsp;
                            </div>
                            <div class="inline-flex">
                                <p>Demostrar lo aprendido en clases</p>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex align-items-start mb-1">
                        <div class="d-flex">
                            <div class="inline-flex">
                                <i class="fa-solid fa-circle-check"></i>&nbsp;
                            </div>
                            <div class="inline-flex">
                                <p>Demostrar lo investigado</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-md-6">
                <h2>Herramientas</h2>
                <p>Para realizar el sitio web utilice diversas herramientas, las principales son:</p>
                <ul class="icon-list ps-0">
                    <li class="d-flex align-items-start mb-1">
                        <div>
                            <i class="fa-solid fa-circle-arrow-right"></i> <a class="link-primary" href="https://laravel.com" target="_blank">Laravel</a>
                        </div>
                    </li>
                    <li class="d-flex align-items-start mb-1">
                        <div>
                            <i class="fa-solid fa-circle-arrow-right"></i> <a class="link-primary" href="https://www.php.net/manual/es/intro-whatis.php" target="_blank">PHP</a>
                        </div>
                    </li>
                    <li class="d-flex align-items-start mb-1">
                        <div>
                            <i class="fa-solid fa-circle-arrow-right"></i> <a class="link-primary" href="https://code.visualstudio.com" target="_blank">Visual Studio Code</a>
                        </div>
                    </li>
                    <li class="d-flex align-items-start mb-1">
                        <div>
                            <i class="fa-solid fa-circle-arrow-right"></i> <a class="link-primary" href="https://getbootstrap.com" target="_blank">Bootstrap</a>
                        </div> 
                    </li>
                    <li class="d-flex align-items-start mb-1">
                        <div class="d-flex">
                            <div class="inline-flex">
                                <i class="fa-solid fa-circle-arrow-right"></i>&nbsp;
                            </div>
                            <div class="inline-flex">
                                <p class="link-primary" href="">Y más</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </main>
</div>

@endsection()