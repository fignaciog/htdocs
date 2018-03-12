<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Resgistro Usuario</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="post" action="Controlador/registro.php">
		<input type="text" name="nombre" value="Nombre">
		<br>
		<input type="text" name="apellido" value="Apellido">
		<br>
		<input type="number" name="edad" value="Edad">
		<br>
		<i>Sexo ?</i>
		<br>
		<input type="radio" name="Sexo" value="Masculino" id="m"><label for="m">Masculino</label>
		<input type="radio" name="Sexo" value="Femenino" id="f"><label for="f">Femenina</label>
		<br>
		<i>Es Casado/a ?</i>
		<br>
		<input type="radio" name="estado" value="Si" id="si"><label for="si">Si</label>
		<input type="radio" name="estado" value="No" id="no"><label for="no">No</label>
		<br>
		<input type="submit" name="set" value="Enviar">
		<input type="reset" value="Nuevo">
	</form>
</body>
</html>