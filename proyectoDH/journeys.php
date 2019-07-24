<!DOCTYPE html>
  <html lang="es" dir="ltr">
  <head>
  <meta charset="utf-8">
  <title>Wanderlust | Journey</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <div class="container-fluid">
    <header class="color-a">
      <nav class="navbar navbar-expand-lg navbar-light bg-light background-nav">
       <img class="logo-img"src="img/logo.png" alt="logo">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
       <ul class="navbar-nav">
         <li class="nav-item margin-li">
           <a class="nav-link color-a" href="index.php">Home</a>
         </li>
         <li class="nav-item margin-li">
           <a class="nav-link color-a" href="dudas.php">Preguntas frecuentes</a>
         </li>
         <li class="nav-item margin-li">
           <a class="nav-link color-a" href="registro.php">Registrarme</a>
         </li>
         <li class="nav-item margin-li">
           <a class="nav-link color-a" href="login.php">Login</a>
         </li>
       </ul>
     </div>
   </nav>
  </header>
  <article class="formulario">
    <form action="" method="POST" enctype= "multipart/form-data">
      <div class="form-group">
        <label for="exampleInputEmail1">Título del viaje</label>
        <input name="nombre" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="info-journey" placeholder="" maxlength="50"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">País de destino</label><br>

      <select name="pais">
      <option value="AF">Afganistán</option>
      </select>
      </div>

      <div class="form-group">
      <label for="exampleInputEmail1">Fecha de inicio</label><br>
      <input  type="date" name="fecha" >
      </div>

      <div class="form-group">
      <label for="exampleInputEmail1">Fecha de fin</label><br>
      <input  type="date" name="fecha" >
      </div>

      <div class="form-group">
      <label for="exampleInputEmail1">Puntuación general de el/los destinos </label><br>
      <input type="radio" name="puntuacion" value="1"> 1
      <input type="radio" name="puntuacion" value="2"> 2
      <input type="radio" name="puntuacion" value="3"> 3
      <input type="radio" name="puntuacion" value="4"> 4
      <input type="radio" name="puntuacion" value="5"> 5
      <input type="radio" name="puntuacion" value="6"> 6
      <input type="radio" name="puntuacion" value="7"> 7
      <input type="radio" name="puntuacion" value="8"> 8
      <input type="radio" name="puntuacion" value="9"> 9
      <input type="radio" name="puntuacion" value="10"> 10
      </div>

      <div class="form-group">
      <label for="exampleInputEmail1">¿Lo considerarías un viaje costoso?</label><br>
      <input type="radio" name="puntuacion" value="barato"> $
      <input type="radio" name="puntuacion" value="medio"> $$
      <input type="radio" name="puntuacion" value="caro"> $$$
      </div>

      <div class="form-group">
      <label for="exampleInputEmail1">¿Hay wifi-zone en la ciudad ?</label><br>
      <input type="radio" name="puntuacion" value="si"> Sí
      <input type="radio" name="puntuacion" value="no"> No
      </div>

      <div class="form-group">
      <label for="exampleInputEmail1">¿Considerás que es un destino seguro?</label><br>
      <input type="radio" name="puntuacion" value="si"> Sí
      <input type="radio" name="puntuacion" value="no"> No
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">¿Con qué idiomas te manejaste?</label><br>
      <input type="checkbox" id="cbox1" value="español"> Español
      <input type="checkbox" id="cbox1" value="ingles"> Inglés
      <input type="checkbox" id="cbox1" value="portugues"> Portugués
      <input type="checkbox" id="cbox1" value="frances"> Frances
      <input type="checkbox" id="cbox1" value="italiano"> Italiano
      <input type="checkbox" id="cbox1" value="otros"> Otros
      </div>


      <div class="form-group">
        <label for="exampleInputEmail1">¿Necesito alguna documentación especial para ingresar al país?</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="200" placeholder="Máximo 200 caracteres"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">¿Cómo considerás que fue el clima?</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="200" placeholder="Máximo 200 caracteres"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">¿Qué medio de transporte recomendas para recorrer la ciudad?</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="200" placeholder="Máximo 200 caracteres"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">¿En dónde te alojaste?</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="200" placeholder="Máximo 200 caracteres"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">¿Hiciste excursiones?¿Cuáles?</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" maxlength="400" placeholder="Máximo 400 caracteres"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">¿Conviene comprar las excursiones antes de llegar a destino?</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" maxlength="400" placeholder="Máximo 400 caracteres"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">¿Te gustó la comida?¿Recomendás algún lugar en especial?</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" maxlength="400" placeholder="Máximo 400 caracteres"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">¿Algo que quieras destacar de tu experiencia?</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" maxlength="800" placeholder="Máximo 800 caracteres"></textarea>
      </div>



      <button type="submit" class="btn btn-primary buttonregister"><a class="link-registro" href="perfil.php">Cargar viaje</button></a>
    </form>
  </article>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>

  <footer>
    <p class="col-sm-12">® 2019, wanderlust.com.ar SA . Todos los derechos reservados. </p>
  </footer>
</html>
