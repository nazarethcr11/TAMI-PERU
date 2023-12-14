<!-- Archivo: model.php -->

<?php
require_once '../connection/conexion.php';

class CotizacionModel {
    private $conn;

    public function __construct() {
        // Utiliza la conexión desde el archivo ../connection/conexion.php
        $this->conn = conexion();
    }

    public function insertCotizacion($nombre, $email, $telefono, $producto, $cantidad, $mensaje) {
        $sql = "INSERT INTO cotizaciones (nombre, email, telefono, producto, cantidad, mensaje) VALUES ('$nombre', '$email', '$telefono', '$producto', $cantidad, '$mensaje')";

        if ($this->conn->query($sql) === TRUE) {
            return "Cotización realizada con éxito.";
        } else {
            return "Error al realizar la cotización: " . $this->conn->error;
        }
    }

    public function __destruct() {
        $this->conn->close();
    }
}
?>

