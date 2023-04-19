<?php 
	include('conexion.php');
	//recuperar variables
	$nombre= $_POST['nombre'];
	$ap1= $_POST['ap1'];
	$ap2= $_POST['ap2'];
	$edad= $_POST['edad'];
	$fechaNacimiento= $_POST['fechaNacimiento'];
	$linkRedes= $_POST['linkRedes'];
	$email= $_POST['email'];
	$telefono= $_POST['telefono'];
	$id=$_POST['id'];
	//Scrip para editar todos los campos sin modificar el id
	$sql="UPDATE usuarios SET nombre='$nombre',ap1='$ap1',ap2='$ap2',edad='$edad',fechaNacimiento='$fechaNacimiento',linkRedes='$linkRedes',email='$email',telefono='$telefono' WHERE id=$id";


	if (mysqli_query($con2,$sql)) {
		//Actualizacion exitosa y se reedirige al index
		header("Location: index.php");
	}else{
		//No se pudo actualizar
		echo "No se pudo actualizar";
	}
 ?>