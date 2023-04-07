<?php
require 'conexion.php';
sleep(2);

$usuarios = $conexion -> query("SELECT Nom, tipo_usuario FROM usuarios WHERE Usuario = '".$_POST['usuariolg']."' AND Pass = '".$_POST['passlg']."'");

if($usuarios-> num_rows == 1):
    $datos = $usuarios -> fetch_assoc();
    echo json_encode(array('error' => false,'tipo' => $datos['tipo_usuario']));
else:
    echo json_encode(array('error' => true));
endif;

$conexion -> close();
?>