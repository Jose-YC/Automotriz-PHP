<?php


session_start();
if(isset($_SESSION['usuario'])){
    $usuario =$_SESSION['usuario'] ;
    echo $usuario;
    include("prueba1.php");

}else{
    echo "hola";
    
}


