



<div class="container">
	<label style="color:white" class="ocultoImpresion">Buscar en datos de Capacitacion</label>
	<div class="input-group ocultoImpresion">
	<span class="input-group-addon">Buscar</span>
	<input type="text" name="buscar" id="buscar" class="col-xs-12 center-block form-control" placeholder="Buscar por nombre,cliente  cédula o curso">

</div>
<div id="NoPalabras" class="ocultoImpresion">
</div>
<div class="container">
	<div class="MostrarTabla"></div>
</div>
<?php  
$capacitacion= new CapacitacionController();
// $capacitacion->CapacitacionControllers();
$capacitacion->EliminarCapacitacionController();
 $capacitacion->IngresarCapacitacion();
$capacitacion-> EditarCapacitacionController();
include "modalesCapacitacion.php";?>