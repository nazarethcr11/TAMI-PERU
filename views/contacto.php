<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="../public/images/TAMILOGOtransparente.png" type="image/x-icon">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto | TAMI</title>
  <link rel="stylesheet" type="text/css" href="../public/css/menu.css">
  <link rel="stylesheet" type="text/css" href="../public/css/contacto.css">
  <link rel="stylesheet" type="text/css" href="../public/css/footer.css">
</head>
<body>
  <?php include_once "header.php";?>
  <main class="main__contacto">
    <div class="contacto__entrada">
      <form class="contacto__formulario" action="../controllers/enviarcorreo.php" method="post">
        <input class="contacto__item" type="text" placeholder="Nombre completo" name="nombre" />
        <input class="contacto__item" type="email" placeholder="Email" name="email" required/>
        <input class="contacto__item" type="number" placeholder="Teléfono (9 digitos)" name="telefono" />
        <input class="contacto__item" type="text" placeholder="Asunto" name="asunto" />
        <textarea class="contacto__item" name="mensaje" cols="30" rows="7" placeholder="Escribe tu mensaje aqui ..."></textarea>
        <input class="contacto__item " type="submit" name="enviar" value="Enviar" />
      </form>
      <div class="contacto__contenido">
        <h1 class="contacto__titulo">
          Contacto</h1>
        <ul class="footer__sociales1">
          <li class="footer__item1"><a class="footer__link"><i class="far fa-envelope icono10"
                style="margin-right: .5rem;"></i><span>informestami01@gmail.com</span></a></li>
          <li class="footer__item1 footer__whas"><a class="footer__link"><i class="fab fa-whatsapp icono10""></i><span>+51 978 883 199</span></a></li>
          <li class=" footer__item1"><a class="footer__link" href="https://www.facebook.com/tamiperu01"
                  targe="_blank"><i class="fab fa-facebook-f icono10" style="margin-right: 1.3rem;"></i><span>TAMI
                    PERU</span></a></li>
          <li class="footer__item1"><a class="footer__link" href="https://www.instagram.com/tamiperu01/?hl=es-la"
              targe="_blank"><i class="fab fa-instagram icono10"></i><span>@tamiperu01</span></a></li>
        </ul>
        <div class="contacto__horario">
          <h2 class="contacto__titulo">Horario de atención</h2>
          <p class="contacto__texto">Lunes a Viernes de 9:00 am a 9:00 pm</p>
        </div>
      </div>
    </div>
  </main>
  <?php include_once "footer.php"; ?>
  <script type="application/javascript" src="../public/js/main.js" async></script>
</body>
</html>