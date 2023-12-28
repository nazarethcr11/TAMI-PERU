<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link rel="icon" href="public/images/TAMILOGOFondoTurquesa.webp" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Inicio | TAMI</title>
<link rel="stylesheet" href="public/css/index2.css" />
</head>

<body>
    <div>
        <img src="public/images/TAMILOGOtransparente.webp"  alt="">
        <p class="sub-titulo">“Tecnología e Innovación para TI”</p>
    </div>

    <script>
        // Función para redirigir a otra página después de 5 segundos
        function redireccionar() {
            // Cambia la URL sin recargar la página
            history.replaceState(null, null, 'inicio.php');
            // Redirige a la nueva vista
            window.location.href = 'views/inicio.php';
        }

        // Llama a la función de redirección después de 5 segundos (5000 milisegundos)
        setTimeout(redireccionar, 3000);
    </script>
</body>
</html>