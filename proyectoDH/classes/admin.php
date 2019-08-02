<?php

class Admin extends User{

  public function __construct($username, $email, $password){
     $this->username = $username;
     $this->email = $email;
     $this->password = $password;
   }

   public function addQuestion($question){
     //Lógica de AddQuestion

   }






}


 ?>
