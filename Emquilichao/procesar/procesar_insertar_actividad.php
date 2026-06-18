<?php
header('Content-Type: application/json');
require_once '../config/db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $descripcion = trim($_POST['descripcion'] ?? '');
    
    // Validaciones
    if (empty($descripcion)) {
        echo json_encode(['success' => false, 'message' => 'La descripción es requerida']);
        exit;
    }
    
    if (strlen($descripcion) > 100) {
        echo json_encode(['success' => false, 'message' => 'La descripción no puede exceder 100 caracteres']);
        exit;
    }
    
    try {
        // Crear conexión a la base de datos usando DatabaseConfig
        $db = new DatabaseConfig();
        $conn = $db->connect();
        
        if (!$conn) {
            echo json_encode(['success' => false, 'message' => 'Error de conexión a la base de datos']);
            exit;
        }
        
        // Insertar en la base de datos (usando la tabla correcta)
        $stmt = $conn->prepare("INSERT INTO insertar_actividad (ActActividad) VALUES (?)");
        $result = $stmt->execute([$descripcion]);
        
        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Actividad registrada exitosamente']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al registrar la actividad']);
        }
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Error en la base de datos: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Método no permitido']);
}
?>