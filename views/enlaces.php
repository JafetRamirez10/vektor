<?php  

require_once "models/enlaces.php";
require_once "controllers/enlaces.php";

	$enlaces = new EnlacesController();
	$enlaces->enlacesControllers();
