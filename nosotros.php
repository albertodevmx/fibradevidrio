<?php include("header.php"); ?>

<!-- =========================      MAIN           ================================ -->
<div class="container pt-3">

	<div class="row pt-3 pb-3">

		<div class="col-12">
			<h2 class="text-danger subrayado p-2 mb-5"><?php echo ($es) ? 'Bienvenidos a I.P.F.V., Ingeniería y Proyectos en Fibra de Vidrio' : 'Welcome to I.P.F.V., Engineering and Projects in Fiberglass'; ?></h2>
		</div>

		<div class="col-12 col-md-4 d-block d-md-block">
			<img src="./assets/img/logoimagen.jpg" alt="" class="img-fluid img-web">
		</div>

		<div class="col-12 col-md-8">
			<?php if ($es) { ?>
				<p>Líder en producción y distribución de productos en fibra de vidrio con más de 35 años de experiencia en los diferentes sectores de la industria.</p>
				<p>Producimos y comercializamos enseres de fibra de vidrio, cumpliendo los más altos estándares de producción, especificaciones y diseño.</p>
				<p>Ofrecemos al mercado latinoamericano y extranjero un amplio portafolio de productos y servicios integrales para las áreas escolar, industrial, decorativa, comercial y cualquier proyecto sobre diseño, satisfaciendo los requerimientos de los clientes más exigentes.</p>

				<p>En ingeniería y proyectos en fibra de vidrio mas que una empresa, somos una familia que nos preocupamos por tener momentos de convivencia donde fomentamos valores y tradiciones.</p>
				<p>Lo más importante para nosotros es tener satisfechos a nuestros clientes y quienes laboramos aquí nos preocupamos por que así sea.</p>
			<?php } else { ?>
				<p>Leader in production and distribution of fiberglass products with more than 35 years of experience in different sectors of the industry.</p>
				<p>We produce and sell fiberglass equipment, meeting the highest production standards, specifications and design.</p>
				<p>We offer to the Latin American and foreign market a wide portfolio of products and integral services for the school, industrial, decorative, commercial areas and any project on design, satisfying the requirements of the most demanding clients.</p>
			<?php } ?>
		</div>
	</div>

	<div class="row bg-light mb-3 mb-md-5 pt-3 pb-3 border">
		<div class="col-12 col-md-4">
			<img src="./assets/img/nosotros1.jpg" alt="" class="img-fluid mb-3 mb-md-0 w-100 shadow">
		</div>

		<div class="col-12 col-md-4">
			<img src="./assets/img/nosotros2.jpg" alt="" class="img-fluid mb-3 mb-md-0 w-100 shadow">
		</div>

		<div class="col-12 col-md-4">
			<img src="./assets/img/nosotros3.jpg" alt="" class="img-fluid mb-3 mb-md-0 w-100 shadow">
		</div>
	</div>

</div>



<?php include("footer.php"); ?>