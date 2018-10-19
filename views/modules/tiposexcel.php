<?php
header('Content-type: application/vnd.ms-excel; charset=utf8');
header("Content-Disposition: attachment; filename=tipos.xls");
header("Pragma: no-cache");
header("Expires: 0");

$usuario = new TiposController();
$usuario-> ExportarTipos();

?>