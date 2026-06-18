<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

require_once '../config/db_config.php';

try {
    $db = new DatabaseConfig();
    $conn = $db->connect();
    
    if (!$conn) {
        echo json_encode(['success' => false, 'message' => 'Error de conexión a la base de datos']);
        exit;
    }
    
    // Consulta para obtener todas las actividades - solo ActActividad
    $stmt = $conn->query("SELECT ActActividad as descripcion FROM insertar_actividad ORDER BY ActActividad ASC");
    $actividades = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode([
        'success' => true,
        'actividades' => $actividades
    ]);
    
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Error al obtener actividades: ' . $e->getMessage()
    ]);
}
?>