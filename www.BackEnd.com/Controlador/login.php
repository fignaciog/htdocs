<?php
	
	$user = $_POST['user'];
	$pwd = $_POST['pwd'];
	
	$result = verificar($user,$pwd);
	
	if($result){
		header('location:../Vista/');
	}else{
		echo "<h3>Valores mal ingresados</h3>";
	}	
			
	
	function verificar($usr, $pwd){	
		if($usr == "Admin" && $pwd="admin123"){
			return true;
		}else{
			return false;
		}
	}

?>