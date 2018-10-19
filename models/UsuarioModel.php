<?php  


 Class UsuarioModel extends Conexion{
 	public static function MostrarUsuariosModel(){
 		$stmt = Conexion::conectar()->prepare("SELECT * FROM  tblclientes");
 		$stmt->execute();
 		return $stmt->fetchAll();
 		$stmt->close();
 	}
 	public static function IngresoUsuarioModel($datosModel,$tabla){
 		
 	$stmt = Conexion::conectar()->prepare("INSERT INTO  $tabla ( `nombre`,`contra`,  `correo` , `telefono`, `usuario` ,  `rol` , `categoria` ) VALUES (:nombre , :contra , :correo , :telefono , :usuario ,  :categoria , :rol   )");
 	$stmt->bindParam(":nombre",$datosModel["nombre"],PDO::PARAM_STR);
 	$stmt->bindParam(":contra",$datosModel["pass"],PDO::PARAM_STR);
 	$stmt->bindParam(":correo",$datosModel["email"],PDO::PARAM_STR);
 	$stmt->bindParam(":telefono",$datosModel["telefono"],PDO::PARAM_STR);
 	$stmt->bindParam(":usuario",$datosModel["usuario"],PDO::PARAM_STR);
 	$stmt->bindParam(":rol",$datosModel["rol"],PDO::PARAM_STR);
 	 $stmt->bindParam(":categoria",$datosModel["categoria"],PDO::PARAM_STR);
 	if($stmt->execute()){
 	return 1;
 }else{
 	return 2;
 }
  $stmt->close();
 }
 public static function EditarUsuarioModel($datosModel,$tabla){
 	$stmt=Conexion::conectar()->prepare("UPDATE $tabla  SET `nombre`=:nombre ,`contra`=:contra ,`correo`=:correo ,`telefono`=:telefono ,`usuario`=:usuario,`rol`=:categoria,`categoria`=:rol WHERE  id=:id");
 	$stmt->bindParam(":nombre",$datosModel["nombre"],PDO::PARAM_STR);
 	$stmt->bindParam(":contra",$datosModel["pass"],PDO::PARAM_STR);
 	$stmt->bindParam(":correo",$datosModel["email"],PDO::PARAM_STR);
 	$stmt->bindParam(":telefono",$datosModel["telefono"],PDO::PARAM_STR);
 	$stmt->bindParam(":usuario",$datosModel["usuario"],PDO::PARAM_STR);
 	$stmt->bindParam(":rol",$datosModel["rol"],PDO::PARAM_STR);
 	$stmt->bindParam(":categoria",$datosModel["categoria"],PDO::PARAM_STR);
 	$stmt->bindParam(":id",$datosModel["Id"],PDO::PARAM_STR);
 	if($stmt->execute()){
 		return 1;
 	}else{
 		return 2;
 	}
 }
 public static function EliminarUsuarioModel($datosModel,$tabla){
 	$stmt=Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id=:id");
 	$stmt->bindParam(":id",$datosModel,PDO::PARAM_STR);
 	if($stmt->execute()){
 		return 1;
 	}else{
 		return 2;
 	}
 	}

 	public static function ExisteUsuarioModel($datos, $tabla){
 		$stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE usuario=:usuario");
 		$stmt->bindParam(":usuario",$datos);
 		$stmt->execute();
 		return $stmt->rowCount();
 	}
 	public static function ExisteUsuarioModelEditar($Editar,$primario,$tabla){
 			$stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE usuario=:usuario AND usuario!=:primario");
 		$stmt->bindParam(":usuario",$Editar);
 		$stmt->bindParam(":primario",$primario);
 		$stmt->execute();
 		if($stmt->rowCount()==0){
 			return 0;
 		}else{
 			return 1;
 		}
 	}
 	public  static function FiltroUsuarioModel($datos,$tabla){
 		$stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id=:id");
 		$stmt->bindParam(":id",$datos);
 		$stmt->execute();
 		return $stmt->fetchAll();
 	}
 	public static function ExisteRelacionEmpresas($tabla,$empresaPri,$empresaSub){
 		$stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idEmpresa=:idEmpresa AND idSubcontratacion=:idSubcontratacion");
 		$stmt->bindParam(":idEmpresa",$empresaPri);
 		$stmt->bindParam(":idSubcontratacion",$empresaSub);
 		$stmt->execute();
 		if($stmt->rowCount()==0){
 			return 0;
 		}else{
 			return 2;
 		}
 	}
 	public static function CrearRelacionEmpresa($tabla,$empresaPri,$empresaSub){
 		$stmt=Conexion::conectar()->prepare("INSERT INTO $tabla (idEmpresa,idSubcontratacion) VALUES(:idEmpresa,:idSubcontratacion)");
 		$stmt->bindParam(":idEmpresa",$empresaPri);
 		$stmt->bindParam(":idSubcontratacion",$empresaSub);
 		if($stmt->execute()){
 			return 0;
 		}
 	}
 	public static function BuscarSubContratado($empresaPri,$tabla){
 		$stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idEmpresa=:idEmpresa");
 		$stmt->bindParam(":idEmpresa",$empresaPri);
 		$stmt->execute();
 		if($stmt->rowCount()==0){
 			return 0;
 		}else{
 			return 1;
 		}
 	}
 

}