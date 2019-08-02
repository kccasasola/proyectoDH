<?php
session_start();

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

function loginController(){
        if (isset($_SESSION["email"])) {
            return true;
        } else {
            if (isset($_COOKIE["email"])) {
                $_SESSION["email"] = $_COOKIE["email"];
                return true;
            } else {
                return false;
            }
        }
    }
    function dd($valor){
        echo "<pre>";
            var_dump($valor);
            exit;
        echo "</pre>";
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    function RedirectToURL($url)
    {
        header("Location: $url");
        exit;
    }
