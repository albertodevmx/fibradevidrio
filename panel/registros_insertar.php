<?php include("header.php");  use \Gumlet\ImageResize; ?>
	
	<?php if(isset($_SESSION['usuario'])) { ?>
    <!--  ********************************************* ESTA INFORMACIÖN CAMBIA  ********************************************* -->	

	<div class="row">
		<div class="col p-5">
			<?php

				if(isset($_POST['publico'])) $publico = 1;
				else $publico = 0;

				$destacado = 0;
					
				$categoria = $_POST['categoria'];
				$descripcion = $_POST['descripcion'];
				$fecha = date("y-m-d");


				include_once("configuracion.php");
				include_once("hmedia/funciones.php");

				$foto = "foto tmp name = ".$_FILES['foto']['tmp_name']."<br />";

				if($_FILES['foto']['tmp_name']=="") {
					$nombre = NULL;
					}
				else {
					include_once("hmedia/php-image-resize.php");

					$nombre = mktime().".jpg";
					$image = new ImageResize( $_FILES['foto']['tmp_name'] );
					$image->quality_jpg = 80;
					$image->resizeToWidth(800, $allow_enlarge = True);
					$image->save( '../subidas/'.$nombre, IMAGETYPE_JPEG );

					$th = new ImageResize( $_FILES['foto']['tmp_name'] );
					$th->quality_jpg = 70;
					$th->crop(200, 200);
					$th->save( '../subidas/th/'.$nombre, IMAGETYPE_JPEG );

					$mini = new ImageResize( $_FILES['foto']['tmp_name'] );
					$mini->quality_jpg = 50;
					$mini->crop(40, 40);
					$mini->save( '../subidas/mini/'.$nombre, IMAGETYPE_JPEG );
				}


				$sql = "insert into registros values(NULL, '$publico', '$categoria', '$descripcion', '$nombre', '$fecha');";

				if( mysqli_query($con, $sql) ) {
					echo '
						<div class="alert alert-success" role="alert">
							¡Se ha publicado!
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