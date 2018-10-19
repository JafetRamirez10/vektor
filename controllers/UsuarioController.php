<?php  
 	Class UsuarioController{
 		// MOSTRAR USUARIOS 
 		public  function MostrarUsuariosCont(){
 			$respuesta=UsuarioModel::MostrarUsuariosModel();
 			echo '<div class="container"> 
 			<div class="row">
 					<div class="col-xs-12 center-block">
 					<div class="col-xs-12" style="margin-bottom:2%">
 					<button class="btn btn-primary btn-md right-block" data-toggle="modal" data-target="#sub" ><span class="glyphicon glyphicon-tag center-block"> Subcontratación</span></button></div>

 					<div class="col-xs-12">

 						<button class="btn btn-primary btn-md right-block" data-toggle="modal" data-target="#new" ><span class="glyphicon glyphicon-plus center-block"></span></button>

 						<button class="btn btn-primary btn-md right-block " onclick="printDiv()"  ><span class="glyphicon glyphicon-print" center-block></span></button>

 						<a href="clientesexcel.php"><button class="btn btn-primary btn-md  right-block " ><span class="	glyphicon glyphicon-save center-block"></span></button></a>
 						<button class="btn btn-primary btn-md right-block"  data-toggle="modal" data-target="#SearchUsuario" ><span class="glyphicon glyphicon glyphicon-filter  center-block"></span></button>
 						</div>
 						
 						</div>

 					</div>
 					<div class="col-xs-12 center-block">
 					<table  id="tabla1" class="table stacktable stacktable.large-only  stacktable.small-only" >
 						<thead>
 							<tr class="warning" >
 								<th class="acciones" >Acciones</th>
 								<th>Nombre</th>
 								<th>Contraseña</th>
 								<th>Correo electrónico</th>
 								<th>Teléfono</th>
 								<th>Usuario</th>
 								<th>Rol</th>
 							</tr>
 						</thead>
 						<tbody>';
 			foreach ($respuesta as $row => $item) {
 				echo '<tr  id="'.$item["id"].'" class="info">
 						<td class="acciones" ><button class="btn btn-primary btn-xs buttonEdit" data-title="Edit" data-toggle="modal" data-target="#edit" id="'.$item["id"].'"><span class="glyphicon glyphicon-pencil"></span></button>
 							<button class="btn btn-primary btn-xs ButtonCopy"  id="'.$item["id"].'"><span class="	glyphicon glyphicon-duplicate"></span></button>
 							<button class="btn btn-danger btn-xs ButtonTrash"  data-target="#trash" id="'.$item["id"].'"><span class="glyphicon glyphicon-trash"></span></button>
 						</td>
 						<td class="nombre" >'.$item["nombre"].'</td>
 						<td class="contra">'.$item["contra"].'</td>
 						<td class="correo">'.$item["correo"].'</td>
 						<td class="telefono">'.$item["telefono"].'</td>
						<td class="usuario">'.$item["usuario"].'</td>
						<td class="rol">'.$item["rol"].'</td> 						
 					  </tr>
 					';
 			}

 			echo '			</tbody>
 						</table>
 					</div>
 					</div>';
 		}

 		public  function FiltroControllerUsuario(){
 			if(isset($_POST["cliente"])){
 			echo '<div class="container"> 
 			<div class="row">
 					<div class="col-xs-12 center-block">
 					<div class="col-xs-12">
 						<button class="btn btn-primary btn-md right-block" data-toggle="modal" data-target="#new" ><span class="glyphicon glyphicon-plus center-block"></span></button>

 						<button class="btn btn-primary btn-md right-block " onclick="printDiv()"  ><span class="glyphicon glyphicon-print" center-block></span></button>

 						<a href="javascript:document.form1.submit()"><button class="btn btn-primary btn-md  right-block " ><span class="	glyphicon glyphicon-save center-block"></span></button></a>
 						<button class="btn btn-primary btn-md right-block"  data-toggle="modal" data-target="#SearchUsuario" ><span class="glyphicon glyphicon glyphicon-filter  center-block"></span></button>
 						</div>
 						
 						</div>

 					</div>
 					<div class="col-xs-12 center-block">
 					<table  id="tabla1" class="table stacktable stacktable.large-only  stacktable.small-only" >
 						<thead>
 							<tr class="warning" >
 								<th class="acciones" >Acciones</th>
 								<th>Nombre</th>
 								<th>Contraseña</th>
 								<th>Correo electrónico</th>
 								<th>Teléfono</th>
 								<th>Usuario</th>
 								<th>Rol</th>
 							</tr>
 						</thead>
 						<tbody>';
 						if ($_SERVER["REQUEST_METHOD"] == "POST") {  
							$numero =$_POST["cliente"];
						$count= count($numero);}
						echo '<form  id="form1" name="form1" action="FiltroClienteExcel.php" method="post">';
						for($e=0; $e<$count; $e++){
							echo '<input type="hidden" name="clientes[]" value="'.$numero[$e].'">';
						}
						echo '</form>';
 						for ($i=0; $i < $count ; $i++) { 
						$respuesta=UsuarioModel::FiltroUsuarioModel($numero[$i],"tblclientes");
				
					foreach ($respuesta as $row => $item) {
							echo '<tr  id="'.$item["id"].'" class="info">
 						<td class="acciones" ><button class="btn btn-primary btn-xs buttonEdit" data-title="Edit" data-toggle="modal" data-target="#edit" id="'.$item["id"].'"><span class="glyphicon glyphicon-pencil"></span></button>
 							<button class="btn btn-primary btn-xs ButtonCopy"  id="'.$item["id"].'"><span class="	glyphicon glyphicon-duplicate"></span></button>
 							<button class="btn btn-danger btn-xs ButtonTrash"  data-target="#trash" id="'.$item["id"].'"><span class="glyphicon glyphicon-trash"></span></button>
 						</td>
 						<td class="nombre" >'.$item["nombre"].'</td>
 						<td class="contra">'.$item["contra"].'</td>
 						<td class="correo">'.$item["correo"].'</td>
 						<td class="telefono">'.$item["telefono"].'</td>
						<td class="usuario">'.$item["usuario"].'</td>
						<td class="rol">'.$item["rol"].'</td> 						
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
 	public function ExportarUsuariosCliente(){
 		if(isset($_POST["clientes"])){
 			echo '<div class="container"> 
 			<div class="row">
 					<div class="col-xs-12 center-block">
 					<div class="col-xs-12">
 						<button class="btn btn-primary btn-md right-block" data-toggle="modal" data-target="#new" ><span class="glyphicon glyphicon-plus center-block"></span></button>

 						<button class="btn btn-primary btn-md right-block " onclick="printDiv()"  ><span class="glyphicon glyphicon-print" center-block></span></button>

 						<a href="javascript:document.form1.submit()"><button class="btn btn-primary btn-md  right-block " ><span class="	glyphicon glyphicon-save center-block"></span></button></a>
 						<button class="btn btn-primary btn-md right-block"  data-toggle="modal" data-target="#SearchUsuario" ><span class="glyphicon glyphicon glyphicon-filter  center-block"></span></button>
 						</div>
 						
 						</div>

 					</div>
 					<div class="col-xs-12 center-block">
 					<table  style="background-color:#E5E5E5;border:1px solid black"   id="tabla1" class="table stacktable stacktable.large-only  stacktable.small-only" >
 						<thead>
 							<tr class="warning" >
 								<th  style="background-color:#E5E5E5;border:1px solid black" >Nombre</th>
 								<th  style="background-color:#E5E5E5;border:1px solid black" >'.utf8_decode("Contraseña").'</th>
 								<th  style="background-color:#E5E5E5;border:1px solid black" >'.utf8_decode("Correo electrónico").'</th>
 								<th  style="background-color:#E5E5E5;border:1px solid black" >'.utf8_decode("Teléfono").'</th>
 								<th  style="background-color:#E5E5E5;border:1px solid black" >Usuario</th>
 								<th  style="background-color:#E5E5E5;border:1px solid black" >Rol</th>
 							</tr>
 						</thead>
 						<tbody>';
 						if ($_SERVER["REQUEST_METHOD"] == "POST") {  
							$numero =$_POST["clientes"];
						$count= count($numero);}
						echo '<form  id="form1" name="form1" action="FiltroClienteExcel.php" method="post">';
						for($e=0; $e<$count; $e++){
							echo '<input type="hidden" name="clientes[]" value="'.$numero[$e].'">';
						}
						echo '</form>';
 						for ($i=0; $i < $count ; $i++) { 
						$respuesta=UsuarioModel::FiltroUsuarioModel($numero[$i],"tblclientes");
				
					foreach ($respuesta as $row => $item) {
							echo '<tr  id="'.$item["id"].'" class="info">
 					
 						<td  style="background-color:#E5E5E5;border:1px solid black"  class="nombre" >'.utf8_decode($item["nombre"]).'</td>
 						<td  style="background-color:#E5E5E5;border:1px solid black"  class="contra">'.$item["contra"].'</td>
 						<td  style="background-color:#E5E5E5;border:1px solid black"  class="correo">'.$item["correo"].'</td>
 						<td  style="background-color:#E5E5E5;border:1px solid black"  class="telefono">'.$item["telefono"].'</td>
						<td  style="background-color:#E5E5E5;border:1px solid black"  class="usuario">'.utf8_decode($item["usuario"]).'</td>
						<td  style="background-color:#E5E5E5;border:1px solid black"  class="rol">'.$item["rol"].'</td> 						
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
 	public function MostrarNombreCliente(){
 		$respuesta=UsuarioModel::MostrarUsuariosModel("tblclientes");
 		echo '<div id="SearchUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal Mostrar Clientes Checkbox-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title Pauta">Filtro</h4>
      </div>
      <div class="modal-body" style="overflow-y:scroll; max-height:300px">
      <form name="form2" id="form2" action="inicio.php?pagina=buscarCliente" method="post">'
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

/// EXPORTAR XLS
	public  function ExportarUsuarios(){
			$contra = "Contraseña";
			$tel = "Teléfono";
 			$respuesta=UsuarioModel::MostrarUsuariosModel();
 			echo '<div class="container"> 
 			<div class="row">
 					<div class="col-xs-12 center-block">
 					<div class="col-xs-12">
 						<button class="btn btn-primary btn-md right-block" data-toggle="modal" data-target="#new" ><span class="glyphicon glyphicon-plus center-block"></span></button>

 						<button class="btn btn-primary btn-md right-block " onclick="printDiv()"  ><span class="glyphicon glyphicon-print" center-block></span></button>

 						<button class="btn btn-primary btn-md  right-block "  data-toggle="modal" data-target="#save"  ><span class="	glyphicon glyphicon-save center-block"></span></button>
 						</div>

 					</div>
 					<div class="col-xs-12 center-block">
 					<table  id="tabla1" class="table stacktable stacktable.large-only  stacktable.small-only" style="background-color:#E5E5E5;border:1px solid black" >
 						<thead>
 							<tr class="warning" >
 							
 								<th style="background-color:#E5E5E5;border:1px solid black" >Nombre</th>
 								<th style="background-color:#E5E5E5;border:1px solid black" >'.utf8_decode($contra).'</th>
 								<th style="background-color:#E5E5E5;border:1px solid black" >Email</th>
 								<th style="background-color:#E5E5E5;border:1px solid black" >'.utf8_decode($tel).'</th>
 								<th style="background-color:#E5E5E5;border:1px solid black" >Usuario</th>
 								<th style="background-color:#E5E5E5;border:1px solid black" >Rol</th>
 							</tr>
 						</thead>
 						<tbody>';
 			foreach ($respuesta as $row => $item) {
 				echo '
 						<td style="background-color:#E5E5E5;border:1px solid black" >'.utf8_decode($item["nombre"]).'</td>
 						<td style="background-color:#E5E5E5;border:1px solid black" >'.$item["contra"].'</td>
 						<td style="background-color:#E5E5E5;border:1px solid black" >'.$item["correo"].'</td>
 						<td style="background-color:#E5E5E5;border:1px solid black" >'.$item["telefono"].'</td>
						<td style="background-color:#E5E5E5;border:1px solid black" >'.$item["usuario"].'</td>
						<td style="background-color:#E5E5E5;border:1px solid black" >'.$item["rol"].'</td> 						
 					  </tr>
 					';
 			}

 			echo '			</tbody>
 						</table>
 						
 					</div>
 					</div>';

 		}


/// FIN DE EXPORTAR XLS 		
 	
 		// Nuevo Usuario
 		public function IngresoUsuarioController(){
 			if(isset($_POST["Registroenviar"])){
 				$categoria="";
 				if($_POST["rol"]==1){$categoria="Administrador";}
 				if($_POST["rol"]==2){$categoria="Cliente";}
 				$datosController=array("nombre"=>$_POST["nombre"],
 									   "pass"=>$_POST["contra"],
 										"email"=>$_POST["correo"],
 										"telefono"=>$_POST["telefono"],
 										"usuario"=>$_POST["usuario"],
 										 "rol"=>$_POST["rol"],
 										 "categoria"=>$categoria);


 			echo $respuesta=UsuarioModel::IngresoUsuarioModel($datosController,"tblclientes");
 			echo "<script>console.log(".$respuesta.");</script>";
 			 if($respuesta==1){
 			 	echo '<script>swal("Se agrego con exito el usuario")
.then((value) => {
  			location.href="inicio.php?pagina=clientes";
});</script>';
 			 }
 			}
 		}
// EDITAR USUARIO
 	public function EditarUsuarioController(){
 		if(isset($_POST["Editarenviar"])){
 				$categoria="";
 				if($_POST["EditarRol"]==1){$categoria="Administrador";}
 				if($_POST["EditarRol"]==2){$categoria="Cliente";}
 				$datosController=array("nombre"=>$_POST["Editarnombre"],
 									   "pass"=>$_POST["Editarcontra"],
 										"email"=>$_POST["Editarcorreo"],
 										"telefono"=>$_POST["Editartelefono"],
 										"usuario"=>$_POST["Editarusuario"],
 										 "rol"=>$_POST["EditarRol"],
 										 "categoria"=>$categoria,
 										 "Id"=>$_POST["EditarId"]);


 			echo $respuesta=UsuarioModel::EditarUsuarioModel($datosController,"tblclientes");
 			echo "<script>console.log(".$respuesta.");</script>";
 			 if($respuesta==1){
 			 	echo '<script>swal("Se edito el usuario correctamente")
.then((value) => {
  			location.href="inicio.php?pagina=clientes";
});</script>';	
 		}
 	}
 

 	}
 		// FIN DE EDITAR USUARIO

 	// ELIMINAR USUARIO
 	public function EliminarUsuarioController(){
 		if(isset($_GET["eliminar"])){
 			$datosController=$_GET["eliminar"];
 			echo $respuesta=UsuarioModel::EliminarUsuarioModel($datosController,"tblclientes");
 			if($respuesta==1){
 				echo '<script>swal("Se eliminó correctamente el usuario")
.then((value) => {
  			location.href="inicio.php?pagina=clientes";
});</script>';	
 			} 		
 		}
 	}
// FIN DE ELIMINAR USUARIO


 	public static function ExisteUsuarioController($usuario){
 		$respuesta=UsuarioModel::ExisteUsuarioModel($usuario,"tblclientes");
 		echo $respuesta;
 	}
 	public static function ExisteUsuarioControllerEditar($Editar,$primario){
 		$respuesta=UsuarioModel::ExisteUsuarioModelEditar($Editar,$primario,"tblclientes");
    return $respuesta;
 		
 	}
 	public static function BuscarClientesRelacionar(){
 		$respuesta=UsuarioModel::MostrarUsuariosModel();
 		echo '<div id="sub" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title Pauta">Relacionar Empresas</h4>
      </div>
      <div class="modal-body bodyRelacionar">

      <div class="row">
      		<div class="col-12 col-md-6 form-group">

      		<label>Cliente Primario</label>
      			<select class="empresa1 form-control">
      			';
      foreach ($respuesta as $row => $item) {
      	echo '<option value="'.$item["id"].'">'.$item["usuario"].'</option>';
      }
      echo '</select></div><div class="col-12 col-md-6 form-group">
      			<label>Cliente Subcontrado</label>
      			<select class="empresa2 form-control">
      			';
       foreach ($respuesta as $row => $item) {
      	echo '<option value="'.$item["id"].'">'.$item["usuario"].'</option>';
      }
      echo '</select></div><div class="col-12" style="margin-left:4%;"><div class="col-12"><button type="button" class="btn btn-primary relacionarEmpresas">Relacionar</button></div></div></div>';


      echo ' </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>';
 	}
 	public static function AgregarRelacionEmpresas($empresaPri,$empresaSub){
 		$respuesta=UsuarioModel::ExisteRelacionEmpresas("subcontratacion",$empresaPri,$empresaSub);
 		if($respuesta==0){
 			$respuestados=UsuarioModel::CrearRelacionEmpresa("subcontratacion",$empresaPri,$empresaSub);
 			return 0;
 		}else{
 			return 2;
 		}
 	}
  public static function BuscarSubContratado($empresaPri){
    $respuesta=UsuarioModel::BuscarSubContratado($empresaPri,"subcontratacion");
    if($respuesta==0){
      return 0;
    }else{
      return 2;
    }
  }
 	
 }