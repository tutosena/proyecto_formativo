<?php

			session_start();

            if(!isset($_SESSION['usuario_sesion'])){

                header("location:index.php");
                
            }

            if(isset($_GET['control'])){


            	if($_GET['control']=='regUsua'){


            		$_SESSION['controlAdmin'] = $_GET['control'];

            		header("location:interfaz_admin.php");


            	}elseif($_GET['control'] == 'cliIdenti'){


            		$_SESSION['controlAdmin'] = $_GET['control'];

            		header("location:interfaz_admin.php");


            	}elseif($_GET['control'] == 'cliUsua'){


            		$_SESSION['controlAdmin'] = $_GET['control'];

            		header("location:interfaz_admin.php");

            	}

            	


            }else{

            	header('location:interfaz_admin.php');
            }




?>