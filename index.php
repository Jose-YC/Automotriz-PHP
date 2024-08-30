<?php 
    include 'conexion/conexion.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller </title>
    <link rel="stylesheet" href="boostrap/css/login.css">
    <link rel="stylesheet" href="boostrap/css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">

</head>

<body>
    <form action="conexion/login.php" method="post">
        <h1 class="animate__animated animate__backInLeft">Taller mecanica</h1>
        <p>Usuario <input type="text" placeholder="ingrese su nombre" name="usuario"></p>
        <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
        <input type="submit" value="Ingresar">
        <div class="register-link">
            <p>
            You do not have an account yet?
                <a href="registrar.php">sign up</a>
            </p>
        </div>

    </form>
</body>

</html>