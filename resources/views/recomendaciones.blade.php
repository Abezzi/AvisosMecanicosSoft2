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
 <!-- Page Content -->
    <div class="container" align="center"  >
    <form action="/my-handling-form-page" method="post">
    <div>
        <label for="name">Tipo de sugerencia</label>
        <input type="text" id="comentario" name="comentario" />
    </div>
    <div>
        <label for="mail">E-mail:</label>
        <input type="email" id="mail" name="user_email" />
    </div>
    <div>
        <label for="msg">Sugenerencia</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    
    <div class="button">
        <button type="submit">Enviar</button>
    </div>
</form>
 
 
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


