<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

require_once '../config/db_config.php';

try {
    $db = new DatabaseConfig();
    $conn = $db->connect();
    
    // Consulta para obtener trabajadores
    $stmt = $conn->query("SELECT * FROM trabajadores ORDER BY TraNombre, TraApellido");
    $trabajadores = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Mapear los campos correctamente
    $trabajadoresMapeados = [];
    foreach ($trabajadores as $trabajador) {
        $trabajadoresMapeados[] = [
            'id' => $trabajador['id'] ?? null,
            'nombre' => trim(($trabajador['TraNombre'] ?? '') . ' ' . ($trabajador['TraApellido'] ?? ''))
        ];
    }
    
    // Devolver array directo (no objeto)
    echo json_encode($trabajadoresMapeados);
    
} catch (Exception $e) {
    // En caso de error, devolver array vacío
    echo json_encode([]);
}
?>