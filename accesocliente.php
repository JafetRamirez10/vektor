<?php 
session_start();
if(!$_SESSION["validarCliente"] || $_GET["iniciar"]==1){

 echo '<script>location.href="index.php"</script>';

	exit();
} 



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Inicio Vector</title>
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
 </head>
 <body>
 
 	<?php 
 		include "modules/menu2.php";
 		include "views/modules/accesocliente.php";
 	 ?>




  <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--   <script src="js/jquery.aniview.js"></script> -->
  <script src="js/js-table/stacktable.js"></script>
  <script src="js/scripts.js"></script>
    <script src="views/js/validarRegistro.js"></script>
    <script src="views/js/validarTipos.js"></script>
    <script src="views/js/validarCursos.js"></script>
       <script src="views/js/validarBusquedaCliente.js"></script>
    <script src="views/js/validarCapacitacion.js"></script>
    <script src="views/js/validarCapacitacionCliente.js"></script>

 </body>
 </html>