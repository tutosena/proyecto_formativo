

 <div id="conteformu">
    <div class="formulario">

         <form class="formulario" role="form"  action="guardarUsuario.php" method="POST">

        <div class="col-md-12">
            <h3 class="lgris centrado">Datos del Cliente</h3><br>
            <div class="form-group">
            <label class="lgris">Identificación:</label>
            <input class="form-control espaciocaja" style="text-transform: lowercase;" type="number" name="id_identificacion"  value="<?php echo $filaConsultada->id_identificacion ?>" required>
            </div>

            <div class="form-group">
            <label class="lgris">Nombres:</label>
            <input class="form-control espaciocaja" style="text-transform: lowercase;" type="text" name="nombre"  value="<?php echo $filaConsultada->nombre ?>" required>
            </div>


            <div class="form-group">
            <label class="lgris">Apellidos:</label>
            <input class="form-control espaciocaja" style="text-transform: lowercase;" type="text" name="apellido"  value="<?php echo $filaConsultada->apellido ?>" required>
            </div>


            <div class="form-group">
                <label class="lgris">Tipo de Usuario:</label>
                <br>
            <select name="tipo" class="form-control">
                <?php
                    $consultaRol = $filaConsultada->rol;
                    if($consultaRol =="administrador"){

                        echo "<option class='form-control espaciocaja' style='text-transform: lowercase;'  value='administrador' required>administrador</option>";

                        echo "<option class='form-control espaciocaja' style='text-transform: lowercase;'    value='cliente' required>cliente</option>";

                    }elseif($consultaRol =="cliente"){
                        echo " <option class='form-control espaciocaja' style='text-transform: lowercase;'  name='tipo'  value='administrador' required>administrador</option>";
                        echo "<option class='form-control espaciocaja' style='text-transform: lowercase;'  name='tipo'  value='cliente' required>cliente</option>";

                    }

                ?>
           
            </select>
            </div>


            <div class="form-group">
            <label class="lgris">Edad:</label>
            <input class="form-control espaciocaja" type="number" name="edad" value="<?php echo $filaConsultada->edad ?>" required>
            </div>

            <?php
                

                $_SESSION['correo'] = $filaConsultada->email;
                $_SESSION['id_antiguo'] = $filaConsultada->id_identificacion;

            ?>
            
            <div class="form-group">
            <label class="lgris">Télefono:</label>
            <input class="form-control espaciocaja" type="number" name="telefono"  value="<?php echo $filaConsultada->telefono ?>" required>
            </div>


            <div class="form-group">
            <label class="lgris">Dirección:</label>
            <input class="form-control espaciocaja" style="text-transform: uppercase;" type="text" name="direccion"  value="<?php echo $filaConsultada->direccion ?>" required>
            </div>

            <div class="form-group">
            <label class="lgris">E-mail:</label>
            <input class="form-control espaciocaja" type="email" name="email"  value="<?php echo $filaConsultada->email ?>" required>
            </div>

            <div class="form-group">
            <label class="lgris">Fecha Registro:</label>
            <input class="form-control espaciocaja"  type="date" name="fecha_registro"  value="<?php echo $filaConsultada->fecha_registro ?>" required>
            </div>

            <div class="form-group">
            <label class="lgris">Hora Registro:</label>
            <input class="form-control espaciocaja"  type="text" name="hora_reg"  value="<?php echo $filaConsultada->hora_registro ?>" required>
            </div>
            <br>

           
            
            
  