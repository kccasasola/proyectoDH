<?php
require_once("autoload.php");
if(!isset($_SESSION["email"])) {
    header("registro.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Perfil | Wanderlust</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
  </head>
<body>
  <div class="container-fluid">
  <header class="color-a">
   <?php require_once("navbar.php");?>
</header>
</div>
    <div class="banner-profile col-md-12 col-lg-12 col-sm-12 d-flex flex-wrap justify-content-center ">
    <div class=" col-lg-1"><img src="img/<?=$_SESSION["avatar"];?>" alt="" class="avatar"></div>
    <p class="user col-lg-6 col-sm-12 col-md-6">Perfil de <?=$_SESSION["user"];?><br> </p>
    </div>


      <h2 class="titulo-viajes">MIS VIAJES</h2>
      <button type="submit" class="btn buttonjourney"><a href="journeys.php" class="link-registro">Nuevo viaje</button></a>
      <div class="col-md-12 col-lg-12 col-sm-12 d-flex flex-wrap justify-content-center">
      <div class="card carta" style="width: 18rem;">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="img/carrusel1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel3.png" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
      <div class="card-body">
        <h5 class="card-title titulo-carta">Destino1</h5>
        <p class="card-text texto-carta">Acá irá un resumen de la experiencia del viajero.</p>
        <a href="#" class="btn boton-carta">Ver experiencia completa</a>
      </div>
      </div>
      <div class="card carta" style="width: 18rem;">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="img/carrusel1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel3.png" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
      <div class="card-body">
        <h5 class="card-title titulo-carta">Destino1</h5>
        <p class="card-text texto-carta">Acá irá un resumen de la experiencia del viajero.</p>
        <a href="#" class="btn boton-carta">Ver experiencia completa</a>
      </div>
      </div>
      <div class="card carta" style="width: 18rem;">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="img/carrusel1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel3.png" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
      <div class="card-body">
        <h5 class="card-title titulo-carta">Destino1</h5>
        <p class="card-text texto-carta">Acá irá un resumen de la experiencia del viajero.</p>
        <a href="#" class="btn boton-carta">Ver experiencia completa</a>
      </div>
      </div>
      <div class="card carta" style="width: 18rem;">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="img/carrusel1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel3.png" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
      <div class="card-body">
        <h5 class="card-title titulo-carta">Destino1</h5>
        <p class="card-text texto-carta">Acá irá un resumen de la experiencia del viajero.</p>
        <a href="#" class="btn boton-carta">Ver experiencia completa</a>
      </div>
      </div>
      <div class="card carta" style="width: 18rem;">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="img/carrusel1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel3.png" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
      <div class="card-body">
        <h5 class="card-title titulo-carta">Destino1</h5>
        <p class="card-text texto-carta">Acá irá un resumen de la experiencia del viajero.</p>
        <a href="#" class="btn boton-carta">Ver experiencia completa</a>
      </div>
      </div>
      <div class="card carta" style="width: 18rem;">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="img/carrusel1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel3.png" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
      <div class="card-body">
        <h5 class="card-title titulo-carta">Destino1</h5>
        <p class="card-text texto-carta">Acá irá un resumen de la experiencia del viajero.</p>
        <a href="#" class="btn boton-carta">Ver experiencia completa</a>
      </div>
      </div>
      <div class="card carta" style="width: 18rem;">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="img/carrusel1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel3.png" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
      <div class="card-body">
        <h5 class="card-title titulo-carta">Destino1</h5>
        <p class="card-text texto-carta">Acá irá un resumen de la experiencia del viajero.</p>
        <a href="#" class="btn boton-carta">Ver experiencia completa</a>
      </div>
      </div>
      <div class="card carta" style="width: 18rem;">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="img/carrusel1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel3.png" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
      <div class="card-body">
        <h5 class="card-title titulo-carta">Destino1</h5>
        <p class="card-text texto-carta">Acá irá un resumen de la experiencia del viajero.</p>
        <a href="#" class="btn boton-carta">Ver experiencia completa</a>
      </div>
      </div>
      <div class="card carta" style="width: 18rem;">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="img/carrusel1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel3.png" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
      <div class="card-body">
        <h5 class="card-title titulo-carta">Destino1</h5>
        <p class="card-text texto-carta">Acá irá un resumen de la experiencia del viajero.</p>
        <a href="#" class="btn boton-carta">Ver experiencia completa</a>
      </div>
      </div>
      <div class="card carta" style="width: 18rem;">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="img/carrusel1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel3.png" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
      <div class="card-body">
        <h5 class="card-title titulo-carta">Destino1</h5>
        <p class="card-text texto-carta">Acá irá un resumen de la experiencia del viajero.</p>
        <a href="#" class="btn boton-carta">Ver experiencia completa</a>
      </div>
      </div>
      <div class="card carta" style="width: 18rem;">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="img/carrusel1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel3.png" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
      <div class="card-body">
        <h5 class="card-title titulo-carta">Destino1</h5>
        <p class="card-text texto-carta">Acá irá un resumen de la experiencia del viajero.</p>
        <a href="#" class="btn boton-carta">Ver experiencia completa</a>
      </div>
      </div>
      <div class="card carta" style="width: 18rem;">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="img/carrusel1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel3.png" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
      <div class="card-body">
        <h5 class="card-title titulo-carta">Destino1</h5>
        <p class="card-text texto-carta">Acá irá un resumen de la experiencia del viajero.</p>
        <a href="#" class="btn boton-carta">Ver experiencia completa</a>
      </div>
      </div>
      <div class="card carta" style="width: 18rem;">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="img/carrusel1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel3.png" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
      <div class="card-body">
        <h5 class="card-title titulo-carta">Destino1</h5>
        <p class="card-text texto-carta">Acá irá un resumen de la experiencia del viajero.</p>
        <a href="#" class="btn boton-carta">Ver experiencia completa</a>
      </div>
      </div>
    </div>
  </div>
  </div>

  <footer>
    <p class="col-sm-12">® 2019, wanderlust.com.ar SA . Todos los derechos reservados. </p>
  </footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
