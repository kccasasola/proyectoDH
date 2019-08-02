<?php
require_once("validatable.php");
abstract class LogIn implements Validatable{
  static public function initSession(){
    if(!isset($_SESSION)){
        session_start();
      }
    }
  static public function verifyPassword($password,$passwordHash){
    return password_verify($password,$passwordHash);
  }
  static public function setSession($user){
    $_SESSION["user"] = $user["user"];
    $_SESSION["email"] = $user["email"];
    // $_SESSION["role"]= $user["role"];
    // $_SESSION["avatar"]= $user["avatar"];
  }
  static public function setCookie($user){
    setcookie("user",$user["user"],time()+3600);
    setcookie("password",$user["password"],time()+3600);
  }
  static public function existSession(){
    if(isset($_SESSION["user"])){
      return true;
    } elseif (isset($_COOKIE["user"])) {
        $_SESSION["user"] = $_COOKIE["user"];
        return true;
    } else {
      return false;
    }
  }
  public function validate($data, $pantalla){
    $errores = array();
    $user = test_input($data["user"]);
    $password = test_input($data["password"]);
    if(empty($user)){
      $errores["user"]="Usuario requerido";
    }
    if(empty($password)){
      $errores["password"]= "El campo contraseña es requerido";
    } elseif (strlen($password)<6) {
      $errores["password"]="La contraseña debe tener como mínimo 6 caracteres";
    }
    return $errores;
  }
}
