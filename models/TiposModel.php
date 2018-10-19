<?php

	Class UsuariosModel extends Conexion{
		// MOSTRAR TODOS LOS TIPOS
		public static function MostrarTiposModel(){
			$stmt = Conexion::conectar()->prepare("SELECT * FROM  tbltipos");
 		$stmt->execute();
 		return $stmt->fetchAll();
 		$stmt->close();
		}
		public static function IngresoTiposModel($datosModel,$tabla){
			$stmt=Conexion::conectar()->prepare("INSERT INTO $tabla (tipo) VALUES (:tipo)");
			$stmt->bindParam(":tipo",$datosModel,PDO::PARAM_STR);
			if($stmt->execute()){
				return 1;
			}else{
				return 2;
			}
		}
		public static function TiposUsuarioModel($datosModel,$tabla){
			$stmt=Conexion::conectar()->prepare("UPDATE $tabla SET `tipo`=:tipo WHERE id=:id ");
			$stmt->bindParam(":tipo",$datosModel["tipo"]);
			$stmt->bindParam(":id",$datosModel["id"]);
			if($stmt->execute()){
				return 1;
			}else{
				return 2;
			}
		}

		public static function EliminarTipoController($datosModel,$tabla){
			$stmt=Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id=:id");
			$stmt->bindParam(":id",$datosModel);
			if($stmt->execute()){
				return 1;
			}else{
				return 2;
			}
		}
		}
	
