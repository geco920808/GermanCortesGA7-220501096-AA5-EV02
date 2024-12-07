<?php
// Incluir archivo de conexión
require_once 'db.php';

// Establecer encabezados para la API
header("Content-Type: application/json; charset=UTF-8");

// Consulta para obtener todos los usuarios
$sql = "SELECT  nombre, telefono,  email FROM  personas";
$resultado = $conn->query($sql);

// Verificar si hay resultados
if ($resultado->num_rows > 0) {
    $usuarios = array();

    // Recorrer los resultados y agregarlos a un arreglo
    while ($fila = $resultado->fetch_assoc()) {
        $usuarios[] = $fila;
    }

    // Devolver los datos como JSON
    echo json_encode([
        "status" => "success",
        "data" => $usuarios
    ]);
} else {
    // No hay datos
    echo json_encode([
        "status" => "success",
        "data" => []
    ]);
}

// Cerrar conexión
$conn->close();
?>
