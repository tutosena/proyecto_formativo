<?php
	session_start();

	if(isset($_GET['iden']) && isset($_GET['modi'])){

		

		$_SESSION['controlAdmin'] = "modificar";
		$_SESSION['id_usuario'] = $_GET['iden'];

		header('location:interfaz_admin.php');


	}elseif(isset($_GET['iden']) && isset($_GET['eli'])){

		

		$_SESSION['controlAdmin'] = "eliminar";
		$_SESSION['id_usuario'] = $_GET['iden'];

		header("location:eliminarUsuario.php");

		

	

	}else{

		echo "Error para la operación";
	}





?>