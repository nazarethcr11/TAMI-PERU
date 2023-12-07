<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../public/images/TAMILOGOFondoTurquesa.webp" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | TAMI</title>
    <meta name=description content="Esta es una descripción breve de tu página web. Puedes proporcionar información sobre el contenido de la página y su propósito.">
    <link rel="stylesheet" type="text/css" href="../public/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../public/css/index.css">
    <link rel="stylesheet" type="text/css" href="../public/css/footer.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

</head>
<body>
  <?php include_once "header.php"; ?>
    <main class="main__inicio">
        <section class="panel">
           <a class="panel__boton" href="productos.php">VER PRODUCTOS</a>
        </section>
        <section class="redes">
            <div>
                <ul class="redes__sociales">
                    <li> 
                        <a class="footer__link" href="https://www.facebook.com/tamiperu01" target="_blank"> 
                            <i class="fa-brands fa-facebook"></i><span style="color: white; margin-left: 10px;">tamiperu01</span>
                        </a>
                    </li>
                    <li>
                        <a class="footer__link" href="https://www.tiktok.com/@tami_peru"target="_blank">
                            <i class="fa-brands fa-tiktok"></i><span style="color: white; margin-left: 10px;">Ttami_peru</span>
                        </a> 
                    </li>
                    <li>
                       <a class="footer__link" href="https://www.youtube.com/@TamiPeru" target="_blank">
                           <i class="fa-brands fa-youtube"></i><span style="color: white; margin-left: 10px;">TamiPeru</span>
                       </a>
                    </li>    
                    <li>    
                       <a class="footer__link" href="https://www.instagram.com/tamiperu01/" target="_blank">
                           <i class="fa-brands fa-instagram"></i><span style="color: white; margin-left: 10px;">tamiperu01</span>
                       </a>
                    </li>    
                    <li>    
                       <a class="footer__link" href="contacto.php">
                           <i class="fa-solid fa-envelope"></i><span style="color: white; margin-left: 10px;">informestami01@gmail.com</span>
                       </a>
                    </li>    
                </ul>
            </div>
        </section>
        <section class="productos" id="productos">
            <figure class="productos__img">
                <img class="vid__item" src="../public/images/catalogo_productos/SOLDADORASPARK.webp" alt="">
                <p class="nombre_producto">Trabajo</p>
            </figure>
            <figure class="productos__img">
                <img class="vid__item" src="../public/images/catalogo_productos/BAMBOOFIBERWALLBOARD.webp" alt="">
                <p class="nombre_producto">Decoraciones</p>
            </figure>
            <figure class="productos__img">
                <img class="vid__item" src="../public/images/catalogo_productos/SELLADORDEVASOS.webp" alt="">
                <p class="nombre_producto">Emprendimiento</p>
            </figure>
        </section>
    
        <div class="video" id="video">
            <div class="video__texto">OFRECEMOS TECNOLOGÍA<br>  Y CALIDAD PARA TU<br> NEGOCIO Y HOGAR.
            </div>
            <video class="video__item" src="../public/videos/PROYECTO_PW_Quienes_somos.mp4" autoplay="autoplay" muted="muted"
                loop="loop"></video>
        </div>
    </main>
    <?php include_once "footer.php"; ?>
    <script type="application/javascript" src="../public/js/main.js" async></script>
    <script type="application/javascript" src="../public/js/index.js" async></script>
    <script type="application/javascript" src="../public/js/fontawesome.js" crossorigin="anonymous" async></script>
</body>

</html>