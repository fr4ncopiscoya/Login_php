<?php
require 'conexion.php';
session_start();
$usuario = $_POST['usuariolg'];
$password = $_POST['passlg'];
$_SESSION['usuario'] = $usuario;

    $consulta = "SELECT *  FROM usuarios WHERE Usuario = '$usuario' and Pass = '$password' ";
    $resultado = mysqli_query($conexion, $consulta);

    $filas = mysqli_num_rows($resultado);

    if($filas>0){
        header("location:http://localhost/Login/usuario/usuario.php");
    }else{
        echo "datos incorrectos";
    }
?>