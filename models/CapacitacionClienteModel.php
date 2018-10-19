<?php 
	Class CapacitacionModelCliente{
		 public static function MostrarCapacitacionClienteModels($datos){
		 	$stmt=Conexion::conectar()->prepare("SELECT DISTINCT tblconsultas.nombre,tblconsultas.IDCapacitacion,tblconsultas.apellido1,tblconsultas.apellido2,tblconsultas.cedula,tblconsultas.cursos,tblconsultas.fechai,tblconsultas.vencimiento,tblconsultas.tipo,  subcontratacion.idEmpresa ,tblconsultas.nota,tblconsultas.id,tblconsultas.TiposID,tblconsultas.CursosID,tblconsultas.ClientesID,tblconsultas.cliente,tblconsultas.requisitos FROM subcontratacion,tblconsultas WHERE subcontratacion.idEmpresa=:cliente AND  subcontratacion.idEmpresa=tblconsultas.ClientesID");
		 	$stmt->bindParam(":cliente",$datos);
		 	$stmt->execute();
		 	if($stmt->rowCount()==0){
		 		$stmt=Conexion::conectar()->prepare("SELECT DISTINCT * FROM tblconsultas WHERE ClientesID=:cliente");
		 		$stmt->bindParam(":cliente",$datos);
		 		$stmt->execute();
		 	}
		 	return $stmt->fetchAll();
		 }
		 public static function BuscarPalabraClienteModel($datos,$tabla){
		 	$stmt=Conexion::conectar()->prepare("SELECT * FROM  tblconsultas WHERE (nombre LIKE  '%".$datos["nombre"]."%' OR cliente LIKE  '%".$datos["nombre"]."%' OR cedula LIKE '%".$datos["nombre"]."%' OR cursos LIKE '%".$datos["nombre"]."%' ) AND ClientesID=:id");
		 	$stmt->bindParam(":id",$datos["id"]);
		 	$stmt->execute();
		 	if($stmt->rowCount()==0){
			return 0;
		}else{
		return $stmt->fetchAll();
		$stmt->close();
	}
		 }
		 public static function MostrarCapacitacionClienteSelect($datos){
		 	$stmt=Conexion::conectar()->prepare("SELECT * FROM `subcontratacion` WHERE idEmpresa=:cliente");
		 	$stmt->bindParam(":cliente",$datos);
		 	$stmt->execute();
		 		return $stmt->fetchAll();
		 }


	}