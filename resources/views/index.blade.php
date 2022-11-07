@extends('layouts.template_index')
@section('title', 'home')
@section('content')
            <div class="text-end">
                <a href="{{ route('login.index') }}" class="btn btn-outline-light me-2">Iniciar Sesión</a>
                <a href="{{ route('registro.index') }}" class="btn btn-outline-light">Registro</a>
            </div>
            </div>

        </div>
    </nav>
    
    <main>

        <div id="myCarousel" class="carousel slide mb-3" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="bd-placeholder-img opacidad" src="{{asset('storage').'/website_images/img_01.jpg'}}" width="100%" height="600rem">
      
              <div class="container">
                <div class="carousel-caption text-light">
                  <h1 class="stroke">Conoce lugares inolvidables</h1>
                  <p class="text-dark fw-bold">Los lugares que mostramos son los más recomendados por turistas extranjeros.</p>
                  <p><a class="btn btn-lg btn-primary" href="{{ route('registro.index') }}">Regístrese hoy</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
                <img class="bd-placeholder-img opacidad" src="{{asset('storage').'/website_images/img_02.jpg'}}" width="100%" height="600rem">
      
              <div class="container">
                <div class="carousel-caption">
                  <h1 class="stroke">Conozca los lugares con las mejores vistas panorámicas.</h1>
                  <p class="text-dark fw-bold">Disfrutemos de lo nuestro rodeados de los mejores paisajes.</p>
                  <p><a class="btn btn-lg btn-primary" href="{{ route('registro.index') }}">Regístrese para más</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
                <img class="bd-placeholder-img opacidad" src="{{asset('storage').'/website_images/img_03.jpg'}}" width="100%" height="600rem">
      
              <div class="container">
                <div class="carousel-caption text-end">
                  <h1 class="stroke">Lugares con una patria en común.</h1>
                  <p class="text-dark fw-bold">Conozca las maravillas del Perú, vea sus bellos lugares que contiene nuestro país.</p>
                  <p><a class="btn btn-lg btn-primary" href="{{ route('registro.index') }}">Qué espera para registrarse?</a></p>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      
      
        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
      
        <div class="container marketing">
      
          <!-- Three columns of text below the carousel -->
          <div class="row">
            <div class="col-lg-4 text-center">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{asset('storage').'/website_images/img_04.png'}}">
      
                <h2 class="fw-normal">Reseñas</h2>
                <p>Ofrecemos las mejores reseñas de diversos lugares turísticos del Perú, las reseñas son escritas por grandes reseñistas conocidos nacionalmente.</p>
                <p><a class="btn btn-secondary" href="{{ route('login.index') }}">Ver detalles »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 text-center">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{asset('storage').'/website_images/img_05.jpg'}}">
      
                <h2 class="fw-normal">Fotografías</h2>
                <p>Nuestras reseñas cuentan con sus respectivas fotografías tomadas por nuestros fótografos certificados.</p>
                <p><a class="btn btn-secondary" href="{{ route('login.index') }}">Ver detalles »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 text-center">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{asset('storage').'/website_images/img_06.jpg'}}">
        
                <h2 class="fw-normal">Ubicaciones</h2>
                <p>Cada lugar en el catálago tiene su respectiva ubicación, las ubicaciones fueron establecidas de la forma más precisa posible.</p>
                <p><a class="btn btn-secondary" href="{{ route('login.index') }}">Ver detalles »</a></p>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
      
      
          <!-- START THE FEATURETTES -->
      
          <hr class="featurette-divider">
          <p class="h1 m-3 text-center text-secondary">COMENTARIOS DE NUESTROS USUARIOS</p>
          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading fw-normal lh-1">Me gusto la facilidad al navegar por la página. <span class="text-muted">Las fotografías son estupendas.</span></h2>
              <p class="lead">Junto a mí familia observamos los lugares para conocer más acerca de nuestro país.</p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="{{asset('storage').'/website_images/img_07.jpg'}}">
      
            </div>
          </div>
      
          <hr class="featurette-divider">
      
          <div class="row featurette">
            <div class="col-md-7 order-md-2">
              <h2 class="featurette-heading fw-normal lh-1">Llevaba tiempo buscando un sitio así <span class="text-muted">Visite otras páginas pero no me interesaban tanto.</span></h2>
              <p class="lead">Actualmente estaba pensando en viajar y gracias a esta página puedo elegir el mejor lugar para ir de vacaciones.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="{{asset('storage').'/website_images/img_08.jpg'}}">
      
            </div>
          </div>
      
          <hr class="featurette-divider">
      
          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading fw-normal lh-1">Estaba buscando lugares hermosos del Perú y llegue acá. <span class="text-muted">Me encantan las reseñas publicadas en este sitio.</span></h2>
              <p class="lead">Realmente quede fascinado con el catálago que cuentan, incluso puedo cambiar el fondo para no lastimar mis ojos al leer las reseñas.</p>
            </div>
            <div class="col-md-5">
              <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="{{asset('storage').'/website_images/img_09.jpg'}}">
            </div>
          </div>
      
          <hr class="featurette-divider">
      
          <!-- /END THE FEATURETTES -->
      
        </div><!-- /.container -->
      
      
        <!-- FOOTER -->
        <footer class="container">
          <p class="float-end"><a href="#">Volver al principio</a></p>
          <p>© 2022 Company, Inc. · <a href="#">Privacy</a> · <a href="#">City Tours</a></p>
        </footer>
      </main>
@endsection