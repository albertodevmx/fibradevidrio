<?php include("header.php"); ?>
<!-- =========================      MAIN           ================================ -->
<div class="container main">

	<div class="row pt-3 pb-3">

		<div class="col-12 pt-3">

			<?php
			


			if ($es) {
                echo '
                                <h2 class="text-danger subrayado p-2 mb-5">Proyectos Especiales</h2>
                                <p>Presentación proyectos especiales.</p>
                                ';

			} else {
                echo '
                                <h2 class="text-danger subrayado p-2 mb-5">Special Projects</h2>
                                <p>Special projects presentation.</p>
                                ';
			}
			?>

		</div>

	</div>




    <div class="row mb-5">
		<?php

		$url = "./assets/data/proyectos.json";
		$json = file_get_contents($url);
		$data = json_decode($json, TRUE);
		$json_string = json_encode($data, JSON_PRETTY_PRINT);
		// echo $json_string;

		
		foreach ($data['proyectos'] as $item) {
            $i = 0;
        ?>
        

               

                    
                        <div class="col-12 col-md-6">
                            <h2 class="text-danger p-2"><?php echo ($es) ? $item['titulo'] : $item['title']; ?></h2>
                            <p>
                                <?php echo ($es) ? $item['descripcion'] : $item['description']; ?>
                            </p>
                        
                            <div id="carouselExampleControls<?php echo $item['id']; ?>" class="carousel slide pt-3 pb-3" data-ride="carousel<?php echo $item['id']; ?>">
                                <div class="carousel-inner">
                            
                                    <?php foreach($item['fotos'] as $foto) { ?>


                                        <div class="carousel-item shadow<?php if($i == 0) { echo " active"; } ?>">
                                            <img class="d-block w-100 img-thumbnail" src="<?php echo "./assets/img/proyectos/".$foto['imagen']; ?>" alt="">
                                        </div>
                                    <?php $i++; } ?>
                                </div>

                                <a class="carousel-control-prev" href="#carouselExampleControls<?php echo $item['id']; ?>" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls<?php echo $item['id']; ?>" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                        </div>
                    




	    <?php } ?>

    </div>
	

</div>





<?php include("footer.php"); ?>