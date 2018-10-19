<?php 
	class EnlacesController{
		public static function enlacesControllers(){
			if(isset($_GET["pagina"])){
				$enlaces = $_GET["pagina"];
			}else{
				$enlaces="inicio";
			}
			$respuesta = EnlacesModel::enlacesModels($enlaces);
			include $respuesta;
		}

	}


 ?>