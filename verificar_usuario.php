<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		table{
			border: 1px solid black;
		}
		td{

			border: 1px solid black;
		}
	</style>
</head>
<body>
	

	<?php

		

		

		//variable de loggin*****

		$usuario_loggin;
		$clave;
		$rol;
		

		if(
			isset($_POST["usuario_loggin"]) &&
			isset($_POST["clave"]))
			{

				
				//VAriables de Usuarios********

				

				$usuario_loggin = htmlentities(addslashes($_POST["usuario_loggin"]));

				$clave = htmlentities(addslashes($_POST["clave"]));

				


	
				//Conexion a la base de datos.

				$mysqli= new mysqli("localhost","root","","bdmad");

				if($mysqli->connect_errno){

					$mysqli->close();

					header("location:errorvariables.php");
					
					exit();
				}



				//Verificar datos en la tabla Login tblloggin

					$mysqli->set_charset("utf8");

					$consultasql="SELECT pk_nick_loggin, password FROM tblloggin WHERE pk_nick_loggin='$usuario_loggin' AND password='$clave'";

					

					$resultado = $mysqli->query($consultasql);

					$datosresultado = $resultado->num_rows;

				
						if($datosresultado==1){

							$consultasql ="SELECT nombre, rol FROM tblusuario WHERE fk_nick_loggin_1 ='$usuario_loggin'";

							$resultado = $mysqli->query($consultasql);

							if($dato=$resultado->num_rows>0){

								echo "Si afecto al matriz";

								$datosresultado = $resultado->fetch_all(MYSQLI_ASSOC);

								foreach ($datosresultado as $midato) {

									session_start();
									$_SESSION['usuario_sesion'] =$midato['nombre'];

									$rol = $midato['rol'];
								}


							}


							 
							$mysqli->close();

							if($rol == 'administrador')	{

								$_SESSION['rol'] = $rol;

								header("location:interfaz_admin.php");

							}elseif($rol=='cliente'){

								$_SESSION['rol'] = $rol;

								header("location:interfaz_usuario.php");
								
							}else{

								header("location:index.php");
							}

							

						}else{
							

							header("location:errorvariables.php");
						}
					
				

		}else{

			
			header("location:errorvariables.php");

	}




		?>
	</body>
</html>