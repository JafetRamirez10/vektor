<?php 

	require "class.phpmailer.php";
	require "class.smtp.php";

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulario - Vektor</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="icon" type="image/png" href="img/favicon.png" />
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="webfonts/css/fontawesome-all.min.css">
<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <script>
 	$(document).ready(function(){
 		$("#posseH").val("NO");
 		$("#posseDM").val("NO");
 		$("#formulario").modal("show");
 		$("#posseH").change(function(){
 			valor1 = $("#posseH").val();
 			if(valor1=="SI"){
 				$(".HOjaD").attr("style","");
 			}else{
 				$(".HOjaD").attr("style","display:none");
 				console.log("entra");
 			}
 		})
 		$("#posseDM").change(function(){
 			valor2 = $("#posseDM").val();
 			if(valor2=="SI"){
 				$(".DictamenMA").attr("style","");
 			}else{
 				$(".DictamenMA").attr("style","display:none");
 			}
 		})
 		$("#enviar").click(function(){
 			$(".cargando").attr("style","");
 		})
 	})
 </script>
</head>
<body>
<div id="formulario" class="modal fade" role="dialog"  data-backdrop="static" data-keyboard="false" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <h4 class="modal-title Pauta">Requisitos</h4>
      </div>
      <div class="modal-body">
        	<form method="post" enctype="multipart/form-data" >

    <div class="form-group"> <!-- Nombre -->
        <label for="Nombre" class="control-label">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" required>
    </div>    
    <div class="form-group"> <!-- Nombre -->
        <label for="empresa" class="control-label">Empresa:</label>
        <input type="text" class="form-control" id="empresa" name="empresa" placeholder="" required>
    </div>    
<div class="form-group"> <!-- Nombre -->
        <label for="empresa" class="control-label">Planilla de INS:</label>
        <input type="file" class="form-control" id="planilla" name="planillaINS" placeholder="" required>
    </div>  
    <div class="form-group"> <!-- Nombre -->
        <label for="empresa" class="control-label">Planilla  CCSS:</label>
        <input type="file" class="form-control" id="planillaCSS" name="planillaCSS" placeholder="" required>
    </div> 
    <div class="form-group"> <!-- Nombre -->
        <label for="empresa" class="control-label">Formulario de Aceptación de requisitos:</label>
        <input type="file" class="form-control" id="requisitos" name="requisitos" placeholder="" required>
    </div>
     <div class="form-group"> <!-- Nombre -->
      <label>Posse Hoja de delicuencia</label>
     <select id="posseH"><option value="NO">NO</option><option value="SI">SI</option></select>
    </div>  
     <div class="form-group HOjaD" style="display: none"> <!-- Nombre -->
        <label for="empresa" class="control-label">Adjuntar Hoja de Delicuencia:</label>
        <input type="file" class="form-control" id="HojaD" name="HojaD" placeholder="" >
    </div>
    <div class="form-group"> <!-- Nombre -->
      <label>Posse Dictamen Médico</label>
     <select id="posseDM"><option value="NO">NO</option><option value="SI">SI</option></select>
    </div>  
    <div class="form-group DictamenMA" style="display: none"> <!-- Nombre -->
        <label for="empresa" class="control-label">Adjuntar Dictamen Médico:</label>
        <input type="file" class="form-control" id="DictamenM" name="DictamenM" placeholder="" >
    </div>
    <div class="form-group"> <!-- Nombre -->
        <label for="otros" class="control-label">Otros:</label>
        <input type="file" class="form-control" id="otros" name="otros" placeholder="" >
    </div>  
           
              
    <div class="form-group"> <!-- Agregar -->
        <button type="submit" class="btn btn-primary" name="enviar" id="enviar">Enviar</button>
        <div class="cargando" style="display: none">
        <label>Enviado varios archivos, por favor espere</label>
        <img src="cargando.gif" class="img-fluid"></div>
    </div>     
    
</form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button> -->
      </div>
    </div>
<?php 
	if(isset($_POST["enviar"])){
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->Host='smtp.gmail.com';
		$mail->SMTPAuth=true;
		$mail->Username='jafet0810@gmail.com';
		$mail->Password='HabilidadDios777';
		$mail->SMTPSecure='tls';
		$mail->Port=587;
		$mail->setFrom('jafet0810@gmail.com', 'Vektor Sistema');
		$mail->addAddress('vektor201810@gmail.com', 'Jafet');
		$nombre = $_POST["nombre"];
		$empresa = $_POST["empresa"];
		$INS =$_FILES['planillaINS'];
		$CSS=$_FILES['planillaCSS'];
		$Hoja=$_FILES['HojaD'];
		// if(empty($_FILES['HojaD'])){
		// 	$url='https://commons.wikimedia.org/wiki/File:Action-undo-720.png';
		// 	$nombreHoja="123.png";
		// 	$DatosHoja = file_get_contents($url);
		// }else{
		// 	$Hoja=$_FILES['HojaD'];
		// 	$DatosHoja=$Hoja['tmp_name']; 
		// 	$nombreHoja=$_FILES['HojaD']['name'];
		// }
		
		$requisitos=$_FILES['requisitos'];
		$DictamenM=$_FILES['DictamenM'];
		$Otros=$_FILES['otros'];
		
		$mail->Subject = 'Datos Cliente';
		$mail->Body = 'Nombre:'.$nombre.'<br>Empresa:'.$empresa;
		 $mail->addAttachment($INS['tmp_name'], $INS['name']);
		 $mail->addAttachment($CSS['tmp_name'], $CSS['name']);
		 if($_FILES['HojaD']['size']!=0){
		 	$mail->addAttachment($Hoja['tmp_name'],$Hoja['name']);
		  
		 }
		 if($_FILES['DictamenM']['size']!=0){
		 	$mail->addAttachment($DictamenM['tmp_name'],$DictamenM['name']);
		 }
		 if($_FILES['otros']['size']!=0){
		 	$mail->addAttachment($Otros['tmp_name'],$Otros['name']);
		 }

		  $mail->addAttachment($requisitos['tmp_name'], $requisitos['name']);
		 $mail->IsHTML(true);
		// $mail->addAttachment($Hoja['tmp_name'], $Hoja['name']);
		// $mail->addAttachment($requisitos['tmp_name'], $requisitos['name']);
		// $mail->addAttachment($DictamenM['tmDictamenMp_name'], $DictamenM['name']);
		// $mail->addAttachment($Otros['tmDictamenMp_name'], $Otros['name']);
		$exito=$mail->send();
		if($exito){
			echo "<script>swal({
   title:'¡Gracias!, se envio correctamente',
   text:'',
   type:'success'
 }).then((result) => {
 	location.href='formulario.php';}
 )</script>";
		}  
	}




	//Enviar el correo
// 		echo "<script>swal({
//   title:'¡Gracias!, pronto te contactaremos',
//   text:'',
//   type:'success'
// }).then((result) => {
// 	location.href='index.php';}
// )</script>";
// 	}else{
// 		echo "Error de envio";
// }
	


 ?>
  </div>
</div>
</body>
</html>