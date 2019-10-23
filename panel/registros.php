<?php include("header.php");  use \Gumlet\ImageResize; ?>
	
	<?php if(isset($_SESSION['usuario'])) { ?>
    <!--  ********************************************* ESTA INFORMACIÖN CAMBIA  ********************************************* -->	


	<div class="row">
		<div class="col">
			<?php if(isset($_POST['busqueda'])) { ?>
				<div class="col">
					<a class="btn btn-success" href="<?php $_SERVER['PHP_SELF'] ?>">Mostrar Todos</a>
				</div>
			<?php } else { ?>
				<form class="form-inline" method="post" action="<?php $_SERVER['PHP_SELF'] ?>" id="buscar">
					<div class="form-group">
						<input type="text" name="busqueda" id="busqueda" class="form-control mx-sm-3">
					</div>

					<div class="form-group">
						<button class="btn btn-success">Buscar</button>
					</div>
				</form>
			<?php } ?>
		</div>
	</div>

	<div class="row">

		<div class="col p-4">
				
				<?php
				/*		=============================================		CONFIGURACION DEL ARCHIVO		=============================================		*/

				$borrar = true;
				$modificar = true;
				$publicar = true;
				$destacado = false;
				$tabla_this = "registros";
				$numero_acciones = $borrar + $modificar + $publicar + $destacado;


				/*		=============================================		CREA LA CONSULTA Y EL ORDEN DE DATOS		=============================================		*/
				if(isset($_GET['order'])) {
					
					if($_SESSION['order'] == 1) { 
						$modo_orden = "ASC";
						$_SESSION['order'] = 0;
						}
						else {
							$modo_orden = "DESC";
							$_SESSION['order'] = 1;
							}
					$order = $_GET['order'];
					}
				else {
					$order = "id";
					$modo_orden = "ASC";
				}


				include("configuracion.php");

				if(isset($_POST['busqueda'])) {
					$busqueda = $_POST['busqueda'];
					$consulta = "SELECT id, imagen, categoria, descripcion, description FROM registros WHERE id like '%$busqueda%' or categoria like '%$busqueda%'";
					$result = mysqli_query($con, $consulta);
				}
				else { 
					$consulta = "SELECT id, imagen, categoria, descripcion, description from registros  order by $order $modo_orden";
					$result = mysqli_query($con, $consulta);
				}



				/*		=============================================		IMPRIME LOS ENCABEZADOS DE LA TABLA		=============================================		*/
				$i = 0;
				echo '<table class="table table-bordered table-striped table-hover">
						<thead class="thead-dark">
							<tr>';

								while ($i < mysqli_num_fields($result)) {

									$meta = mysqli_fetch_field($result);
									echo "<th><a href=".$_SERVER['PHP_SELF']."?order=$meta->name>".$meta->name."</a></th>";
									$i++;
								}
								
								echo "<th colspan=".$numero_acciones.">Acciones</th>
							</tr>
						</thead>";


				/*		=============================================		IMPRIME LOS REGISTROS		=============================================		*/


				if(isset($_POST['busqueda'])) {
					$_busqueda = $_POST['busqueda'];
					$_consulta = "SELECT id, imagen, categoria, descripcion, description FROM registros WHERE id like '%$busqueda%' or categoria like '%$busqueda%'";
					$_result = mysqli_query($con, $consulta);
				}
				else { 
					$_consulta = "SELECT id, imagen, categoria, descripcion, description from registros WHERE categoria!='noticia' order by $order $modo_orden";
					$_result = mysqli_query($con, $consulta);
				}


				while($_row = mysqli_fetch_assoc($_result)) {
					
					
					if(isset($_row['publico']) && $_row['publico']==0) {
						$class_row = "row_oculto";
					} else {
						$class_row = "publico";
					}
					
					
					echo "<tr class='".$class_row."'>";
					echo "<td>".$_row['id']."</td>";
					// echo "<td>".$_row['publico']."</td>";
					echo '<td><a href="'.$carpeta_imagen.'/'.$_row['imagen'].'" target="_blank"><img src="'.$carpeta_mini.'/'.$_row['imagen'].'" class="rounded shadow"></td>';
					echo "<td>".$_row['categoria']."</td>";
                                        echo "<td>".$_row['descripcion']."</td>";
                                        echo "<td>".$_row['description']."</td>";


					

				?>

				<!--		=============================================		ACCIONES EN LA TABLA		=============================================		-->
					<?php if($borrar) { ?>
					<td class="eliminar" width="32">
					<a class="btn btn-danger" title="Borrar Registro" href="borrar.php?id=<?php echo $_row['id']; ?>&amp;tabla=<?php echo $tabla_this; ?>&amp;imagen=<?php echo $_row['imagen']; ?>" onclick="return pregunta();" title="Borrar registro">Eliminar</a>
					</td>
					<?php } ?>
					
					<?php if($modificar) { ?>
					<td class="modificar" width="32">
					<a class="btn btn-primary" title="Modificar Registro" href="registros_modificar.php?id=<?php echo $_row['id']; ?>">Modificar</a>
					</td>
					<?php } ?>
					
					<?php if($destacado) { ?>
					<td class="destacar" width="32">
					<a class="btn btn-success" title="Activar/Desactivar Destacado" href="destacar.php?id=<?php echo $_row['id']; ?>&amp;tabla=<?php echo $tabla_this ?>&amp;destacado=<?php echo $_row['destacado'] ?>">Destacar</a>
					</td>
					<?php } ?>
					
					<?php if($publicar) { ?>
					<td class="publicar" width="32">
					<a class="btn btn-info" title="Activar/Desactivar Registro" href="publicar.php?id=<?php echo $_row['id']; ?>&amp;tabla=<?php echo $tabla_this ?>&amp;publico=<?php echo $_row['publico'] ?>">Publicar</a>
					</td>
					<?php } ?>
					
						
				<?php    
					echo "</tr>";
					}
				echo "</table>";
				?>
		</div>

	</div>


	<!--  ********************************************* ESTA INFORMACIÖN CAMBIA  ********************************************* -->	
    <?php } else { include("login.php"); } ?>
    
<?php include_once("footer.php"); ?>