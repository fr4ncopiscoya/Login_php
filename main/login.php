<?php
require 'conexion.php';
sleep(2);

$usuarios = $conexion -> query("SELECT * FROM usuarios WHERE Usuario = '".$_POST['usuariolg']."' AND Pass = '".$_POST['passlg']."'");

if($usuarios -> num_rows == 1):
    $datos = $usuarios -> fetch_assoc();
    echo json_encode(array('error' => false,'tipo' => $datos['Usuario'],['Pass']));
else:
    echo json_encode(array('error' => true));
endif;

$conexion -> close();
?>