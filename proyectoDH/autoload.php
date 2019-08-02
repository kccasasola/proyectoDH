<?php
require_once("classes/abstract-user.php");
require_once("classes/admin.php");
require_once("classes/data-base.php");
require_once("classes/encrypt.php");
require_once("classes/login.php");
require_once("classes/registration.php");
require_once("classes/regular-user.php");
require_once("classes/validatable.php");
require_once("controladores/funciones.php");

$host = "localhost";
$bd = "wanderlust";
$usuario = "root";
$password = NULL;
$puerto = "3306";
$charset = "utf8mb4";


$pdo = DataBase::connect($host,$bd,$usuario,$password,$puerto,$charset);
