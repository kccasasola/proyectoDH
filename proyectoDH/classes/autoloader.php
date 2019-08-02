<?php
class Autoloader{

  public function classes($class){
    $file_name = 'classes/' . $class . '.php';
    if(file_exists($file_name)) {
        require_once($file_name);
    }
  }
  public function controladores($file){
    $file_name = 'controladores/' . $file . '.php';
    if(file_exists($file_name)){
      require_once($file_name);
    }
  }
  public function files($file){
    $file_name = $file . '.php';
    if(file_exists($file_name)) {
        require_once($file_name);
    }
  }

  }
