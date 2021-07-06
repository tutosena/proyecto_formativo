<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>error</title>
</head>
<body>
	<?php

		session_start();

		if(isset($_SESSION['controlAdmin']) && isset($_SESSION['id_usuario'])){



		
		
		echo $_SESSION['controlAdmin'] . "<br>";

		echo $_SESSION['id_usuario'] . "<br>";


	}else{


	}


	?>
</body>
</html>