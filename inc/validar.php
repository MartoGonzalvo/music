<?php
include("conexion.php");
$con=conectar();
session_start();
	
	$nombre=$_POST['usuario'];
	$password= $_POST['contrasena'];
	$consulta = mysql_query("SELECT * FROM empleado WHERE nombre = '$nombre' and contrasenia = '$password' ");
 	
		if(  mysql_num_rows($consulta) != 1 ){
			header("Location: ../index.html"); //TODO: revisar
			
			exit();
		}else{
		
		if(id)
				
	}

	
?> 

	
	