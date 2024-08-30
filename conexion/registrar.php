<?php 
    include 'conexion.php';

    $name = addslashes($_POST['username']);
    $email = addslashes($_POST['email']);
    $password = md5(addslashes($_POST['password']));

    $sql =  "SELECT * FROM usuarios WHERE nombre='$name'";
    $ejecutando = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_array($ejecutando);

    if(!$row == 0){//si no hay nada
        header('Location: ../registrar.php');
    } else {//si hay 
        $sql = "INSERT INTO usuarios (`nombre`, `correo`, `clave`) VALUES ('$name', '$email', '$password')";
        $ejecutado = mysqli_query($conexion, $sql);
    
        if($ejecutado){
            header('Location: ../index.php');
        } else {
            header('Location: ../taller.php');
        }
    }
?> 