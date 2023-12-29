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
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
  <?php include_once "header.php";?>
  <main class="main__contacto">
    <div class="contacto__entrada">
      <form class="contacto__formulario">
      <input id="nombre" class="contacto__item" type="text" placeholder="Nombre completo" name="nombre" />
      <input id="email" class="contacto__item" type="email" placeholder="Email" name="email" required/>
      <input id="telefono" class="contacto__item" type="number" placeholder="Teléfono (9 digitos)" name="telefono" />
      <input id="asunto" class="contacto__item" type="text" placeholder="Asunto" name="asunto" />
      <textarea id="mensaje" class="contacto__item" name="mensaje" cols="30" rows="7" placeholder="Escribe tu mensaje aquí ..."></textarea>
      <input class="contacto__item " type="submit" name="enviar" value="Enviar" onclick="enviardatos()" />
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
<script>
 function enviardatos(){
   // Obtener valores del formulario
   const nombre = document.getElementById("nombre").value;
  const email = document.getElementById("email").value;
  const telefono = document.getElementById("telefono").value;
  const asunto = document.getElementById("asunto").value;
  const mensaje = document.getElementById("mensaje").value;  
  const cantidad = 1;

  //enviar datos del formulario al archivo (CotizacionController.php) usando otra solicitud AJAX
   $.ajax({
        url: "../controller/CotizacionController.php", // Ajusta la URL según tu estructura de archivos
        type: "POST",
        data: {
            nombre: nombre,
            email: email,
            telefono: telefono,
            producto: asunto,
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
