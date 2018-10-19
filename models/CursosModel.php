<?php  
 class CursosModel extends Conexion{

 	///Mostrar Cursos
 	public static function MostrarCursosModel(){
 		$stmt = Conexion::conectar()->prepare("SELECT * FROM  tblcursos");
 		$stmt->execute();
 		return $stmt->fetchAll();
 		$stmt->close();
 	}
 	public static function IngresoCursoModel($datosModel,$tabla){
 		$stmt=Conexion::conectar()->prepare("INSERT INTO $tabla (cursos) VALUES ( :curso ) ");
 		$stmt->bindParam(":curso",$datosModel,PDO::PARAM_STR);
 		if($stmt->execute()){
 			return 1;
 		}else{
 			return 2;
 		}
 	}

 	// Editar Cursos Model
  public static function  EditarCursoModel($datosModel, $tabla){
  	$stmt=Conexion::conectar()->prepare("UPDATE $tabla SET cursos=:curso WHERE id=:id ");
  	$stmt->bindParam(":curso",$datosModel["curso"],PDO::PARAM_STR);
  	$stmt->bindParam(":id", $datosModel["id"],PDO::PARAM_STR);
  	if($stmt->execute()){
 			return 1;
 		}else{
 			return 2;
 		}

  }

  //Eliminar Curso Model
  public static function EliminarCursoModel($datosModel,$tabla){
  	$stmt=Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id=:id");
  	$stmt->bindParam(":id",$datosModel);
  		if($stmt->execute()){
 			return 1;
 		}else{
 			return 2;
 		}

  }
  public static function FiltroCursosModel($datosModel,$tabla){
    $stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id=:id");
    $stmt->bindParam(":id",$datosModel);
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();
  }



 	}
 