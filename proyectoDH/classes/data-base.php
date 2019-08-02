<?php
class DataBase {
    static public function connect($host,$db,$user,$password,$port,$charset){
        try {
            $dsn = "mysql:host=".$host.";"."dbname=".$db.";"."port=".$port.";"."charset=".$charset;
            $dataBase = new PDO($dsn,$user,$password);
            $dataBase->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $dataBase;
        } catch (PDOException $errors) {
            echo "No me pude conectar a la BD ". $errors->getmessage();
            exit;
        }
    }
    static public function findByUsername($user, $pdo, $table){
      $sql = "SELECT * FROM `$table` where user = :user";
      $query = $pdo->prepare($sql);
      $query->bindValue(':user',$user);
      $query->execute();
      $resultado = $query->fetch(PDO::FETCH_ASSOC);
      return $resultado;
    }



    static public function saveUser($pdo,$user,$table,$avatar){
        $sql = "insert into $table (name, user, password, email, avatar) values (:name,:user, :password,:email,:avatar)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':name',$user->getName());
        $query->bindValue(':user',$user->getUser());
        $query->bindValue(':password',$user->getPassword());
        $query->bindValue(':email',$user->getEmail());
        $query->bindValue(':avatar',$avatar);
        $query->execute();

    }

}
