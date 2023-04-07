<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://localhost/Login/css/index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <title>Document</title>
    </head>

<body>
    <div class="error">
        <span>LOS DATOS SON INCORRECTOS, INTÉNTE OTRA VEZ </span>
    </div>
    <div class="main">
        <!-- <div class="datos">
            <p>Correo</p>
            <p>Contraseña</p>
            <p>ENVIAR</p>
        </div> -->
        <form action="" method= "POST" id="form">
            <div class="form">
                <h1>REGISTRARSE</h1>
                <!-- <div class="group">
                    <input type="text" name= "namelgl" id= "nombre" required > <span class= "barra"></span>
                    <label for="">NOMBRE</label>
                </div> -->
                <div class="group">
                    <input type="text" name= "usuariolg" id= "email" required plac > <span class= "barra"></span>
                    <label for="">EMAIL</label>
                </div>
                <div class="group">
                    <input type="password" name= "passlg" id= "pass"  required > <span class= "barra"></span>
                    <label for="">PASSWORD</label>
                </div>
                <input type="submit" class= "btnlg" value = "Iniciar Sesión">
                <p class="warning" id="warning"></p>
            </div>
        </form>
        <!-- <input type="password" name= "passlg" placeholder = "Contraseña" required >
        <input type="submit" class= "btnlg" value = "Iniciar Sesión" > -->
    </body>
    <script src="http://localhost/Login/js/main.js"></script>
    </html>