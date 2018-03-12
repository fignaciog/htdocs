<?php

function tabla_alumno(){
	include("DataBase.php");
	mysql_select_db("escuela", conectar_db());
	$query = "SELECT * FROM alumno";
	return mysql_query($query, conectar_db());
}


?>