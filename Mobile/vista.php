<?php include'logica.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style>
		@import "style.css";
	</style>

	<title>Resultado</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Resultado</h1>
	<ul>
		<li><h2>Monto: <span class="vs">RD$ <?php echo $_SESSION["getMonto"];?></span></h2></li>
		<li><h2>Gasto: <span class="vs">RD$ <?php echo $_SESSION["getUso"];?></span></h2></li>
		<li><h2>Reembolso: <span class="vs">RD$ <?php echo $_SESSION["getDv"];?></span></h2></li>
	</ul>
	<a href="reset.php"><div class="aButton"><p class="aP">Inicio</p></div></a>	
	
			
		
</body>
</html>