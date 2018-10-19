<?php
require_once "models/conexio.php";
require_once "models/UsuarioModel.php";
require_once "controllers/UsuarioController.php";
session_start();

if(!$_SESSION["validar"]){

echo '<script>location.href="index.php"</script>';

	exit();
}else{
	include "views/modules/clientesexcel.php";
}

?>