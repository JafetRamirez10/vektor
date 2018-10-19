// LLenar Datos Editar Cliente
$(".buttonEditCursos").click(function(){
	var NombreCursos =$(this).parents("tr").find(".NombreCursos").html();
	var Id = $(this).attr("id");
		$("#EditarCurso").attr("value" ,NombreCursos );
	$("#EditarCursoID").attr("value" , Id);
});

// Final Datos Editar Cliente

// Copiar tabla Fila
$(".ButtonCopyCursos").click(function() {
	var nombreCurso = $(this).parents("tr").find(".NombreCursos").html();
	var idCurso = $(this).parents("tr").find(".idCursos").html();

	id_elemento = "Nombre del Curso: "+nombreCurso+" id Curso: "+idCurso;

 // Crea un campo de texto "oculto"
var aux = document.createElement("input");
	//var aux = document.getElementById('CampoOculto');
// Asigna el contenido del elemento especificado al valor del campo
aux.setAttribute("value", id_elemento);

// Añade el campo a la página
document.body.appendChild(aux);

// Selecciona el contenido del campo
aux.select();

// Copia el texto seleccionado
document.execCommand("copy");

// Elimina el campo de la página
document.body.removeChild(aux);

	swal("Texto Copiado", "", "success");
});

// Fin de Copiar Tabla Fila


// Eliminar una fila
$(".ButtonTrashCurso").click(function(){
	var id=$(this).attr("id");
	swal({
  title: "Eliminar?",
  text: "Estas seguro que deseas eliminar este curso",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
   	location.href="inicio.php?pagina=cursos&eliminar="+id;
  } else {
     location.href="inicio.php?pagina=cursos";
  }
})
})


// Fin de Eliminar una fila