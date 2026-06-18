<?php
header('Content-Type: application/json');
require_once '../config/db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $actividad = $input['actividad'] ?? null;
    
    if (!$actividad) {
        echo json_encode(['success' => false, 'message' => 'Nombre de actividad requerido']);
        exit;
    }
    
    try {
        $db = new DatabaseConfig();
        $conn = $db->connect();
        
        if (!$conn) {
            echo json_encode(['success' => false, 'message' => 'Error de conexión a la base de datos']);
            exit;
        }
        
        // Verificar si la actividad existe
        $stmt = $conn->prepare("SELECT COUNT(*) FROM insertar_actividad WHERE ActActividad = ?");
        $stmt->execute([$actividad]);
        $existe = $stmt->fetchColumn();
        
        if (!$existe) {
            echo json_encode(['success' => false, 'message' => 'La actividad no existe']);
            exit;
        }
        
        // Eliminar la actividad
        $stmt = $conn->prepare("DELETE FROM insertar_actividad WHERE ActActividad = ?");
        $result = $stmt->execute([$actividad]);
        
        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Actividad eliminada exitosamente']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al eliminar la actividad']);
        }
        
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Error en la base de datos: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Método no permitido']);
}
?>