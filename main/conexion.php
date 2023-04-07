<?php
// $server = "localhost";
// $user = "root";
// $pass = "";
// $db = "login";

$conexion = new mysqli('localhost','root', '', 'login');

if($conexion->connect_errno):
    echo "Error al conectarse".$mysqli -> connect_error;
endif;

// if($conexion->connect_errno){
//     die("ERROR AL CONECTARSE".$conexion->connect_errno);
// }else{
//     echo "Conectadooo";
// }
?>