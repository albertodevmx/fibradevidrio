<?php include("header.php"); ?>
    <!-- =========================      MAIN           ================================ -->
    <div class="container main">

        <div class="row pt-3 pb-3">

            <div class="col-12">

                <?php
                $cat = $_GET['cat'];


                if($es) {

                                switch($cat) {
                                case "industrial":
                                        echo "
                                        <h2>Línea Industrial</h2>
                                        <p>Nuestros productos industriales tienen el objetivo de optimizar la eficiencia de su empresa o negocio en ampliaciones o renovaciones de espacios existentes.</p>
                                        <p>En el área de productos industriales, cubrimos los más altos estándares de fabricación y cumplimos con las normas más exigentes de calidad que nos son requeridos por algunos de nuestros clientes.</p>
                                        <p>Pemex ha sido uno de nuestros clientes más reconocidos, a quien con eficacia y eficiencia servimos durante un largo periodo. De igual forma, atendemos a Hospitales Privados y Públicos, lo que comprueba los altos estándares con los que trabajamos.</p>
                                        ";
                                        break;

                                case "comercial":
                                        echo "
                                        <h2>Línea Comercial</h2>
                                        <p>Nuestros productos comerciales tienen el objetivo de optimizar la eficiencia de su empresa o negocio, en ampliación o renovación de espacios existentes.</p>
                                        <p>Proporcionamos innumerables posibilidades de diseño y estética, principalmente en espacios de esparcimiento, de recreación y en áreas infantiles.</p>
                                        <p>Diseños con formas audaces de alta seguridad, resistencia y calidad sin perder la estética, con o sin recubrimiento en colores vivos y atractivos.</p>
                                        <p>En el área de productos comerciales, nuestra empresa cubre los más altos estándares de fabricación y estética, garantizando la calidad de su producto y el respeto de exclusividad de su trabajo corporativo o de diseño personal.</p>
                                        <p>Cumplimos con las normas más exigentes de calidad que nos son requeridos por nuestros clientes. Recorcholis, Pepsi, Coca-Cola, Casas GEO y Palacio de Hierro, entre otros, han depositado su confianza en nosotros.</p>
                                        <p>Usted podrá obtener un plus para incrementar los ingresos de su empresa, comercio o negocio, adquiriendo nuestra amplia variedad en Chicleras, Montables motorizados y de resorte. Además, contamos con una extensa variedad de maniquíes.</p>
                                        ";
                                        break;
                                
                                case "decorativo":
                                        echo "
                                        <h2>Línea de Decorativos</h2>
                                        <p>Nuestros productos decorativos se destacan por su excelente diseño y funcionalidad. Son la mejor solución para desarrollar ambientes confortables en oficinas, hospitales, interiores comerciales y salones de clase, entre otros.</p>
                                        <p>Sea cual se la necesidad del proyecto, ofrecemos soluciones versátiles y eficaces en la generación de ambientes agradables para vivir y trabajar.</p>
                                        <p>En la galería de artículos para la Decoración de su Hogar o Negocio, usted puede adquirir diseños originales e innovadores en: Lámparas, Maceteros, Fuentes, Bancas, Mesas para Jardín, Mingitorios (en formas innovadoras) y Jaulas para aves entre otros muchos productos elaborados con el material de la más alta calidad.</p>
                                        ";
                                        break;

                                case "escolar":
                                        echo "
                                        <h2>Línea Escolar</h2>
                                        <p>Nuestros productos escolares son la perfecta combinación entre funcionalidad y estética, cubriendo por completo las necesidades de salones de clase, patios de escuela y áreas recreativas en guarderías, kinders y gimnasios infantiles, incluso en parques acuáticos.</p>
                                        <p>Los productos escolares son una de nuestras especialidades, es por ello que usted podrá elegir entre una amplia variedad de figuras originales para depósitos de basura, pupitres en fibra de vidrio y base tubular, artículos personalizados con el logotipo de su empresa o institución, mesas de trabajo para comedor escolar, laboratorio de cómputo, área de patios: resbaladillas, juegos modulares, laberintos y carruseles.</p>
                                        ";
                                        break;
                                }

                        } else { 

                                switch($cat) {
                                case "industrial":
                                        echo "
                                        <h2>Industrial Line</h2>
                                        <p>Our industrial products aim to optimize the efficiency of your company or business in extensions or renovations of existing spaces.</p>
                                        <p>In the area of industrial products, we cover the highest manufacturing standards and comply with the highest quality standards that are required by some of our customers.</p>
                                        <p>Pemex has been one of our most recognized clients, who we serve effectively and efficiently for a long period of time. Similarly, we serve Private and Public Hospitals, which proves the high standards with which we work.</p>
                                        ";
                                        break;

                                case "comercial":
                                        echo "
                                        <h2>Commercial Line </h2>
                                        <p>Our commercial products have the objective of optimizing the efficiency of your company or business, in expansion or renovation of existing spaces.</p>
                                        <p>We provide innumerable possibilities for design and aesthetics, mainly in recreational spaces, recreation areas and children's areas.</p>
                                        <p>Designs with bold forms of high security, resistance and quality without losing aesthetics, with or without coating in bright and attractive colors.</p>
                                        <p>In the area of ​​commercial products, our company covers the highest standards of manufacturing and aesthetics, guaranteeing the quality of your product and the respect of exclusivity of your corporate work or personal design.</p>
                                        <p>We comply with the most demanding quality standards that are required by our customers. Recorcholis, Pepsi, Coca-Cola, Casas GEO and Palacio de Hierro, among others, have placed their trust in us.</p>
                                        <p>You can obtain a bonus to increase the income of your company, business or business, acquiring our wide variety of Chicleras, motorized and spring assemblies. In addition, we have an extensive variety of mannequins.</p>
                                        ";
                                        break;
                                
                                case "decorativo":
                                        echo "
                                        <h2> Decorative Line </h2>
                                        <p>Our decorative products stand out for their excellent design and functionality. They are the best solution to develop comfortable environments in offices, hospitals, commercial interiors and classrooms, among others.</p>
                                        <p>Whatever the need of the project, we offer versatile and effective solutions in the generation of pleasant environments to live and work.</p>
                                        <p>In the gallery of articles for your Home or Business Decoration, you can acquire original and innovative designs in: Lamps, Planters, Fountains, Benches, Garden Tables, Urinals (in innovative ways) and Bird Cages among others Many products made with the highest quality material.</p>
                                        ";
                                        break;

                                case "escolar":
                                        echo "
                                        <h2>School Line </h2>
                                        <p>Our school products are the perfect combination of functionality and aesthetics, completely covering the needs of classrooms, school playgrounds and recreational areas in kindergartens, kindergartens and gyms, even in water parks.</p>
                                        <p>School products are one of our specialties, which is why you can choose from a wide variety of original figures for garbage bins, glass fiber and tubular desks, personalized items with your company's logo or institution. , work tables for school canteen, computer lab, playground area: slides, modular games, labyrinths and carousels.</p>
                                        ";
                                        break;
                                }

                        }
                ?>
                
            </div>
           
        </div>



        <div class="row">
                <?php

                        $url = "./data/productos.json";
                        $json = file_get_contents($url);
                        $data = json_decode($json, TRUE);

                        $json_string = json_encode($data[$cat], JSON_PRETTY_PRINT);
                        // echo $json_string;

                        // include("panel/configuracion.php");
                        // $sql_fotos = "SELECT * FROM registros  WHERE categoria = '$cat'";
                        // $result_fotos = mysqli_query($con, $sql_fotos);
                        // while($row_fotos = mysqli_fetch_assoc($result_fotos))
                        foreach($data[$cat]['productos'] as $item) {
                ?>
            
                <!-- href="subidas/<?php echo $item['imagen']; ?>" class="productos__detalle__imagen" -->
            
                    <div class="col-6 col-md-3 productos__detalle">
                        <div data-toggle="modal" data-target="#exampleModalCenter" onClick="cargarDatos('<?php echo $item['descripcion'] ?>', '<?php echo $item['imagen'] ?>')">
                            <img src="./subidas/th/<?php echo $item['imagen']; ?>" class="img-fluid">
                        </div>
                        <div class="productos__detalle__descripcion">
                            <p class="text-center mb-3"><?php echo ($es) ? $item['descripcion'] : $item['description']; ?></p>
                        </div>
                    </div>


            <?php 
                // echo '"'.$row_fotos['imagen'].'" : {<br>';
                // echo '"imagen" : "'.$row_fotos['imagen'].'",<br>';
                // echo '"descripcion" : "'.$row_fotos['descripcion'].'"<br>';
                // echo '},<br>';

                        }
            ?>

        </div>
        
    </div>




<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h5 class="modal-title" id="exampleModalLongTitle">Título</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <img src="subidas/3crAYCVTf.jpg" alt="" class="img-fluid" id="imagenModal">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>



<?php include("footer.php"); ?>