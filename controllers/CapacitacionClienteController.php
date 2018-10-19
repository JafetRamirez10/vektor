<?php  
Class CapacitacionControllerCliente{
	public function MostrarCapacitacionCliente($datos){
	$respuesta=CapacitacionModelCliente:: MostrarCapacitacionClienteModels($datos);
		
		echo  '<div class="container"> 
 			<div class="row">
 					<div class="col-xs-12 center-block">
 					<div class="col-xs-12">
 						
 						<button class="btn btn-primary btn-md right-block " onclick="printDiv()"  ><span class="glyphicon glyphicon-print" center-block></span></button>

 						<a href="Capacitacionexcel.php?cliente='.$datos.'"><button class="btn btn-primary btn-md  right-block " ><span class="	glyphicon glyphicon-save center-block"></span></button></a>
 						
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
 								<th>Cumple Requisitos</th>
 							</tr>
 						</thead>
 						<tbody>';
 				foreach ($respuesta as $row => $item) {
 				echo '<tr  id="'.$item["id"].'" class="info">
 						<td class="acciones" >
 							<button class="btn btn-primary btn-xs ButtonCopyCapacitacion"  id="'.$item["id"].'"><span class="	glyphicon glyphicon-duplicate"></span></button>
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
 							echo '<td class=""><button class="btn btn-primary btn-md right-block "  ><span class="glyphicon glyphicon glyphicon-ok" center-block></span></button></td>';
 						}else{
 							echo '<td class=""><button class="btn btn-danger btn-md right-block "  ><span class="glyphicon glyphicon glyphicon-remove" center-block></span></button></td>';
 						}			
 					 echo '</tr>

 					';
 			}
 			echo '			</tbody>
 						</table>
 					</div>
 					</div>';

}
	public function ExportarCapacitacionCliente($datos){
		$respuesta=CapacitacionModelCliente:: MostrarCapacitacionClienteModels($datos);
		echo  '<div class="container"> 
 			<div class="row">
 					<div class="col-xs-12 center-block">
 					<div class="col-xs-12">

 						<button class="btn btn-primary btn-md right-block " onclick="printDiv()"  ><span class="glyphicon glyphicon-print" center-block></span></button>

 						<a href="Capacitacionexcel.php?cliente='.$datos.'"><button class="btn btn-primary btn-md  right-block " ><span class="	glyphicon glyphicon-save center-block"></span></button></a>
 						
 						</div>


 					</div>
 					<div class="col-xs-12 center-block">
 					<table  id="tabla1" class="table stacktable stacktable.large-only  stacktable.small-only" style="background-color:#E5E5E5;border:1px solid black" >
 						<thead>
 							<tr class="warning" >
 								<th style="background-color:#E5E5E5;border:1px solid black">Nombre</th>
 								<th style="background-color:#E5E5E5;border:1px solid black">Apellido 1</th>
 								<th style="background-color:#E5E5E5;border:1px solid black">Apellido 2</th>
 								<th style="background-color:#E5E5E5;border:1px solid black">'.utf8_decode("Cédula").'</th>
 								<th style="background-color:#E5E5E5;border:1px solid black">Cliente</th>
 								<th style="background-color:#E5E5E5;border:1px solid black">Cursos</th>
 								<th style="background-color:#E5E5E5;border:1px solid black">Fecha de Inicio</th>
 								<th style="background-color:#E5E5E5;border:1px solid black">Vencimiento</th>
 								<th style="background-color:#E5E5E5;border:1px solid black">Tipo</th>
 								<th style="background-color:#E5E5E5;border:1px solid black">Nota</th>
 							</tr>
 						</thead>
 						<tbody>';
 				foreach ($respuesta as $row => $item) {
 				echo '<tr  id="'.$item["id"].'" class="info">
 					
 						<td class="nombre"  style="background-color:#E5E5E5;border:1px solid black">'.utf8_decode($item["nombre"]).'</td>
 						<td class="Apellido1" style="background-color:#E5E5E5;border:1px solid black">'.utf8_decode($item["apellido1"]).'</td>
 						<td class="Apellido2" style="background-color:#E5E5E5;border:1px solid black">'.utf8_decode($item["apellido2"]).'</td>
 						<td class="cedula" style="background-color:#E5E5E5;border:1px solid black">'.utf8_decode($item["cedula"]).'</td>	
 						<td class="cliente" style="background-color:#E5E5E5;border:1px solid black">'.utf8_decode($item["cliente"]).'</td>
 						<td class="cursos" style="background-color:#E5E5E5;border:1px solid black">'.utf8_decode($item["cursos"]).'</td>
 						<td class="fechai" style="background-color:#E5E5E5;border:1px solid black">'.$item["fechai"].'</td>	
 						<td class="vencimiento" style="background-color:#E5E5E5;border:1px solid black">'.$item["vencimiento"].'</td>
 						<td class="tipo" style="background-color:#E5E5E5;border:1px solid black">'.utf8_decode($item["tipo"]).'</td>	
 						<td class="nota" style="background-color:#E5E5E5;border:1px solid black">'.$item["nota"].'</td>
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

	public static function BuscarPalabraClienteAjax($datos,$IDCliente){
		$datosController=array("nombre"=>$datos,
								"id"=>$IDCliente);
		$respuesta=CapacitacionModelCliente::BuscarPalabraClienteModel($datosController,"tblconsultas");
		if($respuesta==0){
				return 0;
			}else{
				 echo '
 			<div class="row">
 					<div class="col-xs-12 center-block">
 					<div class="col-xs-12">
 						

 						<button class="btn btn-primary btn-md right-block " onclick="printDiv()"  ><span class="glyphicon glyphicon-print" center-block></span></button>

 						<button class="btn btn-primary btn-md  right-block saveSearchxls2 " ><span class="	glyphicon glyphicon-save center-block"></span></button>
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
 							</tr>
 						</thead>
 						<tbody>';
 				foreach ($respuesta as $row => $item) {
 				echo '<tr  id="'.$item["id"].'" class="info">
 						<td class="acciones" >
 							<button class="btn btn-primary btn-xs ButtonCopyCapacitacion"  id="'.$item["id"].'"><span class="	glyphicon glyphicon-duplicate"></span></button>
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
 						<input type="hidden" class="IDCapacitacion" value="'.$item["IDCapacitacion"].'">				
 					  </tr>

 					';
 			}
 			echo '			</tbody>
 						</table>
 					</div>   <script src="views/js/validarCapacitacion.js"></script><script src="views/js/validarCapacitacionCliente.js"></script><link rel="stylesheet" type="text/css" href="css/estilos.css">
 					';
			}

	}
	public function ExportarCapacitacionPalabraCliente($palabra,$IDCliente){
			$datosController=array("nombre"=>$palabra,
								"id"=>$IDCliente);
		$respuesta=CapacitacionModelCliente::BuscarPalabraClienteModel($datosController,"tblconsultas");
		if($respuesta==0){
				return 0;
			}else{
				 echo '
 			<div class="row">
 					<div class="col-xs-12 center-block">
 					<div class="col-xs-12">
 						

 						<button class="btn btn-primary btn-md right-block " onclick="printDiv()"  ><span class="glyphicon glyphicon-print" center-block></span></button>

 						<button class="btn btn-primary btn-md  right-block saveSearchxls2 " ><span class="	glyphicon glyphicon-save center-block"></span></button>
 						</div>

 					</div>
 					<div class="col-xs-12 center-block">
 					<table  id="tabla1" class="table stacktable stacktable.large-only  stacktable.small-only" style="background-color:#E5E5E5;border:1px solid black" >
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
 				echo '<tr  id="'.$item["id"].'" class="info">
 						
 						<td style="background-color:#E5E5E5;border:1px solid black" class="nombre" >'.utf8_decode($item["nombre"]).'</td>
 						<td style="background-color:#E5E5E5;border:1px solid black" class="Apellido1">'.utf8_decode($item["apellido1"]).'</td>
 						<td style="background-color:#E5E5E5;border:1px solid black" class="Apellido2">'.utf8_decode($item["apellido2"]).'</td>
 						<td style="background-color:#E5E5E5;border:1px solid black" class="cedula">'.$item["cedula"].'</td>	
 						<td style="background-color:#E5E5E5;border:1px solid black" class="cliente">'.utf8_decode($item["cliente"]).'</td>
 						<td style="background-color:#E5E5E5;border:1px solid black"  class="cursos">'.utf8_decode($item["cursos"]).'</td>
 						<td style="background-color:#E5E5E5;border:1px solid black" class="fechai">'.$item["fechai"].'</td>	
 						<td style="background-color:#E5E5E5;border:1px solid black" class="vencimiento">'.$item["vencimiento"].'</td>
 						<td style="background-color:#E5E5E5;border:1px solid black" class="tipo">'.utf8_decode($item["tipo"]).'</td>	
 						<td style="background-color:#E5E5E5;border:1px solid black" class="nota">'.$item["nota"].'</td>
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
 					';
			}
	}
	public static function VerSubContratar($id){
		$respuesta=CapacitacionModelCliente::MostrarCapacitacionClienteSelect($id);
			$valor="";
		if($respuesta==0){
			return 0;
		}else{
			echo '<div class="row"><label style="color:white">Subcontratacion: </label><select class="seleccionarSub">';
			foreach ($respuesta as $row => $item) {
				if($id!=$item["idSubcontratacion"]){
				$obtenerSubContrato=CapacitacionModelCliente::MostrarCapacitacionClienteModels($item["idSubcontratacion"]);
				foreach ($obtenerSubContrato as $key => $value) {
					if($valor!=$value["ClientesID"]){
					echo "<option value=".$value["ClientesID"].">".$value["cliente"]."</option>";
					$valor=$value["ClientesID"];
				}
				}
			}
			}
			echo '</select><button class="btn btn-primary revisarSubContratado">Revisar</button></div>';

		}
	}
}
