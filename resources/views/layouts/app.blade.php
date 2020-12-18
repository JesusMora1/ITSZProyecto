<!DOCTYPE html>
<html lang="en">
<head>
  <title>TECNM | ITSZ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/99031f88e8.js" crossorigin="anonymous"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
  <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      background: #aaa;
      height: 200px;
    }
    </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Sistemas Computacionales</h1>
  <p>Frase.</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="/"><i class="fas fa-house-user"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/eventos">Eventos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/cuerpos-academicos">Cuerpos Academicos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/servicio-social">Servicio Social</a>
      </li> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Proyectos
          </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/investigacion">Investigacion</a>
                        <a class="dropdown-item" href="/residencias">Residencias</a>
                        <a class="dropdown-item" href="/tesis">Tesis</a>
                    </div>
      </li>  
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus"></i></i></a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
      
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
      
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
      </ul>
          </ul>
  </div> 
</nav>
<form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
@csrf
</form>
<br>
<br>
@yield('content')

<br>
<br>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Instituto Tecnologico Superior de Zongolica.</p>
  <p>Km 4 Carretera a la Compañia S/N, Tepetlitlanapa, Zongolica, Ver. CP:95005</p>
</div>

</body>
</html>

