<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Variables</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php

		$nombre = 'ignacio';
		$edad = 23;

		echo "Nombre: ".$nombre;
		echo " Edad: ".$edad;

		function suma($a, $b){
			return $a+$b;
		}

		echo suma(5,7);

	?>
</body>
</html>