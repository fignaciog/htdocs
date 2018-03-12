<?php
if(!isset($_SESSION['euser']))
{
	header("location:../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Escuela | Inicio | Alumno</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Bienvenido Alumno</h1>
	<a href="../controlador/logout.php">Cerrar session...</a>
</body>
</html>