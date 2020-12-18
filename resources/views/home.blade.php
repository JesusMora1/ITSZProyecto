@extends('layouts.base')

@section('content')
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>Acerca de</h2>
      <h5>Sistemas Computacionales:</h5>
      <div class="fakeimg">Video promocional</div>
      <p>Descripcion de la carrera (pequeña reseña)</p>
      <h3>Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Noticias</h2>
      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="la.jpg" alt="noticia1" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Noticia1</h3>
              <p>Descripcion</p>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="chicago.jpg" alt="noticia2" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Noticia2</h3>
              <p>Descripcion</p>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="ny.jpg" alt="noticia3" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Noticia3</h3>
              <p>Descripción</p>
            </div>   
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
            <p>Descripcion</p>
      <p>Parrafo de la noticia.</p>
      <br>
      <h2>Reticula de la Carrerar</h2>
      <h5>Mapa Curricular Sistemas Computacionales, Ene 2, 2021</h5>
      <div class="fakeimg">Mapa Curricular</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>
@endsection