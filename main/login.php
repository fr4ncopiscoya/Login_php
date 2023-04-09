<?php
// if(!empty($_SERVER['HTTP_X_REQUESTED_WIDHT']) && strtolower($_SERVER['HTTP_X_REQUESTED_WIDHT']) == 'xmlhttprequest'){
//     require 'conexion.php';
// }
require 'conexion.php';
sleep(2);
session_start();

$usuariolg = $_POST['usuariolg'];
$passwordlg = $_POST['passlg'];

$usuarios = $conexion -> query("SELECT Usuario,Pass FROM usuarios WHERE Usuario = '".$usuariolg."' AND Pass = '".$passwordlg."'");

if($usuarios -> num_rows == 1):
    $datos = $usuarios -> fetch_assoc();
    $_SESSION['user'] = $datos;
    echo json_encode(array('error' => false,'tipo' => $datos['Usuario'],['Pass']));
else:
    echo json_encode(array('error' => true));
endif;

$conexion -> close();
?>