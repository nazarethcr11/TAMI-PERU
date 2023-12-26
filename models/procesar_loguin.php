<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usernameOrEmail = $_POST["username_or_email"];
    $password = $_POST["password"];

    $conexion = new mysqli("localhost", "root", "", "tami");
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    $consulta = $conexion->prepare("SELECT id, username, email, password FROM usuarios WHERE username = ? OR email = ?");
    $consulta->bind_param("ss", $usernameOrEmail, $usernameOrEmail);
    $consulta->execute();
    $consulta->store_result();

    if ($consulta->num_rows > 0) {
        $consulta->bind_result($id, $username, $email, $hashedPassword);
        $consulta->fetch();

        // Verificar la contraseña cifrada
        if ($password==$hashedPassword) {
            // Usuario autenticado correctamente
            $_SESSION["user_id"] = $id;
            $_SESSION["username"] = $username;
            $_SESSION["email"] = $email;

            // Redireccionar a la página de inicio o a donde sea necesario
            header("Location: ../views/cotizaciones.php");
            exit();
        } else {
            // Contraseña incorrecta
            echo "Contraseña incorrecta";
        }
    } else {
        // Usuario no encontrado
        echo "Usuario no encontrado";
    }

    $consulta->close();
    $conexion->close();
}
?>
