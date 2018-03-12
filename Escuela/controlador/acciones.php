<?php
	
	@$getIndex = $_GET['index'];
	@$getTipo = $_GET['tipo'];
	echo $getIndex." ".$getTipo;

	include('../modelo/tabla_alumno.php');


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Notas</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table >
		<tr><th>Notas</th><th>Puntos acumulados</th></tr>
		<tr>
			<td>Primera: </td><td><input type="number"></td>
		</tr>
		<tr>
			<td>Segunda: </td><td><input type="number"></td>
		</tr>
		<tr>
			<td>Tercera: </td><td><input type="number"></td>
		</tr>
	</table>
</body>
</html>