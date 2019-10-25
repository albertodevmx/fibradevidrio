<?php include("header.php"); ?>

    <!-- =========================      CAROUSEL           ================================ -->
    <div class="container main">
        <div id="carouselExampleSlidesOnly" class="carousel slide pt-3 pb-3" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
        </ol>


        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="assets/img/slider/slider7.jpg">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/slider/slider6.jpg">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/slider/slider1.jpg">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/slider/slider5.jpg">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/slider/slider8.jpg">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/slider/slider9.jpg">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/slider/slider10.jpg">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/slider/slider11.jpg">
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>


        <!--seccion de videos de youtube!-->
        <div id="videoslist" class="row">
        </div>


        <div class="row pt-3 pb-3 mt-3">

            <div class="col-12">
                <h2 class="text-danger subrayado p-2 mb-5"><?php echo ($es) ? 'Bienvenidos a I.P.F.V., Ingeniería y Proyectos en Fibra de Vidrio' : 'Welcome to I.P.F.V., Engineering and Projects in Fiberglass'; ?></h2>
            </div>

            <div class="col-12 col-md-4 d-none d-md-block">
                <img src="./assets/img/logoimagen.jpg" alt="" class="img-fluid img-web">
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



<!-- <script>
    // Variables que debes cambiar por las tuyas.
    var key       = 'AIzaSyDM7WX75p23MW9_B3pY_KjAQrLJd3ITIP8';
    var channelId = 'UCWuMswUIiiTkNc7jDoS9SYg';
    var cuantos   = 4;

    // Crea un array de videos en base a los parametros ingresados.
    function hacerGet(key, channelId, cuantos)
    {    
        var xmlHttp = new XMLHttpRequest();
        let ruta = 'https://www.googleapis.com/youtube/v3/search?key='+key+'&channelId='+channelId+'&part=snippet%2Cid&order=date&maxResults='+cuantos;
        console.log(ruta);

        xmlHttp.open( "GET", ruta, false );
        xmlHttp.send( null );
        var datos = JSON.parse(xmlHttp.responseText)
        return datos.items;
    }

    // Monta los vídeos en el div especificado con los items ingresados.
    function crearVideos(items, div, clase) {
        var cadenaHTML = "";
        for (var i = 0; i < items.length; i++) { cadenaHTML = cadenaHTML + '<div class="'+clase+'"><iframe src="https://www.youtube.com/embed/'+items[i].id.videoId+'" allowfullscreen width="100%"></iframe></div>'; }
        document.getElementById(div).innerHTML = cadenaHTML;
    }

    // Llamamos a la función crear videos con el DIV: videoslist
    var arrayVideos = hacerGet(key, channelId, cuantos);
    crearVideos( arrayVideos, 'videoslist', 'col-6  col-md-3');
</script> -->

<?php include("footer.php"); ?>