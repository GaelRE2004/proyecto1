<?php

$servidor="localhost";
$usuario="root";
$clave="";
$base_datos="apac_db";

$enlace= mysqli_connect($servidor, $usuario, $clave, $base_datos);

if(!$enlace){
    echo"Error en la conexion"; 
} else{
    echo"Conexion exitosa<br>";
}

?>