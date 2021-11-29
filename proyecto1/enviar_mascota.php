<?php 

include("con_db.php");



	if(isset($_POST['submit'])){
		$nombre_mascota=$_POST["nombre_mascota"];
		$edad=$_POST["edad"];
		$raza=$_POST["raza"];
		$descripcion=$_POST["descripcion"];
		$sexo=$_POST["sexo"];


		$sql= "INSERT INTO mascota VALUES('$nombre_mascota', '$edad','$raza', '$descripcion', '$sexo')";

		$ejecutar= mysqli_query($enlace, $sql);

		if(!$ejecutar){
			echo("Ha ocurrido un error en la base de datos<br><a href='index.php'>volver</a>");
		}else{
			echo"Se ha registrado con exito!<br><a href='index.php'>volver</a>";
		}


	}



?>