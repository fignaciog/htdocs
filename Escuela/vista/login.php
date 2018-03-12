<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Intranet</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Entrar</h1>
	<form action="controlador/codec_login.php" method="post">
		<label>Usuario:<br><input type="text" name="user"></label>
		<br>
		<label>Contraseña:<br><input type="password" name="pwd"></label>
		<br>
		<input type="submit" name="entrar" value="Entrar">
	</form>
</body>
</html>