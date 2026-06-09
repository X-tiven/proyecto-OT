<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';

// Obtener y decodificar los datos JSON
$json = file_get_contents('php://input');
$data = json_decode($json, true);

// Validar que se recibieron los datos necesarios
if (!isset($data['fecha'])) {
    echo json_encode(['success' => false, 'message' => 'La fecha es requerida']);
    exit;
}

// Limpiar y preparar los datos
$fecha = trim($data['fecha']);

// Validar formato de fecha
if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $fecha)) {
    echo json_encode(['success' => false, 'message' => 'Formato de fecha inválido. Use YYYY-MM-DD']);
    exit;
}

try {
    // Crear instancia de DatabaseConfig y obtener conexión
    $dbConfig = new DatabaseConfig();
    $conn = $dbConfig->connect();
    
    // Verificar si existen actividades para esa fecha
    $stmt = $conn->prepare("SELECT COUNT(*) FROM actividades WHERE DATE(ActFecha) = ?");
    $stmt->execute([$fecha]);
    
    $count = $stmt->fetchColumn();
    
    if ($count == 0) {
        echo json_encode(['success' => false, 'message' => 'No se encontraron planes para la fecha especificada']);
        exit;
    }

    // Eliminar todas las actividades de esa fecha
    $stmt = $conn->prepare("DELETE FROM actividades WHERE DATE(ActFecha) = ?");
    $stmt->execute([$fecha]);
    
    if ($stmt->rowCount() > 0) {
        echo json_encode([
            'success' => true, 
            'message' => "Plan diario eliminado correctamente. Se eliminaron {$stmt->rowCount()} actividad(es) de la fecha {$fecha}"
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'No se pudo eliminar el plan diario']);
    }

} catch(PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Error en la base de datos: ' . $e->getMessage()]);
} catch(Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}

$conn = null;
?>