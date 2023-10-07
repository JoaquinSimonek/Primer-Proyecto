<div class="d-flex align-items-center justify-content-center" style="height: 80vh;">
  <div class="row justify-content-center">

    <form id= "registroForm">
      <div class="mb-3">
        <label for="exampleInputNombre" class="form-label" >Nombre</label>
        <input type="Nombre" class="form-control" id="exampleInputNombre">
      </div>

      <div class="mb-3">
        <label for="exampleInputApellido" class="form-label" >Apellido</label>
        <input type="Apellido" class="form-control" id="exampleInputApellido">
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail" class="form-label">Email</label>
        <input type="Email" class="form-control" id="exampleInputEmail1">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" aria-describedby="ContraHelp">
        <div id="ContraHelp" class="form-text">Crea una contraseña segura con letras, números y símbolos combinados.</div>
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword2" class="form-label">Repita Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword2" aria-describedby="ContraHelp">
      </div>

      <button type="submit" class="btn btn-primary">Registrar</button>
      <script>
          document.getElementById('registroForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Evitar el envío del formulario por defecto
            
            // Aquí puedes agregar lógica para procesar el registro
            
            // Mostrar ventana emergente con mensaje
            alert('¡Registro exitoso! Gracias por registrarte.');
            this.reset();
          });  
        </script>
        
          
    </form>
  </div>
</div>