<?php 

require_once "models/modelo.php";
require_once "models/UsuarioModel.php";
require_once "controllers/controller.php";
require_once "controllers/UsuarioController.php";

$mvc = new MvcController();
$mvc-> ingresoUsuarioController();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - Vektor</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="webfonts/css/fontawesome-all.min.css">
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<div class="row  center-block">
	<div class="col-xs-12 login">
		<img src="img/logo.png" class="img-responsive">
		<h1>LOGIN</h1>
		<form method="post" class="center-block">
			<div class="input-group form-group"">
				<span class="input-group-addon">
				 <i class="fas fa-user"></i></span>
    <input type="text" class="form-control" name="usuarioIngreso" id="usuarioIngreso" required /></div>
    <div class="input-group form-group"">
				<span class="input-group-addon">
				<i class="fas fa-lock"></i></span>
    <input type="password" class="form-control" name="passwordIngreso"  id="passwordIngreso" required /></div>
    <button type="submit" class="btn btn-lg btn-warning">Ingresar</button>
    <?php 


	if(isset($_GET["error"])){
		echo '<div class="row" style="margin-top:2%"><div class="alert alert-danger col-xs-12">
  <strong>¡Error!</strong> La contraseña o el nombre del usuario son erroneos
</div></div>';
	}
	if(isset($_GET["cerrar"])){
		if($_GET["cerrar"]=='true'){
		echo "<script>
			swal({
				title:'',
				text:'Se cerró sesión con exitó',
				type: 'warning'
			}).then((result) => {
				location.href='index.php';
			});
			
		</script>";
	}
}
 ?>

		</form>
	</div>
</div>
<script src="js/jquery.js"></script>
  <script src="js/jquery.aniview.js"></script>
  <script src="js/bootstrap.js"></script>
<!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->

</body>
</html>