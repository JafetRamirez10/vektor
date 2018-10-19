<?php 
$cursos = new CursosController();
if(isset($_POST["curso"])){
	$cursos->FiltroCursosController();
}else{
	$cursos->MostrarTiposController();
}
$cursos->IngresoCursoController();
$cursos-> EditarCursoController();
$cursos->EliminarCursoController();
$cursos-> MostrarModalCurso();
include "modalesCursos.php";

