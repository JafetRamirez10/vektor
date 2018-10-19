<?php 
Class CapacitacionModel{
	// Mostrar Listado Completo
	public static function MostrarCapacitacionModels(){
		$stmt=Conexion::conectar()->prepare("
SELECT tblcapacitacion.nombre,tblcapacitacion.id AS IDCapacitacion,apellido1,apellido2,cedula,tblclientes.nombre AS cliente ,tblcursos.cursos,
fechai,vencimiento,tbltipos.tipo,nota,tblcapacitacion.id, tbltipos.id AS TiposID, tblclientes.id AS ClientesID,  tblcursos.id AS CursosID,tblcapacitacion.requisitos FROM tblcapacitacion,
 tblclientes,tbltipos,tblcursos WHERE tblcursos.id=tblcapacitacion.curso and tbltipos.id=tblcapacitacion.tipo 
and tblclientes.id=tblcapacitacion.cliente ORDER BY  tblclientes.nombre  ASC ");
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
	}

// Mostrar solo listado de Cliente
public static function MostrarClientesModel($tabla){
	$stmt=Conexion::conectar()->prepare("SELECT  id,nombre FROM $tabla ORDER BY nombre ASC");
	$stmt->execute();
	return $stmt->fetchAll();
	$smt->close();
}

// Eliminar persona de capacitación
public static function EliminarCapacitacionModel($datosModel,$tabla){
	$stmt=Conexion::conectar()->prepare("DELETE FROM $tabla WHERE  id=:id");
	$stmt->bindParam(":id",$datosModel);
	if($stmt->execute()){
		return 1;
	}else{
		return 2;
	}
}

//Comprobar si existe Cliente
public static function ExistaUsarioModels($datosModel,$tabla){
	$stmt=Conexion::conectar()->prepare("SELECT nombre , id FROM  $tabla WHERE nombre LIKE  '%".$datosModel."%'");
	$stmt->bindParam(":nombre",$datosModel);
	$stmt->execute();
		if($stmt->rowCount()==0){
			return 0;
		}else{
		return $stmt->fetchAll();
		$stmt->close();
	}
	
}
// Comprobar si existe Usuario
public static function ExistaCursoModels($datosModel,$tabla){
	$stmt=Conexion::conectar()->prepare("SELECT cursos , id FROM  $tabla WHERE cursos LIKE  '%".$datosModel."%'");
	$stmt->bindParam(":cursos",$datosModel);
	$stmt->execute();
		if($stmt->rowCount()==0){
			return 0;
		}else{
		return $stmt->fetchAll();
		$stmt->close();
	}
}

// Comprobar si existe Tipo
public static function ExistaTiposModels($datosModel,$tabla){
	$stmt=Conexion::conectar()->prepare("SELECT tipo , id FROM  $tabla WHERE tipo LIKE  '%".$datosModel."%'");
	$stmt->bindParam(":tipo",$datosModel);
	$stmt->execute();
		if($stmt->rowCount()==0){
			return 0;
		}else{
		return $stmt->fetchAll();
		$stmt->close();
	}
}
public static function IngresarCapacitacionModel($datosModel,$tabla){
	$stmt=Conexion::conectar()->prepare("INSERT INTO $tabla (`nombre`, `apellido1`, `apellido2`, `cedula`, `cliente`, `curso`, `fechai`, `vencimiento`, `tipo`, `nota`) VALUES (:nombre,:apellido1,:apellido2,:cedula,:cliente,:curso,:fechai,:vencimiento,:tipo,:nota)");
	$stmt->bindParam(":nombre", $datosModel["nombre"] , PDO::PARAM_STR);
	$stmt->bindParam(":apellido1", $datosModel["apellido1"] , PDO::PARAM_STR);
	$stmt->bindParam(":apellido2",$datosModel["apellido2"],PDO::PARAM_STR);
	$stmt->bindParam(":cedula",$datosModel["cedula"],PDO::PARAM_STR);
	$stmt->bindParam(":cliente",$datosModel["cliente"],PDO::PARAM_STR);
	$stmt->bindParam(":curso",$datosModel["curso"],PDO::PARAM_STR);
	$stmt->bindParam(":fechai",$datosModel["fechai"]);
	$stmt->bindParam(":vencimiento",$datosModel["fechaf"]);
	$stmt->bindParam(":tipo",$datosModel["tipo"]);
	$stmt->bindParam(":nota",$datosModel["nota"]);
	if($stmt->execute()){
 		return 1;
 	}else{
 		return 2;
 	}

}
	public static function EditarCapacitacionModel($datosModel,$tabla){
		$stmt=Conexion::conectar()->prepare("UPDATE $tabla  SET `nombre`=:nombre,`apellido1`=:apellido1,`apellido2`=:apellido2,`cedula`=:cedula,`cliente`=:cliente,`curso`=:curso,`fechai`=:fechai,`vencimiento`=:vencimiento,`tipo`=:tipo,`nota`=:nota  WHERE id=:id");
			$stmt->bindParam(":nombre", $datosModel["nombre"] , PDO::PARAM_STR);
	$stmt->bindParam(":apellido1", $datosModel["apellido1"] , PDO::PARAM_STR);
	$stmt->bindParam(":apellido2",$datosModel["apellido2"],PDO::PARAM_STR);
	$stmt->bindParam(":cedula",$datosModel["cedula"],PDO::PARAM_STR);
	$stmt->bindParam(":cliente",$datosModel["cliente"],PDO::PARAM_STR);
	$stmt->bindParam(":curso",$datosModel["curso"],PDO::PARAM_STR);
	$stmt->bindParam(":fechai",$datosModel["fechai"]);
	$stmt->bindParam(":vencimiento",$datosModel["fechaf"]);
	$stmt->bindParam(":tipo",$datosModel["tipo"]);
	$stmt->bindParam(":nota",$datosModel["nota"]);
	$stmt->bindParam(":id",$datosModel["id"]);
	if($stmt->execute()){
 		return 1;
 	}else{
 		return 2;
 	}
	}


	public static function BuscarPalabraModel($palabra,$tabla){
		
		$stmt=Conexion::conectar()->prepare("SELECT * FROM  $tabla WHERE nombre LIKE '%".$palabra."%' OR cliente LIKE  '%".$palabra."%' OR cedula LIKE '%".$palabra."%' OR cursos LIKE '%".$palabra."%'");
		$stmt->bindParam(":palabra", $palabra);
		$stmt->execute();
		if($stmt->rowCount()==0){
			return 0;
		}else{
		return $stmt->fetchAll();
		$stmt->close();
	}
	}

	public static function FiltroCapacitacionModel($datosModel,$tabla){
		$stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE ClientesID=:id ORDER BY cliente ASC");
		$stmt->bindParam(":id", $datosModel);
		$stmt->execute();
		return $stmt->fetchAll();
	}
	public static function RequisitosModel($paso,$IDCliente,$tabla){
		$stmt=Conexion::conectar()->prepare("UPDATE $tabla SET requisitos=:requisitos WHERE id=:id");
		$stmt->bindParam(":requisitos",$paso);
		$stmt->bindParam(":id",$IDCliente);
		if($stmt->execute()){
			return 0;
		}

	}
}

