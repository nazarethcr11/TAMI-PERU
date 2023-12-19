<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="../public/images/TAMILOGOtransparente.webp" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos | TAMI</title>
    <meta name=description content="Esta es una descripción breve de tu página web. Puedes proporcionar información sobre el contenido de la página y su propósito.">
    <link rel="stylesheet" type="text/css" href="../public/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../public/css/footer.css">
    <link rel="stylesheet" type="text/css" href="../public/css/productos.css">
    <link rel="stylesheet" type="text/css" href="../public/css/formulario.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<style>
    .product-thumbnails video {
        width: 75px;
        height: 70px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
        margin-right: 0.8rem;
        cursor: pointer;
    }

    .modal-content {
        display: grid;
    }

    .notification {

        bottom: 50px;
        left: 50px;
        width: max-content;
        padding: 20px 15px;
        border-radius: 4px;
        background-color: #009f9d;
        color: #f6f5f9;
        box-shadow: 0 1px 10px rgba(0, 0, 0, 0.1);
        transform: translateY(30px);
        opacity: 0;
        visibility: hidden;
        animation: fade-in 4s linear forwards;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
    }

    .notification__progress {
        position: absolute;
        left: 5px;
        bottom: 5px;
        width: calc(100% - 10px);
        height: 5px;
        transform: scaleX(0);
        transform-origin: left;
        background-image: linear-gradient(to right, #539bdb, #3250bf);
        background: linear-gradient(90deg, rgba(232, 232, 232, 1) 0%, rgba(212, 212, 212, 1) 4%, rgba(135, 165, 187, 1) 76%, rgba(138, 170, 193, 1) 100%);
        border-radius: inherit;
        animation: load 3s 0.25s linear forwards;
    }

    .modal-content p {
        font-size: 18px;
        color: #fff;
        margin-top: 0px;
    }

    .button {

        margin: 0.2rem auto;
        padding: 0.3rem 1rem;
        background-color: transparent;
        color: var(--color-secundario2);
        border: 1.5px solid var(--color-secundario2);
        border-radius: 15px;
        font-size: 0.8rem;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s ease;

    }

    @keyframes fade-in {
        5% {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        90% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes load {
        to {
            transform: scaleX(1);
        }
    }
    .fade-out {
    opacity: 0;
    transition: opacity 0.5s ease; /* Ajusta la duración y la función de temporización según sea necesario */
}
textarea {
    resize: vertical;
    min-height: 100px;
    height: 100px;
    max-height: 200px;
}
</style>

<body>
    <?php include_once "header.php"; ?>
    <main class="main__productos">
        <h1 class="productos__titulo">Nuestros productos</h1>
        <section class="productos__multimedia">
            <video class="productos__video" src="../public/videos/PRODUCTOSTAMI_1.mp4" autoplay="autoplay" muted="muted" loop="loop"></video>
        </section>

        <section class="productos__catalogo" id="catalogo1">
            <h2 class="productos__tituloCatalogo" id="productos__tituloCatalogo">Catálogo</h2>

            <div style="padding: 10px;">
                <h2 style="padding: 20px 80px 20px 80px; color: white;">Emprendimiento</h2>
                <div class="productos__imagenes">
                    <!-- 1 -->
                    <figure class="productos__item" id="S__Botellas">
                        <a href="#productos__tituloCatalogo" class="productos__link1">
                            <img class="productos__img" src="../public/images/catalogo_productos/SELLADORDEBOTELLAS.webp" alt="SBotellas 1_1" /></a>
                        Sellador de Botellas

                        <figcaption class="productos__description">
                            <a href="#productos__tituloCatalogo" class="productos__link2" onclick="openModal('S__Botellas')">Vista rápida</a>
                        </figcaption>
                    </figure>

                    <!-- 2 -->
                    <figure class="productos__item" id="maquina__embalaje">
                        <a href="#productos__tituloCatalogo" class="productos__link1">
                            <img class="productos__img" src="../public/images/catalogo_productos/MÁQUINADEEMBALAJE.webp" alt="emabalaje" />
                        </a>
                        Máquina de embalaje
                        <figcaption class="productos__description">
                            <a href="#productos__tituloCatalogo" class="productos__link2" onclick="openModal('maquina__embalaje')">Vista rápida</a>
                        </figcaption>
                    </figure>

                    <!-- 3-->
                    <figure class="productos__item" id="sellador__vasos">
                        <a href="#productos__tituloCatalogo" class="productos__link1">
                            <img class="productos__img" src="../public/images/catalogo_productos/SELLADORDEVASOS.webp" alt="SELLADOR VASOS" /></a>
                        Sellador de vasos

                        <figcaption class="productos__description">
                            <a href="#productos__tituloCatalogo" class="productos__link2" onclick="openModal('sellador__vasos')">Vista rápida</a>
                        </figcaption>
                    </figure>

                    <!-- 6 -->
                    <figure class="productos__item" id="Selladora-de-bolsas">
                        <a href="#productos__tituloCatalogo" class="productos__link1">
                            <img class="productos__img" src="../public/images/catalogo_productos/SELLADORADEBOLSAS.webp" alt="Selladora-de-bolsas" /></a>
                        Selladora de bolsas

                        <figcaption class="productos__description">
                            <a href="#productos__tituloCatalogo" class="productos__link2" onclick="openModal('Selladora-de-bolsas')">Vista rápida</a>
                        </figcaption>
                    </figure>

                </div>
            </div>

            <div style="padding: 10px;">
                <h2 style="padding: 20px 80px 20px 80px; color: white;">Trabajo</h2>
                <div class="productos__imagenes">




                    <!-- 7 -->
                    <figure class="productos__item" id="Soldadora-LINGBA-5">
                        <a href="#productos__tituloCatalogo" class="productos__link1">
                            <img class="productos__img" src="../public/images/catalogo_productos/SOLDADORALINGBA.webp" alt="Soldadora-LINGBA-5" /></a>
                        Soldadora Lingba

                        <figcaption class="productos__description">
                            <a href="#productos__tituloCatalogo" class="productos__link2" onclick="openModal('Soldadora-LINGBA-5')">Vista rápida</a>
                        </figcaption>
                    </figure>


                    <!-- 8 -->
                    <figure class="productos__item" id="Soldadora-SPARK-3">
                        <a href="#productos__tituloCatalogo" class="productos__link1">
                            <img class="productos__img" src="../public/images/catalogo_productos/SOLDADORASPARK.webp" alt="Soldadora-SPARK-3" /></a>
                        Soldadora Spark

                        <figcaption class="productos__description">
                            <a href="#productos__tituloCatalogo" class="productos__link2" onclick="openModal('Soldadora-SPARK-3')">Vista rápida</a>
                        </figcaption>
                    </figure>

                    <!-- 8.1 -->
                    <figure class="productos__item" id="MEZCLADORA-DE-CONCRETO">
                        <a href="#productos__tituloCatalogo" class="productos__link1">
                            <img class="productos__img" src="../public/images/catalogo_productos/MezcladoraConcreto/1MezcladoraConcreto.webp" alt="MEZCLADORA-DE-CONCRETO" /></a>
                        Mezcladora de Concreto

                        <figcaption class="productos__description">
                            <a href="#productos__tituloCatalogo" class="productos__link2" onclick="openModal('MEZCLADORA-DE-CONCRETO')">Vista rápida</a>
                        </figcaption>
                    </figure>


                </div>
            </div>

            <div style="padding: 10px;">
                <h2 style="padding: 20px 80px 20px 80px; color: white;">Decoración</h2>
                <div class="productos__imagenes">

                    <!-- 4 -->
                    <figure class="productos__item" id="Panel__Fibra">
                        <a href="#productos__tituloCatalogo" class="productos__link1">
                            <img class="productos__img" src="../public/images/catalogo_productos/BAMBOOFIBERWALLBOARD.webp" alt="Panel Fibra" /></a>
                        Panel de Fibra de Bambo

                        <figcaption class="productos__description">
                            <a href="#productos__tituloCatalogo" class="productos__link2" onclick="openModal('Panel__Fibra')">Vista rápida</a>
                        </figcaption>
                    </figure>




                    <!-- 9-->
                    <figure class="productos__item" id="Ventilador-Holografico">
                        <a href="#productos__tituloCatalogo" class="productos__link1">
                            <img class="productos__img" src="../public/images/catalogo_productos/VENTILADORHOLOGRÁFICO.webp" alt="Ventilador-Holografico" /></a>
                        Ventilador Holográfico

                        <figcaption class="productos__description">
                            <a href="#productos__tituloCatalogo" class="productos__link2" onclick="openModal('Ventilador-Holografico')">Vista rápida</a>
                        </figcaption>
                    </figure>

                    <!-- 10-->
                    <figure class="productos__item" id="WPC__FENCEPANEL">
                        <a href="#productos__tituloCatalogo" class="productos__link1">
                            <img class="productos__img" src="../public/images/catalogo_productos/WPCFENCEPANEL.webp" alt="WPC__FENCEPANEL" /></a>
                        WPC FENCE PANEL

                        <figcaption class="productos__description">
                            <a href="#productos__tituloCatalogo" class="productos__link2" onclick="openModal('WPC__FENCEPANEL')">Vista rápida</a>
                        </figcaption>
                    </figure>

                    <!-- 11-->
                    <figure class="productos__item" id="WPC__WALLPANEL">
                        <a href="#productos__tituloCatalogo" class="productos__link1">
                            <img class="productos__img" src="../public/images/catalogo_productos/WPCWALLPANEL.webp" alt="WPC__WALLPANEL" /></a>
                        WPC WALL PANEL

                        <figcaption class="productos__description">
                            <a href="#productos__tituloCatalogo" class="productos__link2" onclick="openModal('WPC__WALLPANEL')">Vista rápida</a>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div id="modalForm"></div>
            <div id="modalContainer"></div>
            <script>
                const productos = [{
                        id: "maquina__embalaje",
                        imgSrc: "../public/images/catalogo_productos/MÁQUINADEEMBALAJE.webp",
                        imgSrc1: "../public/images/catalogo_productos/MaquinaEmbalaje/1_MÁQUINADEEMBALAJE.webp",
                        imgSrc2: "../public/images/catalogo_productos/MaquinaEmbalaje/2_MÁQUINADEEMBALAJE.webp",
                        imgSrc3: "../public/images/catalogo_productos/MaquinaEmbalaje/3_MÁQUINADEEMBALAJE.webp",
                        imgSrc4: "../public/images/catalogo_productos/MaquinaEmbalaje/4_PRODUCTO.webp",
                        video: "../public/videos/MÁQUINADEEMBALAJE.mp4",
                        title: "Máquina de embalaje",
                        industries: "El papel de sellado exterior está controlado por un motor escalonado, la longitud de la bolsa es estable y la posición es precisa. El PLC se utiliza para controlar la acción de toda la máquina, se muestra la interfaz man-machine y el funcionamiento es práctico.",
                        n_comments: "24",
                        length: "105 cm",
                        width: "70 cm",
                        height: "130 cm",
                        stars: 4,
                        extra: "<b>Modelo:</b> KN-TH169\n<b>Potencia:</b> 220V, 50 HZ\n<b>Capacidad de llenado:</b> 1-5 g/bolsa\n<b>Flujo de trabajo:</b> 30-50 bolsas/min"
                    },
                    {
                        id: "sellador__vasos",
                        imgSrc: "../public/images/catalogo_productos/SELLADORDEVASOS.webp",
                        imgSrc1: "../public/images/catalogo_productos/SelladorVasos/1_SELLADORADEVASOS.webp",
                        imgSrc2: "../public/images/catalogo_productos/SelladorVasos/2_SELLADORADEVASOS.webp",
                        imgSrc3: "../public/images/catalogo_productos/SelladorVasos/3_SELLADORADEVASOS.webp",
                        imgSrc4: "../public/images/catalogo_productos/SelladorVasos/4_PRODUCTO.webp",
                        video: "../public/videos/SELLADORDEVASOS.mp4",
                        title: "Sellador de vasos",
                        industries: "El vaso de plástico se colocará en la parte inferior del molde, después de haber precalentado la máquina, para luego sellarlo con el film de plástico y luego retirar el vaso.",
                        n_comments: "33",
                        length: "23 cm",
                        width: "32 cm",
                        height: "50 cm",
                        stars: 3,
                        extra: "<b>Modelo:</b> ET-A9\n<b>Potencia:</b> 220V / 110V\n<b>Temperatura de sellado:</b> 160 – 200°C\n<b>Diámetro de sellado:</b> 9.5 y 7.5 cm\n<b>Flujo de trabajo:</b> 300 - 400 vasos/h"

                    },
                    {
                        id: "Panel__Fibra",
                        imgSrc: "../public/images/catalogo_productos/BAMBOOFIBERWALLBOARD.webp",
                        imgSrc1: "../public/images/catalogo_productos/BambooFiber/imagen.webp",
                        imgSrc2: "../public/images/catalogo_productos/BambooFiber/2imagen.webp",
                        imgSrc3: "../public/images/catalogo_productos/BambooFiber/3imagen.webp",
                        imgSrc4: "../public/images/catalogo_productos/BambooFiber/4imagen.webp",
                        video: "../public/videos/BAMBOOFIBERWALLBOARD.mp4",
                        title: "Panel de Fibra de Bambo",
                        industries: "La HCB pared de fondo adopta el material de base sólida APA, que tiene alta resistencia, buena estabilidad, resistencia al agua y a la corrosión. La tecnología de ranurado de alta precisión permite un correcto empalme de las piezas.",
                        n_comments: "11",
                        length: "280 cm",
                        width: "360 cm",
                        height: "0.8 cm",
                        stars: 5,
                        extra: "<b>Materiales:</b> APA sólido Material de Base\n<b>Longitud:</b> 2,4 m 2,8 m,/por o personalizado\n<b>Aplicación:</b> Hotel, hogar, apartamento, etc.\n<b>Resistente al:</b> Agua, fuego, polvo\n<b>Tipo de decoración:</b> Interiores"
                    },
                    {
                        id: "S__Botellas",
                        imgSrc: "../public/images/catalogo_productos/SELLADORDEBOTELLAS.webp",
                        imgSrc1: "../public/images/catalogo_productos/SelladorBotellas/1_SELLADORDEBOTELLAS.webp",
                        imgSrc2: "../public/images/catalogo_productos/SelladorBotellas/2_SELLADORDEBOTELLAS.webp",
                        imgSrc3: "../public/images/catalogo_productos/SelladorBotellas/3_SELLADORDEBOTELLAS.webp",
                        imgSrc4: "../public/images/catalogo_productos/SelladorBotellas/4_PRODUCTO.webp",
                        video: "../public/videos/SELLADORDEBOTELLAS.mp4",
                        title: "Sellador de Botellas",
                        industries: "Utiliza el principio de inducción electromagnética para producir un alto calor instantáneo para derretir el papel de aluminio que luego se adhiere al agujero de la Botella",
                        n_comments: "44",
                        length: "28 cm",
                        width: "23 cm",
                        height: "11.5 cm",
                        stars: 4,
                        extra: "<b>Modelo:</b> DCGY-F200\n<b>Potencia:</b> AC220V/50HZ-80HZ\n<b>Temperatura ambiente:</b> 10 - 400 °C\n<b>Diámetro del sello:</b> 2 - 8 (cm)\n<b>Flujo de trabajo:</b> 25 Botellas/min"
                    },
                    {
                        id: "Selladora-de-bolsas",
                        imgSrc: "../public/images/catalogo_productos/SELLADORADEBOLSAS.webp",
                        imgSrc1: "../public/images/catalogo_productos/SelladorBolsas/1imagen.webp",
                        imgSrc2: "../public/images/catalogo_productos/SelladorBolsas/2imagen.webp",
                        imgSrc3: "../public/images/catalogo_productos/SelladorBolsas/3imagen.webp",
                        imgSrc4: "../public/images/catalogo_productos/SelladorBolsas/4imagen.webp",
                        video: "../public/videos/SELLADORDEBOLSAS.mp4",
                        title: "Selladora de bolsas",
                        industries: "Contamos con 3 tipos de máquinas para llenar Harinas, Líquidos y Pastas, se pueden sellar Film de aluminio, Papel de Filtrante, Film de plástico impreso.",
                        n_comments: "27",
                        length: "55 cm",
                        width: "56 cm",
                        height: "150 cm",
                        stars: 4,
                        extra: "<b>Potencia:</b> 220-240V/50Hz\n<b>Capacidad de llenado:</b> 1-100g (Según el modelo)\n<bAnchura de película de plástico:</b> 3-20cm (Según el modelo)\n<b>Flujo de trabajo:</b> 10-20 bolsas/min"
                    },
                    {
                        id: "Soldadora-LINGBA-5",
                        imgSrc: "../public/images/catalogo_productos/SOLDADORALINGBA.webp",
                        imgSrc1: "../public/images/catalogo_productos/SoldarodaLingba/1imagen.webp",
                        imgSrc2: "../public/images/catalogo_productos/SoldarodaLingba/2imagen.webp",
                        imgSrc3: "../public/images/catalogo_productos/SoldarodaLingba/3imagen.webp",
                        imgSrc4: "../public/images/catalogo_productos/SoldarodaLingba/4imagen.webp",
                        video: "../public/videos/SOLDADORALINGBA.mp4",
                        title: "Soldadora LINGBA 5",
                        industries: "Se aplica tecnología de inversor de alta frecuencia, presente diseño optimizado, efecto de luz y ahorro de energía. Suelde de forma continua y persistente la pieza de trabajo, alta eficiencia con alta corriente.",
                        n_comments: "35",
                        length: "29 cm",
                        width: "14.5 cm",
                        height: "17.5 cm",
                        stars: 4,
                        extra: "<b>Modelo:</b> MIG-225\n<b>Potencia de soldadura/rango de tensión:</b> 5-160A/220V\n<b>Ciclo de trabajo nominal:</b> 60%\n<b>Peso:</b> 5,7 KG\n<b>Tipos de Soldadura:</b> MIG MAG/MMA/ TIG 3 en 1\n<b>Eficiencia:</b> 85%"
                    },
                    {
                        id: "Soldadora-SPARK-3",
                        imgSrc: "../public/images/catalogo_productos/SOLDADORASPARK.webp",
                        imgSrc1: "../public/images/catalogo_productos/SoldaraSpark/1imagen.webp",
                        imgSrc2: "../public/images/catalogo_productos/SoldaraSpark/2imagen.webp",
                        imgSrc3: "../public/images/catalogo_productos/SoldaraSpark/3imagen.webp",
                        imgSrc4: "../public/images/catalogo_productos/SoldaraSpark/4imagen.webp",
                        video: "../public/videos/SOLDADORASPARK.mp4",
                        title: "Soldadora SPARK 3",
                        industries: "Se aplica tecnología de inversor de alta frecuencia, presente diseño optimizado, efecto de luz y ahorro de energía. Suelde de forma continua y persistente la pieza de trabajo, alta eficiencia con alta corriente.",
                        n_comments: "46",
                        length: "32 cm",
                        width: "16.5 cm",
                        height: "22 cm",
                        stars: 5,
                        extra: "<b>Modelo:</b> Mig-250 MIG\n<b>Potencia:</b> 230V, 50/60 HZ\n<b>Ciclo de trabajo nominal:</b> 60%\n<b>Peso:</b> 6.5 KG\n<b>Tipos de Soldadura:</b> MIG MAG/MMA/LIFT TIG 3 en 1"
                    },
                    {
                        id: "MEZCLADORA-DE-CONCRETO",
                        imgSrc: "../public/images/catalogo_productos/MezcladoraConcreto/1MezcladoraConcreto.webp",
                        imgSrc1: "../public/images/catalogo_productos/MezcladoraConcreto/1MezcladoraConcreto.webp",
                        imgSrc2: "../public/images/catalogo_productos/MezcladoraConcreto/2MezcladoraConcreto.webp",
                        imgSrc3: "../public/images/catalogo_productos/MezcladoraConcreto/3MezcladoraConcreto.webp",
                        imgSrc4: "../public/images/catalogo_productos/MezcladoraConcreto/4MezcladoraConcreto.webp",
                        video: "../public/videos/MezcladoraConcreto.mp4",
                        title: "Maquina de Concreto",
                        industries: "Esta es una de las mezcladoras de concreto más económicas del mercado, su funcionamiento eléctrico hace que sea práctica ideal para las construcciones de viviendas, mezclando uniformemente el concreto.",
                        n_comments: "24",
                        length: "126 cm",
                        width: "85 cm",
                        height: "142 cm",
                        stars: 4,
                        extra: "<b>Modelo:</b> HCM700\n<b>Energía del motor:</b> 550W-850W\n<b>Capacidad:</b> 200 L\n<b>Peso Neto:</b> 72 KG\n<b>Diámetro del tambor:</b> 63 cm\n<b>Boca de tambor:</b> 39 cm"
                    },
                    {
                        id: "Ventilador-Holografico",
                        imgSrc: "../public/images/catalogo_productos/VENTILADORHOLOGRÁFICO.webp",
                        imgSrc1: "../public/images/catalogo_productos/VentiladorHolografico/1VentiladorHolografico.webp",
                        imgSrc2: "../public/images/catalogo_productos/VentiladorHolografico/2VentiladorHolografico.webp",
                        imgSrc3: "../public/images/catalogo_productos/VentiladorHolografico/3VentiladorHolografico.webp",
                        imgSrc4: "../public/images/catalogo_productos/VentiladorHolografico/4VentiladorHolografico.webp",
                        video: "../public/videos/VentiladorHolografico.mp4",
                        title: "Ventilador Holográfico",
                        industries: "El ventilador holográfico es un dispositivo que combina la tecnología de proyección y el movimiento rotatorio para crear la ilusión de un holograma en 3D flotando en el aire.",
                        n_comments: "29",
                        length: "48 cm",
                        width: "22 cm",
                        height: "8 cm",
                        stars: 5,
                        extra: "<b>Modelo:</b> Z7H\n<b>Formato de soporte:</b> MP4/AVI/RMVB/MKV/GIF/JPG/PNG\n<b>Resolución física: </b>1600x616 px\n<b>Potencia nominal:</b> 15W ~ 24Wn\n<b>Velocidad de rotación:</b> 670 RPM"
                    },
                    {
                        id: "WPC__FENCEPANEL",
                        imgSrc: "../public/images/catalogo_productos/WPCFENCEPANEL.webp",
                        imgSrc1: "../public/images/catalogo_productos/WPCFencel/1WPCFencel.webp",
                        imgSrc2: "../public/images/catalogo_productos/WPCFencel/2WPCFencel.webp",
                        imgSrc3: "../public/images/catalogo_productos/WPCFencel/3WPCFencel.webp",
                        imgSrc4: "../public/images/catalogo_productos/WPCFencel/4WPCFencel.webp",
                        video: "../public/videos/WPCFencel.mp4",
                        title: "WPC FENCEPANEL",
                        industries: "La Tecnología WPC es ideal para la decoración de interiores ya que cuenta con la resistencia al fuego y agua, además de que se limpia fácil, existen una amplia variedad de combinaciones en colores y estilos. ",
                        n_comments: "30",
                        length: "220 cm",
                        width: "13.9 cm",
                        height: "9 cm",
                        stars: 4,
                        extra: "<b>Tipo:</b> Panel de cerca\n<b>Característica:</b> Anti-UV, impermeable, anti-decoloración, etc.\n<b>Aplicación:</b> Hotel, hogar, apartamento, etc.\n<b>Resistente al:</b> Agua, fuego, polvo\n<b>Tipo de decoración:</b> Exteriores"
                    },
                    {
                        id: "WPC__WALLPANEL",
                        imgSrc: "../public/images/catalogo_productos/WPCWALLPANEL.webp",
                        imgSrc1: "../public/images/catalogo_productos/WPCWall/1WPCWall.webp",
                        imgSrc2: "../public/images/catalogo_productos/WPCWall/2WPCWall.webp",
                        imgSrc3: "../public/images/catalogo_productos/WPCWall/3WPCWall.webp",
                        imgSrc4: "../public/images/catalogo_productos/WPCWall/4WPCWall.webp",
                        video: "../public/videos/WPCWall.mp4",
                        title: "WPC WALLPANEL",
                        industries: "La Tecnología WPC es ideal para la decoración de interiores ya que cuenta con la resistencia al fuego y agua, además de que se limpia fácil, existen una amplia variedad de combinaciones en colores y estilos. ",
                        n_comments: "10",
                        length: "290 cm",
                        width: "15.9 cm",
                        height: "2.5 cm",
                        stars: 5,
                        cantidad: 1,
                        extra: "<b>Paquete:</b>  10 pcs/ctn\n<b>Longitud:</b> 2,9 metros o personalizado \n<b>Aplicación:</b>Hotel, hogar, apartamento, etc.\n<bResistente al:</b> Agua, fuego, polvo\n<b>Tipo de decoración:</b> Interiores"
                    },
                ];

                // Función para generar modales
                function generarModal(producto) {
                    const modal = document.createElement("div");
                    modal.id = `${producto.id}_modal`;
                    modal.classList.add("modal");
                    modal.innerHTML = `
                            <div class="modal-content">
                                <span class="close" onclick="closeModal('${producto.id}')">x</span>
                                <div class="tami-banner">
                                    <img src="../public/images/TAMILOGOtransparente.webp" alt="TAMI LOGO">
                                </div>
                                <div class="product-details">
                                    <div class="product-images">
                                        <div class="image-container">
                                            <img class="principal-img" src="${producto.imgSrc}" />
                                            <video class="principal-img" src="${producto.video}" style="display:none" controls></video>
                                            <i class="far fa-heart heart-icon"></i>
                                        </div>
                                        <div class="product-thumbnails">
                                            <img src="${producto.imgSrc}" alt="Thumbnail 1" onclick="changeMedia(this)"/>
                                            <img src="${producto.imgSrc2}" alt="Thumbnail 2" onclick="changeMedia(this)"/>
                                            <img src="${producto.imgSrc3}" alt="Thumbnail 3" onclick="changeMedia(this)"/>
                                            <img src="${producto.imgSrc4}" alt="Thumbnail 4" onclick="changeMedia(this)"/>
                                            <video src="${producto.video}" alt="Thumbnail 5" onclick="changeMedia(this)"></video>
                                            <!-- Agrega más miniaturas aquí según sea necesario -->
                                        </div>
                                    </div>

                                    <div class="product-info">
                                        <h2 class="pro_titulo">${producto.title}</h2>
                                        <div class="pro-opinion">
                                            <div class="opinion-subcont">
                                                <label>Valoracion: </label>
                                                ${getStarsHTML(producto.stars)}
                                            </div>
                                            <div class="opinion-subcont">
                                                <label>Comentarios: </label>
                                                <span>${producto.n_comments}</span>
                                            </div>
                                        </div>
                                        <div class="detalles">
                                            <div class="detalles-subcont">
                                                <label>Información: </label>
                                                <br>
                                                <span>${producto.industries}</span>
                                            </div>
                                            <div class= "detalles-subcont"> 
                                                <pre style="font-size: 0.8rem">${producto.extra}</pre>
                                            </div>
                                            <div class="detalles-subcont">
                                                <label>Dimensiones:</label>
                                                <br>
                                                <table class="custom-table">
                                                    <tr>
                                                        <td>Longitud</td>
                                                        <td>Ancho</td>
                                                        <td>Altura</td>
                                                    </tr>
                                                    <tr>
                                                        <td>${producto.length}</td>
                                                        <td>${producto.width}</td>
                                                        <td>${producto.height}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="detalles-subcont">
                                                <label>Mayor Información: </label>
                                                <br>
                                                    <a href="https://smartlink.metricool.com/public/smartlink/tamiperu01" class="btn-contactar">Contactar</a>
                                                    <button class="btn-faq" onclick="openFAQModal()">FAQ</button>                                            
                                                    <button id="submitButton_${producto.id}" class="button">FINALIZAR</button>
                                            </div>
                                        </div>
                                        <div class="calc-container">
                                            <div class="counter">
                                                <div class="counter-cell">
                                                    <button class="btn-counter" id="decrement">-</button>
                                                </div>
                                                <div class="counter-cell">
                                                    <span id="count">1</span>
                                                </div>
                                                <div class="counter-cell">
                                                    <button class="btn-counter" id="increment">+</button>
                                                </div>
                                            </div>
                                            <button class="btn-cotizar" onclick="openModalForm('${producto.id}')">Cotizar</button>
                                        </div>
                                    </div>
                                </div>

                                <div style="width: 100%; color: #7B7C89;">
                                    <div id="notification_${producto.id}" style="display: none;" class="notification">
                                        <p id="notification-text_${producto.id}"></p>
                                        <span class="notification__progress"></span>
                                    </div>
                                </div>
                                </div>
                            </div>
                        `;


                    document.getElementById("modalContainer").appendChild(modal);

                    function mostrarNotificacion(productoId) {
                        const notification = document.getElementById(`notification_${productoId}`);
                        const notificationText = document.getElementById(`notification-text_${productoId}`);

                        // Restablecer las clases de animación para volver a reproducir la animación
                        notification.classList.remove('animate__fadeIn');
                        notification.classList.remove('animate__animated');
                        void notification.offsetWidth; // Forzar un reflow para reiniciar las animaciones

                        // Agregar las clases de animación
                        notification.classList.add('animate__fadeIn');
                        notification.classList.add('animate__animated');

                        // Configurar el contenido de la notificación
                        notification.style.display = 'block';
                        notificationText.textContent = 'Enviado Correctamente ✔️ ';

                        // Ocultar la notificación después de 5 segundos
                        setTimeout(() => {
                            notification.style.display = 'none';
                        }, 5000);
                    }
                    // Asociar la función al evento click del botón
                    document.getElementById(`submitButton_${producto.id}`).addEventListener('click', () => mostrarNotificacion(producto.id));
                }



// Función para generar el formulario modal del producto
function generarModalForm(producto) {
    const modalForm = document.createElement("div");
    modalForm.id = `${producto.id}_modalForm`;
    modalForm.classList.add("modalForm");
    modalForm.innerHTML = `
        <div class="modal-form-content">
            <span class="close" onclick="closeModalForm('${producto.id}')">x</span>
            <label class="titleform">Cotizar ${producto.title}</label>
            <form id="miFormulario" action="mensajewssp.php" method="POST">
                <div class="form-row">
                    <div class="form-column">
                        <label>Nombre:</label>
                        <input type="text" name="nombre" id="nombre" required>

                        <label>Correo Electrónico:</label>
                        <input type="email" name="email" id="email" required>

                        <label>Número telefónico:</label>
                        <input type="number" name="telefono" id="telefono" required>
                    </div>
                    <div class="form-column">
                        <label>Producto a Comprar:</label>
                        <input type="text" name="producto" id="producto" disabled value="${producto.title}">

                        <label>Cantidad:</label>
                        <input type="number" name="cantidad" id="cantidad" required>
                    </div>
                </div>
                <label>Consulta:</label>
                <textarea name="mensaje" rows="4" id="mensaje" required></textarea>
                <input type="button" class="btn-cotizar" value="Enviar Compra" id="enviarCompra_${producto.id}" onclick="enviarCompra('${producto.id}')">
            </form>
        </div>
    `;
    document.getElementById("modalForm").appendChild(modalForm);
}

// Función para mostrar la notificación después de enviar el formulario
function mostrarNotificacion(productoId) {
    const notification = document.getElementById(`notification_${productoId}`);
    const notificationText = document.getElementById(`notification-text_${productoId}`);

    // Restablecer las clases de animación para volver a reproducir la animación
    notification.classList.remove('animate__fadeIn');
    notification.classList.remove('animate__animated');
    void notification.offsetWidth; // Forzar un reflow para reiniciar las animaciones

    // Agregar las clases de animación
    notification.classList.add('animate__fadeIn');
    notification.classList.add('animate__animated');

    // Configurar el contenido de la notificación
    notification.style.display = 'block';
    notificationText.textContent = 'Enviado Correctamente ✔️ ';

    // Ocultar la notificación después de 5 segundos
    setTimeout(() => {
        notification.style.display = 'none';
    }, 5000);
}

// Iterar sobre la lista de productos
productos.forEach((producto) => {
                    generarModal(producto);
                    generarModalForm(producto);

                    const enviarCompraButton = document.getElementById(`enviarCompra_${producto.id}`);
                    if (enviarCompraButton) {
                        enviarCompraButton.addEventListener('click', function() {
                            enviarButton(producto.id);
                        });
            }
});



                function getStarsHTML(stars) {
                    const starHTML = '<span class="star">★</span>'; // Una sola estrella
                    const emptyStarHTML = '<span class="star empty">☆</span>'; // Una sola estrella vacía
                    let starsHTML = '';
                    count_stars = 0;

                    // Agregar la cantidad correcta de estrellas
                    for (let i = 0; i < stars; i++) {
                        starsHTML += starHTML;
                        count_stars++;
                    }
                    if (count_stars < 5) {
                        for (let i = 0; i < (5 - count_stars); i++) {
                            starsHTML += emptyStarHTML;
                        }
                    }
                    return starsHTML;
                }

                function openFAQModal() {
                    // Crear la ventana modal de FAQ
                    const faqModal = document.createElement("div");
                    faqModal.classList.add("modal", "faq-modal");
                    faqModal.innerHTML = `
                            <div class="modal-question">
                                <span class="close" onclick="closeFAQModal()">x</span>
                                <div class="question">
                                    <h1> PREGUNTAS FRECUENTES</h1>
                                    <div>
                                        <h3>P1:¿Son una fábrica o una empresa comercial?</h3>
                                        <p>Somos una empresa comercial</p>
                                    </div>
                                    
                                    <div>
                                        <h3>P2:¿Cómo controlan la calidad?</h3>
                                        <p>Siempre testeamos los productos para garantizar el correcto funcionamiento y la seguridad de nuestros clientes.</p>
                                    </div>
                                    <div>
                                        <h3>P3:¿Por qué elegirnos?</h3>
                                        <ul>   
                                            <li>Coordinamos un asesoramiento personalizado para que haga un uso correcto del producto</li>
                                            <li>Ofrecemos un precio competitivo acorde al mercado.</li>
                                        </ul>
                                    </div>
                                    
                                    <div>
                                        <h3>P4:¿Hay ofertas en precios productos?</h3>
                                        <p>El precio dependiendo del producto ya tiene un descuento de entre 35% a un 40%</p>
                                    </div>

                                    <div>
                                        <h3>P5:¿Cómo hago el pago o coordino mis compras?</h3>
                                        <p>La cotizaciones se harán a través de WhatsApp con el único número de nuestra marca +51 978 883 199</p>
                                    </div>
                                </div>                                
                            </div>
                        `;

                    // Agregar la ventana modal de FAQ al contenedor de modales existente
                    document.getElementById("modalContainer").appendChild(faqModal);

                    // Mostrar la ventana modal de FAQ
                    faqModal.style.display = "block";
                    faqModal.classList.add("show");
                }

                function closeFAQModal() {
                    // Obtener la ventana modal de FAQ por su clase específica
                    const faqModal = document.querySelector(".modal.faq-modal");

                    // Ocultar y quitar la clase "show" de la ventana modal de FAQ
                    if (faqModal) {
                        faqModal.style.display = "none";
                        faqModal.classList.remove("show");

                        // Remover la ventana modal de FAQ del DOM después de cerrarla
                        faqModal.parentNode.removeChild(faqModal);
                    }
                }
            </script>
        </section>
        </div>
    </main>
    <?php include_once "footer.php"; ?>
    <script type="application/javascript" src="../public/js/main.js" async></script>
    <script type="application/javascript" src="../public/js/productos.js" async></script>
    <script>
        function openModal(id) {
            var modal = document.getElementById(id + "_modal"); // ID del modal
            modal.style.display = "block";
            modal.classList.add("show"); // Agrega la clase "show" al modal
            /*agrega el selected al primer thumbnail*/
            var firstThumbnail = modal.querySelector('.product-thumbnails img');
            firstThumbnail.classList.add('selected');
            setUpCounter();
            setUpHeartToggle();
        }

        function closeModal(id) {
            var modal = document.getElementById(id + "_modal");
            modal.style.display = "none";
            modal.classList.remove("show"); // Quita la clase "show" del modal
        }

        function openModalForm(id) {
            var modalForm = document.getElementById(id + "_modalForm");
            modalForm.style.display = "block";
            modalForm.classList.add("show");
            //segun el valor de count se agrega la cantidad al input cantidad
            var modal = document.getElementById(id + "_modal");
            var count = modal.querySelector("#count").innerText;
            var cantidad = modalForm.querySelector("#cantidad");
            cantidad.value = count;
            enviarButton();

        }
        function closeModalForm(id) {
    var modalForm = document.getElementById(id + "_modalForm");
    if (modalForm) {
        // Agregar clase para la animación de desvanecimiento
        modalForm.classList.add("fade-out");

        // Retrasar la operación hasta que se complete la animación
        setTimeout(function() {
            // Quitar la clase y ocultar el modal después de la animación
            modalForm.classList.remove("fade-out");
            modalForm.style.display = "none";
            modalForm.classList.remove("show");
        }, 350); // Ajusta este valor para que coincida con la duración de la animación en milisegundos
    }
}


        function setUpCounter() {
            const modal = document.querySelector('.modal.show');
            if (!modal) {
                console.log('No se encontró el modal');
            }
            // Obtener los elementos del contador en el contexto del modal
            const decrementButton = modal.querySelector("#decrement");
            const countElement = modal.querySelector("#count");
            const incrementButton = modal.querySelector("#increment");
            let count = 1;

            decrementButton.addEventListener("click", function() {
                if (count > 1) {
                    count--;
                    updateCount();
                }
                console.log("decrement")
            });

            incrementButton.addEventListener("click", function() {
                count++;
                updateCount();
                console.log("incrementado")
            });

            function updateCount() {
                countElement.innerText = count;
            }
        }

        function setUpHeartToggle() {
            const modal = document.querySelector('.modal.show');
            if (!modal) {
                console.log('No se encontró el modal');
            }
            // Obtener el icono del corazón 
            const heartIcon = modal.querySelector('.heart-icon');
            if (heartIcon) {
                heartIcon.addEventListener("click", function() {
                    toggleHeartIcon(heartIcon);
                });
            }

            function toggleHeartIcon(icon) {
                // Alterna las clases de Font Awesome para cambiar el ícono
                icon.classList.toggle("far"); // Alternar el ícono vacío
                icon.classList.toggle("fas"); // Alternar el ícono sólido
            }
        }

        function changeMedia(thumbnail) {
            // Obtener el contenedor de imágenes y videos
            var mediaContainer = thumbnail.closest(".modal-content").querySelector('.image-container');

            // Remover todos los elementos en el contenedor
            while (mediaContainer.firstChild) {
                mediaContainer.removeChild(mediaContainer.firstChild);
            }

            // Crear un nuevo elemento según el tipo de la miniatura clicada
            var newMedia;
            if (thumbnail.tagName === 'IMG') {
                newMedia = document.createElement('img');
                newMedia.src = thumbnail.src;
                newMedia.classList.add('principal-img');
            } else if (thumbnail.tagName === 'VIDEO') {
                newMedia = document.createElement('video');
                newMedia.src = thumbnail.src;
                newMedia.controls = true;
                newMedia.classList.add('principal-img');
            }

            // Agregar el nuevo elemento al contenedor
            mediaContainer.appendChild(newMedia);

            // Remover la clase 'selected' de todos los Thumbnails
            var thumbnails = thumbnail.closest(".modal-content").querySelectorAll('.product-thumbnails img, .product-thumbnails video');
            thumbnails.forEach(function(thumb) {
                thumb.classList.remove('selected');
            });

            // Agregar la clase 'selected' al Thumbnail seleccionado
            thumbnail.classList.add('selected');
        }

        function enviarButton(productoId) {
    const modalForm = document.getElementById(`${productoId}_modalForm`);
    if (!modalForm) {
        console.log('No se encontró el modal');
        return;
    }
    

    // Obtener valores del formulario
    const nombre = modalForm.querySelector("#nombre").value;
    const email = modalForm.querySelector("#email").value;
    const mensaje = modalForm.querySelector("#mensaje").value;
    const producto = modalForm.querySelector("#producto").value;
    const cantidad = modalForm.querySelector("#cantidad").value;
    const telefono = modalForm.querySelector("#telefono").value;

    let campos_faltantes = [];
    // Validar los datos del formulario (si los campos estan vacios)
    if (nombre.trim() === "") {
        campos_faltantes.push("Nombre");
    }
    if (email.trim() === "") {
        campos_faltantes.push("Email");
    }
    if (mensaje.trim() === "") {
        campos_faltantes.push("Mensaje");
    }
    if (cantidad.trim() === "") {
        campos_faltantes.push("Cantidad");
    }
    if (telefono.trim() === "" || telefono.length < 9) {
        campos_faltantes.push("Telefono");
    }

    // Si hay campos faltantes, mostrar un mensaje de error
    if (campos_faltantes.length > 0) {
        alert("Por favor, complete los siguientes campos: " + campos_faltantes.join(", "));
        return;
    }

    // Envía datos al primer archivo (mensajewssp.php) usando AJAX
    $.ajax({
        url: "mensajewssp.php",
        type: "POST",
        data: {
            nombre: nombre,
            email: email,
            telefono: telefono,
            producto: producto,
            cantidad: cantidad,
            mensaje: mensaje
        },
        success: function(response) {
            console.log(response);
            // Cierra el modal del formulario con desvanecimiento (Asumiendo que tienes una función closeModalForm implementada)
            closeModalForm(productoId);
            mostrarNotificacion(producto.id);
        },
        error: function(error) {
            console.error("Error al enviar datos al primer archivo:", error);
        }
    });

    // Envía datos al segundo archivo (CotizacionController.php) usando otra solicitud AJAX
    $.ajax({
        url: "../controller/CotizacionController.php", // Ajusta la URL según tu estructura de archivos
        type: "POST",
        data: {
            nombre: nombre,
            email: email,
            telefono: telefono,
            producto: producto,
            cantidad: cantidad,
            mensaje: mensaje
        },
        success: function(response) {
            console.log(response);
        },
        error: function(error) {
            console.error("Error al enviar datos al segundo archivo:", error);
        }
    });
}

    </script>
</body>