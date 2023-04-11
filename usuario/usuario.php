<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = ''){
    header ('location: http://localhost/Login/inicio/index.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/Login/css/usuario.css">
    <title>Document</title>
</head>
<body>
    <section id="general">
        <div class="main">
            <div class="senati-img">
            </div>
            <div class="container">
                <h1>BIENVENIDO <br> <?php echo $_SESSION['usuario'] ?></h1>
                <a href="http://localhost/Login/main/close.php">
                    <button class= "btnlg">Salir</button>
                </a>
            </div>
        </div>
    </section>
</body>
</html>