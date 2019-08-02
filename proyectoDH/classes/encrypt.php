<?php

  class Encrypt{
    static public function hashPassword($password){
        return password_hash($password,PASSWORD_DEFAULT);
    }
}




 ?>
