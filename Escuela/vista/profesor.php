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
	<title>Escuela | Inicio | Profesor</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Bienvenido Profersor: <?php echo $_SESSION['euser']; ?></h1>
	<a href="../controlador/logout.php">Cerrar session...</a>

	<table border="1" cellpadding="5">
		<tr>
			<th>Alumnos</th>
			<!--<th colspan="7">Calificacion</th>-->
			<th>Español</th>
			<th>Matematica</th>
			<th>Historia</th>
			<th colspan="3">Acciones</th>
		</tr>
	<?php
		include("../modelo/tabla_alumno.php");
		$tabla = tabla_alumno();
		
		while($ver = mysql_fetch_assoc($tabla)){
			echo "<tr><td>".$ver['nombre']."</td>";
			echo "<td>".$ver['A']."</td>".
				 "<td>".$ver['B']."</td>".
				 "<td>".$ver['C']."</td>";
			echo "<td>"."<a href='../controlador/acciones.php?index=".$ver['id']."&tipo="'add'"'>Agregar</a>"."</td>".
				 "<td>"."<a href='../controlador/acciones.php?index=".$ver['id']."&tipo="'edit'"'>Editar</a>"."</td>".
				 "<td>"."<a href='../controlador/acciones.php?index=".$ver['id']."&tipo="'delete'"'>Eliminar</a>"."</td><tr>";
		}

		mysql_close(conectar_db());
	?>
	</table>
</body>
</html>