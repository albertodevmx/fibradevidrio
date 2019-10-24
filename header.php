<?php
session_start();

// Cuando dan clic en un idioma
if( isset( $_GET['lang'] ) ) {
	// Si dan clic en español
	if($_GET['lang'] == 'es') {
		// Español es igual a TRUE (verdadero)
		$_SESSION['lang'] = 'es';
		$es = true;
	}
	else {
		$_SESSION['lang'] = 'en';
		$es = false;
	}
}

// Cuando entran por primera vez
else {

	if(  isset($_SESSION['lang'] )  ) {
		if(  $_SESSION['lang'] == 'es'  ) {
			$es = true;
		}
		else {
			$es = false;
		}
	}
	else {
		$_SESSION['lang'] = 'es';
		$es = true;
	}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo ($es) ? 'Proyectos en Fibra de Vidrio' : 'Projects in Fiberglass'; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>


<!-- =========================      ENCABEZADO      ================================ -->
<header>
    <nav class="navbar navbar-dark fixed-top bg-dark navbar-expand-lg navbar-light bg-light">
            
        <!-- <a class="navbar-brand" href="#">IPFV</a> -->
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="index.php"><?php echo ($es) ? 'Inicio' : 'Home'; ?></a></li>
                <li class="nav-item"><a class="nav-link" href="nosotros.php"><?php echo ($es) ? 'Quiénes Sómos' : 'About us'; ?></a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo ($es) ? 'Líneas de productos' : 'Products lines'; ?>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="productos.php?cat=industrial"><?php echo ($es) ? 'Línea Industrial' : 'Industrial Line'; ?></a>
                        <a class="dropdown-item" href="productos.php?cat=comercial"><?php echo ($es) ? 'Línea Comercial' : 'Commercial Line'; ?></a>
                        <a class="dropdown-item" href="productos.php?cat=decorativo"><?php echo ($es) ? 'Línea de Decorativos' : 'Decorative Line'; ?></a>
                        <a class="dropdown-item" href="productos.php?cat=escolar"><?php echo ($es) ? 'Línea Escolar' : 'School Line'; ?></a>
                    </div>
                </li>

                <li class="nav-item"><a class="nav-link" href="videoteca.php"><?php echo ($es) ? 'Videoteca' : 'Video library'; ?></a></li>
                <li class="nav-item"><a class="nav-link enlacecontacto" href="#contacto"><?php echo ($es) ? 'Contacto' : 'Contact'; ?></a></li>
            </ul>


            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                        <?php echo ($es) ? '<a class="nav-link" href="'.$_SERVER['PHP_SELF'].'?lang=en">English version</a>' : '<a class="nav-link" href="'.$_SERVER['PHP_SELF'].'?lang=es">Versión en español</a>' ?>
                </li>
            </ul>
        
        </div>
    </nav>




    <!-- =========================      REDES SOCIALES      ================================ -->
    <div class="encabezado__redessociales" style="display: block; position: fixed; top: 350px; right: 0px; z-index: 999; background: rgba(255, 255, 255, 0.5); border: #333 1px solid; border-right: 0px; padding: 5px; border-radius: 5px 0px 0px 5px;">
            <a style="display: block; margin: 0px; padding: 3px; line-height: 0.8em;" class="text-center" target="_blank" href="https://www.facebook.com/FIBRADEVIDRIO14">
                <i class="icon icon-facebook-square"></i>
            </a>
            <a style="display: block; margin: 0px; padding: 3px; line-height: 0.8em;" class="text-center" target="_blank" href="https://twitter.com/fibradevidriomx">
                <i class="icon icon-twitter"></i>
            </a>
            <a style="display: block; margin: 0px; padding: 3px; line-height: 0.8em;" class="text-center" target="_blank" href="https://www.youtube.com/channel/UCWuMswUIiiTkNc7jDoS9SYg">
                <i class="icon icon-youtube-square"></i>
            </a>
            <a style="display: block; margin: 0px; padding: 3px; line-height: 0.8em;" class="text-center" target="_blank" href="https://api.whatsapp.com/send?phone=5215523342258">
                <i class="icon icon-whatsapp"></i>
            </a>
    </div>



    <div class="container-fluid bg-light shadow" style="padding-top: 56px;">
            <div class="container">

                    <div class="row p-3">
                        <div class="col-lg-4 col-md-6 text-center encabezado__logo">
                            <a href="index.php">
                                <img src="assets/img/logo_metalico.png" alt="" class="mt-3 w-75">
                            </a>

                            <div class="text-danger encabezado__leyenda font-weight-bold font-italic mt-3 mb-3">
                                <?php echo ($es) ? 'Hacemos realidad su proyecto...' : 'We make your project a reality...' ?>
                            </div>
                        </div>


                        <div class="col-lg-8 col-md-6 align-self-center d-none d-md-block text-center text-md-right encabezado__direccion">
                                <p class="align-self-center">
                                
                                        <?php if ($es) { ?>
                                                <i class="text-danger icon icon-map-marker"></i> Av. Vicente Villada No. 481,  
                                                Col. Benito Juárez, <br>
                                                Cd. Nezahualcóyotl.  Estado de México C.P. 57000<br>

                                                <i class="text-danger icon icon-call-phone"></i> (55) 5731-6223 y (55) 1108-4472<br>
                                                <i class="text-danger icon icon-mobile"></i> (55) 2334-2258<br>
                                                <i class="text-danger icon icon-envelope"></i> cesar_3r@hotmail.com
                                        <?php } else { ?>
                                        
                                                <i class="text-danger icon icon-map-marker"></i> Vicente Villada Avenue No. 481,  
                                                Colonia Benito Juárez, <br>
                                                Nezahualcóyotl City.  State of México C.P. 57000<br>

                                                <i class="text-danger icon icon-call-phone"></i> (55) 5731-6223 y (55) 1108-4472<br>
                                                <i class="text-danger icon icon-mobile"></i> Cell: 055 2334-2258<br>
                                                <i class="text-danger icon icon-envelope"></i> cesar_3r@hotmail.com

                                        <?php } ?>
                                </p>
                        </div> 
                    </div>
                    </div>
    </div>
</header>