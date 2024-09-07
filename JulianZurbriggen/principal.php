<?php date_default_timezone_set('America/Argentina/Cordoba');?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width,initial-scale=1, maximum-scale=2,user-scalable=yes">
    <link rel="stylesheet" href="styles.css">
    <title>Julián Zurbriggen</title>
</head>
<header class="head">
    <h1 class="firma1 btnFirma"><a href="principal.php?bienvenida">Julian Zurbriggen</a></h1>
    <section class="botonera">
        <a href="principal.php?sobremi" title="Sobre Mi" class="bn54"><span class="bn54span">SOBRE MI</span></a>
        <a href="principal.php?canciones&&lista" class="bn54"><span class="bn54span">CANCIONES</span></a>
        <a href="principal.php?clases" class="bn54"><span class="bn54span">CLASES</span></a>
        <a href="principal.php?contacto" class="bn54"><span class="bn54span">CONTACTO</span></a>
    </section>
</header>
<body>
    <section class="cont">
    <?php 
    if(isset($_GET['bienvenida'])){ ?>
    <div class="contCont">
      <img class="imgCoro" src="assets/imagenes/juli1.jpg" alt="">
      <img class="imgCoro non" src="assets/imagenes/juli2.jpg" alt="">
      </div>
      <?php }
    if(isset($_GET['sobremi'])){
        include('sobremi.php');
    }
    if(isset($_GET['canciones'])){
        include('canciones.php');
    }
    if(isset($_GET['clases'])){
        include('clases.php');
    }
    if(isset($_GET['contacto'])){
        include('contacto.php');
    }
    ?>
        
    </section>
</body>
</html>