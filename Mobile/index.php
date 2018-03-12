<?php include 'logica.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>App - Finance</title>
	
	<style>
		@import "style.css";

		.rr {
			color: red;
		}
	</style>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">	
		<h1>Inicio</h1>

		<h3>Monto:</h3>
		<input id="intro" type="number" name="monto">
		<span class="rr">* <?php echo "<br>$montorr"; ?></span>
		<br>
		<h3>Gasto:</h3>
		<input id="intro" type="number" name="uso">
		<span class="rr">* <?php echo "<br>$usorr"; ?></span>
		<br>
		<span class="rr"><?php echo $msg;?></span>
		<br>	
		<input type="submit" id="setIntroButton" name="set" value="Enter">	
	</form>
</body>
</html>