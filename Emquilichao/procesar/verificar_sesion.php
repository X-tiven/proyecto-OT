<?php
session_start();
header('Content-Type: application/json');

try {
    // Verificar si existe la sesión del usuario
    if (isset($_SESSION['usuario_id']) && isset($_SESSION['nombre']) && isset($_SESSION['apellido'])) {
        echo json_encode([
            'autenticado' => true,
            'nombre' => $_SESSION['nombre'] . ' ' . $_SESSION['apellido']
        ]);
    } else {
        http_response_code(401); // Unauthorized
        echo json_encode(['autenticado' => false, 'mensaje' => 'No autenticado']);
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Error en el servidor']);
}