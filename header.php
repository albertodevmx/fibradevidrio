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
    
    <link href="https://file.myfontastic.com/pmsTpc7QKrjw79e3MhHZSf/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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


    <div class="container-fluid bg-light shadow" style="padding-top: 56px;">
            <div class="container">

                    <div class="row p-3">
                        <div class="col-lg-4 col-md-6 encabezado__logo">
                            <a href="index.php">
                                <img src="images/logo_metalico.png" alt="">
                            </a>

                            <div class="encabezado__leyenda">
                                <p><?php echo ($es) ? 'Hacemos realidad su proyecto...' : 'We make your project a reality...' ?></p>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6 align-self-center text-center encabezado__redessociales">
                                <a target="_blank" href="https://www.facebook.com/FIBRADEVIDRIO14" class="icon-facebook-circled"></a>
                                <a target="_blank" href="https://twitter.com/fibradevidriomx" class="icon-twitter-circled"></a>
                                <a target="_blank" href="https://www.youtube.com/channel/UCWuMswUIiiTkNc7jDoS9SYg" class="icon-youtube-square"></a>
                        </div>


                        <div class="col-md-5 align-self-center encabezado__direccion d-none d-md-block">
                                <p class="align-self-center">
                                
                                        <?php if ($es) { ?>
                                                <i class="icon-map-marker"></i>Av. Vicente Villada No. 481,  
                                                Col. Benito Juárez, <br>
                                                Cd. Nezahualcóyotl.  Estado de México C.P. 57000<br>

                                                <i class="icon-phone"></i>(01 55) 5731-6223 y (01 55) 1108-4472<br>
                                                <i class="icon-mobile"></i>Cel: 04455 2334-2258<br>
                                                <i class="icon-mail"></i>cesar_3r@hotmail.com
                                        <?php } else { ?>
                                        
                                                <i class="icon-map-marker"></i>Vicente Villada Avenue No. 481,  
                                                Colonia Benito Juárez, <br>
                                                Nezahualcóyotl City.  State of México C.P. 57000<br>

                                                <i class="icon-phone"></i>(01 55) 5731-6223 y (01 55) 1108-4472<br>
                                                <i class="icon-mobile"></i>Cell: 04455 2334-2258<br>
                                                <i class="icon-mail"></i>cesar_3r@hotmail.com

                                        <?php } ?>
                                </p>
                        </div> 
                    </div>
                    </div>
    </div>
</header>