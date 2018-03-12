<?php

function conectar_db(){
	$servidor = "127.0.0.1";
	$nombredb = "escuela";
	$user = "root";
	$pwd = "";
	return mysql_connect($servidor, $user, $pwd);
}

?>


