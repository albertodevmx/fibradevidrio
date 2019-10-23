<?php session_start(); include("hmedia/funciones.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Panel de Control</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link href="hmedia/estilo.css" rel="stylesheet" type="text/css">


<script type="text/javascript">
function pregunta(){ 
   if (!(confirm('¿Estas seguro de ejecutar esta acción?'))){ 
      return false;
   } 
} 
</script> 
</head>

<body>
<div class="container shadow p-0">

    <header>
        <img src="img/banner.jpg" class="img-fluid" style="width:100%">
    
        
        <?php if(isset($_SESSION['usuario'])) { ?>
            <nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light mb-3">
        
                <!-- <a class="navbar-brand" href="#">IPFV</a> -->
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="registros_nuevo.php">Publicar Artículo</a></li>
                        <li class="nav-item"><a class="nav-link" href="registros.php">Revisar productos</a></li>
                        <li class="nav-item"><a class="nav-link" href="salir.php">Salir</a></li>
                    </ul>                
                </div>
            </nav>

        <?php } ?>
    </header>


<div id="main">