<?php
header('Content-type: application/vnd.ms-excel; charset=utf8');
header("Content-Disposition: attachment; filename=clientes.xls");
header("Pragma: no-cache");
header("Expires: 0");

$usuario = new UsuarioController();
$usuario-> ExportarUsuarios();
//$usuario->IngresoUsuarioController();
?>