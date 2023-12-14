<?php
// Archivo: UsuarioModel.php

require_once '../connection/conexion.php';

class UsuarioModel {
    private $conn;

    public function __construct() {
        $this->conn = conexion();
    }

    public function insertUsuario($username, $email, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";

        if ($this->conn->query($sql) === TRUE) {
            return "Usuario registrado con éxito.";
        } else {
            return "Error al registrar el usuario: " . $this->conn->error;
        }
    }

    public function __destruct() {
        $this->conn->close();
    }
}
?>
