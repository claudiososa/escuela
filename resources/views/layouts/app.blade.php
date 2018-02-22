<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title','Colegio 5159')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
          <nav >
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link" href="/">Inicio</a></li>
              <li class="nav-item"><a class="nav-link" href="autoridades">Autoridades</a></li>
              <li class="nav-item"><a class="nav-link" href="noticias">Noticias</a></li>
              <li class="nav-item"><a class="nav-link" href="/">Campus</a></li>
              <li class="nav-item"><a class="nav-link" href="contacto">Contacto</a></li>
            </ul>
          </nav>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
