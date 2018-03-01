<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title','Colegio 5159')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
    </head>
    <body>
      <div class="container">
        <div class="jumbotron jumbotron-fluid text-center">
          <div class="row">
            <div class="col-3">
              <img src="{{Storage::disk('public')->url('header/escudo.png')}}" alt="">
            </div>
            <div class="col-9">
              <h1>Colegio 5159</h1>
            </div>
          </div>
        </div>

        <div class="row">
          @section('nav')            
            <nav >
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link" href="/">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="autoridades">Autoridades</a></li>
                <li class="nav-item"><a class="nav-link" href="noticias">Noticias</a></li>
                <li class="nav-item"><a class="nav-link" href="/">Campus</a></li>
                <li class="nav-item"><a class="nav-link" href="contacto">Contacto</a></li>
              </ul>
            </nav>
          @show

        </div>
      </div>

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
            <div class="container">
              <p>Colegio 5159 / Direccion Hipolito Yrigoyen N 750 / Telefono 387-4582451</p>
            </div>
        </div>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>
