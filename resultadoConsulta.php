 <div id="conteformu">
    <div class="formulario">

         <form class="formulario" role="form">

        <div class="col-md-12">
            <h3 class="lgris centrado">Datos del Cliente</h3><br>
            <div class="form-group">
            <label class="lgris">Identificación:</label>
            <input class="form-control espaciocaja" style="text-transform: uppercase;" type="text" name="id_identificacion" disabled="disabled" value="<?php echo $filaConsultada->id_identificacion ?>">
            </div>

            <div class="form-group">
            <label class="lgris">Nombres:</label>
            <input class="form-control espaciocaja" style="text-transform: uppercase;" type="text" name="nombre" disabled="disabled" value="<?php echo $filaConsultada->nombre ?>">
            </div>


            <div class="form-group">
            <label class="lgris">Apellidos:</label>
            <input class="form-control espaciocaja" style="text-transform: uppercase;" type="text" name="apellido" disabled="disabled" value="<?php echo $filaConsultada->apellido ?>">
            </div>


            <div class="form-group">
            <label class="lgris">Tipo de Usuario:</label>
            <input class="form-control espaciocaja" style="text-transform: uppercase;" type="text" name="tipo" disabled="disabled" value="<?php echo $filaConsultada->rol ?>">
            </div>


            <div class="form-group">
            <label class="lgris">Edad:</label>
            <input class="form-control espaciocaja" style="text-transform: uppercase;" type="text" name="edad" disabled="disabled" value="<?php echo $filaConsultada->edad ?>">
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
            <input class="form-control espaciocaja" style="text-transform: uppercase;" type="text" name="fech_registro" disabled="disabled" value="<?php echo $filaConsultada->fecha_registro ?>">
            </div>

            <div class="form-group">
            <label class="lgris">Hora Registro:</label>
            <input class="form-control espaciocaja" style="text-transform: uppercase;" type="text" name="hora_reg" disabled="disabled" value="<?php echo $filaConsultada->hora_registro ?>">
            </div>
            <br>

            <?php

                

                $iden= $filaConsultada->id_identificacion;
                $modi = "modificar";
                $eli = "eliminar";
            ?>

            <input type= "button" class="btn btn-primary" onclick="location.href='controlModiEliUsuario.php?iden=<?php echo $iden?>&modi=<?php echo $modi?>'" value="Modificar">

            <input type="button" class="btn btn-primary" onclick="location.href='controlModiEliUsuario.php?iden=<?php echo $iden?>&eli=<?php echo $eli?>'" value="Eliminar">

            <input type="button" onclick="location.href='volverInicio.php'" class="btn btn-primary" value="Volver">

            <br>
            
        </div>
        </form>
    </div>
</div>