<!--Inicio de Modal Nuevo Tipos-->

<div id="new" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title Pauta">Nuevo</h4>
      </div>
      <div class="modal-body">
        	<form method="post" >

    <div class="form-group"> <!-- Nombre -->
        <label for="RegistroNombre" class="control-label">Nuevo Tipo:</label>
        <input type="text" class="form-control" id="Registrotipo" name="Registrotipo" placeholder="" maxlength="200" required>
    </div>    

              
    <div class="form-group"> <!-- Agregar -->
        <button type="submit" class="btn btn-primary" name="RegistroTipos">Agregar</button>
    </div>     
    
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
<!--Fin de Modal Tipos-->


<!-- Editar de Modal Tipos-->
<div id="edit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title Pauta">Editar</h4>
      </div>
      <div class="modal-body">
            <form method="post" >

    <div class="form-group"> <!-- Nombre -->
        <label for="RegistroNombre" class="control-label">Nuevo Tipo:</label>
        <input type="text" class="form-control" id="Editartipo" name="Editartipo" placeholder="" maxlength="200" required>
    </div>    
     <div class="form-group"> <!-- Nombre -->
        <input type="hidden" class="form-control" id="IDtipo" name="IDtipo" placeholder="" maxlength="200" required>
    </div> 
              
    <div class="form-group"> <!-- Agregar -->
        <button type="submit" class="btn btn-primary" name="EnviarEditarTipos">Editar</button>
    </div>     
    
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
<!-- Fin de Editar Modales-->