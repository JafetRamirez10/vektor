<?php  
$cursos = new CursosController();
$cursos->MostrarTiposController();
$cursos->IngresoCursoController();
$cursos-> EditarCursoController();
$cursos->EliminarCursoController();
$cursos-> MostrarModalCurso();
include "modalesCursos.php";