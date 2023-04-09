<?php
session_start();
// session_destroy();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
    header("http://localhost/Login/inicio/index.php");
}else{
    echo "<h1> Bienvenido </h1>";

    echo "<a href='http://localhost/Login/inicio/index.php'> SALIR</a>";
}


?>