
$(".buttonEditTipo").click(function(){
	var tipoId = $(this).parents("tr").find(".tipoID").html();
	var tipoNombre =$(this).parents("tr").find(".nombreTipoID").html();
	$("#Editartipo").attr("value" , tipoNombre);
	$("#IDtipo").attr("value" , tipoId);




});

$(".ButtonCopyTipo").click(function() {
	var codigoID = $(this).parents("tr").find(".tipoID").html();
	var nombreID = $(this).parents("tr").find(".nombreTipoID").html();
	
	id_elemento = "Tipo: "+nombreID+" Codigo de Tipo: "+codigoID;

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

// Eliminar una fila
$(".ButtonTrashTipo").click(function(){
	var id=$(this).attr("id");
	swal({
  title: "Eliminar?",
  text: "Estas seguro que deseas eliminar",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
   	location.href="inicio.php?pagina=tipos&eliminarTipos="+id;
  } else {
     location.href="inicio.php?pagina=tipos";
  }
});
})


// Fin de Eliminar una fila