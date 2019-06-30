<?php
session_start();
require_once("helpers.php");

function validar($datos,$pantalla){
    $errores=[];
      /*VALIDACION NOMBRE*/
      if(isset($datos["nombre"])){
        $nombre = trim($datos["nombre"]);
        if(empty($nombre)){
            $errores["nombre"]= "El nombre no puede estar vacio";
        }elseif (!preg_match("/^[a-zA-Z ]*$/",$nombre)) {
            $errores["nombre"]="El nombre solo debe contener letras o espacios en blanco";
        }
      }
      /*VALIDACION EMAIL*/
        $email = trim($datos["email"]);
        if(empty($email)){
            $errores["email"]= "El email no puede estar vacio";
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errores["email"]="El formato de e-mail no es válido";
      }
      /*VALIDACION USER*/
      if(isset($datos["user"])){
        $user = trim($datos["user"]);
        if(empty($user)){
            $errores["user"]= "El usuario no puede estar vacio";
        }elseif (!preg_match("/^[a-zA-Z]*$/",$user)) {
            $errores["user"]="El usuario no debe contener caracteres especiales";
        }elseif (strpos($user, " ")) {
          $errores["user"]="El usuario no debe contener espacios";
        }
      }
      /*VALIDACION PASS*/
      if(isset($datos["password"])){
        $password = trim($datos["password"]);
      if (strlen($password)<6) {
        $errores["password"]="La contraseña debe tener como mínimo 6 caracteres, una letra minúscula, una letra mayúscula y al menos un caracter numérico";
      }elseif (!preg_match('`[a-z]`',$password)){
        $errores["password"]="La contraseña debe tener como mínimo 6 caracteres, una letra minúscula, una letra mayúscula y al menos un caracter numérico";
      }elseif (!preg_match('`[A-Z]`',$password)){
        $errores["password"]="La contraseña debe tener como mínimo 6 caracteres, una letra minúscula, una letra mayúscula y al menos un caracter numérico";
      }elseif (!preg_match('`[0-9]`',$password)){
        $errores["password"]="La contraseña debe tener como mínimo 6 caracteres, una letra minúscula, una letra mayúscula y al menos un caracter numérico";
      }
    }
    /*VALIDACION REPASS*/
      if(isset($datos["repassword"],$datos["password"])){
          $password = trim($datos["password"]);
          $repassword = trim($datos["repassword"]);
        if ($password != $repassword) {
          $errores["repassword"]="Las contraseñas no coinciden";
        }
      }
    /*VALIDACION PREGUNTA SECRETA*/
    if(isset($datos["answer"])){
      $answer = trim($datos["answer"]);
    }
    $question=$datos["question"];
    if($question==0){
        $errores["question"]="Seleccione una pregunta secreta";
      }
    if(empty($datos["answer"])){
        $errores["answer"]="La respuesta no puede estar vacia";
      }




    if($pantalla == "registro"){
      $nombre = $_FILES["avatar"]["name"];
      $ext = pathinfo($nombre,PATHINFO_EXTENSION);
        if($_FILES["avatar"]["error"]!=0){
            $errores["avatar"]="Debe subir una imagen";
        }elseif($ext != "png" && $ext != "jpg" && $ext != "jpeg"){
            $errores["avatar"]="La imagen tiene un formato inválido";
        }

    }
    return $errores;
}

function inputUser($campo){
    if(isset($_POST[$campo])){
        return $_POST[$campo];
    }
}

function armarAvatar($imagen,$datos){
    $nombre = $imagen["avatar"]["name"];
    $ext = pathinfo($nombre,PATHINFO_EXTENSION);
    $avatar = $datos["email"] . uniqid();
    $archivoOrigen = $imagen["avatar"]["tmp_name"];
    $archivoDestino = dirname(__DIR__) . "/users-img/" . $avatar . "." . $ext;
    move_uploaded_file($archivoOrigen,$archivoDestino);
    $avatar = $avatar.".".$ext;
    return $avatar;
}

function armarUser($datos,$imagen){
    $usuario = [
        "nombre"=>$datos["nombre"],
        "email"=>$datos["email"],
        "user"=>$datos["user"],
        "password"=> password_hash($datos["password"],PASSWORD_DEFAULT),
        "avatar"=>$imagen,
        "question"=>$datos["question"],
        "answer"=>$datos["answer"],
    ];
    return $usuario;
}

function guardarUser($usuario){
    $usuariojson = json_encode($usuario);
    file_put_contents('users.json',$usuariojson. PHP_EOL, FILE_APPEND);
}

function buscarEmail($email){
    $usuarios = abrirBaseDatos();
    if($usuarios!==null){
        foreach ($usuarios as $usuario) {
            if($email === $usuario["email"]){
                return $usuario;
            }
        }
    }

    return null;
}

function abrirBaseDatos(){
    if(file_exists("users.json")){
        $baseDatosJson= file_get_contents("users.json");
        $baseDatosJson = explode(PHP_EOL,$baseDatosJson);
        //Aquí saco el ultimo registro, el cual está en blanco
        array_pop($baseDatosJson);
        //Aquí recooro el array y creo mi array con todos los usuarios
        foreach ($baseDatosJson as  $usuarios) {
            $arrayUsuarios[]= json_decode($usuarios,true);
        }
        //Aquí retorno el array de usuarios con todos sus datos
        return $arrayUsuarios;
    }else{
        return null;
    }
}


function armarRegistroOlvide($datos){
    $usuarios = abrirBaseDatos();

    foreach ($usuarios as $key=>$user) {

        if($datos["email"]==$user["email"]){
            $user["password"]= password_hash($datos["password"],PASSWORD_DEFAULT);
            $usuarios[$key] = $user;
        }
        $usuarios[$key] = $user;
    }

    unlink("users.json");
    foreach ($usuarios as  $user) {
        $jsusuario = json_encode($user);
        file_put_contents('users.json',$jsusuario. PHP_EOL,FILE_APPEND);
    }
}

function seteoUsuario($user,$dato){
    $_SESSION["nombre"]=$user["nombre"];
    $_SESSION["email"] = $user["email"];
    $_SESSION["perfil"]= $user["perfil"];
    $_SESSION["avatar"]= $user["avatar"];
    if(isset($dato["gridCheck1"]) ){
        setcookie("email",$dato["email"],time()+3600);
        setcookie("password",$dato["password"],time()+3600);
    }
}
function validarUsuario(){
    if($_SESSION["email"]){
        return true;
    }elseif ($_COOKIE["email"]) {
        $_SESSION["email"]=$_COOKIE["email"];
        return true;
    }else{
        return false;
    }

}

function RedirectToURL($url)
{
    header("Location: $url");
    exit;
}

function Login($datos){


}

function validarLogin($datos){
  $errores=[];
  $user = buscarEmail($datos["email"]);
  if ($user == null){
    $errores["user"]="Usuario no registrado";
  }else{
    if(password_verify($_POST["password"],$user["password"])==false){
      $errores["password"]="Contraseña incorrecta. Vuelve a intentarlo o haz click en olvidé mi contraseña para cambiarla.";
    }
  }

  return $errores;
}

function resetPasswordRequest(){
  $errores=[];
  if(empty($_POST['user'])){
    $errores["empty"]="El campo usuario es requerido";
  }
  else{
    $user=trim($_POST["user"]);
    if(buscarUser($user)==null){
      $errores["user"]="Ingreso no válido";
    }
   }
  if(buscarUser($user)!=null){
    $usuario=buscarUser($user);
    if($_POST["question"]==0){
      $errores["question"]="Ingreso no válido";
    }
    elseif($_POST["question"]!=0){
      if($_POST["question"]!=$usuario["question"]){
        $errores["question"]="Ingreso no válido";
      }
      elseif($_POST["answer"]==0){
        $errores["answer"]="Ingreso no válido";
      }
      elseif($_POST["answer"]!=$usuario["answer"]){
        $errores["answer"]="Ingreso no válido";
      }
    }
  }
   return $errores;
 }





function buscarUser($user){
  $usuarios = abrirBaseDatos();
  if($usuarios!==null){
      foreach ($usuarios as $usuario) {
          if($user === $usuario["user"]){
              return $usuario;
          }
      }
  }

  return null;
}
