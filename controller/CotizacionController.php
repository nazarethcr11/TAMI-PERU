<!-- Archivo: controller.php -->

<?php
require_once '../models/CotizacionModel.php';

class CotizacionController {
    private $cotizacionModel;

    public function __construct() {
        $this->cotizacionModel = new CotizacionModel();
    }

    public function handleFormSubmission() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $email = $_POST["email"];
            $telefono = $_POST["telefono"];
            $producto = $_POST["producto"];
            $cantidad = $_POST["cantidad"];
            $mensaje = $_POST["mensaje"];

            $result = $this->cotizacionModel->insertCotizacion($nombre, $email, $telefono, $producto, $cantidad, $mensaje);
            
            echo $result;
        }
    }
}

$controller = new CotizacionController();
$controller->handleFormSubmission();
?>


