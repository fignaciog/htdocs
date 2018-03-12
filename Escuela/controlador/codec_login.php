<?php
	
	session_start();

	if(isset($_POST['entrar'])){

		if($_POST['user'] == "" && $_POST['pwd'] == ""){
			header('location:../index.php');
		}else{
				$tipo_entrada = "";
				$registrado = "no";

				include("../modelo/tabla_login.php");

				if(tabla_login() == "si")
				{
					$_SESSION['euser'] = $_POST['user'];
					mysql_close($conectar);
					header("location:../vista/index.php");

				}else{

					echo "<h1>Usuario no registrado</h1>";
					@mysql_close($conectar);
					echo '<a href="../controlador/logout.php">Cerrar session...</a>';

				}

		}

	}

?>