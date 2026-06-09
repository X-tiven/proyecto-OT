<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

require_once '../config/db_config.php';

try {
    $db = new DatabaseConfig();
    $conn = $db->connect();
    
    // Consulta para obtener todas las actividades disponibles
    $stmt = $conn->query("SELECT * FROM insertar_actividad ORDER BY ActActividad");
    $actividades = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Mapear los campos correctamente
    $actividadesMapeadas = [];
    foreach ($actividades as $actividad) {
        $actividadesMapeadas[] = [
            'id' => $actividad['id'] ?? null,
            'descripcion' => $actividad['ActActividad'] ?? ''
        ];
    }
    
    // Devolver array directo
    echo json_encode($actividadesMapeadas);
    
} catch (Exception $e) {
    // En caso de error, devolver array vacío
    echo json_encode([]);
}
?>