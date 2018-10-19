<?php 
class CapacitacionController{
	public function CapacitacionControllers(){
		$respuesta=CapacitacionModel:: MostrarCapacitacionModels();
		echo  '<div class="container"> 
 			<div class="row">
 					<div class="col-xs-12 center-block">
 					<div class="col-xs-12">
 						<button class="btn btn-primary btn-md right-block" data-toggle="modal" data-target="#CapacitacionNew" ><span class="glyphicon glyphicon-plus center-block"></span></button>

 						<button class="btn btn-primary btn-md right-block " onclick="printDiv()"  ><span class="glyphicon glyphicon-print" center-block></span></button>

 						<a href="Capacitacionexcel.php"><button class="btn btn-primary btn-md  right-block " ><span class="	glyphicon glyphicon-save center-block"></span></button></a>
 						<a href="inicio.php?pagina=busqueda"><button class="btn btn-primary btn-md  right-block " ><span class="		glyphicon glyphicon-search center-block"></span></button></a>
 						<button class="btn btn-primary btn-md right-block"  data-toggle="modal" data-target="#SearchCapacitacion" ><span class="glyphicon glyphicon glyphicon-filter  center-block"></span></button>
 						</div>


 					</div>
 					<div class="col-xs-12 center-block">
 					<table  id="tabla1" class="table stacktable stacktable.large-only  stacktable.small-only" >
 						<thead>
 							<tr class="warning" >
 								<th class="acciones">Acciones</th>
 								<th>Nombre</th>
 								<th>Apellido 1</th>
 								<th>Apellido 2</th>
 								<th>Cédula</th>
 								<th>Cliente</th>
 								<th>Cursos</th>
 								<th>Fecha de Inicio</th>
 								<th>Vencimiento</th>
 								<th>Tipo</th>
 								<th>Nota</th>
 								<th>Requisitos</th>
 							</tr>
 						</thead>
 						<tbody>';
 				foreach ($respuesta as $row => $item) {
 				echo '<tr  id="'.$item["id"].'" class="info">
 						<td class="acciones" ><button class="btn btn-primary btn-xs buttonEditCapacitacion" data-title="Edit" data-toggle="modal" data-target="#CapacitacionEdit" id="'.$item["id"].'"><span class="glyphicon glyphicon-pencil"></span></button>
 							<button class="btn btn-primary btn-xs ButtonCopyCapacitacion"  id="'.$item["id"].'"><span class="	glyphicon glyphicon-duplicate"></span></button>
 							<button class="btn btn-danger btn-xs ButtonTrashCapacitacion"   id="'.$item["id"].'"><span class="glyphicon glyphicon-trash"></span></button>
 						</td>
 						<td class="nombre" >'.$item["nombre"].'</td>
 						<td class="Apellido1">'.$item["apellido1"].'</td>
 						<td class="Apellido2">'.$item["apellido2"].'</td>
 						<td class="cedula">'.$item["cedula"].'</td>	
 						<td class="cliente">'.$item["cliente"].'</td>
 						<td class="cursos">'.$item["cursos"].'</td>
 						<td class="fechai">'.$item["fechai"].'</td>	
 						<td class="vencimiento">'.$item["vencimiento"].'</td>
 						<td class="tipo">'.$item["tipo"].'</td>	
 						<td class="nota">'.$item["nota"].'</td>
 						<input type="hidden" class="TipoID" value="'.$item["TiposID"].'">	
 						<input type="hidden" class="ClienteID" value="'.$item["ClientesID"].'">	
 						<input type="hidden" class="CursosID" value="'.$item["CursosID"].'">
 						<input type="hidden" class="IDCapacitacion" value="'.$item["IDCapacitacion"].'">';
 						if($item["requisitos"]==0){
 							echo '<td class="checkCorrecto"  id="'.$item["id"].'" ><button class="btn btn-primary btn-md right-block "  ><span class="glyphicon glyphicon glyphicon-ok" center-block></span></button></td>';
 						}else{
 							echo '<td class="checkFalso"  id="'.$item["id"].'" ><button class="btn btn-danger btn-md right-block "  ><span class="glyphicon glyphicon glyphicon-remove" center-block></span></button></td>';
 						}

 					echo  ' </tr>

 					';
 			}
 			echo '			</tbody>
 						</table>
 					</div>
 					</div>';

	}
	public function MostrarClientesController(){
		$respuesta=CapacitacionModel::MostrarClientesModel("tblclientes");
		echo '<div id="SearchCapacitacion" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal Mostrar Clientes Checkbox-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title Pauta">Filtro</h4>
      </div>
      <div class="modal-body" style="overflow-y:scroll; max-height:300px">
      <form name="form2" id="form2" action="inicio.php?pagina=buscar" method="post">'
     ;
        	foreach ($respuesta as $row => $item) {
        		echo '<div class="checkbox">
  					<label><input type="checkbox"  name="cliente[]" value="'.$item["id"].'">'.$item["nombre"].'</label>
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
</form>

	 <!-- FIN  Modal Mostrar Clientes Checkbox-->'; 
	}
	public function FiltroCapacitacionController(){
		if(isset($_POST["cliente"])){
		
			echo  '<div class="container"> 
 			<div class="row">
 					<div class="col-xs-12 center-block">
 					
 					<div class="col-xs-12">
 					
 						<button class="btn btn-primary btn-md right-block" data-toggle="modal" data-target="#CapacitacionNew" ><span class="glyphicon glyphicon-plus center-block"></span></button>

 						<button class="btn btn-primary btn-md right-block " onclick="printDiv()"  ><span class="glyphicon glyphicon-print" center-block></span></button>

 						<a href="javascript:document.form1.submit()"><button class="btn btn-primary btn-md  right-block "><span class="	glyphicon glyphicon-save center-block"></span></button></a>
 						<a href="inicio.php?pagina=busqueda"><button class="btn btn-primary btn-md  right-block " ><span class="		glyphicon glyphicon-search center-block"></span></button></a>
 						<button class="btn btn-primary btn-md right-block"  data-toggle="modal" data-target="#SearchCapacitacion" ><span class="glyphicon glyphicon glyphicon-filter  center-block"></span></button>
 						</div>


 					</div>
 					
 					<div class="col-xs-12 center-block">
 					<table  id="tabla1" class="table stacktable stacktable.large-only  stacktable.small-only" >
 						<thead>
 							<tr class="warning" >
 								<th class="acciones">Acciones</th>
 								<th>Nombre</th>
 								<th>Apellido 1</th>
 								<th>Apellido 2</th>
 								<th>Cédula</th>
 								<th>Cliente</th>
 								<th>Cursos</th>
 								<th>Fecha de Inicio</th>
 								<th>Vencimiento</th>
 								<th>Tipo</th>
 								<th>Nota</th>
 								<th>Requisitos</th>
 							</tr>
 						</thead>
 						<tbody>';
 					if ($_SERVER["REQUEST_METHOD"] == "POST") {  
							$numero =$_POST["cliente"];
						$count= count($numero);}
						echo '<form  id="form1" name="form1" action="FiltroCapacitacionExcel.php" method="post">';
						for($e=0; $e<$count; $e++){
							echo '<input type="hidden" name="clientes[]" value="'.$numero[$e].'">';
						}
						echo '</form>';
			for ($i=0; $i < $count ; $i++) { 
				
				
				$respuesta=CapacitacionModel::FiltroCapacitacionModel($numero[$i],"tblconsultas");
				
					foreach ($respuesta as $row => $item) {
 				echo'
 				<tr  id="'.$item["id"].'" class="info">
 						<td class="acciones" ><button class="btn btn-primary btn-xs buttonEditCapacitacion" data-title="Edit" data-toggle="modal" data-target="#CapacitacionEdit" id="'.$item["id"].'"><span class="glyphicon glyphicon-pencil"></span></button>
 							<button class="btn btn-primary btn-xs ButtonCopyCapacitacion"  id="'.$item["id"].'"><span class="	glyphicon glyphicon-duplicate"></span></button>
 							<button class="btn btn-danger btn-xs ButtonTrashCapacitacion"   id="'.$item["id"].'"><span class="glyphicon glyphicon-trash"></span></button>
 						</td>
 						<td class="nombre" >'.$item["nombre"].'</td>
 						<td class="Apellido1">'.$item["apellido1"].'</td>
 						<td class="Apellido2">'.$item["apellido2"].'</td>
 						<td class="cedula">'.$item["cedula"].'</td>	
 						<td class="cliente">'.$item["cliente"].'</td>
 						<td class="cursos">'.$item["cursos"].'</td>
 						<td class="fechai">'.$item["fechai"].'</td>	
 						<td class="vencimiento">'.$item["vencimiento"].'</td>
 						<td class="tipo">'.$item["tipo"].'</td>	
 						<td class="nota">'.$item["nota"].'</td>
 						<input type="hidden" class="TipoID" value="'.$item["TiposID"].'">	
 						<input type="hidden" class="ClienteID" value="'.$item["ClientesID"].'">	
 						<input type="hidden" class="CursosID" value="'.$item["CursosID"].'">
 						<input type="hidden" class="IDCapacitacion" value="'.$item["IDCapacitacion"].'">';
 						if($item["requisitos"]==0){
 							echo '<td class="checkCorrecto"  id="'.$item["id"].'"><button class="btn btn-primary btn-md right-block "  ><span class="glyphicon glyphicon glyphicon-ok" center-block></span></button></td>';
 						}else{
 							echo '<td class="checkFalso"  id="'.$item["id"].'"><button class="btn btn-danger btn-md right-block "  ><span class="glyphicon glyphicon glyphicon-remove" center-block></span></button></td>';
 						}
 					  echo '</tr>

 					';
			}
		}
		echo '		

					</tbody>
 						</table>
 					</div>
 					</div>';
	}
}

	public function ExportarCapacitacionFiltro(){
		$numero=0;
		if(isset($_POST["clientes"])){
			echo  '<div class="container"> 
 			<div class="row">
 					<div class="col-xs-12 center-block">
 					<div class="col-xs-12">
 						<button class="btn btn-primary btn-md right-block" data-toggle="modal" data-target="#CapacitacionNew" ><span class="glyphicon glyphicon-plus center-block"></span></button>

 						<button class="btn btn-primary btn-md right-block " onclick="printDiv()"  ><span class="glyphicon glyphicon-print" center-block></span></button>

 						<a onclick="javascript:document.exportar.submit()"><button class="btn btn-primary btn-md  right-block " ><span class="	glyphicon glyphicon-save center-block"></span></button></a>
 						<a href="inicio.php?pagina=busqueda"><button class="btn btn-primary btn-md  right-block " ><span class="		glyphicon glyphicon-search center-block"></span></button></a>
 						<button class="btn btn-primary btn-md right-block"  data-toggle="modal" data-target="#SearchCapacitacion" ><span class="glyphicon glyphicon glyphicon-filter  center-block"></span></button>
 						</div>


 					</div>
 					<div class="col-xs-12 center-block">
 					<table  style="background-color:#E5E5E5;border:1px solid black"  id="tabla1" class="table stacktable stacktable.large-only  stacktable.small-only" >
 						<thead>
 							<tr class="warning" >
 								<th  style="background-color:#E5E5E5;border:1px solid black" >Nombre</th>
 								<th  style="background-color:#E5E5E5;border:1px solid black" >Apellido 1</th>
 								<th  style="background-color:#E5E5E5;border:1px solid black" >Apellido 2</th>
 								<th  style="background-color:#E5E5E5;border:1px solid black" >'.utf8_decode("Cédula").'</th>
 								<th  style="background-color:#E5E5E5;border:1px solid black" >Cliente</th>
 								<th  style="background-color:#E5E5E5;border:1px solid black" >Cursos</th>
 								<th  style="background-color:#E5E5E5;border:1px solid black" >Fecha de Inicio</th>
 								<th  style="background-color:#E5E5E5;border:1px solid black" >Vencimiento</th>
 								<th  style="background-color:#E5E5E5;border:1px solid black" >Tipo</th>
 								<th  style="background-color:#E5E5E5;border:1px solid black" >Nota</th>
 							</tr>
 						</thead>
 						<tbody>';
 					if ($_SERVER["REQUEST_METHOD"] == "POST") {  
							$numero =$_POST["clientes"];
						$count= count($numero);}
			for ($i=0; $i < $count ; $i++) { 
				$respuesta=CapacitacionModel::FiltroCapacitacionModel($numero[$i],"tblconsultas");
					foreach ($respuesta as $row => $item) {
 				echo '
 						<td  style="background-color:#E5E5E5;border:1px solid black"  class="nombre" >'.utf8_decode($item["nombre"]).'</td>
 						<td  style="background-color:#E5E5E5;border:1px solid black"  class="Apellido1">'.utf8_decode($item["apellido1"]).'</td>
 						<td  style="background-color:#E5E5E5;border:1px solid black"  class="Apellido2">'.utf8_decode($item["apellido2"]).'</td>
 						<td  style="background-color:#E5E5E5;border:1px solid black"  class="cedula">'.$item["cedula"].'</td>	
 						<td  style="background-color:#E5E5E5;border:1px solid black"  class="cliente">'.utf8_decode($item["cliente"]).'</td>
 						<td  style="background-color:#E5E5E5;border:1px solid black"  class="cursos">'.utf8_decode($item["cursos"]).'</td>
 						<td  style="background-color:#E5E5E5;border:1px solid black"  class="fechai">'.$item["fechai"].'</td>	
 						<td  style="background-color:#E5E5E5;border:1px solid black"  class="vencimiento">'.$item["vencimiento"].'</td>
 						<td  style="background-color:#E5E5E5;border:1px solid black"  class="tipo">'.utf8_decode($item["tipo"]).'</td>	
 						<td  style="background-color:#E5E5E5;border:1px solid black"  class="nota">'.$item["nota"].'</td>
 						<input type="hidden" class="TipoID" value="'.$item["TiposID"].'">	
 						<input type="hidden" class="ClienteID" value="'.$item["ClientesID"].'">	
 						<input type="hidden" class="CursosID" value="'.$item["CursosID"].'">
 						<input type="hidden" class="IDCapacitacion" value="'.$item["IDCapacitacion"].'">				
 					  </tr>

 					';
			}
		}
		echo '		 

					</tbody>
 						</table>
 					</div>
 					</div>';
	}
	}

	public function ExportarCapacitacion(){
		$respuesta=CapacitacionModel:: MostrarCapacitacionModels();
		echo  '<div class="container"> 
 			<div class="row">
 					<div class="col-xs-12 center-block">
 					<div class="col-xs-12">
 						<button class="btn btn-primary btn-md right-block" data-toggle="modal" data-target="#CapacitacionNew" ><span class="glyphicon glyphicon-plus center-block"></span></button>

 						<button class="btn btn-primary btn-md right-block " onclick="printDiv()"  ><span class="glyphicon glyphicon-print" center-block></span></button>

 						<a href="Capacitacionexcel.php"><button class="btn btn-primary btn-md  right-block " ><span class="	glyphicon glyphicon-save center-block"></span></button></a>
 						</div>

 					</div>
 					<div class="col-xs-12 center-block">
 					<table  id="tabla1" class="table stacktable stacktable.large-only  stacktable.small-only" style="background-color:#E5E5E5;border:1px solid black">
 						<thead>
 						
 							<tr class="warning" >
 								<th  style="background-color:#E5E5E5;border:1px solid black" >Nombre</th>
 								<th  style="background-color:#E5E5E5;border:1px solid black" >Apellido 1</th>
 								<th  style="background-color:#E5E5E5;border:1px solid black" >Apellido 2</th>
 								<th  style="background-color:#E5E5E5;border:1px solid black" >'.utf8_decode("Cédula").'</th>
 								<th  style="background-color:#E5E5E5;border:1px solid black" >Cliente</th>
 								<th  style="background-color:#E5E5E5;border:1px solid black" >Cursos</th>
 								<th  style="background-color:#E5E5E5;border:1px solid black" >Fecha de Inicio</th>
 								<th  style="background-color:#E5E5E5;border:1px solid black" >Vencimiento</th>
 								<th  style="background-color:#E5E5E5;border:1px solid black" >Tipo</th>
 								<th  style="background-color:#E5E5E5;border:1px solid black" >Nota</th>
 							</tr>
 						</thead>     						<tbody>';
 				foreach ($respuesta as $row => $item) {
 				echo '<tr  id="'.$item["id"].'" class="info">
 						
 						<td class="nombre"   style="background-color:#E5E5E5;border:1px solid black">'.utf8_decode($item["nombre"]).'</td>
 						<td class="Apellido1"  style="background-color:#E5E5E5;border:1px solid black">'.utf8_decode($item["apellido1"]).'</td>
 						<td class="Apellido2"  style="background-color:#E5E5E5;border:1px solid black">'.utf8_decode($item["apellido2"]).'</td>
 						<td class="cedula"  style="background-color:#E5E5E5;border:1px solid black">'.$item["cedula"].'</td>	
 						<td class="cliente"  style="background-color:#E5E5E5;border:1px solid black">'.utf8_decode($item["cliente"]).'</td>
 						<td class="cursos"  style="background-color:#E5E5E5;border:1px solid black">'.utf8_decode($item["cursos"]).'</td>
 						<td class="fechai"  style="background-color:#E5E5E5;border:1px solid black">'.$item["fechai"].'</td>	
 						<td class="vencimiento"  style="background-color:#E5E5E5;border:1px solid black">'.$item["vencimiento"].'</td>
 						<td class="tipo"  style="background-color:#E5E5E5;border:1px solid black">'.utf8_decode($item["tipo"]).'</td>	
 						<td class="nota"  style="background-color:#E5E5E5;border:1px solid black">'.$item["nota"].'</td>
 						<input type="hidden" class="TipoID" value="'.$item["TiposID"].'">	
 						<input type="hidden" class="ClienteID" value="'.$item["ClientesID"].'">	
 						<input type="hidden" class="CursosID" value="'.$item["CursosID"].'">
 						<input type="hidden" class="IDCapacitacion" value="'.$item["IDCapacitacion"].'">				
 					  </tr>

 					';
 			}
 			echo '			</tbody>
 						</table>
 					</div>
 					</div>';

	}


	public function EliminarCapacitacionController(){
		if($_GET["pagina"]=="capacitacion" & isset($_GET["eliminar"])){
			$datosController=$_GET["eliminar"];
				$respuesta=CapacitacionModel::EliminarCapacitacionModel($datosController,"tblcapacitacion");
				if($respuesta==1){
					echo '<script>swal("Se agrego con exito el usuario")
.then((value) => {
  			location.href="inicio.php?pagina=capacitacion";
});</script>';
				}
		}
	}
	//Comprobar si existe Cliente
	public static function  ExistaUsarioController($datosController){
		$respuesta=CapacitacionModel::ExistaUsarioModels($datosController,"tblclientes");
		if($respuesta==0){
			return 0;
		}else{
			foreach ($respuesta as $row => $item) {
			echo '<br><h5 style="display:inline-block;margin-right:1.5%" id="'.$item["id"].'" >'.$item["nombre"].'</h5><button style="display:inline-block" type="button" class=" btn btn-primary"   onclick="seleccionarCliente('.$item["id"].')" >Seleccionar</button><br>';


		}

		}
		
	}
			// Comprobar si existe Curso
			public static function ExistaCursoController($datosController){
			$respuesta=CapacitacionModel::ExistaCursoModels($datosController,"tblcursos");
			if($respuesta==0){
			return 0;
		}else{
			foreach ($respuesta as $row => $item) {
			echo '<br><h5 style="display:inline-block;margin-right:1.5%" id="Curso'.$item["id"].'" >'.$item["cursos"].'</h5><button style="display:inline-block" type="button" class=" btn btn-primary"   onclick="seleccionarCurso('.$item["id"].')" >Seleccionar</button><br>';


		}


		}

		}
		// Comprobar si existe Tipo
		public static function ExistaTipoController($datosController){
			$respuesta=CapacitacionModel::ExistaTiposModels($datosController,"tbltipos");
				if($respuesta==0){
			return 0;
		}else{
			foreach ($respuesta as $row => $item) {
			echo '<br><h5 style="display:inline-block;margin-right:1.5%" id="Tipo'.$item["id"].'" >'.$item["tipo"].'</h5><button style="display:inline-block" type="button" class=" btn btn-primary"   onclick="seleccionarTipo('.$item["id"].')" >Seleccionar</button><br>';


		}


		}

		}
		// Ingreso nuevo item Capacitacion
		public function IngresarCapacitacion(){
			//$fechai=date('Y-m-d',strtotime($fecha );
			if(isset($_POST["AgregarCapacitacion"])){
				$datosController=array("nombre"=>$_POST["CapacitacionNombre"],
										"apellido1"=>$_POST["CapacitacionApellido1"],
										"apellido2"=>$_POST["CapacitacionApellido2"],
										"cedula"=>$_POST["CapacitacionCedula"],
										"cliente"=>$_POST["IDCliente"],
										"curso"=>$_POST["IDCurso"],
										"fechai"=>$_POST["CapacitacionInicio"],
										"fechaf"=>$_POST["CapacitacionVencimiento"],
										"tipo"=>$_POST["IDTipo"],
										"nota"=>$_POST["CapacitacionNota"],
										 "id"=>$_POST["IDCapacitacion"]);
				$respuesta=CapacitacionModel::IngresarCapacitacionModel($datosController,"tblcapacitacion");
					echo "<script>console.log(".$respuesta.");</script>";
 			 if($respuesta==1){
 			 	echo '<script>swal("Se agrego  un item con exito")
.then((value) => {
  			location.href="inicio.php?pagina=capacitacion";
});</script>';
 			 }
			}
		}
		public function EditarCapacitacionController(){
			if(isset($_POST["EditarCapacitacionE"])){
				$datosController=array("nombre"=>$_POST["CapacitacionNombre"],
										"apellido1"=>$_POST["CapacitacionApellido1"],
										"apellido2"=>$_POST["CapacitacionApellido2"],
										"cedula"=>$_POST["CapacitacionCedula"],
										"cliente"=>$_POST["IDCliente"],
										"curso"=>$_POST["IDCurso"],
										"fechai"=>$_POST["CapacitacionInicio"],
										"fechaf"=>$_POST["CapacitacionVencimiento"],
										"tipo"=>$_POST["IDTipo"],
										"nota"=>$_POST["CapacitacionNota"],
										 "id"=>$_POST["IDCapacitacion"]);
			$respuesta=CapacitacionModel:: EditarCapacitacionModel($datosController,"tblcapacitacion");
			 if($respuesta==1){
 			 	echo '<script>swal("Se edito un item con exito")
.then((value) => {
  			location.href="inicio.php?pagina=capacitacion";
});</script>';
 			 }
			}
		}



		// Buscar palabra Clave
		public static function BuscarPalabraController ($palabra){

			$respuesta=CapacitacionModel::BuscarPalabraModel($palabra,"tblconsultas");
			if($respuesta==0){
				return 0;
			}else{
				 echo '
 			<div class="row">
 					<div class="col-xs-12 center-block">
 					<div class="col-xs-12">
 						<button class="btn btn-primary btn-md right-block" data-toggle="modal" data-target="#CapacitacionNew" ><span class="glyphicon glyphicon-plus center-block"></span></button>

 						<button class="btn btn-primary btn-md right-block " onclick="printDiv()"  ><span class="glyphicon glyphicon-print" center-block></span></button>

 						<button class="btn btn-primary btn-md  right-block saveSearchxls " ><span class="	glyphicon glyphicon-save center-block"></span></button>
 						<button class="btn btn-primary btn-md right-block"  data-toggle="modal" data-target="#SearchCapacitacion" ><span class="glyphicon glyphicon glyphicon-filter  center-block"></span></button>
 						</div>

 					</div>
 					<div class="col-xs-12 center-block">
 					<table  id="tabla1" class="table stacktable stacktable.large-only  stacktable.small-only" >
 						<thead>
 							<tr class="warning" >
 								<th  class="acciones" >Acciones</th>
 								<th>Nombre</th>
 								<th>Apellido 1</th>
 								<th>Apellido 2</th>
 								<th>Cédula</th>
 								<th>Cliente</th>
 								<th>Cursos</th>
 								<th>Fecha de Inicio</th>
 								<th>Vencimiento</th>
 								<th>Tipo</th>
 								<th>Nota</th>
 								<th>Requisito</th>
 							</tr>
 						</thead>
 						<tbody>';
 				foreach ($respuesta as $row => $item) {
 				echo '<tr  id="'.$item["id"].'" class="info">
 						<td class="acciones" ><button class="btn btn-primary btn-xs buttonEditCapacitacion" data-title="Edit" data-toggle="modal" data-target="#CapacitacionEdit" id="'.$item["id"].'"><span class="glyphicon glyphicon-pencil"></span></button>
 							<button class="btn btn-primary btn-xs ButtonCopyCapacitacion"  id="'.$item["id"].'"><span class="	glyphicon glyphicon-duplicate"></span></button>
 							<button class="btn btn-danger btn-xs ButtonTrashCapacitacion"   id="'.$item["id"].'"><span class="glyphicon glyphicon-trash"></span></button>
 						</td>
 						<td  class="nombre" >'.$item["nombre"].'</td>
 						<td  class="Apellido1">'.$item["apellido1"].'</td>
 						<td  class="Apellido2">'.$item["apellido2"].'</td>
 						<td  class="cedula">'.$item["cedula"].'</td>	
 						<td  class="cliente">'.$item["cliente"].'</td>
 						<td  class="cursos">'.$item["cursos"].'</td>
 						<td  class="fechai">'.$item["fechai"].'</td>	
 						<td  class="vencimiento">'.$item["vencimiento"].'</td>
 						<td  class="tipo">'.$item["tipo"].'</td>	
 						<td  class="nota">'.$item["nota"].'</td>
 						<input type="hidden" class="TipoID" value="'.$item["TiposID"].'">	
 						<input type="hidden" class="ClienteID" value="'.$item["ClientesID"].'">	
 						<input type="hidden" class="CursosID" value="'.$item["CursosID"].'">
 						<input type="hidden" class="IDCapacitacion" value="'.$item["IDCapacitacion"].'">';				
 					  
 						if($item["requisitos"]==0){
 							echo '<td class="checkCorrecto"  id="'.$item["id"].'"><button class="btn btn-primary btn-md right-block "  ><span class="glyphicon glyphicon glyphicon-ok" center-block></span></button></td>';
 						}else{
 							echo '<td class="checkFalso"  id="'.$item["id"].'"><button class="btn btn-danger btn-md right-block "  ><span class="glyphicon glyphicon glyphicon-remove" center-block></span></button></td>';
 						}

 					  echo'</tr>

 					';
 			}
 			echo '			</tbody>
 						</table>
 					</div>   <script src="views/js/validarCapacitacion.js"></script><link rel="stylesheet" type="text/css" href="css/estilos.css">
 					';
			}
		}

		public function ExportarCapacitacionPalabra($palabra){
				$respuesta=CapacitacionModel::BuscarPalabraModel($palabra,"tblconsultas");
			if($respuesta==0){
				return 0;
			}else{
				 echo '
 			<div class="row">
 					<div class="col-xs-12 center-block">
 					<div class="col-xs-12">
 						<button class="btn btn-primary btn-md right-block" data-toggle="modal" data-target="#CapacitacionNew" ><span class="glyphicon glyphicon-plus center-block"></span></button>

 						<button class="btn btn-primary btn-md right-block " onclick="printDiv()"  ><span class="glyphicon glyphicon-print" center-block></span></button>

 						<button class="btn btn-primary btn-md  right-block saveSearchxls " ><span class="	glyphicon glyphicon-save center-block"></span></button>
 						</div>

 					</div>
 					<div class="col-xs-12 center-block">
 					<table  id="tabla1" class="table stacktable stacktable.large-only  stacktable.small-only"  style="background-color:#E5E5E5;border:1px solid black">
 						<thead>
 							<tr class="warning" >
 								<th style="background-color:#E5E5E5;border:1px solid black" >Nombre</th>
 								<th style="background-color:#E5E5E5;border:1px solid black" >Apellido 1</th>
 								<th style="background-color:#E5E5E5;border:1px solid black" >Apellido 2</th>
 								<th style="background-color:#E5E5E5;border:1px solid black" >'.utf8_decode("Cédula").'</th>
 								<th style="background-color:#E5E5E5;border:1px solid black" >Cliente</th>
 								<th style="background-color:#E5E5E5;border:1px solid black" >Cursos</th>
 								<th style="background-color:#E5E5E5;border:1px solid black" >Fecha de Inicio</th>
 								<th style="background-color:#E5E5E5;border:1px solid black" >Vencimiento</th>
 								<th style="background-color:#E5E5E5;border:1px solid black" >Tipo</th>
 								<th style="background-color:#E5E5E5;border:1px solid black" >Nota</th>
 							</tr>
 						</thead>
 						<tbody>';
 				foreach ($respuesta as $row => $item) {
 				echo '
 						<td style="background-color:#E5E5E5;border:1px solid black"  class="nombre" >'.utf8_decode($item["nombre"]).'</td>
 						<td style="background-color:#E5E5E5;border:1px solid black"  class="Apellido1">'.utf8_decode($item["apellido1"]).'</td>
 						<td style="background-color:#E5E5E5;border:1px solid black"  class="Apellido2">'.utf8_decode($item["apellido2"]).'</td>
 						<td style="background-color:#E5E5E5;border:1px solid black"  class="cedula">'.$item["cedula"].'</td>	
 						<td style="background-color:#E5E5E5;border:1px solid black"  class="cliente">'.utf8_decode($item["cliente"]).'</td>
 						<td style="background-color:#E5E5E5;border:1px solid black"  class="cursos">'.utf8_decode($item["cursos"]).'</td>
 						<td style="background-color:#E5E5E5;border:1px solid black"  class="fechai">'.$item["fechai"].'</td>	
 						<td style="background-color:#E5E5E5;border:1px solid black"  class="vencimiento">'.$item["vencimiento"].'</td>
 						<td style="background-color:#E5E5E5;border:1px solid black"  class="tipo">'.utf8_decode($item["tipo"]).'</td>	
 						<td style="background-color:#E5E5E5;border:1px solid black"  class="nota">'.$item["nota"].'</td>
 						<input type="hidden" class="TipoID" value="'.$item["TiposID"].'">	
 						<input type="hidden" class="ClienteID" value="'.$item["ClientesID"].'">	
 						<input type="hidden" class="CursosID" value="'.$item["CursosID"].'">
 						<input type="hidden" class="IDCapacitacion" value="'.$item["IDCapacitacion"].'">				
 					  </tr>

 					';
 			}
 			echo '			</tbody>
 						</table>
 					</div>   <script src="views/js/validarCapacitacion.js"></script>
 					';
		}
}

	public static function RequisitosController($nopasa,$IDCliente){
		$respuesta=CapacitacionModel::RequisitosModel($nopasa,$IDCliente,"tblconsultas");
		if($respuesta==0){
			return 0;
		}
		else{
			return 1;
		}
	}
}
