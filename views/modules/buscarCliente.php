<?php
$usuario = new UsuarioController();
if(isset($_POST["cliente"])){
	$usuario->FiltroControllerUsuario();
}else{
	$usuario->MostrarUsuariosCont();
}

$usuario-> MostrarNombreCliente();
$usuario->IngresoUsuarioController();
$usuario->EditarUsuarioController();
$usuario->EliminarUsuarioController();
include "modalesClientes.php";

