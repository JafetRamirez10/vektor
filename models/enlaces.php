<?php  
	class EnlacesModel{
		public static function enlacesModels($enlaces){
			if($enlaces == "inicio"         ||
				$enlaces == "clientes"      ||
				$enlaces == "tipos"  	    ||
				$enlaces ==  "cursos" 		||
				$enlaces ==  "capacitacion" ||
				$enlaces ==   "busqueda"    ||   
				$enlaces ==    "buscar"		||
				$enlaces ==	"buscarCliente" ||
				$enlaces ==  "buscarCursos"){
			
				$module = "views/modules/".$enlaces.".php";				
			}else{
				$module = "index.php";
			}
			 return $module;
		}
	}