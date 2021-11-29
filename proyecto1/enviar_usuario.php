<?php 

include("con_db.php");



	if(isset($_POST['registrarse'])){
		$nombre_usuario=$_POST["nombre_usuario"];
		$apellido=$_POST["apellido"];
		$curp=$_POST["curp"];
		$direccion=$_POST["direccion"];
		$telefono=$_POST["telefono"];
		$correo=$_POST["correo"];
		$pasword=$_POST["pasword"];


		$sql= "INSERT INTO usuario VALUES('$nombre_usuario', '$apellido','$curp', '$direccion', '$telefono', '$correo', '$pasword')";

		$ejecutar= mysqli_query($enlace, $sql);

		if(!$ejecutar){
			echo("Ha ocurrido un error en la base de datos<br><a href='index.php'>volver</a>");
		}else{
			echo"Se ha registrado con exito!<br><a href='index.php'>volver</a>";
		}


	}



?>