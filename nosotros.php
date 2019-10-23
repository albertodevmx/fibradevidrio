<?php include("header.php"); ?>

    <!-- =========================      MAIN           ================================ -->
    <div class="container main">

        <div class="row pt-3 pb-3">

            <div class="col-12">
                <h2><?php echo ($es) ? 'Bienvenidos a I.P.F.V., Ingeniería y Proyectos en Fibra de Vidrio' : 'Welcome to I.P.F.V., Engineering and Projects in Fiberglass'; ?></h2>
            </div>

            <div class="col-4 d-none d-md-block">
                <img src="images/logoimagen.jpg" alt="" class="img-fluid img-web">
            </div>
            
            <div class="col-12 col-md-8">
                <?php if($es) { ?>
                        <p>Líder en producción y distribución de productos en fibra de vidrio con más de 35 años de experiencia en los diferentes sectores de la industria.</p>
                        <p>Producimos y comercializamos enseres de fibra de vidrio, cumpliendo los más altos estándares de producción, especificaciones y diseño.</p>
                        <p>Ofrecemos al mercado latinoamericano y extranjero un amplio portafolio de productos y servicios integrales para las áreas escolar, industrial, decorativa, comercial y cualquier proyecto sobre diseño, satisfaciendo los requerimientos de los clientes más exigentes.</p>
                <?php } else { ?>
                        <p>Leader in production and distribution of fiberglass products with more than 35 years of experience in different sectors of the industry.</p>
                        <p>We produce and sell fiberglass equipment, meeting the highest production standards, specifications and design.</p>
                        <p>We offer to the Latin American and foreign market a wide portfolio of products and integral services for the school, industrial, decorative, commercial areas and any project on design, satisfying the requirements of the most demanding clients.</p>
                <?php } ?>
            </div>
        </div>
        
    </div>



<?php include("footer.php"); ?>