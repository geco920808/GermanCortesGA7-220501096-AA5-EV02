<?php
$servidor = "localhost";
$usuario = "root"; // Usuario predeterminado en XAMPP
$password = "";    // Sin contraseña por defecto
$base_datos = "personas_db";

$conn = new mysqli($servidor, $usuario, $password, $base_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
