$("#buscar").keyup(function(){
	 var dato = $(this).val();
     var idCliente =$(".ClienteID").val();
	   if(dato==""){
       $(".MostrarTabla").attr("style","display:none");
       	 $("#NoPalabras").attr("style","display:none");
         $(".TablaporDefecto").attr("style","");
   }else{
     var datos ={
        'palabraClaveCliente':dato,
        'IDCliente':idCliente
     }
 $.ajax({
    url:"views/modules/ajaxBusqueda.php",
    type:"post",
    data:datos,
    success:function(respuesta){
    	 if(respuesta==0){
    	 	 	$("#NoPalabras").attr("style","display:none");
    	 	 $(".MostrarTabla").attr("style","display:none");
    	 	  	 $("#NoPalabras").attr("style","");
    	 	 $("#NoPalabras").html('<label for="palabraClave" style="color:white;font-weight: bold;font-size: 1.5em">No se encontraron coincidencias </label>');
         $(".TablaporDefecto").attr("style","display:none");
         console.log(respuesta);
    	 }else{
        $(".TablaporDefecto").attr("style","display:none");
    	 	$("#NoPalabras").attr("style","display:none");
    	 	$(".MostrarTabla").attr("style","");
    	 	$(".MostrarTabla").html(respuesta);
            console.log(respuesta);


    	 }
    }
})
}
})