<?php 
$host = 'localhost';
$user = 'root';
$password = 'root';
$database = 'proyecto';

$conexion = mysqli_connect($host, $user, $password, $database);

if(!$conexion) echo 'Not Connect'
?>