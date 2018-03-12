<?php
session_start();
if(isset($_SESSION['euser']))
{
	switch($_SESSION['entrada'])
	{
		case "profesor":
			include("profesor.php");
			break;
		case "alumno":
			include("alumno.php");
			break;
		default:
			header("location:../index.php");
			break;
	}
}else{
	header("location:../index.php");
}
?>
