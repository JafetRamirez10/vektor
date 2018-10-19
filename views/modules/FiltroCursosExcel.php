<?php 
header('Content-type: application/vnd.ms-excel; charset=utf8');
header("Content-Disposition: attachment; filename=curso.xls");
header("Pragma: no-cache");
header("Expires: 0");
$cursos = new CursosController();
$cursos->ExportarCursosFiltroController();