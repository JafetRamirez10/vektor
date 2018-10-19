<!-- MODAL CREAR UN USUARIO NUEVO ////-->
<div id="CapacitacionNew" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close cerrar" data-dismiss="modal">&times;</button>
        <h4 class="modal-title Pauta">Nuevo</h4>
      </div>
      <div class="modal-body">
        	<form method="post"  onsubmit="return validarCapacitacion()">

    <div class="form-group"> <!-- Nombre -->
        <label for="CapacitacionNombre" class="control-label">Nombre</label>
        <input type="text" class="form-control CapacitacionNombre" id="CapacitacionNombre" name="CapacitacionNombre" placeholder="" maxlength="200" required>
    </div>    
      <div class="form-group"> <!-- Apellido 1 -->
        <label for="CapacitacionApellido1" class="control-label">Apellido 1</label>
        <input type="text" class="form-control CapacitacionApellido1" id="CapacitacionApellido1" name="CapacitacionApellido1" placeholder="" maxlength="200" required>
    </div> <div class="form-group"> <!-- Apellido 2-->
        <label for="CapacitacionApellido2" class="control-label">Apellido 2 </label>
        <input type="text" class="form-control CapacitacionApellido2" id="CapacitacionApellido2" name="CapacitacionApellido2" placeholder="" maxlength="200" required>
    </div>    
   
     <div class="form-group"> <!-- Cedula -->
        <label for="CapacitacionCedula" class="control-label">Cédula </label>
        <input type="text" class="form-control CapacitacionCedula" id="CapacitacionCedula" name="CapacitacionCedula" placeholder="" maxlength="200" required>
    </div>    
    <div class="form-group"> <!-- Cliente -->
        <label for="CapacitacionCliente" class="control-label">Cliente </label>
        <input type="text" class="form-control CapacitacionCliente" id="CapacitacionCliente" name="CapacitacionCliente" placeholder="" maxlength="200" required  autocomplete="off">
       <div class="BuscarCliente" style="display:none;margin-top: 1%"> </div>
    </div>   
<div class="form-group"> <!-- Curso -->
        <label for="CapacitacionCurso" class="control-label">Curso </label>
        <input type="text" class="form-control CapacitacionCurso" id="CapacitacionCurso" name="CapacitacionCurso" placeholder="" maxlength="200" required autocomplete="off">
         <div class="BuscarCurso" style="display:none;margin-top: 1%"> </div>
    </div>  
     <div class="form-group"> <!-- Nota -->
        <input type="hidden" class="form-control IDCliente" id="IDCliente" name="IDCliente" placeholder="" maxlength="200" required>
        <input type="hidden" class="form-control IDCurso" id="IDCurso" name="IDCurso" placeholder="" maxlength="200" required>
        <input type="hidden" class="form-control IDTipo" id="IDTipo" name="IDTipo" placeholder="" maxlength="200" required>
    </div>  
    <div class="form-group"> <!-- Fecha de Inicio -->
        <label for="CapacitacionFecha" class="control-label" >Fecha de Inicio: </label>
        <input type="date" class="form-control CapacitacionInicio" id="CapacitacionInicio" name="CapacitacionInicio" min="2000-01-02" required>
    </div>    
      <div class="form-group"> <!-- Fecha de Inicio -->
        <label for="CapacitacionFechaFinal" class="control-label">Vencimiento: </label>
        <input type="date" class="form-control CapacitacionVencimiento" id="CapacitacionVencimiento" name="CapacitacionVencimiento" min="2000-01-02" required>
    </div>  
    <div class="form-group"> <!-- Tipo-->
        <label for="CapacitacionTipo" class="control-label">Tipo </label>
        <input type="text" class="form-control CapacitacionTipo" id="CapacitacionTipo" name="CapacitacionTipo" placeholder="" maxlength="200" required autocomplete="off">
         <div class="BuscarTipo" style="display:none;margin-top: 1%"> </div>
    </div>   
      <div class="form-group"> <!-- Nota -->
        <label for="CapacitacionNota" class="control-label">Nota </label>
        <input type="text" class="form-control CapacitacionNota" id="CapacitacionNota" name="CapacitacionNota" placeholder="" maxlength="200" required>
    </div>  
       

    <div class="form-group"> <!-- Agregar -->
        <button type="submit" class="btn btn-primary" name="AgregarCapacitacion">Agregar</button>
    </div>     
    
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default cerrar" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
     </div>    
  </div>
</div>
<!-- FIN DE MODAL CREAR UN USUARIO NUEVO /////-->




<!-- MODAL EDITAR USUARIO-->
<div id="CapacitacionEdit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close cerrar" data-dismiss="modal">&times;</button>
        <h4 class="modal-title Pauta">Editar</h4>
      </div>
      <div class="modal-body">
            <form method="post"  onsubmit="return validarCapacitacion()">

    <div class="form-group"> <!-- Nombre -->
        <label for="CapacitacionNombreE" class="control-label">Nombre</label>
        <input type="text" class="form-control CapacitacionNombre" id="CapacitacionNombreE" name="CapacitacionNombre" placeholder="" maxlength="200" required>
    </div>    
      <div class="form-group"> <!-- Apellido 1 -->
        <label for="CapacitacionApellido1E" class="control-label">Apellido 1</label>
        <input type="text" class="form-control CapacitacionApellido1" id="CapacitacionApellido1E" name="CapacitacionApellido1" placeholder="" maxlength="200" required>
    </div> <div class="form-group"> <!-- Apellido 2-->
        <label for="CapacitacionApellido2E" class="control-label">Apellido 2 </label>
        <input type="text" class="form-control CapacitacionApellido2" id="CapacitacionApellido2E" name="CapacitacionApellido2" placeholder="" maxlength="200" required>
    </div>    
   
     <div class="form-group"> <!-- Cedula -->
        <label for="CapacitacionCedulaE" class="control-label">Cédula </label>
        <input type="text" class="form-control CapacitacionCedula" id="CapacitacionCedulaE" name="CapacitacionCedula" placeholder="" maxlength="200" required>
    </div>    
    <div class="form-group"> <!-- Cliente -->
        <label for="CapacitacionClienteE" class="control-label">Cliente </label>
        <input type="text" class="form-control CapacitacionCliente" id="CapacitacionClienteE" name="CapacitacionCliente" placeholder="" maxlength="200" required  autocomplete="off">
       <div class="BuscarClienteE" style="display:none;margin-top: 1%"> </div>
    </div>   
<div class="form-group"> <!-- Curso -->
        <label for="CapacitacionCursoE" class="control-label">Curso </label>
        <input type="text" class="form-control CapacitacionCurso" id="CapacitacionCursoE" name="CapacitacionCurso" placeholder="" maxlength="200" required autocomplete="off">
         <div class="BuscarCursoE" style="display:none;margin-top: 1%"> </div>
    </div>  
     <div class="form-group"> <!-- Nota -->
        <input type="hidden" class="form-control IDCliente" id="IDClienteE" name="IDCliente" placeholder="" maxlength="200" required>
        <input type="hidden" class="form-control IDCurso" id="IDCursoE" name="IDCurso" placeholder="" maxlength="200" required>
        <input type="hidden" class="form-control IDTipo" id="IDTipoE" name="IDTipo" placeholder="" maxlength="200" required>
        <input type="hidden" class="form-control IDCapacitacion" id="IDCapacitacion" name="IDCapacitacion" placeholder="" maxlength="200" required>

    </div>  
    <div class="form-group"> <!-- Fecha de Inicio -->
        <label for="CapacitacionFechaE" class="control-label">Fecha de Inicio: </label>
        <input type="date" class="form-control CapacitacionInicio" id="CapacitacionInicioE" name="CapacitacionInicio" min="2000-01-02">
    </div>    
      <div class="form-group"> <!-- Fecha de Inicio -->
        <label for="CapacitacionFecha" class="control-label">Vencimiento: </label>
        <input type="date" class="form-control CapacitacionVencimiento" id="CapacitacionVencimientoE" name="CapacitacionVencimiento" min="2000-01-02">
    </div>  
    <div class="form-group"> <!-- Tipo-->
        <label for="CapacitacionTipoE" class="control-label">Tipo </label>
        <input type="text" class="form-control CapacitacionTipo" id="CapacitacionTipoE" name="CapacitacionTipo" placeholder="" maxlength="200" required autocomplete="off">
         <div class="BuscarTipoE" style="display:none;margin-top: 1%"> </div>
    </div>   
      <div class="form-group"> <!-- Nota -->
        <label for="CapacitacionNotaE" class="control-label">Nota </label>
        <input type="text" class="form-control CapacitacionNota" id="CapacitacionNotaE" name="CapacitacionNota" placeholder="" maxlength="200" required>
    </div>  
       

    <div class="form-group"> <!-- Agregar -->
        <button type="submit" class="btn btn-primary" name="EditarCapacitacionE">Editar</button>
    </div>     
    
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default cerrar" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
     </div>    
  </div>
</div>


<!--// FIN DE EDITAR USUARIO-->

