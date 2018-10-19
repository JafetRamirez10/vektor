var usuarioExistente1="";
var existeUsuario = false;
$("#usuario").keyup(function(){
var usuarioE = document.querySelector("#usuario").value;
var datos = new FormData();
  datos.append("UsuarioExiste", usuarioE);
 $.ajax({
    url:"views/modules/ajaxBusqueda.php",
    method:"POST",
    data:datos,
    cache:false,
    contentType:false,
    processData:false,
    success:function(respuesta){
    	if(respuesta!=0){
    		existeUsuario=true;
    		$(".UsuarioExiste").remove();
 	document.querySelector("label[for='Registrousuario']").innerHTML+="<br class='UsuarioExiste'><div class='alert alert-danger UsuarioExiste'><strong>Error!</strong>Este Usuario ya existe</div>";

    		console.log(respuesta);
    	}else{
    		$(".UsuarioExiste").remove();
    		existeUsuario=false;
    	}
    }

	});
});

////// Validar Registro Cliente
function validarRegistro(){

	var nombre = document.querySelector("#name").value;
	var pass = document.querySelector("#contra").value;
	var telefono = document.querySelector("#telefono").value;
	var email = document.querySelector("#email").value;
	var usuario = document.querySelector("#usuario").value;
	console.log("usuario" , usuario);
	console.log("pass" , pass);
	//  COMPROBAR USUARIO 
	if(usuario !=""){
		var caracteres = usuario.length;
		var expresion = /^[a-zA-Z0-9]*$/;
		if(caracteres > 50){
			document.querySelector("label[for='Registrousuario']").innerHTML+="<br><div class='alert alert-danger'><strong>Error!</strong> Escriba un nombre de usuario menor a 8 caracteres</div>";
				return false;
		}
		if(!expresion.test(usuario)){
			document.querySelector("label[for='Registrousuario']").innerHTML+="<br><div class='alert alert-danger'><strong>Error!</strong>No escriba caracteres especiales</div>";
			return false;
		}


 if(existeUsuario==true){
 	$(".UsuarioExiste").remove();
 	document.querySelector("label[for='Registrousuario']").innerHTML+="<br class='UsuarioExiste'><div class='alert alert-danger UsuarioExiste'><strong>Error!</strong>Este Usuario ya existe</div>";
 	return false;
 }
}
	// COMPROBAR NOMBRE
	
	// NOMBRE PASSWORD
	if(pass!=""){
			var caracteres = pass.length;
			var expresion = /^[a-zA-Z0-9]*$/;
			if(caracteres < 6  && caracteres > 17){
			document.querySelector("label[for='RegistroContra']").innerHTML+="<br><div class='alert alert-danger'><strong>Error!</strong> Escriba una contraseña mayor a 6, pero menor a 17 </div>";
				return false;
		}
		if(!expresion.test(pass)){
			document.querySelector("label[for='RegistroContra']").innerHTML+="<br><div class='alert alert-danger'><strong>Error!</strong>No escriba caracteres especiales</div>";
			return false;
		}

	}

	// VALIDAR EMAIL
	if(email!=""){
			var expresion =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
		if(!expresion.test(email)){
			document.querySelector("label[for='RegistroEmail']").innerHTML+="<br><div class='alert alert-danger'><strong>Error!</strong>Escriba correctamente el email</div>";
			return false;
		}

	}
	if(telefono!=""){
		var expresion = /^[0-9]*$/;
		if(!expresion.test(telefono)){
			document.querySelector("label[for='RegistroTelefono']").innerHTML+="<br><div class='alert alert-danger'><strong>Error!</strong>Escriba solo los números de tu teléfono</div>";
			return false;
		}

	}
		return true;
	
		

}

$(document).ready(function(){
	  
	//COMPROBAR EXISTE USUARIO
	$("#Editarusuario").focusout(function(){
		usuario = document.querySelector("#Editarusuario").value;
		  var datos={'UsuarioExisteEditar': usuario,
  			 'UsuarioPrincipal':usuarioExistente1
		}
		 $.ajax({
    url:"views/modules/ajaxBusqueda.php",
    type:"post",
    data:datos,
    success:function(respuesta){
    	if(respuesta!=0){
    		existeUsuario=true;
    		$(".UsuarioExiste").remove();
 	console.log("entro");
 	document.querySelector("label[for='Editarusuario']").innerHTML+="<br class='UsuarioExiste'><div class='alert alert-danger UsuarioExiste'><strong>Error!</strong>Este Usuario ya existe</div>";
 		return false;
    	}else{
    		$(".UsuarioExiste").remove();
    		existeUsuario=false;
    	   console.log(respuesta);
    	   console.log(usuario);
    	   console.log(usuarioExistente1);
    	}
    }
    	 
	});
	})

	//FIN DE COMPROBAR EXISTE USUARIO
})
///// FIN validar Registro Cliente
var existeUsuarioEditar = false;
$("#Editarusuario").focus(function(){
	$(".UsuarioExiste").remove();
});
/// Validar Editar Cliente
function EditarCliente(){
	var nombre = document.querySelector("#Editarnombre").value;
	var pass = document.querySelector("#Editarcontra").value;
	var telefono = document.querySelector("#Editartelefono").value;
	var email = document.querySelector("#Editarcorreo").value;
	 var usuario = document.querySelector("#Editarusuario").value;
	console.log("usuario" , usuario);
	console.log("pass" , pass);


	//  COMPROBAR USUARIO 
	if(usuario !=""){
		var caracteres = usuario.length;
		var expresion = /^[a-zA-Z0-9]*$/;
		if(caracteres > 50){
			document.querySelector("label[for='Editarusuario']").innerHTML+="<br><div class='alert alert-danger'><strong>Error!</strong> Escriba un nombre de usuario menor a 8 caracteres</div>";
				return false;
		}
		if(!expresion.test(usuario)){
			document.querySelector("label[for='Editarusuario']").innerHTML+="<br><div class='alert alert-danger'><strong>Error!</strong>No escriba caracteres especiales</div>";
			return false;
		}
		if(existeUsuario==true){
 		return false;
 }
	}
	// COMPROBAR NOMBRE
	
	// NOMBRE PASSWORD
	if(pass!=""){
			var caracteres = pass.length;
			var expresion = /^[a-zA-Z0-9]*$/;
			if(caracteres < 6  && caracteres > 17){
			document.querySelector("label[for='editarContra']").innerHTML+="<br><div class='alert alert-danger'><strong>Error!</strong> Escriba una contraseña mayor a 6, pero menor a 17 </div>";
				return false;
		}
		if(!expresion.test(pass)){
			document.querySelector("label[for='editarContra']").innerHTML+="<br><div class='alert alert-danger'><strong>Error!</strong>No escriba caracteres especiales</div>";
			return false;
		}

	}

	// VALIDAR EMAIL
	if(email!=""){
			var expresion =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
		if(!expresion.test(email)){
			document.querySelector("label[for='EditarEmail']").innerHTML+="<br><div class='alert alert-danger'><strong>Error!</strong>Escriba correctamente el email</div>";
			return false;
		}

	}
	if(telefono!=""){
		var expresion = /^[0-9]*$/;
		if(!expresion.test(telefono)){
			document.querySelector("label[for='EditarTelefono']").innerHTML+="<br><div class='alert alert-danger'><strong>Error!</strong>Escriba solo los números de tu teléfono</div>";
			return false;
		}

	}
		return true;
}

/// Fin de Validar Cliente

// LLenar Datos Editar Cliente
$(".buttonEdit").click(function(){
	$("#Editarnombre").val(" ");
	$("#Editarcontra").val(" ");
	$("#Editarcorreo").val(" ");
	$("#Editartelefono").val(" ");
	$("#Editarusuario").val(" ");
	$("#EditarId").attr(" ");
	var nombre = $(this).parents("tr").find(".nombre").html();
	var contra = $(this).parents("tr").find(".contra").html();
	var correo = $(this).parents("tr").find(".correo").html();
	var telefono = $(this).parents("tr").find(".telefono").html();
	 usuario = $(this).parents("tr").find(".usuario").html();
	usuarioExistente1=$(this).parents("tr").find(".usuario").html();
	var Id = $(this).attr("id");


	$("#Editarnombre").val(nombre);
	$("#Editarcontra").val(contra);
	$("#Editarcorreo").val(correo);
	$("#Editartelefono").val(telefono);
	$("#Editarusuario").val(usuario);
	$("#EditarId").val(Id);



});

// Imprimir Tabla Registro Cliente

function printDiv() {
	
     window.print();

     
}
// Fin de Imprimir Tabla Registro Cliente

// Copiar tabla Fila
$(".ButtonCopy").click(function() {
	var nombre = $(this).parents("tr").find(".nombre").html();
	var contra = $(this).parents("tr").find(".contra").html();
	var correo = $(this).parents("tr").find(".correo").html();
	var telefono = $(this).parents("tr").find(".telefono").html();
	var usuario = $(this).parents("tr").find(".usuario").html();
	var rol = $(this).parents("tr").find(".rol").html();

	id_elemento = "Nombre: "+nombre+" Contraseña: "+contra+" Teléfono: "+telefono+" Correo Eléctronico: " +correo+" Usuario: "+usuario+" Categoría: "+rol;

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
$(".ButtonTrash").click(function(){
	var id=$(this).attr("id");
	swal({
  title: "Eliminar?",
  text: "Estas seguro que deseas eliminar este Usuario",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
   	location.href="inicio.php?pagina=clientes&eliminar="+id;
  } else {
     location.href="inicio.php?pagina=clientes";
  }
});
})


// Fin de Eliminar una fila

$(document).ready(function(){
$(".empresa1").change(function(){
	$(".aviso1").remove();
	$(".aviso3").remove();
	$(".aviso2").remove();
});
//Relacionar Empresas
$(".relacionarEmpresas").click(function(){
	empresaPrimaria =$(".empresa1").val();
	empresaSubcontratada=$(".empresa2").val();
	if(empresaPrimaria==empresaSubcontratada){
		$(".aviso1").remove();
		$(".bodyRelacionar").prepend('<div class="alert alert-danger aviso1" role="alert"><strong>Error!</strong> Estas relacionando al mismo cliente/usuario</div>');
	}else{
		 var datos ={
        'empresaprimaria':empresaPrimaria,
        'empresasubcontratada':empresaSubcontratada
     }
     $.ajax({
     	    url:"views/modules/ajaxCapacitacion.php",
    type:"post",
    data:datos,
    success:function(respuesta){
    	console.log(respuesta);
    	if(respuesta==2){
    		$(".aviso2").remove();
    		$(".aviso3").remove();
    		$(".bodyRelacionar").prepend('<div class="alert alert-danger aviso2" role="alert"><strong>Error!</strong> Estas relación ya existe</div>');
    	}else if(respuesta==0){
    		$(".aviso3").remove();
    		$(".aviso2").remove();
    		$(".bodyRelacionar").prepend('<div class="alert alert-info aviso3" role="alert"><strong>Listo!</strong> La relación se creo, puedes añadir más relaciones o cerrar</div>');
    	}
    }
     })
	}
});
//Fin de Relacionar Empresas

//Ajax Nombre de Usuario
// nombreIncial=$("#Editarusuario").val();
// $("#Editarusuario").keyup(function(){
// 	dato=$("#Editarusuario").val();
// 	var datos = new FormData();
//   datos.append("BuscarCodigoExiste", dato);
//   $.ajax({
//     url:"views/modules/ajaxBuscarCliente.php",
//     method:"POST",
//     data:datos,
//     cache:false,
//     contentType:false,
//     processData:false,
//  success:function(respuesta){}

// })
// })
//Fin Ajax Nombre Usuario
});
