<?php
header('Content-Type: application/json');
require_once '../config/db_config.php';

session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['usuario_id'])) {
    echo json_encode(['success' => false, 'message' => 'Usuario no autenticado']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    $actividadOriginal = $input['actividadOriginal'] ?? null;
    $nuevaDescripcion = $input['nuevaDescripcion'] ?? null;
    
    if (!$actividadOriginal || !$nuevaDescripcion) {
        echo json_encode(['success' => false, 'message' => 'Datos de actividad requeridos']);
        exit;
    }
    
    try {
        $db = new DatabaseConfig();
        $conn = $db->connect();
        
        if (!$conn) {
            echo json_encode(['success' => false, 'message' => 'Error de conexión a la base de datos']);
            exit;
        }
        
        // Verificar si la actividad original existe
        $stmt = $conn->prepare("SELECT COUNT(*) FROM insertar_actividad WHERE ActActividad = ?");
        $stmt->execute([$actividadOriginal]);
        $existe = $stmt->fetchColumn();
        
        if (!$existe) {
            echo json_encode(['success' => false, 'message' => 'La actividad original no existe']);
            exit;
        }
        
        // Verificar si la nueva descripción ya existe (solo si es diferente a la original)
        if ($actividadOriginal !== $nuevaDescripcion) {
            $stmt = $conn->prepare("SELECT COUNT(*) FROM insertar_actividad WHERE ActActividad = ?");
            $stmt->execute([$nuevaDescripcion]);
            $existeNueva = $stmt->fetchColumn();
            
            if ($existeNueva) {
                echo json_encode(['success' => false, 'message' => 'Ya existe una actividad con esa descripción']);
                exit;
            }
        }
        
        // Actualizar la actividad
        $stmt = $conn->prepare("UPDATE insertar_actividad SET ActActividad = ? WHERE ActActividad = ?");
        $result = $stmt->execute([$nuevaDescripcion, $actividadOriginal]);
        
        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Actividad actualizada exitosamente']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al actualizar la actividad']);
        }
        
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Error en la base de datos: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Método no permitido']);
}
?>