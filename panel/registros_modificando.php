<?php // header("Location: registros.php"); 
include("header.php"); ?>
	
    <?php if(isset($_SESSION['usuario'])) { ?>
    <!--  ********************************************* ESTA INFORMACIÖN CAMBIA  ********************************************* -->	


        <div class="row">
            <div class="col p-5">
                <?php
                $id = $_POST['id'];
                $publico = $_POST['publico'];
                $categoria = $_POST['categoria'];
                $descripcion = $_POST['descripcion'];
                $description = $_POST['description'];
                $imagen = $_POST['imagen'];
                $fecha = $_POST['fecha'];
                

                $sql = "UPDATE registros SET descripcion = '$descripcion', description = '$description', categoria = '$categoria' where id = '$id';";
                include('configuracion.php');

                if( mysqli_query($con, $sql) ) {
                    echo '
                        <div class="alert alert-success" role="alert">
                            ¡Se modificó correctamente!
                        </div>
                    ';
                } else {
                    echo '
                        <div class="alert alert-danger" role="alert">
                            ¡Ocurrió un error!, intentelo de nuevo.
                        </div>
                    ';
                }
                ?>
            </div>
        </div>


	<!--  ********************************************* ESTA INFORMACIÖN CAMBIA  ********************************************* -->	
    <?php } else { include("login.php"); } ?>
    
<?php include_once("footer.php"); ?>