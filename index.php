<!--Conexion con la base de datos -->
<?php
   include('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PROYECTO</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head> 
<!--Se le agrega el color al fondo -->
<body style="max-width: 98%; margin: auto;" class="bg-danger p-2 text-dark bg-opacity-10">
	<br><h1 style="text-align: center;" class="text-decoration-underline">PROYECTO</h1>
	<!-- Se agrega el boton para agregar mas usuarios -->
	<button style="align-items: center;" type="button" class="btn btn-outline-success" onclick="agregar()" > + Agregar más usuarios </button><br><br>
<!--Agregamos una tabla con el estilo que se quiera  -->
	<table class="table" style="text-align: center;">
	 <thead class="table-primary">
	    <tr>
	      <th scope="col">id</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Apellido Paterno</th>
	      <th scope="col">Apellido Materno</th>
	      <th scope="col">Edad</th>
	      <th scope="col">Fecha de Nacimiento</th>
	      <th scope="col">Link Redes</th>
	      <th scope="col">email</th>
	      <th scope="col">Telefono</th>
	      <th scope="col">Opciones</th>
	    </tr>
	 </thead>
	<!-- Mandamos a traer los registros que estan almacenado en la base de datos -->
	  <tbody>
	  	<?php 
	  	foreach ($resultado as $r) { ?>
	  		<tr>
	  			<td><?php echo $r['id'];?></td>
	  			<td><?php echo $r['nombre'];?></td>
	  			<td><?php echo $r['ap1'];?></td>
	  			<td><?php echo $r['ap2'];?></td>
	  			<td><?php echo $r['edad'];?></td>
	  			<td><?php echo $r['fechaNacimiento'];?></td>
	  			<td><?php echo $r['linkRedes'];?></td>
	  			<td><?php echo $r['email'];?></td>
	  			<td><?php echo $r['telefono'];?></td>
	  			
	  			<td> 
	  		<!--Añadimos boton para editar mediante el id, abriendose en otro archivo -->
	          <a href=" <?php echo 'editUser.php?id='.$r['id']; ?>" class="btn btn-outline-warning">EDITAR</a>
	      <!--Se elimina el registro usando el id -->
	          <button type="button" class="btn btn-outline-danger" onclick="eliminar(<?php echo $r['id']; ?>)">ELIMINAR</button>
	  			</td>
	  		</tr>
	  	<?php } ?>
	  </tbody>
	</table>
<script>
//Funcion que hace que el boton reedirija a otra pantalla
	function agregar() {
    window.location.replace('addUser.php');
  }
	function eliminar(id){
    var confirmacion = confirm("¿Esta seguro?");
    if(confirmacion==true){
      window.location.replace('deleteUser.php?id='+id);
    }
		}
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>