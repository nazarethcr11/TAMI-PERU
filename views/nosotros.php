<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="icon" href="../public/images/TAMILOGOtransparente.webp" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nosotros | TAMI</title>
<meta name=description content="Esta es una descripción breve de tu página web. Puedes proporcionar información sobre el contenido de la página y su propósito.">
<link rel="stylesheet" type="text/css" href="../public/css/menu.css" >
<link rel="stylesheet" type="text/css" href="../public/css/footer.css" >
<link rel="stylesheet" type="text/css" href="../public/css/nosotros.css" >
</head>
<body>
  <?php include_once "header.php";?>
  <main class="main__nosotros">
    <section class="nosotros">
      <div class="nosotros__texto">
        <h2 class="nosotros__titulo">Nosotros</h2>
        <h3 style="text-align: center;" class="nosotros__subtitulo">MISIÓN</h3>
        <p class="nosotros__descripcion">Somos una empresa que busca ayudar en tu negocio, mediante la comercialización de productos para emprendimiento, trabajo y decoración; brindando un servicio de calidad desde la recepción del pedido hasta la entrega final.</p>
        <h3 style="text-align: center;" class="nosotros__subtitulo">VISIÓN</h3>
        <p class="nosotros__descripcion">En Tami, aspiramos ser una empresa líder a nivel nacional con una amplia gama de productos altamente útiles para el negocio, cumpliendo con los estándares de calidad, donde la utilidad y la satisfacción del cliente sean nuestra mayor prioridad, impulsando cada día nuestras acciones y decisiones.</p>
      </div>
      <div class="nosotros__imagenes">
        <figure class="nosotros__mision"><img class="nosotros__img" src="../public/images/mision_vision/Compromiso.webp" alt="misión de la empresa"/></figure>
        <figure class="nosotros__vision"><img class="nosotros__img" src="../public/images/mision_vision/EQUIPOS.webp" alt="visión de la empresa"/></figure>
      </div>
    </section>
    <section class="valores">
      <figure class="valores__header"><img class="valores__img" src="../public/images/mision_vision/PWReunión.webp" alt=""/></figure>
      <div class="valores__iconos" id="valores__iconos">
        <h2 class="valores__titulo">Nuestros valores</h2>
        <div class="valores__imagenes">
          <figure class="valores__imagen"><img class="valores__iconos" src="../public/images/valores/respeto.webp" alt="respeto"/>
            <figcaption class="valores__figcaption"><span class="valores__descripcion">Respeto</span>Con nuestros empleados y la sociedad</figcaption>
          </figure>
          <figure class="valores__imagen"><img class="valores__iconos" src="../public/images/valores/calidad_servicio.webp" alt="calidad de servicio"/>
            <figcaption class="valores__figcaption"><span class="valores__descripcion"> Calidad de servicio</span>Nuestra característica principal</figcaption>
          </figure>
          <figure class="valores__imagen"><img class="valores__iconos" src="../public/images/valores/responsabilidad.webp" alt="responsabilidad"/>
            <figcaption class="valores__figcaption"><span class="valores__descripcion"> Responsabilidad</span>Con nosotros y ustedes</figcaption>
          </figure>
          <figure class="valores__imagen"><img class="valores__iconos" src="../public/images/valores/transparencia.webp" alt="transparencia"/>
            <figcaption class="valores__figcaption"><span class="valores__descripcion"> Transparencia</span>En nuestras acciones</figcaption>
          </figure>
          <figure class="valores__imagen"><img class="valores__iconos" src="../public/images/valores/compromiso.webp" alt=""/>
            <figcaption class="valores__figcaption"><span class="valores__descripcion"> Compromiso</span>En ofrecer la máxima calidad en nuestros productos.</figcaption>
          </figure>
        </div>
      </div>
    </section>
    <section class="certificaciones" id="certificaciones">
      <h2 class="certificaciones__titulo" id="certificaciones__titulo">Certificaciones</h2>
      <div class="certificaciones__amimacion" id="certificaciones_animacion">     
      <figure class="certificaciones__imagenes"><img class="certificaciones__img" src="../public/images/certificaciones/dve.webp" alt="Federación Alemana de Industrias Electrotécnicas, Electrónicas y de Tecnología de la Información"/>
        <figcaption class="certificaciones__texto">VDE: Federación Alemana de Industrias Electrotécnicas, Electrónicas y de Tecnología de la Información</figcaption>
      </figure>
      <figure class="certificaciones__imagenes"><img class="certificaciones__img" src="../public/images/certificaciones/vov.webp" alt="Certification &amp; Tasting Laboratory"/>
        <figcaption class="certificaciones__texto">VOV Certification & Tasting<br> Laboratory</figcaption>
      </figure>
    </div>
    </section>
  </main>
  <?php include_once "footer.php";?>
  <script type="application/javascript" src="../public/js/main.js" async></script>
  <script type="application/javascript" src="../public/js/nosotros.js" async></script>
</body>
</html>