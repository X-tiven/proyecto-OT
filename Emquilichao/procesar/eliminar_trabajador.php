<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';

// Obtener y decodificar los datos JSON
$json = file_get_contents('php://input');
$data = json_decode($json, true);

// Validar que se recibieron los datos necesarios
if (!isset($data['TraNombre']) || !isset($data['TraApellido'])) {
    echo json_encode(['success' => false, 'message' => 'Nombre y apellido son requeridos']);
    exit;
}

// Limpiar y preparar los datos
$nombre = trim($data['TraNombre']);
$apellido = trim($data['TraApellido']);

try {
    // Crear instancia de DatabaseConfig y obtener conexión
    $dbConfig = new DatabaseConfig();
    $conn = $dbConfig->connect();
    
    // Verificar si el trabajador existe
    $stmt = $conn->prepare("SELECT COUNT(*) FROM trabajadores WHERE TraNombre = ? AND TraApellido = ?");
    $stmt->execute([$nombre, $apellido]);
    
    if ($stmt->fetchColumn() == 0) {
        echo json_encode(['success' => false, 'message' => 'Trabajador no encontrado']);
        exit;
    }

    // Eliminar el trabajador
    $stmt = $conn->prepare("DELETE FROM trabajadores WHERE TraNombre = ? AND TraApellido = ?");
    $stmt->execute([$nombre, $apellido]);
    
    if ($stmt->rowCount() > 0) {
        echo json_encode(['success' => true, 'message' => 'Trabajador eliminado correctamente']);
    } else {
        echo json_encode(['success' => false, 'message' => 'No se pudo eliminar el trabajador']);
    }

} catch(PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Error en la base de datos: ' . $e->getMessage()]);
} catch(Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}

$conn = null;
?>