<?php
include_once("autoload.php");
if ($_POST){
  $errors=Registration::validate($_POST,"registro");
  if(count($errors)==0){
    $user = buscarEmail($_POST["email"]);
    if($user !== null){
      $errors["email"]="El usuario ya se encuentra registrado";
    }else{
      if(gettype($_FILES) == "array"){
      $picture = Registration::setAvatar($_FILES);
      $registro = new RegularUser($_POST["name"], $_POST["user"], Encrypt::hashPassword($_POST["password"]), $_POST["email"], $picture);
      DataBase::saveUser($pdo, $registro, 'users', $picture);
      RedirectToURL("bienvenido.php");
    }
    }
  }
}
 ?>
<!DOCTYPE html>
  <html lang="es" dir="ltr">
  <head>
  <meta charset="utf-8">
  <title>Wanderlust|Registrarme</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <div class="container-fluid">
    <header class="color-a">
      <?php require_once("navbar.php");?>
  </header>
  <article class="formulario">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype= "multipart/form-data">
      <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresar nombre" value="<?=(isset($errors["nombre"]) )? "" : inputUser("nombre");?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail">E-mail</label>
        <input name="email" type="text" class="form-control" id="exampleInputEmail" placeholder="Ingresar e-mail" value="<?=isset($errors["email"])? "":inputUser("email") ;?>">
      </div>

      <div class="form-group">
        <label for="exampleInputUser">Usuario</label>
        <input name="user" type="text" class="form-control" id="exampleInputUser" aria-describedby="emailHelp" placeholder="Ingresar usuario" value="<?=(isset($errors["user"]) )? "" : inputUser("user");?>">
      </div>

      <div class="form-group">
      <label for="exampleInputAvatar">Foto de perfil</label><br>
      <input  type="file" name="picture" value=""/ >
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Ingresar contraseña">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword2">Confirmar contraseña</label>
        <input type="password" class="form-control" name="repassword" id="exampleInputPassword2" placeholder="Ingresar nuevamente contraseña">
      </div>


      <?php
      if(isset($errors)):?>
        <ul class="alert alert-light">
          <?php
          foreach ($errors as $key => $value) :?>
            <li> <?=$value;?> </li>
            <?php endforeach;?>
        </ul>
      <?php endif;?>


      <button type="submit" class="btn btn-primary buttonregister"><a class="link-registro">Registrarme</button></a>
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
