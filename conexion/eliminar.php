<?php
include 'conexion.php';


$id = $_GET['id'];

$sql = "DELETE FROM clientes WHERE id='$id'";
if(mysqli_query($conexion, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro eliminado exitósamente");';
	echo 'window.location="../mantenimiento.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="../mantenimiento.php";';
	echo '</script>';
}

?>