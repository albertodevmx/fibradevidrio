<?php include("header.php"); ?>
	
	<?php if(isset($_SESSION['usuario'])) { ?>
    <!--  ********************************************* ESTA INFORMACIÖN CAMBIA  ********************************************* -->	

    <div class="row">
        <div class="col-6 p-5">
            <h3>Agregar un nuevo producto</h3>


            <form method="post" action="registros_insertar.php" enctype="multipart/form-data" id="former1">

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="publico" name="publico" checked="checked">
                    <label class="form-check-label" for="publico">Publicar inmediatamente</label>
                </div>
                

                <div class="form-group">
                    Sección:
                    <select name="categoria" class="form-control">
                        <option value="industrial">Industrial</option>
                        <option value="comercial">Comercial</option>
                        <option value="decorativo">Decorativo</option>
                        <option value="escolar">Escolar</option>
                    </select>
                </div>
            
                
                
                
                <div class="form-group">
                    <label for="descripcion">Descripción de la imagen</label>
                    <input type="text" name="descripcion" class="form-control">
                </div>

                <div class="form-group">
                    <label for="foto">Escojer imagen</label>
                    <input name="foto" type="file" class="form-control">
                </div>

                <input type="submit" value="Enviar producto" class="btn btn-success">
            </form>
        </div>
    </div>


	<!--  ********************************************* ESTA INFORMACIÖN CAMBIA  ********************************************* -->	
    <?php } else { include("login.php"); } ?>
    
<?php include_once("footer.php"); ?>