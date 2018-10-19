<?php 

require_once "conexio.php";

class Datos extends Conexion{

public static function ingresoUsuarioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT usuario , contra, categoria, id FROM $tabla WHERE usuario = :usuario AND contra=:contra");	
		$stmt->bindParam(":usuario", $datosModel["usuario"]);
		$stmt->bindParam(":contra", $datosModel["password"]);
		$stmt->execute();
		if($stmt->rowCount()==0){
			return 0;
		}else{
			#fetch(): Obtiene una fila de un conjunto de resultados asociado al objeto PDOStatement. 
		return $stmt->fetch();

		$stmt->close();

		}

		
	}

}


 ?>