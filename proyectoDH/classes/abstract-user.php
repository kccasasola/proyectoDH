<?php
abstract class User{
  protected $user;
  protected $email;
  protected $password;


  public function getUser(){
    return $this->user;
  }

  public function setUser($user){
    return $this->user = $user;
  }

  public function getEmail(){
    return $this->email;
  }

  public function setEmail($email){
    return $this->email = $email;
  }

  public function isAdmin($user){
    $typeOfUser=get_class($user);
    if ($typeOfUser=="Admin"){
      return True;
    }
    else{
      return False;
    }
  }

}

 ?>
