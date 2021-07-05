<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	

	<?php

		session_start();

		

		//variable de usuario*****

		$id_identificacion;
		$nombre;
		$apellido;
		$telefono;
		$direccion;
		$email;
		$edad;


		//variable de loggin*****

		$usuario_loggin;
		$clave;
		$repetirclave;
		$rol;
		$fk_nit_m1;
		


if(isset($_POST["id_identificacion"]) && 
	isset($_POST["nombre"]) &&	
	isset($_POST["apellido"]) &&
	isset($_POST["telefono"]) &&
	isset($_POST["direccion"]) &&
	isset($_POST["email"]) &&
	isset($_POST["edad"]) &&
	isset($_POST["usuario_loggin"]) &&
	isset($_POST["clave"]) &&
	isset($_POST["repetirclave"]))
	{

				
				//VAriables de Usuarios********

				$id_identificacion = htmlentities(addslashes($_POST["id_identificacion"]));

				$nombre = htmlentities(addslashes($_POST["nombre"]));

				$apellido = htmlentities(addslashes($_POST["apellido"]));
				
				$telefono = htmlentities(addslashes($_POST["telefono"]));

				$direccion = htmlentities(addslashes($_POST["direccion"]));

				$email = htmlentities(addslashes($_POST["email"]));

				$edad = htmlentities(addslashes($_POST["edad"]));

				$usuario_loggin = htmlentities(addslashes($_POST["usuario_loggin"]));

				$clave = htmlentities(addslashes($_POST["clave"]));

				$repetirclave = htmlentities(addslashes($_POST["repetirclave"]));

				$rol="cliente";

				$fk_nit_m1 = "26941992";


				//Proceso de registrar en la base de datos

				//Ejemplo de la consulta
				//	
//$sqlInsertar = "INSERT INTO tblclaves(USUARIO, CONTRA, EMAIL) VALUES ('$idusuario', '$contrasena', '$email')";
				date_default_timezone_set('America/Bogota');
			

				$fecha_registro = date("Y-m-d");
				$hora_registro = date("H:i:s");



				//Conexion a la base de datos.

				$mysqli= new mysqli("localhost", "root","","bdmad");

				if($mysqli->connect_errno){

					echo "falla al conectar mysql:(" . $mysqli->connect_errno . ")" . $mysqli-> 
					conect_errno;

					exit();
				}



				//Insertar datos en la tabla Login tblloggin

					$mysqli->set_charset("utf8");

					$consultasql="INSERT INTO tblloggin(pk_nick_loggin, password) values('$usuario_loggin','$clave')";

					$mysqli->real_query($consultasql);

					$verificar = $mysqli->affected_rows;

					if($verificar==0){

					

						$mysqli->close();

					}else if ($verificar>0){

						

						//Fin de inserción de la tabla loggin.

						//Insertar datos en la tabla de Usuarios tblusuarios
					

						$consultasql="INSERT INTO tblusuario(id_identificacion, fk_nit_m1, fk_nick_loggin_1, nombre, apellido, telefono, direccion, email, fecha_registro, hora_registro, edad, rol) values('$id_identificacion', '$fk_nit_m1', '$usuario_loggin', '$nombre', '$apellido', '$telefono', '$direccion','$email', '$fecha_registro','$hora_registro', '$edad', '$rol')";

						$mysqli->real_query($consultasql);

						$verificar = $mysqli->affected_rows;

						if($verificar==0){

							$mysqli->close();

							header("location:errorvariables.php");

							

						}else if ($verificar>0){

							$mysqli->close();

							

							if(isset($_SESSION['usuario_sesion'])){

								if($_SESSION['rol'] == 'administrador'){

									$_SESSION['mensajeExitoso'] = 'ok';
									
									header('location:interfaz_admin.php');


								}else if($_SESSION['rol'] == 'cliente'){

									header('location:interfaz_usuario.php');
								}

							}else{

								header("location:registroexitoso.php");
							}
							
							

						}else{

							$mysqli->close();
							header("location:errorvariables.php");
							


						}
					}else{

						$mysqli->close();
						header("location:errorvariables.php");

						

						
					}
					//Fin de insercion de la tabla Usuario tblusuarios.

				

		}else{

			
			header("location:errorvariables.php");

	}




		?>
	</body>
</html>