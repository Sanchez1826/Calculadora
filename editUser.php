<?php 
if (isset($_GET['id'])){
	$id=$_GET['id'];
	//Consulta a la base de datos
	include('conexion.php');
	//Se realiza la consulta por medio de un selecc mediante el id
	$sql='SELECT * FROM usuarios WHERE id='.$id;
	$resultado= $con2->query($sql);
	$resultado=mysqli_fetch_assoc($resultado);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EDITAR USUARIOS</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
 <!-- Agregamos estilo para los label para que esten alineados y del mismo tamaño -->
	<style>
		label{
			display: inline-block;
			width: 90px;
				}
	</style>

</head>
<!-- Se le da estilo a toda la pagina como el color, borde, margen y el padding -->
<body style="max-width: 60%; margin: auto; border:4px solid darkred; padding: 15px;" class="bg-danger p-2 text-dark bg-opacity-10" >

	<br><h1 style="text-align: center;" class="text-decoration-underline">EDITAR DATOS DEL USUARIO</h1><br><br>
<!-- Se agrega un form para que al presionar el boton mande a llamar el archivo editar donde se tiene la consulta  -->
<form action="editar.php" method="POST">
	<div class="container text-center">
	  <div class="row align-items-start">
	    <div class="col">
	    			<!--Input oculto con el id -->
	    			<input type="text" hidden name="id" value="<?php echo $resultado['id'] ?>">

	      			
					<label for="nombre">Nombre</label>
					<!-- Input con los datos precargados de la base de datos  -->
					<input type="text" name="nombre" id="nombre" required value="<?php echo $resultado['nombre']; ?>"><br><br>

					<label for="ap1">Apellido Paterno</label>
					<input type="text" name="ap1" id="ap1" required value="<?php echo $resultado['ap1']; ?>"><br><br>

					<label for="ap2">Apellido Materno</label>
					<input type="text" name="ap2" id="ap2" required value="<?php echo $resultado['ap2']; ?>"><br><br>

					<label for="edad">Edad</label>
					<input type="number" name="edad" id="edad" required value="<?php echo $resultado['edad']; ?>"><br><br>
	    </div>
	    <div class="col">
	    	<!-- En este input se trae la fecha y se guarda con el formato que ya esta establecido en la base de datos -->
		      <p>Fecha
			    <?php
					date('');
					$fecha_actual = date("Y-m-d");
					
					 ?>
	    		<input type="date" name="fechaNacimiento" id="fechaNacimiento" class="box" required value="<?php echo $resultado['fechaNacimiento']; ?>"></p>

					<label for="linkRedes">Link Redes</label>
					<input type="text" name="linkRedes" id="linkRedes" value="<?php echo $resultado['linkRedes']; ?>"><br><br>

					<label for="email">Email</label>
					<input type="email" name="email" id="email" value="<?php echo $resultado['email']; ?>"><br><br>

					<label for="telefono">Telefono</label>
					<input type="number" name="telefono" id="telefono" value="<?php echo $resultado['telefono']; ?>"><br><br>
	    </div>
	    <!-- Boton para guardar lops datos  -->
	  	<button type="submit" class="btn btn-outline-success"> EDITAR DATOS </button><br><br>
	  </div>
	</div>
</form>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>