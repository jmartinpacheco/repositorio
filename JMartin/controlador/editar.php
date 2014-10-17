<?php 
	require_once './../conexion/conexion.php';

	$id = $_GET['id'];

	$editar_query = "DELETE FROM users WHERE id =".$id;

	$conexion->query($editar_query);

	header("Location: usuarios.php");
 ?>