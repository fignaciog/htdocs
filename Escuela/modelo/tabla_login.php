<?php
	function tabla_login(){

		include("DataBase.php");
		$registrado = "no";

		mysql_select_db("escuela", conectar_db());
		$query = "SELECT * FROM login";

		$link = mysql_query($query, conectar_db());

		while($buscar = mysql_fetch_assoc($link))
		{
			if($buscar['user'] == $_POST['user'] && $buscar['password'] == $_POST['pwd'])
			{
				$_SESSION['entrada'] = $buscar['tipo'];
				$registrado = "si";
			}
		}
		return $registrado;
	}
?>