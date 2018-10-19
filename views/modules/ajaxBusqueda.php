<?php 
require "../../models/conexio.php";
require_once "../../models/CapacitacionModel.php";
require_once "../../models/CapacitacionClienteModel.php";
require_once "../../models/UsuarioModel.php";

require_once "../../controllers/CapacitacionClienteController.php";
require_once "../../controllers/CapacitacionController.php";
require_once "../../controllers/UsuarioController.php";

class BusquedaAjax{

	public $palabraClave;
	public $IDCliente;
	public $ExisteUsuario;
	public $EditarUsuario;

	public function BuscarPalabraAjax(){
		$palabra=$this->palabraClave;
		$respuesta=CapacitacionController::BuscarPalabraController($palabra);
	}
	public function BuscarPalabraClienteAjax(){
		$palabra=$this->palabraClave;
		$id = $this->IDCliente;
		$respuesta=CapacitacionControllerCliente::BuscarPalabraClienteAjax($palabra,$id);
	}
	public function ExisteUsuarioAjax(){
		$usuario=$this->ExisteUsuario;
		$respuesta=UsuarioController::ExisteUsuarioController($usuario);
	}
	public function ExisteUsuarioAjaxEditar(){
		$Editar=$this->EditarUsuario;
		$IDCliente=$this->IDCliente;
		$respuesta=UsuarioController::ExisteUsuarioControllerEditar($Editar,$IDCliente);
		echo $respuesta;
	}


}
$d= new BusquedaAjax();
if(isset($_POST["palabraClave"])){
$d->palabraClave=$_POST["palabraClave"];
$d->BuscarPalabraAjax();
}
if(isset($_POST["palabraClaveCliente"])){
	$d->palabraClave=$_POST["palabraClaveCliente"];
	$d->IDCliente=$_POST["IDCliente"];
	$d->BuscarPalabraClienteAjax();
}
if(isset($_POST["UsuarioExiste"])){
	$d->ExisteUsuario=$_POST["UsuarioExiste"];
	$d-> ExisteUsuarioAjax();
}
if(isset($_POST["UsuarioExisteEditar"])){
	$d->EditarUsuario=$_POST["UsuarioExisteEditar"];
	$d->IDCliente=$_POST["UsuarioPrincipal"];
	$d->ExisteUsuarioAjaxEditar();
}