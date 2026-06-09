<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';

// Obtener y decodificar los datos JSON
$json = file_get_contents('php://input');
$data = json_decode($json, true);

// Validar que se recibió al menos el nombre (apellido es opcional)
if (!isset($data['TraNombre'])) {
    echo json_encode(['success' => false, 'message' => 'El nombre es requerido']);
    exit;
}

// Limpiar y preparar los datos
$nombre = trim($data['TraNombre']);
$apellido = isset($data['TraApellido']) ? trim($data['TraApellido']) : '';

try {
    // Crear instancia de DatabaseConfig y obtener conexión
    $dbConfig = new DatabaseConfig();
    $conn = $dbConfig->connect();
    
    // Buscar el trabajador con búsqueda flexible
    if (!empty($apellido)) {
        $stmt = $conn->prepare("SELECT * FROM trabajadores WHERE LOWER(TraNombre) LIKE LOWER(?) AND LOWER(TraApellido) LIKE LOWER(?)");
        $stmt->execute(["%$nombre%", "%$apellido%"]);
    } else {
        $stmt = $conn->prepare("SELECT * FROM trabajadores WHERE LOWER(TraNombre) LIKE LOWER(?)");
        $stmt->execute(["%$nombre%"]);
    }
    
    $trabajador = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($trabajador) {
        echo json_encode([
            'success' => true,
            'message' => 'Trabajador encontrado',
            'trabajador' => $trabajador
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Trabajador no encontrado'
        ]);
    }

} catch(PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Error en la base de datos: ' . $e->getMessage()]);
} catch(Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}

$conn = null;
?>