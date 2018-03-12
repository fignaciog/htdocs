<?php
	session_start();
	//	Variables
	$monto = $uso = $dv = "";
	$msg = $montorr = $usorr = "";

	//	Valores

	//	Logica
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST['monto'])) {
			$montorr = "Valor Requerido";
		}else{
			$monto = $_POST['monto'];
			$_SESSION["getMonto"] = $monto;
		}
		
		if(empty($_POST['uso'])){
			$usorr = "Valor Requerido";
		}else{
			$uso = $_POST['uso'];
			$_SESSION["getUso"] = $uso;
		}

		if(empty($montorr) and empty($usorr)){
			if($monto < $uso){
				$msg = "El (Monto) no debe ser Menor que el (Gasto)";
			}else{
				$dv = $monto - $uso;
				$_SESSION["getDv"] = $dv;
				header('Location: vista.php');
			}
		}

	}
?>