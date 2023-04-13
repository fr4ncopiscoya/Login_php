<?php
require 'conexion.php';
sleep(2);

$nombre = $_POST['namerg'];
$dni = $_POST['dnirg'];
$usuario = $_POST['usuariorg'];
$password = $_POST['passrg'];

if(repe($usuario,$password,$conexion)==1){
    header("location: http://localhost/Login/inicio/registro.php");
}else{
    $insertar = "INSERT INTO usuarios (Nombre,Dni,Usuario,Pass) VALUES('$nombre','$dni','$usuario', '$password')";
    echo mysqli_query($conexion,$insertar);
    header("location: http://localhost/Login/inicio/index.php");
}


function repe($user,$pass,$conexion){
    $sql = "SELECT * FROM usuarios WHERE Usuario = '$user' and Pass = '$pass' ";
    $result = mysqli_query($conexion,$sql);

    if(mysqli_num_rows($result)>0){
        return 1;
    }else{
        return 0;
    }
}

?>