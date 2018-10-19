<!--Nuevo  Curso-->

<div id="newCurso" class="modal fade" role="dialog">
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
        <label for="RegistroNombre" class="control-label">Nuevo Curso:</label>
        <input type="text" class="form-control" id="RegistroCurso" name="RegistroCurso" placeholder="" maxlength="200" required>
    </div>    

              
    <div class="form-group"> <!-- Agregar -->
        <button type="submit" class="btn btn-primary" name="RegistroCursoEnviar">Agregar</button>
    </div>     
    
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
<!-- Fin de nuevo Curso -->


<!--Editar Curso-->

<div id="editCursos" class="modal fade" role="dialog">
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
        <label for="RegistroNombre" class="control-label">Editar Curso:</label>
        <input type="text" class="form-control" id="EditarCurso" name="EditarCurso" placeholder="" maxlength="200" required>
    </div>    
     <div class="form-group"> <!-- Nombre -->
        <input type="hidden" class="form-control" id="EditarCursoID" name="EditarCursoID" placeholder="" maxlength="200" required>
    </div>   
              
    <div class="form-group"> <!-- Agregar -->
        <button type="submit" class="btn btn-primary" name="EditarCursoEnviar">Editar</button>
    </div>     
    
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
<!-- Editar de nuevo Curso -->