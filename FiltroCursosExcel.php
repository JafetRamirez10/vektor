<?php 
require_once "models/conexio.php";
require_once "models/CursosModel.php";
require_once "controllers/CursosController.php";
session_start();

if(!$_SESSION["validar"]){

echo '<script>location.href="index.php"</script>';

	exit();
}else{
	include "views/modules/FiltroCursosExcel.php";
}