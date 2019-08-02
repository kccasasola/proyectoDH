<?php
require_once("./controladores/funciones.php");
require_once("helpers.php");

if ($_POST){
  $errores=resetPasswordRequest($_POST);
  $usuario=buscarUser($_POST["user"]);
  if(count($errores)==0){
    seteoUsuario($_POST["user"], $usuario);
    if (validarUsuario()){
    RedirectToURL("change-pwd.php");
  }

}
}
 ?>
<!DOCTYPE html>
  <html lang="es" dir="ltr">
  <head>
  <meta charset="utf-8">
  <title>Wanderlust|Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <div class="container-fluid">
    <header class="color-a">
      <?php require_once("navbar.php");?>
  </header>
  <section>
    <div class="container-fluid div-separacion">
      <div class="row">
        <div class="col-12">
          <div class="reset-pass">
            <h3>Olvidé mi contraseña</h3>
            <br>
            ¿No recuerdas tu contraseña? ¡No te preocupes! Te podemos ayudar. Llena este formulario y sigue los pasos para poder restablecerla.
            <br>
          </div>
          <form method="POST" action=""  enctype= "multipart/form-data">
            <div class="form-group form-size div-form">
              <br>
              <label for="userInput">Usuario</label>
              <input type="text" name="user" class="form-control" id="userInput" placeholder="Ingrese usuario" value="<?=(isset($errores["user"]) )? "" : inputUser("user");?>">
            </div>
            <label for="exampleInputPassword1">Pregunta secreta</label>
            <br>
            <select class="form-control" id="exampleFormControlSelect1" name="question">
              <option selected value="0"> Elige una opción </option>
              <option value="1">Nombre de tu primera mascota</option>
              <option value="2">Destino de tu primer viaje en avión</option>
              <option value="3">Nombre de tu mejor amigo de la infancia</option>
              <option value="4">Apellido de tu abuela</option>
            </select>
            <br>
            <input type="password" class="form-control" name="answer" id="Inputanswer" placeholder="Ingresar respuesta secreta">
          </div>
          <?php
          if(count($errores)!=0){?>
            <div class="alert alert-light" role="alert">
              <?php echo str($errores); ?>
            </div>
          <?php } ?>
          <div class="form-group row">
              <button type="submit" class="btn btn-primary buttonregister">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<footer>
  <p class="col-sm-12">® 2019, wanderlust.com.ar SA . Todos los derechos reservados. </p>
</footer>



</html>
