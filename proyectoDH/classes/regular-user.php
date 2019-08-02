<?php

class RegularUser extends User{
  protected $name;
  protected $avatar;
  public function __construct($name, $user, $password, $email, $avatar){
    $this->name = $name;
    $this->user = $user;
    $this->password = $password;
    $this->email = $email;
    $this->avatar = $avatar;
  }

  public function getName(){
      return $this->name;
  }
  public function setName($name){
      $this->name = $name;
  }
  public function getEmail(){
      return $this->email;
  }
  public function setEmail($email){
      $this->email = $email;
  }
  public function getPassword(){
      return $this->password;
  }
  public function setPassword($password){
      $this->password = $password;
  }
  public function getAvatar(){
     return $this->avatar;
  }
  public function setAvatar($avatar){
      $this->avatar = $avatar;
  }

}
