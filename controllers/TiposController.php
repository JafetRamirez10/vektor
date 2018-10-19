<?php 
Class TiposController{
	// Mostrar todos los titpos
	public function MostrarTiposController(){
		$respuesta=UsuariosModel:: MostrarTiposModel();
		echo '<div class="container"> 
 			<div class="row">
 					<div class="col-xs-12 center-block">
 					<div class="col-xs-12">
 						<button class="btn btn-primary btn-md right-block" data-toggle="modal" data-target="#new" ><span class="glyphicon glyphicon-plus center-block"></span></button>

 						<button class="btn btn-primary btn-md right-block " onclick="printDiv()"  ><span class="glyphicon glyphicon-print" center-block></span></button>

 						<a href="tiposexcel.php"><button class="btn btn-primary btn-md  right-block " ><span class="	glyphicon glyphicon-save center-block"></span></button></a>
 						</div>

 					</div>
 					<div class="col-xs-12 center-block">
 					<table  id="tabla1" class="table stacktable stacktable.large-only  stacktable.small-only" >
 						<thead>
 							<tr class="warning" >
 								<th class="acciones" >Acciones</th>
 								<th>ID</th>
 								<th>Tipos</th>
 							
 							</tr>
 						</thead>
 						<tbody>';
 					foreach ($respuesta as $row => $item) {
 						echo '<tr  id="'.$item["id"].'" class="info">
 						<td class="acciones" ><button class="btn btn-primary btn-xs buttonEditTipo" data-title="Edit" data-toggle="modal" data-target="#edit" id="'.$item["id"].'"><span class="glyphicon glyphicon-pencil"></span></button>
 							<button class="btn btn-primary btn-xs ButtonCopyTipo"  id="'.$item["id"].'"><span class="	glyphicon glyphicon-duplicate"></span></button>
 							<button class="btn btn-danger btn-xs ButtonTrashTipo"  data-target="#trash" id="'.$item["id"].'"><span class="glyphicon glyphicon-trash"></span></button>
 						</td>
 						<td class="tipoID">'.$item["id"].'</td>
 						<td class="nombreTipoID">'.$item["tipo"].'</td> </tr>

 						';

 					}
 					echo '			</tbody>
 						</table>
 					</div>
 					</div>';

	}

	// EXPORTAR XLS TIPOS
	public function ExportarTipos(){
		$respuesta=UsuariosModel:: MostrarTiposModel();
		echo '<div class="container"> 
 			<div class="row">
 					<div class="col-xs-12 center-block">
 					<div class="col-xs-12">
 						<button class="btn btn-primary btn-md right-block" data-toggle="modal" data-target="#new" ><span class="glyphicon glyphicon-plus center-block"></span></button>

 						<button class="btn btn-primary btn-md right-block " onclick="printDiv()"  ><span class="glyphicon glyphicon-print" center-block></span></button>

 						<a href="tiposexcel.php"><button class="btn btn-primary btn-md  right-block " ><span class="	glyphicon glyphicon-save center-block"></span></button></a>
 						</div>

 					</div>
 					<div class="col-xs-12 center-block">
 					<table  id="tabla1" class="table stacktable stacktable.large-only  stacktable.small-only" style="background-color:#E5E5E5;border:1px solid black" >
 						<thead>
 							<tr class="warning" >
 								
 								<th style="background-color:#E5E5E5;border:1px solid black">ID</th>
 								<th style="background-color:#E5E5E5;border:1px solid black">Tipos</th>
 							
 							</tr>
 						</thead>
 						<tbody>';
 					foreach ($respuesta as $row => $item) {
 						echo '<tr  id="'.$item["id"].'" class="info">
 						
 						<td  style="background-color:#E5E5E5;border:1px solid black" class="tipoID">'.$item["id"].'</td>
 						<td style="background-color:#E5E5E5;border:1px solid black"  class="nombreTipoID">'.utf8_decode($item["tipo"]).'</td> </tr>

 						';

 					}
 					echo '			</tbody>
 						</table>
 					</div>
 					</div>';
	}

	//FIN DE EXPORTAR XLS TIPOS
	public function IngresoTiposController(){
		if(isset($_POST["RegistroTipos"])){
			$datosController = $_POST["Registrotipo"];
			$respuesta=UsuariosModel:: IngresoTiposModel($datosController,"tbltipos");
			if($respuesta==1){
					echo '<script>swal("Se agrego con exito")
.then((value) => {
  			location.href="inicio.php?pagina=tipos";
});</script>';
			}
		}
	

	}
	public function TiposUsuarioController(){
		if(isset($_POST["EnviarEditarTipos"])){
			$datosController = array("id"=>$_POST["IDtipo"],
									 "tipo"=>$_POST["Editartipo"]);
			$respuesta=UsuariosModel::TiposUsuarioModel($datosController,"tbltipos");
			if($respuesta==1){
				echo '<script>swal("Se edito correctamente")
.then((value) => {
  			location.href="inicio.php?pagina=tipos";
});</script>';
			}


		}
	}
	public function  EliminarTipoController(){
		if($_GET["pagina"]=="tipos" & isset($_GET["eliminar"])){
			$datosController=$_GET["eliminar"];
			$respuesta=UsuariosModel::EliminarTipoController($datosController,"tbltipos");
			if($respuesta==1){
				echo '<script>swal("Se ha eliminado")
.then((value) => {
  			location.href="inicio.php?pagina=tipos";
});</script>';
			}
		}

	}

}