<?php
require 'conexion.php';

$nombre = $_POST['namerg'];
$dni = $_POST['dnirg'];
$usuario = $_POST['usuariorg'];
$password = $_POST['passrg'];

$insertar = "INSERT INTO usuarios (Nombre,Dni,Usuario,Pass) VALUES('$nombre','$dni','$usuario', '$password')";

echo mysqli_query($conexion,$insertar);

?>