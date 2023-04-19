<?php 
	include('conexion.php');
	//recuperar variables
	$id=$_GET['id'];	
 //Scrip para borrar un registro por medio del id
	$sql="DELETE FROM usuarios WHERE id=$id";


	if (mysqli_query($con2,$sql)) {
		//Eliminacion exitosa y se reedirige al index
		header("Location: index.php");
	}else{
		//No se pudo eliminar
		echo "No se pudo eliminar";
	}
 ?>