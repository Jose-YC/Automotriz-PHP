<?php
include 'conexion.php';
require('../reportePDF/fpdf.php');
$dni = addslashes($_POST['dni']);
$nombre = addslashes($_POST['nombre']);
$apellido = addslashes($_POST['apellido']);
$correo = addslashes($_POST['correo']);
$telefono = addslashes($_POST['telefono']);
$placa = addslashes($_POST['placa']);
$modelo = addslashes($_POST['modelo']);
$marca = addslashes($_POST['marca']);
$color = addslashes($_POST['color']);
$problema = addslashes($_POST['problema']);
$costo = addslashes($_POST['costo']);
$especifico = addslashes($_POST['especificoproblema']);
$fecha = addslashes($_POST['fecha']);



if (!$row1 == 0) { //si no hay nada
    header('Location: ../registrarcliente.php');
} else { //si hay 
    $sql1 = "INSERT INTO clientes (`dni`,`nombre`, `apellido`, `correo`, `telefono`, `placa`, `modelo`, `vehículo`, `problema`, `problema_especifico`, `color`, `costo`,`fecha_llegada`) VALUES
    ('$dni','$nombre','$apellido','$correo','$telefono','$placa','$modelo','$marca','$problema','$especifico','$color','$costo','$fecha')";
$ejecutado1 = mysqli_query($conexion, $sql1);
    if ($ejecutado1) {
        header('Location: ../mantenimiento.php');
    } else {
        header('Location: ../clientes.php');
    }
}
