<?php
require 'conexion.php';
    session_start();

    $usuario = $_POST['usuariolg'];
    $password = $_POST['passlg'];

    $query = "SELECT COUNT(*) as contar FROM usuarios WHERE Usuario = '$usuario' and Pass = '$password' ";

    $consulta = mysqli_query($conexion, $query );
    $array = mysqli_fetch_array($consulta);

    if($array['contar']>0){
        $_SESSION['usuarname'] = $query;
        header("http://localhost/Login/usuario/usuario.php");
    }else{
        echo "datos incorrectos";
    }
?>