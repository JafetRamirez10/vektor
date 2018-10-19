<?php 
require "../../models/conexio.php";
require_once "../../models/UsuarioModel.php";
require_once "../../models/CapacitacionModel.php";
require_once "../../controllers/CapacitacionController.php";
require_once "../../controllers/UsuarioController.php";

class Ajax{
	public $existeUsuario;
	public $existeCurso;
	public $existeTipo;
	public $empresaSub;
	public $empresaPri;
	public $pasa;
	public $nopasa;
	public $IDCliente;

	public function ExisteClienteAjax(){
		$datos = $this->existeUsuario;
		$respuesta = CapacitacionController::ExistaUsarioController($datos);
		echo $respuesta;
	}
	public function ExisteCursoAjax(){
		$datos=$this->existeCurso;
		$respuesta = CapacitacionController::ExistaCursoController($datos);
		echo $respuesta;
	}
	public function ExisteTipoAjax(){
		$datos=$this->existeTipo;
		$respuesta=CapacitacionController::ExistaTipoController($datos);
		echo $respuesta;
	}
	public function AgregarRelacion(){
		$empresaPri=$this->empresaPri;
		$empresaSub=$this->empresaSub;
		$respuesta=UsuarioController::AgregarRelacionEmpresas($empresaPri,$empresaSub);
		echo $respuesta;
	}
	public function Pasa(){
		$nopasa=$this->nopasa;
		$IDCliente=$this->IDCliente;
		$respuesta=CapacitacionController::RequisitosController($nopasa,$IDCliente);
		echo $respuesta;

	}
	public function VieneNoPasa(){
		$pasa=$this->pasa;
		$IDCliente=$this->IDCliente;
		$respuesta=CapacitacionController::RequisitosController($pasa,$IDCliente);
		echo $respuesta;

	}
}

$a = new Ajax();
if(isset($_POST["ExisteCliente"])){
$a->existeUsuario= $_POST["ExisteCliente"];
$a->ExisteClienteAjax();
}


$b= new Ajax();
if(isset($_POST["ExisteCurso"])){
	$b->existeCurso=$_POST["ExisteCurso"];
	$b->ExisteCursoAjax();
}

$c= new Ajax();
if(isset($_POST["ExisteTipo"])){
	$c->existeTipo=$_POST["ExisteTipo"];
	$c->ExisteTipoAjax();
}

$e = new Ajax();
if(isset($_POST["empresaprimaria"])){
	$e->empresaPri=$_POST["empresaprimaria"];
	$e->empresaSub=$_POST["empresasubcontratada"];
	$e->AgregarRelacion();
}

$f= new Ajax();
if(isset($_POST["NoPasa"])){
	$f->nopasa=1;
	$f->IDCliente=$_POST["NoPasa"];
	$f->Pasa();
}

$h=new Ajax();
if(isset($_POST["Pasa"])){
	$h->pasa=0;
	$h->IDCliente=$_POST["Pasa"];
	$h->VieneNoPasa();
}