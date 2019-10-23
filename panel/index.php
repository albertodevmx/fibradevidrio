<?php include("header.php"); ?>
	
	<?php if(isset($_SESSION['usuario'])) { ?>
    <!--  ********************************************* ESTA INFORMACIÖN CAMBIA  ********************************************* -->	

	<div class="row">
		<div class="col p-5">
			<p>Bienvenido <?php echo $_SESSION['usuario'] ?> has iniciado sesión correctamente.</p>
		</div>
	</div>

	<!--  ********************************************* ESTA INFORMACIÖN CAMBIA  ********************************************* -->	
    <?php } else { include("login.php"); } ?>
    
<?php include_once("footer.php"); ?>