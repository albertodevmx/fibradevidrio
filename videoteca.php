<?php include("header.php"); ?>

    <!-- =========================      MAIN           ================================ -->
    <div class="container pt-3 pb-5 mb-3 mb-md-5">

        <div class="row pt-3 pb-3">
            <div class="col-12">
                <h2 class="text-danger subrayado p-2 mb-5"><?php echo ($es) ? 'Videoteca' : 'Video library'; ?></h2>
                <p><?php echo ($es) ? 'Hemos preparado una serie de videos que muestran nuestro trabajo, esperamos sean de su agrado.' : 'We have prepared a series of videos that show our work, we hope they are to your liking.'; ?></p>
            </div>
        </div>


        <div class="row videoteca">
            <div class="col-md-6">
                    <iframe src="https://www.youtube.com/embed/0mRltGA_src" allowfullscreen></iframe>

                    <p>
                        <?php echo ($es) ? 'Arte minimalista, diseños especiales.' : 'Minimalist art, special designs.'; ?>
                    </p>
            </div>


            <div class="col-md-6">
                    <iframe src="https://www.youtube.com/embed/mUlGfw1Ev3U" allowfullscreen></iframe>

                    <p>
                        <?php echo ($es) ? 'Muebles en acero inoxidable, Diseños 3D, Escaleras de emergencia.' : 'Furniture in stainless steel, 3D Designs, Emergency stairs.'; ?>
                    </p>
            </div>


            <div class="col-md-6">
                    <iframe src="https://www.youtube.com/embed/zpt5CqE6GHs" allowfullscreen></iframe>

                    <p>
                        <?php echo ($es) ? 'Reproducción de personajes infantiles en fibra de vidrio.' : 'Reproduction of children\'s characters in fiberglass.'; ?>
                    </p>
            </div>

            <div class="col-md-6">
                    <iframe src="https://www.youtube.com/embed/TA9rg9TDp9c" allowfullscreen></iframe>

                    <p>
                        <?php echo ($es) ? 'Fabricación de personajes infantiles para montables.' : 'Manufacture of children\'s characters for mountables.'; ?>
                    </p>
            </div>
        </div>
        
    </div>



<?php include("footer.php"); ?>