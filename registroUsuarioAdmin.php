
<!-- Incicio de Formulario de Registro -->
    <div id="conteformu">
        <div id="formulario">
            <form action="procesoregistro.php" method="POST">
                    <h3>Datos Personales del Usuario</h3>
                <div class="form-group">
                <label for="email">Numero identificación:</label>
                <input type="text" class="form-control espaciocaja" placeholder="Numero identificación"  name="id_identificacion" required>
              </div>
              <div class="form-group">
                <label for="email">Nombre:</label>
                <input type="text" class="form-control espaciocaja" placeholder="Nombre"  name="nombre" required>
              </div>
              <div class="form-group">
                <label for="email">Apellido:</label>
                <input type="text" class="form-control espaciocaja" placeholder="Apellido" name="apellido" required>
              </div>
              <div class="form-group">
                <label for="email">Telefono:</label>
                <input type="text" class="form-control espaciocaja" placeholder="Telefono"  name="telefono" required>
              </div>
              <div class="form-group">
                <label for="email">Direccion:</label>
                <input type="text" class="form-control espaciocaja" placeholder="Direccion"  name="direccion" required>
              </div>
               <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control espaciocaja" placeholder="Email"  name="email" required>
              </div>
              <div class="form-group">
                <label for="email">Edad:</label>
                <input type="number" class="form-control espaciocaja" placeholder="Edad"  name="edad">
              </div>
              
              <br>
              <h3>Datos de Usuario</h3>
              <div class="form-group">
                <label for="pwd">Usuario:</label>
                <input type="email" class="form-control espaciocaja" placeholder="usuario"  name="usuario_loggin" required>
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control espaciocaja" placeholder="Password"  name="clave" required>
              </div>
              <div class="form-group">
                <label for="pwd">Repetir Password:</label>
                <input type="password" class="form-control espaciocaja" placeholder="Repetir password"  name="repetirclave" required>
              </div>


              <button type="submit" class="btn btn-primary">Registrar</button>
              
              <button  onclick="location.href='volverInicio.php'" class="btn btn-primary">Volver</button>
        </form>
    </div>
</div>
   


<!-- Final de Formulario de Registro -->