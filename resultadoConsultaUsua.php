
        
            <h3 class="lgris centrado">Datos del Usuario</h3><br>
            <div class="form-group">
            <label class="lgris">Nombre de Usuario:</label>
            <input class="form-control espaciocaja"  type="email" name="usuario_nick"  value="<?php echo $filaConsultada->pk_nick_loggin ?>" required>
            </div>

            <div class="form-group">
            <label class="lgris">Password:</label>
            <input class="form-control espaciocaja" type="text" name="clave"  value="<?php echo $filaConsultada->password ?>" required>
            </div>
             <div class="form-group">
            <label class="lgris">Repetir:</label>
            <input class="form-control espaciocaja"  type="text" name="repetir_clave"  value="<?php echo $filaConsultada->password ?>" required>
            </div>

            <input type="submit" name="" class="btn btn-primary" value="Guardar" >

            
            <input type="button" onclick="location.href='volverInicio.php'" class="btn btn-primary" value="Volver">
            <br>

           
            
            
        </div>
        </form>
    </div>
</div>