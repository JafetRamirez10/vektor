$("#buscar").keyup(function(){
	 var dato = $(this).val();
	   if(dato==""){
       $(".MostrarTabla").attr("style","display:none");
       	 $("#NoPalabras").attr("style","display:none");
         $(".TablaporDefecto").attr("style","");
   }else{
     var datos = new FormData();
  datos.append("palabraClave", dato);
 $.ajax({
    url:"views/modules/ajaxBusqueda.php",
    method:"POST",
    data:datos,
    cache:false,
    contentType:false,
    processData:false,
    success:function(respuesta){
    	 if(respuesta==0){

    	 	 	$("#NoPalabras").attr("style","display:none");
    	 	 $(".MostrarTabla").attr("style","display:none");
    	 	  	 $("#NoPalabras").attr("style","");
    	 	 $("#NoPalabras").html('<label for="palabraClave" style="color:white;font-weight: bold;font-size: 1.5em">No se encontraron coincidencias </label>');
         $(".TablaporDefecto").attr("style","display:none");
    	 }else{
        $(".TablaporDefecto").attr("style","display:none");
    	 	$("#NoPalabras").attr("style","display:none");
    	 	$(".MostrarTabla").attr("style","");
    	 	$(".MostrarTabla").html(respuesta);



    	 }
    }
})
}
})