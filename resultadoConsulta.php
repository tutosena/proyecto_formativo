 <div id="conteformu">
    <div id="formulario">

         <form id="formulario" role="form"  action="">

        <div class="col-md-12">
            <h3 class="lgris centrado">Datos del Cliente</h3><br>
            <div class="form-group">
            <label class="lgris">Identificación:</label>
            <input class="form-control espaciocaja" style="text-transform: uppercase;" type="text" name="ide" disabled="disabled" value="<?php echo $filaConsultada->id_identificacion ?>">
            </div>

            <div class="form-group">
            <label class="lgris">Nombres:</label>
            <input class="form-control espaciocaja" style="text-transform: uppercase;" type="text" name="nombres" disabled="disabled" value="<?php echo $filaConsultada->nombre ?>">
            </div>


            <div class="form-group">
            <label class="lgris">Apellidos:</label>
            <input class="form-control espaciocaja" style="text-transform: uppercase;" type="text" name="apellidos" disabled="disabled" value="<?php echo $filaConsultada->apellido ?>">
            </div>


            <div class="form-group">
            <label class="lgris">Tipo de Usuario:</label>
            <input class="form-control espaciocaja" style="text-transform: uppercase;" type="text" name="apellidos" disabled="disabled" value="<?php echo $filaConsultada->rol ?>">
            </div>


            <div class="form-group">
            <label class="lgris">Edad:</label>
            <input class="form-control espaciocaja" style="text-transform: uppercase;" type="text" name="apellidos" disabled="disabled" value="<?php echo $filaConsultada->edad ?>">
            </div>
            
            <div class="form-group">
            <label class="lgris">Télefono:</label>
            <input class="form-control espaciocaja" type="number" name="telefono" disabled="disabled"  value="<?php echo $filaConsultada->telefono ?>" />
            </div>


            <div class="form-group">
            <label class="lgris">Dirección:</label>
            <input class="form-control espaciocaja" style="text-transform: uppercase;" type="text" name="direccion" disabled="disabled" value="<?php echo $filaConsultada->direccion ?>">
            </div>

            <div class="form-group">
            <label class="lgris">E-mail:</label>
            <input class="form-control espaciocaja" style="text-transform: uppercase;" type="text" name="apellidos" disabled="disabled" value="<?php echo $filaConsultada->email ?>">
            </div>

            <div class="form-group">
            <label class="lgris">Fecha Registro:</label>
            <input class="form-control espaciocaja" style="text-transform: uppercase;" type="text" name="apellidos" disabled="disabled" value="<?php echo $filaConsultada->fecha_registro ?>">
            </div>

            <div class="form-group">
            <label class="lgris">Hora Registro:</label>
            <input class="form-control espaciocaja" style="text-transform: uppercase;" type="text" name="apellidos" disabled="disabled" value="<?php echo $filaConsultada->hora_registro ?>">
            </div>
            <br>


            <button class="btn btn-primary" value="Crud">Modificar</button>
            <button class="btn btn-primary" value="Crud">Eliminar</button>
            <button  onclick="location.href='volverInicio.php'" class="btn btn-primary">Volver</button>

            <br>
            
        </div>
        </form>
    </div>
</div>