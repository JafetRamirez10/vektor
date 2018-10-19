$(".saveSearchxls2").click(function(){
  palabra=$("#buscar").val();
  idCliente= $(".ClienteID").val();
  location.href="Capacitacionexcel.php?palabra="+palabra+"&cliente="+idCliente;
})