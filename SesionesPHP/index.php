<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<br>
	<div class="row">
		<div class="col-md-2">		
		</div>

		<div class="col-md-8">
			<form action="validar.php" id="uno" name="form1" method="post">
			<legend>login</legend>
				<input type="hidden" name="priv" value="1">
					<div class="input-group">
						<span class="input-group-addon">nombre</span>
						<input type="text" class="form-control" placeholder="ingresa nombre" name="nombre">
					</div>
						<br>
					<div class="input-group">
						<span class="input-group-addon">contraseña</span>
						<input type="password" class="form-control" placeholder="ingresa contraseña" name="contra"/>										
					</div>
					<br>
				<button type="submit" class="btn btn-success">Entrar</button>
			</form>
		</div>
	
</body>
</html>