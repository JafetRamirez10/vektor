<?php 
	$capacitacion= new CapacitacionController();
	$capacitacion->EliminarCapacitacionController();
		$capacitacion->IngresarCapacitacion();
		$capacitacion-> EditarCapacitacionController();
		$capacitacion->MostrarClientesController();
		include "modalesCapacitacion.php";

	if(isset($_POST["cliente"])){
		$capacitacion-> FiltroCapacitacionController();
	}else{
		$capacitacion->CapacitacionControllers();
	}
	

 ?>