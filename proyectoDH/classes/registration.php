<?php
require_once("validatable.php");
abstract class Registration implements Validatable{



  public function validate($data, $pantalla){
    $name = test_input($data["name"]);
    $email = test_input($data["email"]);
    $user = test_input($data["user"]);
    $password = test_input($data["password"]);
    $repassword = test_input($data["repassword"]);
    $errors=[];

    //Validación nombre
    if(empty($name)){
    $errors["name"]="El nombre no puede estar vacio";
    }
    elseif (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $errors["name"]="El nombre solo debe contener letras o espacios en blanco";
    }

    //Validación email
    if(empty($email)){
      $errors["email"]= "El email no puede estar vacio";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors["email"]="El formato de e-mail no es válido";
    }

    //Validación username
    if(empty($user)){
      $errors["user"]= "El usuario no puede estar vacio";
    }
    elseif (!preg_match("/^[a-zA-Z]*$/",$user)) {
      $errors["user"]="El usuario no debe contener caracteres especiales";
    }elseif (strpos($user, " ")) {
      $errors["usern"]="El usuario no debe contener espacios";
    }
    //Validación password
    if(empty($password)){
      $errors["password"]= "El campo contraseña es requerido.";
    }
    if (strlen($password)<6) {
      $errors["password"]="La contraseña debe tener como mínimo 6 caracteres, una letra minúscula, una letra mayúscula y al menos un caracter numérico";
    }elseif (!preg_match('`[a-z]`',$password)){
      $errors["password"]="La contraseña debe tener como mínimo 6 caracteres, una letra minúscula, una letra mayúscula y al menos un caracter numérico";
    }elseif (!preg_match('`[A-Z]`',$password)){
      $errors["password"]="La contraseña debe tener como mínimo 6 caracteres, una letra minúscula, una letra mayúscula y al menos un caracter numérico";
    }elseif (!preg_match('`[0-9]`',$password)){
      $errors["password"]="La contraseña debe tener como mínimo 6 caracteres, una letra minúscula, una letra mayúscula y al menos un caracter numérico";
    }

    //Validación repassword
    if(empty($repassword)){
      $errors["repassword"]="El campo confirmar contraseña es requerido";
    }

    if($password != $repassword){
      $errors["repassword"]="Las contraseñas no coinciden";
    }

    return $errors;
  }


    public function setAvatar(array $imagen){
      $nombre = $imagen["picture"]["name"];
      $ext = pathinfo($nombre,PATHINFO_EXTENSION);
      $archivoOrigen = $imagen["picture"]["tmp_name"];
      $archivoDestino = dirname(__DIR__);
      $archivoDestino = $archivoDestino."/img/";
      $avatar = uniqid();
      $archivoDestino = $archivoDestino.$avatar;

      $archivoDestino = $archivoDestino.".".$ext;

      move_uploaded_file($archivoOrigen,$archivoDestino);
      $avatar = $avatar.".".$ext;

      return $avatar;
  }



}
