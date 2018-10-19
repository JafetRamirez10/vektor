<!-- MODAL CREAR UN USUARIO NUEVO ////-->
<div id="new" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title Pauta">Nuevo</h4>
      </div>
      <div class="modal-body">
        	<form method="post"  onsubmit="return validarRegistro()">

    <div class="form-group"> <!-- Nombre -->
        <label for="RegistroNombre" class="control-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="nombre" placeholder="" maxlength="200" required>
    </div>    

    <div class="form-group"> <!-- Contraseña -->
        <label for="RegistroContra" class="control-label">Contraseña</label>
        <input type="password" class="form-control" id="contra" name="contra" maxlength="17" placeholder="Mínimo 6 caracteres, máximo 17 caracteres, debe inclur números y una mayúscula"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,17}" required>
    </div>                    
                            
    <div class="form-group"> <!-- E-mail -->
        <label for="RegistroEmail" class="control-label">Correo electrónico</label>
        <input type="email" class="form-control" id="email" name="correo"  required>
    </div>    
     <div class="form-group"> <!-- Street 2 -->
        <label for="RegistroTelefono" class="control-label">Teléfono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="" required>
    </div> 
    <div class="form-group"> <!-- Street 2 -->
        <label for="Registrousuario" class="control-label">Usuario</label>
        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="" required >
    </div> 
    <div class="form-group">
    	 <label for="street2_id" class="control-label">Rol</label>
    	 <select class="form-control" name="rol" id="RegistroRol">
    	 	<option value="2">Cliente</option>
    	 	<option value="1">Administrador</option>
    	 </select>
    </div>            
    <div class="form-group"> <!-- Agregar -->
        <button type="submit" class="btn btn-primary" class="Registroenviar"  name="Registroenviar">Agregar</button>
    </div>     
    
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
<!-- FIN DE MODAL CREAR UN USUARIO NUEVO /////-->


<!-- MODAL EDITAR USUARIO-->
<div id="edit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title Pauta">Editar</h4>
      </div>
      <div class="modal-body">
            <form method="post"  onsubmit="return EditarCliente()">

    <div class="form-group"> <!-- Nombre -->
        <label for="editarNombre"  class="control-label">Nombre</label>
        <input type="text" class="form-control" id="Editarnombre" name="Editarnombre" placeholder="" maxlength="200" required>
    </div>    

    <div class="form-group"> <!-- Contraseña -->
        <label for="editarContra" class="control-label">Contraseña</label>
        <input type="password" class="form-control" id="Editarcontra" name="Editarcontra" maxlength="17" placeholder="Mínimo 6 caracteres, máximo 17 caracteres, debe inclur números y una mayúscula"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,17}" required>
    </div>                    
                            
    <div class="form-group"> <!-- E-mail -->
        <label for="EditarEmail" class="control-label">Correo electrónico</label>
        <input type="email" class="form-control" id="Editarcorreo" name="Editarcorreo"  required>
    </div>    
     <div class="form-group"> <!-- Street 2 -->
        <label for="EditarTelefono" class="control-label">Teléfono</label>
        <input type="text" class="form-control" id="Editartelefono" name="Editartelefono" placeholder="" required>
    </div> 
    <div class="form-group"> <!-- Street 2 -->
        <label for="Editarusuario" class="control-label">Usuario</label>
        <input type="text" class="form-control" id="Editarusuario" name="Editarusuario" placeholder="" required >
    </div> 
      <div class="form-group"> <!-- Street 2 -->
        <input type="hidden" class="form-control" id="EditarId" name="EditarId" placeholder="Máximo 8 caracteres" required >
    </div> 
    <div class="form-group">
         <label for="street2_id" class="control-label">Rol</label>
         <select class="form-control" name="EditarRol" id="EditarRol">
            <option value="2">Cliente</option>
            <option value="1">Administrador</option>
         </select>
    </div>            
    <div class="form-group"> <!-- Agregar -->
        <button type="submit" class="btn btn-primary" name="Editarenviar">Editar</button>
    </div>     
    
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

<!-- EDITAR USUARIO -->