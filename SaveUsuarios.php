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


	$sql="INSERT INTO usuarios (nombre, ap1, ap2, edad, fechaNacimiento, linkRedes, email, telefono) 	VALUES ('$nombre','$ap1','$ap2','$edad','$fechaNacimiento','$linkRedes','$email','$telefono')";

	echo $sql;

	//Validar que este bien echa la consulta sql

	$resultado= $con2->query($sql);
	header("Location: index.php");
 ?> 