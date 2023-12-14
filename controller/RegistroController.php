<?php
// Archivo: RegistroController.php

require_once '../models/UsuarioModel.php';

class RegistroController {
    private $usuarioModel;

    public function __construct() {
        $this->usuarioModel = new UsuarioModel();
    }

    public function handleFormSubmission() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            $result = $this->usuarioModel->insertUsuario($username, $email, $password);

            echo $result;
        }
    }
}

$controller = new RegistroController();
$controller->handleFormSubmission();
?>
