<?php
include 'conexion.php';

$usuario = $_POST['usuario'];
$contraseña = md5(addslashes($_POST['contraseña']));
$sql = "SELECT * FROM usuarios WHERE nombre='$usuario' and clave='$contraseña'";
$ejecutando = mysqli_query($conexion, $sql);
$row = mysqli_fetch_row($ejecutando);

if ($row == 0) {
    header('Location: ../index.php');
    echo '<script language="javascript">';
	echo 'alert("usuario o contraseña incorrecta ");';
	echo 'window.location="index.php";';
	echo '</script>';
} else {
    session_start();
    $_SESSION['usuario']= $row[0] ;
    $_SESSION['correo']= $row[1] ;

    header('Location: ../home.php');
}
