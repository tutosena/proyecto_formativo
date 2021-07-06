<?php

	session_start();

	$id_eliminar = $_SESSION['id_usuario'];

	include('funciones.php');

	$miconexion = conectarbd();

	$consultasql = "SELECT id_identificacion, email FROM tblusuario WHERE id_identificacion='{$id_eliminar}'";


	$resultado = consultar($miconexion,$consultasql);

	if(!empty($resultado)){

		$miconexion = conectarbd();

		$emailEliminar = $resultado->email;

		$consultasql = "DELETE FROM tblloggin WHERE pk_nick_loggin='{$emailEliminar}'";

		$resultadoEliminado = eliminar($miconexion,$consultasql);

			if($resultadoEliminado>0){

				$_SESSION['controlAdmin'] = "eliminar";
				header('location:interfaz_admin.php');

			}else{


				$_SESSION['controlAdmin'] = "errorEliminar";
				header('location:interfaz_admin.php');

			}

		


	}else{

		$_SESSION['controlAdmin'] = "errorEliminar";
		header('location:interfaz_admin.php');

	}


	

?>