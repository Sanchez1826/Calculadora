<?php
//se establece la conexion con la base de datos creada
   $server   = "localhost";
   $username = "root";
   $password = '';
   $db2       = 'proyecto';
   $con2      = mysqli_connect($server, $username, $password, $db2);
   header("Content-Type: text/html;charset=utf-8");
   $acentos = $con2->query("SET NAMES 'utf8'");
//Usamos la tabla de usuarios
   $sql='SELECT * FROM usuarios';
   $resultado= $con2->query($sql);
?>