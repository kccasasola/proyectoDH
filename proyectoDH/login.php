<?php
require_once("autoload.php");
  if($_POST){
  //   LogIn::setSesion($usuarioEncontrado);
  //   if(isset($_POST["recordar"])){
  //     LogIn::setCookie($usuarioEncontrado);
  //   }
  //   if(Login::existSession()){
  //     header("perfil.php");
  //   } else {
  //     header("registro.php");
  //   }
  // } else {
    $errores = LogIn::validate($_POST, "Login");
    if(count($errores) == 0){
      $usuarioEncontrado = DataBase::findByUsername($_POST["user"], $pdo, 'users');
      if($usuarioEncontrado == false){
        $errores["user"] = "Usuario no registrado";
      } else {
        LogIn::setSession($usuarioEncontrado);
        if(isset($_POST["recordar"])){
          LogIn::setCookie($usuarioEncontrado);
          }
        else if(LogIn::existSession()){
          redirectToURL("registro.php");
        }
          RedirectToURL("index.php");
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
      <div class="container-fluid div-separacion">
        <?php if(isset($errores)): ?>
          <ul class="alert alert-light">
            <?php foreach ($errores as $key => $value) :?>
              <li> <?=$value;?> </li>
            <?php endforeach;?>
          </ul>
        <?php endif;?>
        <!-- VERIFICAR VALUE EN CADA INPUT -->
        <form method="post">
          <div class="form-group form-size div-form">
            <label for="formGroupExampleInput">Usuario</label>
            <input name="user" type="text" class="form-control"  id="formGroupExampleInput" placeholder="Ingrese usuario">
          </div>
          <div class="form-group form-size">
            <label for="formGroupExampleInput2">Contraseña</label>
            <input name="password" type="password" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese contraseña">
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <div class="form-check">
                <input  name="recordar" class="form-check-input" type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">Recordarme</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <button type="submit" class="btn btn-primary buttonregister">Ingresar</button>
          </div>
        </div>
      </form>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<footer>
  <p class="col-sm-12">® 2019, wanderlust.com.ar SA . Todos los derechos reservados. </p>
</footer>



</html>
