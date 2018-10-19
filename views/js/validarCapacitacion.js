var comprobarCliente = false;
var comprobarCurso=false;
var comprobarTipo=false;
// AJAX COMPROBAR  CLIENTE
$("#CapacitacionCliente").keyup(function(){
  var cliente = $("#CapacitacionCliente").val();
  if(cliente==""){
       $(".BuscarCliente").attr("style","display:none");
       $(".avisoCapacitacion").remove();
       $(".brCapac").remove();
}else{
     var datos = new FormData();
  datos.append("ExisteCliente", cliente);
 $.ajax({
    url:"views/modules/ajaxCapacitacion.php",
    method:"POST",
    data:datos,
    cache:false,
    contentType:false,
    processData:false,
    success:function(respuesta){
      if(respuesta==0){
         $(".avisoCapacitacion").remove();
         $(".brCapac").remove();
        $(".BuscarCliente").attr("style","display:none");
        document.querySelector("label[for='CapacitacionCliente']").innerHTML+="<br class='brCapac'><div class='alert alert-danger avisoCapacitacion'><strong>Error!</strong>No encontro cliente</div>";
    comprobarCliente=false;

  } 
  else{
     $(".avisoCapacitacion").remove();
     $(".brCapac").remove();
    $(".BuscarCliente").attr("style","");
    $(".BuscarCliente").html(respuesta);
 
    }
  }
 });
 }
});

// FIN DE AJAX COMPROBAR CLIENTE



// AJAX COMPROBAR   EDITAR CLIENTE
$("#CapacitacionClienteE").keyup(function(){
  var cliente = $("#CapacitacionClienteE").val();
  if(cliente==""){
       $(".BuscarClienteE").attr("style","display:none");
       $(".avisoCapacitacionE").remove();
       $(".brCapacE").remove();
}else{
     var datos = new FormData();
  datos.append("ExisteCliente", cliente);
 $.ajax({
    url:"views/modules/ajaxCapacitacion.php",
    method:"POST",
    data:datos,
    cache:false,
    contentType:false,
    processData:false,
    success:function(respuesta){
      if(respuesta==0){
         $(".avisoCapacitacionE").remove();
         $(".brCapacE").remove();
        $(".BuscarClienteE").attr("style","display:none");
        document.querySelector("label[for='CapacitacionClienteE']").innerHTML+="<br class='brCapacE'><div class='alert alert-danger avisoCapacitacionE'><strong>Error!</strong>No encontro cliente</div>";
    comprobarCliente=false;

  } 
  else{
     $(".avisoCapacitacionE").remove();
     $(".brCapacE").remove();
    $(".BuscarClienteE").attr("style","");
    $(".BuscarClienteE").html(respuesta);
 
    }
  }
 });
 }
});

// FIN DE AJAX COMPROBAR  EDITAR CLIENTE


$(".cerrar").click(function(){
  
   comprobarCliente = true;
   comprobarCurso=true;
   comprobarTipo=true;
  var id=$(this).attr("id");
  var nombre = $("tr .nombre").html();
  var apellido1 = $("tr .Apellido1 ").html();
  var apellido2 = $("tr .Apellido2 ").html();
  var cedula =$("tr .cedula ").html();
  var cliente =$("tr .cliente").html();
  var cursos =$("tr .cursos ").html();
  var fechai =$("tr .fechai").html();
  var vencimiento =$("tr .vencimiento").html();
  var tipo =$("tr .tipo").html();
  var nota =$("tr .nota").html();
  var IDTipo = $("tr .TipoID ").val();
  var ClienteID= $("tr .ClienteID ").val();
  var CursosID= $("tr  .CursosID").val();
  var IDCapacitacion=$("tr  .IDCapacitacion").val();

  $("#CapacitacionNombreE").val(nombre);
  $("#CapacitacionApellido1E").attr("value",apellido1);
  $("#CapacitacionApellido2E").attr("value",apellido2);
  $("#CapacitacionCedulaE").attr("value",cedula);
  $("#CapacitacionClienteE").attr("value",cliente);
  $("#CapacitacionCursoE").attr("value",cursos);
  $("#CapacitacionInicioE").attr("value",fechai);
  $("#CapacitacionVencimientoE").attr("value",vencimiento);
  $("#CapacitacionTipoE").val(tipo);
  $("#CapacitacionNotaE").attr("value",nota);
  $("#IDTipoE").attr("value",IDTipo);
  $("#IDClienteE").attr("value",ClienteID);
  $("#IDCursoE").attr("value",CursosID);
  $("#IDCapacitacion").attr("value",IDCapacitacion);

})



// AJAX COMPROBAR  CURSO
$("#CapacitacionCurso").keyup(function(){
  var cliente = $("#CapacitacionCurso").val();
  if(cliente==""){
       $(".BuscarCurso").attr("style","display:none");
       $(".avisoCursoCapacitacion").remove();
       $(".brCapac1").remove();
}else{
     var datos = new FormData();
  datos.append("ExisteCurso", cliente);
 $.ajax({
    url:"views/modules/ajaxCapacitacion.php",
    method:"POST",
    data:datos,
    cache:false,
    contentType:false,
    processData:false,
    success:function(respuesta){
      if(respuesta==0){
         $(".avisoCursoCapacitacion").remove();
         $(".brCapac1").remove();
        $(".BuscarCurso").attr("style","display:none");
        document.querySelector("label[for='CapacitacionCurso']").innerHTML+="<br class='brCapac1'><div class='alert alert-danger avisoCursoCapacitacion'><strong>Error!</strong>No encontro curso</div>";
    comprobarCurso=false;

  } 
  else{
     $(".avisoCapacitacion").remove();
     $(".brCapac1").remove();
    $(".BuscarCurso").attr("style","");
    $(".BuscarCurso").html(respuesta);
 
    }
  }
 });
 }
});

// FIN DE AJAX COMPROBAR CURSO




// AJAX COMPROBAR  EDITAR CURSO
$("#CapacitacionCursoE").keyup(function(){
  var cliente = $("#CapacitacionCursoE").val();
  if(cliente==""){
       $(".BuscarCursoE").attr("style","display:none");
       $(".avisoCursoCapacitacionE").remove();
       $(".brCapac1E").remove();
}else{
     var datos = new FormData();
  datos.append("ExisteCurso", cliente);
 $.ajax({
    url:"views/modules/ajaxCapacitacion.php",
    method:"POST",
    data:datos,
    cache:false,
    contentType:false,
    processData:false,
    success:function(respuesta){
      if(respuesta==0){
         $(".avisoCursoCapacitacionE").remove();
         $(".brCapac1E").remove();
        $(".BuscarCursoE").attr("style","display:none");
        document.querySelector("label[for='CapacitacionCursoE']").innerHTML+="<br class='brCapac1E'><div class='alert alert-danger avisoCursoCapacitacionE'><strong>Error!</strong>No encontro curso</div>";
    comprobarCurso=false;

  } 
  else{
     $(".avisoCapacitacionE").remove();
     $(".brCapac1E").remove();
    $(".BuscarCursoE").attr("style","");
    $(".BuscarCursoE").html(respuesta);
 
    }
  }
 });
 }
});

// FIN DE AJAX EDITAR COMPROBAR CURSO



// AJAX COMPROBAR  TIPO
$("#CapacitacionTipoE").keyup(function(){
  var cliente = $("#CapacitacionTipoE").val();
  if(cliente==""){
       $(".BuscarTipoE").attr("style","display:none");
       $(".avisoTipoCapacitacionE").remove();
       $(".brCapac2E").remove();
}else{
     var datos = new FormData();
  datos.append("ExisteTipo", cliente);
 $.ajax({
    url:"views/modules/ajaxCapacitacion.php",
    method:"POST",
    data:datos,
    cache:false,
    contentType:false,
    processData:false,
    success:function(respuesta){
      if(respuesta==0){
         $(".avisoTipoCapacitacionE").remove();
         $(".brCapac2E").remove();
        $(".BuscarTipoE").attr("style","display:none");
        document.querySelector("label[for='CapacitacionTipoE']").innerHTML+="<br class='brCapac2E'><div class='alert alert-danger avisoTipoCapacitacionE'><strong>Error!</strong>No encontro tipo</div>";
    comprobarTipo=false;

  } 
  else{
     $(".avisoTipoCapacitacionE").remove();
     $(".brCapac2E").remove();
    $(".BuscarTipoE").attr("style","");
    $(".BuscarTipoE").html(respuesta);
 
    }
  }
 });
 }
});

// FIN DE AJAX COMPROBAR TIPO






// AJAX COMPROBAR  TIPO
$("#CapacitacionTipo").keyup(function(){
  var cliente = $("#CapacitacionTipo").val();
  if(cliente==""){
       $(".BuscarTipo").attr("style","display:none");
       $(".avisoTipoCapacitacion").remove();
       $(".brCapac2").remove();
}else{
     var datos = new FormData();
  datos.append("ExisteTipo", cliente);
 $.ajax({
    url:"views/modules/ajaxCapacitacion.php",
    method:"POST",
    data:datos,
    cache:false,
    contentType:false,
    processData:false,
    success:function(respuesta){
      if(respuesta==0){
         $(".avisoTipoCapacitacion").remove();
         $(".brCapac2").remove();
        $(".BuscarTipo").attr("style","display:none");
        document.querySelector("label[for='CapacitacionTipo']").innerHTML+="<br class='brCapac2'><div class='alert alert-danger avisoTipoCapacitacion'><strong>Error!</strong>No encontro tipo</div>";
    comprobarTipo=false;

  } 
  else{
     $(".avisoTipoCapacitacion").remove();
     $(".brCapac2").remove();
    $(".BuscarTipo").attr("style","");
    $(".BuscarTipo").html(respuesta);
 
    }
  }
 });
 }
});

// FIN DE AJAX COMPROBAR TIPO








// SELECCIONAR UN CLIENTE
function seleccionarCliente(id){
     comprobarCliente = true;
  NombreCliente=$("#"+id).html();
  $(".CapacitacionCliente").val("");
  $(".CapacitacionCliente").val(NombreCliente);
  $(".IDCliente").val(id);
   $(".BuscarCliente").attr("style","display:none");
   $(".BuscarClienteE").attr("style","display:none");


}
 
// FIN DE SELECCIONAR UN CLIENTE



// SELECCIONAR UN EDITAR CLIENTE
// function seleccionarCliente(id){
//      comprobarCliente = true;
//   NombreCliente=$("#"+id).html();
//   $("#CapacitacionClienteE").val("");
//   $("#CapacitacionClienteE").val(NombreCliente);
//   $("#IDClienteE").val(id);
//    $(".BuscarClienteE").attr("style","display:none");

// }
 
// FIN DE SELECCIONAR UN CLIENTE



// SELECCIONAR UN CURSO
function seleccionarCurso(id){
     comprobarCurso = true;
  NombreCurso=$("#Curso"+id).html();
  $(".CapacitacionCurso").val("");
  $(".CapacitacionCurso").val(NombreCurso);
  $(".IDCurso").val(id);
   $(".BuscarCurso").attr("style","display:none");
    $(".BuscarCursoE").attr("style","display:none");

}
 
// FIN DE SELECCIONAR UN CURSO


// // SELECCIONAR UN EDITAR CURSO
// function seleccionarCurso(id){
//      comprobarCurso = true;
//   NombreCurso=$("#Curso"+id).html();
//   $("#CapacitacionCursoE").val("");
//   $("#CapacitacionCursoE").val(NombreCurso);
//   $("#IDCursoE").val(id);
//    $(".BuscarCursoE").attr("style","display:none");

// }
 
// // FIN DE SELECCIONAR UN CURSO




// SELECCIONAR UN TIPO
function seleccionarTipo(id){
      comprobarTipo= true;
  NombreTipo=$("#Tipo"+id).html();
  $(".CapacitacionTipo").val("");
  $(".CapacitacionTipo").val(NombreTipo);
  $(".IDTipo").val(id);
   $(".BuscarTipo").attr("style","display:none");
    $(".BuscarTipoE").attr("style","display:none");


}
 
// FIN DE SELECCIONAR UN TIPO



// SELECCIONAR UN  EDITAR TIPO
// function seleccionarTipo(id){
//       comprobarTipo= true;
//   NombreTipo=$("#Tipo"+id).html();
//   $("#CapacitacionTipoE").val("");
//   $("#CapacitacionTipoE").val(NombreTipo);
//   $("#IDTipoE").val(id);
//    $(".BuscarTipoE").attr("style","display:none");

// }
 
// FIN DE SELECCIONAR UN TIPO



// Validar Datos
function validarCapacitacion(){

  if(comprobarCurso==false){
      $(".brCapac1").remove();
      $(".avisoCursoCapacitacion").remove();
        document.querySelector("label[for='CapacitacionCurso']").innerHTML+="<br class='brCapac1'><div class='alert alert-danger avisoCursoCapacitacion'><strong>Error!</strong>No encontro curso</div>";
               
      return false;
  }
  if(comprobarCliente==false){
     $(".brCapac").remove();
      $(".avisoCursoCapacitacion23").remove();
        document.querySelector("label[for='CapacitacionCliente']").innerHTML+="<br class='brCapac'><div class='alert alert-danger avisoCapacitacion23'><strong>Error!</strong>No encontro cliente</div>";
    return false;
  }
  if(comprobarTipo==false){
    return false;
  }
  else{
    return true;
  }
}

// AJUSTAR FECHA ACTUAL
$(document).ready(function(){
  var f = new Date();
  var dia = f.getDate();
  var mes= f.getMonth()+1;
  var agno = f.getFullYear();
  $("#CapacitacionInicio").attr("min", agno+""+"-"+mes+"-"+dia);
  $("#CapacitacionVencimiento").attr("min", agno+""+"-"+mes+"-"+dia);
})



// FIN DE AJUSTAR FECHA ACTUAL

// Fin de Validar Datos




// Eliminar una fila
$(".ButtonTrashCapacitacion").click(function(){
	var id=$(this).attr("id");
	swal({
  title: "Eliminar?",
  text: "Estas seguro que deseas eliminar este item",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
   	location.href="inicio.php?pagina=capacitacion&eliminar="+id;
  } else {
     location.href="inicio.php?pagina=capacitacion";
  }
});
})


// Fin de Eliminar una fila

// EDITAR CAPACITACION
$(".buttonEditCapacitacion").click(function(){
    comprobarCliente = true;
   comprobarCurso=true;
   comprobarTipo=true;
  var id=$(this).attr("id");
  var nombre = $(this).parents("tr").find(".nombre").html();
  var apellido1 = $(this).parents("tr").find(".Apellido1").html();
  var apellido2 = $(this).parents("tr").find(".Apellido2").html();
  var cedula =$(this).parents("tr").find(".cedula").html();
  var cliente =$(this).parents("tr").find(".cliente").html();
  var cursos =$(this).parents("tr").find(".cursos").html();
  var fechai =$(this).parents("tr").find(".fechai").html();
  var vencimiento =$(this).parents("tr").find(".vencimiento").html();
  var tipo =$(this).parents("tr").find(".tipo").html();
  var nota =$(this).parents("tr").find(".nota").html();
  var IDTipo = $(this).parents("tr").find(".TipoID").val();
  var ClienteID= $(this).parents("tr").find(".ClienteID").val();
  var CursosID= $(this).parents("tr").find(".CursosID").val();
  var IDCapacitacion=$(this).parents("tr").find(".IDCapacitacion").val();

  $("#CapacitacionNombreE").attr("value",nombre);
  $("#CapacitacionApellido1E").attr("value",apellido1);
  $("#CapacitacionApellido2E").attr("value",apellido2);
  $("#CapacitacionCedulaE").attr("value",cedula);
  $("#CapacitacionClienteE").attr("value",cliente);
  $("#CapacitacionCursoE").attr("value",cursos);
  $("#CapacitacionInicioE").attr("value",fechai);
  $("#CapacitacionVencimientoE").attr("value",vencimiento);
  $("#CapacitacionTipoE").attr("value",tipo);
  $("#CapacitacionNotaE").attr("value",nota);
  $("#IDTipoE").attr("value",IDTipo);
  $("#IDClienteE").attr("value",ClienteID);
  $("#IDCursoE").attr("value",CursosID);
  $("#IDCapacitacion").attr("value",IDCapacitacion);



})

//FIN DE EDITAR CAPACITACION

//Exportar por medio de busqueda
$(".saveSearchxls").click(function(){
  palabra=$("#buscar").val();
  location.href="Capacitacionexcel.php?palabra="+palabra;
})

// 

// Copiar item 
$(".ButtonCopyCapacitacion").click(function() {
  var nombre = $(this).parents("tr").find(".nombre").html();
  var apellido1 = $(this).parents("tr").find(".Apellido1").html();
  var apellido2 = $(this).parents("tr").find(".Apellido2").html();
  var cedula =$(this).parents("tr").find(".cedula").html();
  var cliente =$(this).parents("tr").find(".cliente").html();
  var cursos =$(this).parents("tr").find(".cursos").html();
  var fechai =$(this).parents("tr").find(".fechai").html();
  var vencimiento =$(this).parents("tr").find(".vencimiento").html();
  var tipo =$(this).parents("tr").find(".tipo").html();
  var nota =$(this).parents("tr").find(".nota").html();
  
  id_elemento = "Nombre Completo: "+nombre+" "+apellido1+" "+apellido2+" Cédula: "+cedula+" Cliente: "+cliente+" Cursos: "+cursos+" Fecha de Inicio: "+fechai+" Vencimiento: "+vencimiento+" Tipo: "+tipo+" Nota: "+nota;

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
// Fin de Copiar item

// Mostrar Subcontratacion
$(".revisarSubContratado").click(function(){
  id=$(".seleccionarSub").val();

   window.open('accesocliente.php?iniciar='+id,'Nueva Ventana');
   return false;
})

//Fin de Mostrar Subcontratacion

//Seleccionar no cumple requisitos
$(document).ready(function(){
  $(".checkCorrecto").hover(function(){
  $(this).find("span").attr("class","glyphicon glyphicon-remove");
  $(this).find("button").attr("class","btn btn-danger btn-md right-block");

},function(){
   $(this).find("span").attr("class","glyphicon glyphicon-ok");
   $(this).find("button").attr("class","btn btn-primary btn-md right-block");
});

 $(".checkFalso").hover(function(){
  $(this).find("span").attr("class","glyphicon glyphicon-ok ");
  $(this).find("button").attr("class","btn btn-primary btn-md right-block");

},function(){
   $(this).find("span").attr("class","glyphicon glyphicon-remove");
   $(this).find("button").attr("class","btn btn-danger btn-md right-block");
});


});

//Fin Seleccionar no cumple requisitos


// Check Ok
$(".checkCorrecto").click(function(){
   var cliente = $(this).attr("id");
    var datos = new FormData();
   datos.append("NoPasa", cliente);
   $.ajax({
    url:"views/modules/ajaxCapacitacion.php",
    method:"POST",
    data:datos,
    cache:false,
    contentType:false,
    processData:false,
    success:function(respuesta){
      if(respuesta==0){
          swal({
        title:'',
        text:'Se actualizo con exito',
        type: 'warning'
      }).then((result) => {
        location.href='inicio.php?pagina=capacitacion';
      });
  } else{
    console.log(respuesta);
  }
  
  }
 });

})



$(".checkFalso").click(function(){
   var cliente = $(this).attr("id");
    var datos = new FormData();
   datos.append("Pasa", cliente);
   $.ajax({
    url:"views/modules/ajaxCapacitacion.php",
    method:"POST",
    data:datos,
    cache:false,
    contentType:false,
    processData:false,
    success:function(respuesta){
      if(respuesta==0){
          swal({
        title:'',
        text:'Se actualizo con exito',
        type: 'warning'
      }).then((result) => {
        location.href='inicio.php?pagina=capacitacion';
      });
  } else{
    console.log(respuesta);
  }
  
  }
 });

})


// Fin Check 