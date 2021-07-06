<?php

	session_start();

		$email_antiguo = $_SESSION['correo'];
		$id_antiguo = $_SESSION['id_antiguo'];

		//variable de usuario*****

		$id_identificacion;
		$nombre;
		$apellido;
		$tipo;
		$edad;
		$telefono;
		$direccion;
		$email;
		$fecha_registro;
		$hora_reg;
		


		//variable de loggin*****

		$usuario_nick;
		$clave;
		$repetir_clave;



		if(isset($_POST["id_identificacion"]) && 
			isset($_POST["nombre"]) &&	
			isset($_POST["apellido"]) &&
			isset($_POST['tipo']) &&
			isset($_POST["telefono"]) &&
			isset($_POST["direccion"]) &&
			isset($_POST["email"]) &&
			isset($_POST["edad"]) &&
			isset($_POST["fecha_registro"]) &&
			isset($_POST["hora_reg"]) &&
			isset($_POST["usuario_nick"]) &&
			isset($_POST["clave"]) &&
			isset($_POST["repetir_clave"])) 

	{
		$id_identificacion = $_POST["id_identificacion"];
		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$tipo = $_POST['tipo'];
		$edad = $_POST["edad"];
		$telefono = $_POST["telefono"];
		$direccion = $_POST["direccion"];
		$email = $_POST["email"];
		$fecha_registro = $_POST["fecha_registro"];
		$hora_reg = $_POST["hora_reg"];
		


		//variable de loggin*****

		$usuario_nick = $_POST["usuario_nick"];
		$clave = $_POST["clave"];
		$repetir_clave = $_POST["repetir_clave"];



		include('funciones.php');

		$miconexion = conectarbd();

		

		$miconsultasql="UPDATE tblloggin, tblusuario SET pk_nick_loggin = '{$email}', password = '{$clave}', fk_nick_loggin_1='{$email}', email='{$email}', id_identificacion = '{$id_identificacion}', nombre ='{$nombre}', apellido='{$apellido}', telefono='{$telefono}', direccion='{$direccion}', fecha_registro='{$fecha_registro}', hora_registro='{$hora_reg}', edad='{$edad}', rol='{$tipo}'WHERE tblloggin.pk_nick_loggin = tblusuario.fk_nick_loggin_1 AND pk_nick_loggin='{$email_antiguo}' AND id_identificacion = '{$id_antiguo}'";


		$resultadoModiLogin = modificar($miconexion,$miconsultasql);

		

			if($resultadoModiLogin>0){

				

				$_SESSION['controlAdmin'] = "modiExitosa";

				header('location:interfaz_admin.php');


			}elseif($resultadoModiLogin==0){

					

					$_SESSION['controlAdmin'] = "modiExitosa";

					header('location:interfaz_admin.php');

				
			}else{

				
				$_SERVER['controlAdmin'] = "errorModi";
				header('location:interfaz_admin.php');

			}





	}else{

		$_SERVER['controlAdmin'] = "errorModi";
		header('location:interfaz_admin.php');
	}


?>