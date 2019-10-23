<?php include("header.php");  use \Gumlet\ImageResize; ?>
	
	<?php if(isset($_SESSION['usuario'])) { ?>
    <!--  ********************************************* ESTA INFORMACIÖN CAMBIA  ********************************************* -->	

    
    <?php
    /*		=============================================		CONFIGURACION DEL ARCHIVO		=============================================		*/
    include("configuracion.php");
    $id = $_GET['id'];
    $query = "SELECT id, publico, categoria, descripcion, imagen, fecha FROM registros WHERE id='$id'";
    $result = mysqli_query($con, $query);
    if($row = mysqli_fetch_assoc($result)) {
    ?>

            <!--		=============================================		IMPRIME EL FORMULARIO		=============================================		-->

            

            <div class="row">
                <div class="col-6 p-5">
                    <h3 class="mb-5">Modificar producto con el id <b><?php echo $_GET['id']; ?></b></h3>


                    <form method="post" action="registros_modificando.php" enctype="multipart/form-data" id="former1">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="publico" name="publico" <?php if ( $row['publico'] == 1 ) { echo 'checked="checked"'; } ?>>
                            <label class="form-check-label" for="publico">Publicar inmediatamente</label>
                        </div>
                        

                        <div class="form-group">
                            Sección:
                            <select name="categoria" class="form-control">
                                <option <?php if ( $row['categoria'] == "industrial" ) { echo 'selected'; } ?> value="industrial">Industrial</option>
                                <option <?php if ( $row['categoria'] == "comercial" ) { echo 'selected'; } ?> value="comercial">Comercial</option>
                                <option <?php if ( $row['categoria'] == "decorativo" ) { echo 'selected'; } ?> value="decorativo">Decorativo</option>
                                <option <?php if ( $row['categoria'] == "escolar" ) { echo 'selected'; } ?> value="escolar">Escolar</option>
                            </select>
                        </div>
                    
                        
                        
                        
                        <div class="form-group">
                            <label for="descripcion">Descripción de la imagen</label>
                            <input type="text" name="descripcion" class="form-control" value="<?php echo $row['descripcion']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción en inglés</label>
                            <input type="text" name="description" class="form-control" value="<?php echo $row['description']; ?>">
                        </div>

                        
                        <div class="form-group">
                            <!-- <small id="filehelp" class="form-text text-muted">Si no se carga ninguna imagen se seguirá usando la siguiente.</small> -->
                            <img src="../subidas/th/<?php echo $row['imagen']; ?>" alt="">
                        </div>
                        <!-- 

                        <div class="form-group">
                            <label for="foto">Cambiar imagen</label>
                            <input name="foto" type="file" class="form-control">
                        </div> -->

                        <input type="submit" value="Modificar producto" class="btn btn-success">
                    </form>
                </div>
            </div>


    <?php } ?>


	<!--  ********************************************* ESTA INFORMACIÖN CAMBIA  ********************************************* -->	
    <?php } else { include("login.php"); } ?>
    
<?php include_once("footer.php"); ?>