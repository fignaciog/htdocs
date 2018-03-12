<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>index</title>
	<link rel="stylesheet" href="">
	<style>
		#information {
			width: 50%;
			margin: 0 auto;
		}

		#Formulario {
			width: 50%;
			margin: 0 auto;
		}

		#teacher {
			width: 50%;
			margin: 0 auto;
		}

		#Notas {
			width: 50%;
			margin: 0 auto;
		}
		legend {
			font-size: 18px;
			font-weight: bold;
		}

		label {
			font-weight: bold;
			font-family: arial;
			font-size: 12px;
		}
		h1 {
			font-family: arial;
		}

		.notas {
			float: left;
			width: 200px;
		}

		input[type = "submit"]{
			margin: 10px;
		}

	</style>
</head>
<body>	
	

	<div id="teacher">
	<h1>Registro de Notas</h1>
	<form action="index.php" method="POST">
		<fieldset>
			<legend>Profesor</legend>
			<label for="nomTeacher">Usuario</label>
			<br>
			<input type="text" name="tea_name" required>
			<br>
			<label for="pass">Password</label>
			<br>
			<input type="password" name="pass" required>
			<br>
			<label for="pass">Repeat Password</label>
			<br>
			<input type="password" name="Pass" required>
			<br>
			<input type="submit" value="Enviar" name="set"><input type="reset" value="clear">
		</fieldset>
	</div>
	<?php 

	if(isset($_POST["set"])){

		if($_POST["pass"] == $_POST["Pass"]){
			@include 'Estudiante.php';
			@include 'Notas.php';
		}
	}

	?>
	</form>	
</body>
</html>