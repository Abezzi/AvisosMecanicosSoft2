<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mechanics</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('modern/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('modern/css/modern-business.css')}}" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="">Inicio</a>
            </li>
            @if (Auth::guest())
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/login') }}">Iniciar Sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/register') }}">Registro</a>
            </li>
            @else
              <li class="nav-item"><a class="nav-link" href="/home">{{ Auth::user()->name }}</a></li>
            @endif
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid" style="width: 100%; height: 100%" src="{{asset('img/1.jpg')}}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid" style="width: 100%; height: 100%" src="{{asset('img/2.jpg')}}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid" style="width: 100%; height: 100%" src="{{asset('img/3.jpg')}}" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container" align="center"  >

      <h1 class="my-4">Bienvenido a Mechanics</h1>

      <!-- Marketing Icons Section -->

      <h2>Anuncios Premium</h2>

      <div class="row">
        @foreach($premium as $prem)
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="{{ asset('storage/imagenes/'.$prem->imagen) }}" alt="" ></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">{{$prem->titulo}}</a>
              </h4>
              <p class="card-text">{{$prem->descripcion}}</p>
            </div>
          </div>
        </div>

        @endforeach
   
      </div>

 
      {{ $premium->links('vendor.pagination.bootstrap-4') }}    


      <h2>Anuncios Gratuitos</h2>

      <div class="row">
        @foreach($free as $frees)
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="{{ asset('storage/imagenes/'.$frees->imagen) }}" alt="" ></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">{{$frees->titulo}}</a>
              </h4>
              <p class="card-text">{{$frees->descripcion}}</p>
            </div>
          </div>
        </div>

        @endforeach
   
      </div>
        {{ $free->links('vendor.pagination.bootstrap-4') }}    
      <!-- /.row -->

      <!-- Portfolio Section -->

      <!-- /.row -->

      <!-- Features Section -->
      <div class="row">

      </div>
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->


    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Todos los derechos reservados Mechanics 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('modern/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('modern/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  </body>

</html>
