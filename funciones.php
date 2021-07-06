<?php

	
	
	function conectarbd(){

		include('variablesConexion.php');


		$conexion = new mysqli($localhost,$usuariobd,$clavebd,$nombrebd);

		if($conexion->connect_errno){

			die("Error al conectar con la base de datos " . $conexion->connect_errno);

		}

		return $conexion;


	}

	function consultar($conexion,$consultasql){

		$resultado = $conexion->query($consultasql);

		$numFilas = $resultado->num_rows;

		if($numFilas>0){

			$fila = $resultado->fetch_object();

			$conexion->close();

			return $fila;

		}else{

			$conexion->close();

			$fila = $resultado->fetch_object();

			return $fila;

		}


			

	}

	function insertar($conexion,$consultasql){

		$resultado = $conexion->real_query($consultasql);

		$numFilas = $resultado->affected_rows;

		if($numFilas >0){

			$fila = $resultado->fetch_object();

			$conexion->close();

			return $fila;

		}else{

			$conexion->close();

			$fila = $resultado->fetch_object();

			return $fila;

		}

	}

	function eliminar($conexion,$consultasql){


		$resultado = $conexion->real_query($consultasql);

		$numFilas = $conexion->affected_rows;

		if($numFilas >0){

			$conexion->close();


			return $numFilas;

		}else{

			$conexion->close();

			
			return $numFilas;

		}
	}

	function modificar($conexion,$consultasql){

		$resultado = $conexion->real_query($consultasql);

		
		if($conexion->affected_rows>0){

			$numFilas = $conexion->affected_rows;

			$conexion->close();

			return $numFilas;

		}else{

			

			$numFilas = $conexion->affected_rows;

			$conexion->close();

			return $numFilas;

		}

	}
	

	function volverInicio(){

		if(isset($_SESSION['controlAdmin'])){

			if($_SESSION['rol'] == 'administrador'){

				unset($_SESSION['controlAdmin']);

				header('location:interfaz_admin.php');

			}

		}

		

			
	}
		






?>