<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>validacion</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<?php
	$nomVal = "PepeElToro";
	$contVal = "torito";
	$nombre = $_POST["nombre"];
	$contrasenia = $_POST["contra"];	

	if(($nombre != "") && ($contrasenia != "")){	
		if($nombre==$nomVal && $contrasenia==$contVal){	
			header("Location: inok.php");	
		}
		else{
			echo "<h1>olvidaste algun dato vuelve a intentarlo</h1>";
		}
	}
	else{
		header("Location: inbad.php"); 
	}	
?>
</body>
</html>