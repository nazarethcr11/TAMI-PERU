<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/animejs"></script>

    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #398F8D;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .login-container {
        background-color: #FFFFFF;
        border-radius: 8px;
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
        overflow: hidden;
        width: 400px;
        padding: 30px;

    }
/*
    .login-form {
        padding: 30px;
    }
*/
    h2 {
        text-align: center;
        color: #333;
    }

    .input-container {
        position: relative;
        margin-bottom: 20px;
    }



    label {
        position: absolute;
        top: 16px;
        left: 10px;
        color: #333;
        pointer-events: none;
        transition: 0.3s ease-out;
    }

    input:focus+label,
    input:not(:placeholder-shown)+label {
        top: -10px;
        font-size: 14px;
        color: #398F8D;
    }

    input {
    width: 100%;
    padding: 12px;
    border: none;
    border-bottom: 2px solid #333;
    outline: none;
}
    button {
    width: 100%;
    padding: 12px;
    background-color: #398F8D;
    color: #FFFFFF;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}
    button:hover {
        background-color: #306E6C;
    }

    .signup-link {
        margin-top: 20px;
        text-align: center;
    }

    .signup-linkk p {
        color: #333;
    }

    .signup-link a {
        color: #398F8D;
        text-decoration: none;
        font-weight: bold;
    }

    .signup-link a:hover {
        text-decoration: underline;
    }
   img{
    width: 120px;
    height: 140px;
   }

</style>

<body> 
    <div class="contenedor" style="text-align: center;">

    <div class="login-container">
   
        <form class="login-form" method="post" action="../models/procesar_loguin.php">
            <h2>Iniciar Sesión</h2>
            <div class="input-container">
                <input type="text" name="username_or_email" id="username_or_email" required>
                <label for="username_or_email">Usuario o Correo Electrónico</label>
            </div>
            <div class="input-container" style="display: none;">
                <input type="email" name="email" id="email" >
                <label for="email">Correo Electrónico</label>
            </div>
            <div class="input-container">
                <input type="password" name="password" id="password" required>
                <label for="password">Contraseña</label>
            </div>
            <button type="submit">Iniciar Sesión</button>
            <div class="signup-link">
                <p>¿No tienes una cuenta? <a href="registro.php">Crear cuenta</a></p>
            </div>
            <img src="../public/images/TAMILOGOtransparente21.webp" class="logo"alt="">

        </form>
    </div>
    </div>
   
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
  // Obten el elemento del formulario
  var loginContainer = document.querySelector('.contenedor');

  // Configura la animación con Anime.js
  anime({
    targets: loginContainer,
    translateY: [-90, 0],
    opacity: [0, 1],
    easing: 'easeOutExpo',
    duration: 2000,
    delay: 500
  });
});

</script>
</html>