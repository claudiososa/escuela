<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Noticias / Colegio 5159</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/blog-post.css')}}" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="/">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="autoridades">Autoridades</a></li>
            <li class="nav-item"><a class="nav-link" href="noticias">Noticias</a></li>
            <li class="nav-item"><a class="nav-link" href="/">Campus</a></li>
            <li class="nav-item"><a class="nav-link" href="contacto">Contacto</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="flex-center position-ref full-height">
          @if (Route::has('login'))
              <div class="top-right links">
                  @if (Auth::check())
                      <a href="{{ url('/home') }}">Home</a>
                  @else
                      <a href="{{ url('/login') }}">Login</a>
                      <a href="{{ url('/register') }}">Register</a>
                  @endif
              </div>
          @endif

          <div class="container">
              @yield('content')
          </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Colegio 5159 / Direccion Hipolito Yrigoyen N 750 / Telefono 387-4582451</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

  </body>

</html>
