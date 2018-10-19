<?php 
class MvcController{

		public static function ingresoUsuarioController(){

			if(isset($_POST["usuarioIngreso"])){
				$datosController = array( "usuario"=>$_POST["usuarioIngreso"], 
								      "password"=>$_POST["passwordIngreso"]);
				$respuesta = Datos::ingresoUsuarioModel($datosController,"tblclientes");
				if($respuesta==0){
					echo '<script>location.href="index.php?error"</script>';
				}else{
				if($respuesta["usuario"] == $_POST["usuarioIngreso"] && $respuesta["contra"] == $_POST["passwordIngreso"]){

					session_start();

					$_SESSION["validar"] = $respuesta["categoria"];
					if($respuesta["categoria"]==1){
					echo '<script> location.href="inicio.php?iniciar='. $respuesta["id"].'&admin='.$respuesta["categoria"].'"</script>';
			}elseif($respuesta["categoria"]==2){
				$existeSubContratado=UsuarioController::BuscarSubContratado($respuesta["id"]);
				$_SESSION["validarCliente"]= $respuesta["categoria"];
				if($existeSubContratado==0){
					echo '<script>location.href="accesocliente.php?iniciar='. $respuesta["id"].'"</script>';
				}else{
					echo '<script>location.href="accesocliente.php?iniciar='. $respuesta["id"].'&sub=true"</script>';
				}
				
				
			}
		
	


		}
}
}
}
}
 ?>