<?php  
class CursosController{
	// Mostrar Curso Controller
	public function MostrarTiposController(){
		$respuesta=CursosModel::MostrarCursosModel();
		echo '<div class="container"> 
 			<div class="row">
 					<div class="col-xs-12 center-block">
 					<div class="col-xs-12">
 						<button class="btn btn-primary btn-md right-block" data-toggle="modal" data-target="#newCurso" ><span class="glyphicon glyphicon-plus center-block"></span></button>

 						<button class="btn btn-primary btn-md right-block " onclick="printDiv()"  ><span class="glyphicon glyphicon-print" center-block></span></button>

 						<a href="cursosexcel.php"><button class="btn btn-primary btn-md  right-block " ><span class="	glyphicon glyphicon-save center-block"></span></button></a>
 							<button class="btn btn-primary btn-md right-block"  data-toggle="modal" data-target="#SearchCursos" ><span class="glyphicon glyphicon glyphicon-filter  center-block"></span></button>
 						</div>

 					</div>
 					<div class="col-xs-12 center-block">
 					<table  id="tabla1" class="table stacktable stacktable.large-only  stacktable.small-only"  >
 						<thead>
 							<tr class="warning" >
 								<th class="acciones" >Acciones</th>
 								<th class="id">Id</th>
 								<th class="cursos">Cursos</th>
 							</tr>
 						</thead>
 						<tbody>';
 							foreach ($respuesta as $row => $item) {
 				echo '<tr  id="'.$item["id"].'" class="info">
 						<td class="acciones" ><button class="btn btn-primary btn-xs buttonEditCursos" data-title="Edit" data-toggle="modal" data-target="#editCursos" id="'.$item["id"].'"><span class="glyphicon glyphicon-pencil"></span></button>
 							<button class="btn btn-primary btn-xs ButtonCopyCursos"  id="'.$item["id"].'"><span class="	glyphicon glyphicon-duplicate"></span></button>
 							<button class="btn btn-danger btn-xs ButtonTrashCurso"  data-target="#trash" id="'.$item["id"].'"><span class="glyphicon glyphicon-trash"></span></button>
 						</td>
 						<td class="idCursos" >'.$item["id"].'</td>
 						<td class="NombreCursos">'.$item["cursos"].'</td>						
 					  </tr>
 					';
 			}

 			echo '			</tbody>
 						</table>
 					</div>
 					</div>';
	}

	public function MostrarModalCurso(){
		$respuesta=CursosModel::MostrarCursosModel();
		echo '<div id="SearchCursos" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal Mostrar Clientes Checkbox-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title Pauta">Filtro</h4>
      </div>
      <div class="modal-body" style="overflow-y:scroll; max-height:300px">
      <form name="form2" id="form2" action="inicio.php?pagina=buscarCursos" method="post">'
     ;
        	foreach ($respuesta as $row => $item) {
        		echo '<div class="checkbox">
  					<label><input type="checkbox"  name="curso[]" value="'.$item["id"].'">'.$item["cursos"].'</label>
					</div>';
        	}
        	echo '</div>
      <div class="modal-footer">
      <a href="javascript:document.form2.submit()"><button  name="enviar" class="btn btn-primary">Consultar</button></a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
</form>';

	}
	public function FiltroCursosController(){
		if(isset($_POST["curso"])){
			echo '<div class="container"> 
 			<div class="row">
 					<div class="col-xs-12 center-block">
 					<div class="col-xs-12">
 						<button class="btn btn-primary btn-md right-block" data-toggle="modal" data-target="#new" ><span class="glyphicon glyphicon-plus center-block"></span></button>

 						<button class="btn btn-primary btn-md right-block " onclick="printDiv()"  ><span class="glyphicon glyphicon-print" center-block></span></button>

 						<a href="javascript:document.form1.submit()"><button class="btn btn-primary btn-md  right-block " ><span class="	glyphicon glyphicon-save center-block"></span></button></a>
 						<button class="btn btn-primary btn-md right-block"  data-toggle="modal" data-target="#SearchCursos" ><span class="glyphicon glyphicon glyphicon-filter  center-block"></span></button>
 						</div>
 						
 						</div>

 					</div>
 					<div class="col-xs-12 center-block">
 					<table  id="tabla1" class="table stacktable stacktable.large-only  stacktable.small-only" >
 						<thead>
 						<thead>
 							<tr class="warning" >
 								<th class="acciones" >Acciones</th>
 								<th class="id">Id</th>
 								<th class="cursos">Cursos</th>
 							</tr>
 						</thead>
 						<tbody>';
 						if ($_SERVER["REQUEST_METHOD"] == "POST") {  
							$numero =$_POST["curso"];
						$count= count($numero);}
						echo '<form  id="form1" name="form1" action="FiltroCursosExcel.php" method="post">';
						for($e=0; $e<$count; $e++){
							echo '<input type="hidden" name="cursosE[]" value="'.$numero[$e].'">';
						}
						echo '</form>';
						for ($i=0; $i < $count ; $i++) { 
							$respuesta=CursosModel::FiltroCursosModel($numero[$i],"tblcursos");
								foreach ($respuesta as $row => $item) {
							echo '<tr  id="'.$item["id"].'" class="info">
 						<td class="acciones" ><button class="btn btn-primary btn-xs buttonEdit" data-title="Edit" data-toggle="modal" data-target="#edit" id="'.$item["id"].'"><span class="glyphicon glyphicon-pencil"></span></button>
 							<button class="btn btn-primary btn-xs ButtonCopy"  id="'.$item["id"].'"><span class="	glyphicon glyphicon-duplicate"></span></button>
 							<button class="btn btn-danger btn-xs ButtonTrash"  data-target="#trash" id="'.$item["id"].'"><span class="glyphicon glyphicon-trash"></span></button>
 						</td>
 						<td class="idCursos" >'.$item["id"].'</td>
 						<td class="NombreCursos">'.$item["cursos"].'</td>
 						
 					  </tr>
 					';
					}
				}

 			echo '			</tbody>
 						</table>
 					</div>
 					</div>';
 				}
						}

		public function ExportarCursosFiltroController(){
			if(isset($_POST["cursosE"])){
				echo '<div class="container"> 
 			<div class="row">
 					<div class="col-xs-12 center-block">
 					<div class="col-xs-12">
 						<button class="btn btn-primary btn-md right-block" data-toggle="modal" data-target="#new" ><span class="glyphicon glyphicon-plus center-block"></span></button>

 						<button class="btn btn-primary btn-md right-block " onclick="printDiv()"  ><span class="glyphicon glyphicon-print" center-block></span></button>

 						<a href="javascript:document.form1.submit()"><button class="btn btn-primary btn-md  right-block " ><span class="	glyphicon glyphicon-save center-block"></span></button></a>
 						<button class="btn btn-primary btn-md right-block"  data-toggle="modal" data-target="#SearchCursos" ><span class="glyphicon glyphicon glyphicon-filter  center-block"></span></button>
 						</div>
 						
 						</div>

 					</div>
 					<div class="col-xs-12 center-block">
 					<table style="background-color:#E5E5E5;border:1px solid black"  id="tabla1" class="table stacktable stacktable.large-only  stacktable.small-only" >
 						<thead>
 						<thead>
 							<tr class="warning" >
 								<th  style="background-color:#E5E5E5;border:1px solid black" class="id">Id</th>
 								<th  style="background-color:#E5E5E5;border:1px solid black" class="cursos">Cursos</th>
 							</tr>
 						</thead>
 						<tbody>';
 						if ($_SERVER["REQUEST_METHOD"] == "POST") {  
							$numero =$_POST["cursosE"];
						$count= count($numero);}
						echo '<form  id="form1" name="form1" action="FiltroCursosExcel.php" method="post">';
						for($e=0; $e<$count; $e++){
							echo '<input type="hidden" name="cursosE[]" value="'.$numero[$e].'">';
						}
						echo '</form>';
						for ($i=0; $i < $count ; $i++) { 
							$respuesta=CursosModel::FiltroCursosModel($numero[$i],"tblcursos");
								foreach ($respuesta as $row => $item) {
							echo '<tr  id="'.$item["id"].'" class="info">
 						<td  style="background-color:#E5E5E5;border:1px solid black"  class="idCursos" >'.$item["id"].'</td>
 						<td style="background-color:#E5E5E5;border:1px solid black"   class="NombreCursos">'.utf8_decode($item["cursos"]).'</td>
 						
 					  </tr>
 					';
					}
				}

 			echo '			</tbody>
 						</table>
 					</div>
 					</div>';
 				}

			}
		

	

	//Exportar XLS 
	public function ExportarCursos(){
		$respuesta=CursosModel:: MostrarCursosModel();
		echo '<div class="container"> 
 			<div class="row">
 					<div class="col-xs-12 center-block">
 					<div class="col-xs-12">
 						<button class="btn btn-primary btn-md right-block" data-toggle="modal" data-target="#newCurso" ><span class="glyphicon glyphicon-plus center-block"></span></button>

 						<button class="btn btn-primary btn-md right-block " onclick="printDiv()"  ><span class="glyphicon glyphicon-print" center-block></span></button>

 						<a href="clientesexcel.php"><button class="btn btn-primary btn-md  right-block " ><span class="	glyphicon glyphicon-save center-block"></span></button></a>
 						</div>

 					</div>
 					<div class="col-xs-12 center-block">
 					<table  id="tabla1" class="table stacktable stacktable.large-only  stacktable.small-only" style="background-color:#E5E5E5;border:1px solid black">
 						<thead>
 							<tr class="warning" >
 								
 								<th class="id" style="background-color:#E5E5E5;border:1px solid black">Id</th>
 								<th class="cursos" style="background-color:#E5E5E5;border:1px solid black">Cursos</th>
 							</tr>
 						</thead>
 						<tbody>';
 							foreach ($respuesta as $row => $item) {
 				echo '<tr  id="'.$item["id"].'" class="info">
 						
 						<td  style="background-color:#E5E5E5;border:1px solid black" class="idCursos" >'.$item["id"].'</td>
 						<td  style="background-color:#E5E5E5;border:1px solid black" class="NombreCursos">'.utf8_decode($item["cursos"]).'</td>						
 					  </tr>
 					';
 			}

 			echo '			</tbody>
 						</table>
 					</div>
 					</div>';
	}

	//Fin de Exportar XLS

	// Ingresar Curso Controller
	 public function IngresoCursoController(){
	 	if(isset($_POST["RegistroCursoEnviar"])){
	 		$datosController=$_POST["RegistroCurso"];
	 			echo $respuesta=CursosModel::IngresoCursoModel($datosController,"tblcursos");
	 			if($respuesta==1){
	 					echo '<script>swal("Se agrego con exito un curso")
.then((value) => {
  			location.href="inicio.php?pagina=cursos";
});</script>';
 			 }
	 			}

	 	}
	 public function EditarCursoController(){
	 	if(isset($_POST["EditarCursoEnviar"])){
	 		$datosController=array("curso"=>$_POST["EditarCurso"],
	 								"id"=>$_POST["EditarCursoID"]);
	 		echo $respuesta=CursosModel:: EditarCursoModel($datosController,"tblcursos");
	 		if($respuesta==1){
	 					echo '<script>swal("Se edito el curso correctamente")
.then((value) => {
  			location.href="inicio.php?pagina=cursos";
});</script>';
 			 }
	 	}
	 }

	  // Borrar Cursos Model
  public static function  EliminarCursoController(){
  	if($_GET["pagina"]=="cursos" & isset($_GET["eliminar"])){
  		$datosController=$_GET["eliminar"];
  		echo $respuesta=CursosModel:: EliminarCursoModel($datosController,"tblcursos");
  			if($respuesta==1){
	 					echo '<script>swal("Se elimino correctamente el curso")
.then((value) => {
  			location.href="inicio.php?pagina=cursos";
});</script>';
  	}
  }
	 

	 }
	}
