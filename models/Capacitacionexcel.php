<?php 
header('Content-type: application/vnd.ms-excel; charset=utf8');
header("Content-Disposition: attachment; filename=cursos.xls");
header("Pragma: no-cache");
header("Expires: 0");

$capacitacion= new CapacitacionController();
$capacitacion->ExportarCapacitacion();