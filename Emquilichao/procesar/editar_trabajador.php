<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';

// Obtener y decodificar los datos JSON
$json = file_get_contents('php://input');
$data = json_decode($json, true);

// Validar que se recibieron los datos mínimos necesarios (nombre es obligatorio, apellido no)
if (!isset($data['originalNombre']) || !isset($data['nuevoNombre'])) {
    echo json_encode(['success' => false, 'message' => 'El nombre es requerido']);
    exit;
}

// Limpiar y preparar los datos
$originalNombre = trim($data['originalNombre']);
$originalApellido = isset($data['originalApellido']) ? trim($data['originalApellido']) : '';
$nuevoNombre = trim($data['nuevoNombre']);
$nuevoApellido = isset($data['nuevoApellido']) ? trim($data['nuevoApellido']) : '';

try {
    // Crear instancia de DatabaseConfig y obtener conexión
    $dbConfig = new DatabaseConfig();
    $conn = $dbConfig->connect();
    
    // Construir la consulta SQL según si hay apellido o no
    if (!empty($originalApellido)) {
        // Si hay apellido, buscar por nombre y apellido
        $stmt = $conn->prepare("UPDATE trabajadores SET TraNombre = ?, TraApellido = ? WHERE LOWER(TraNombre) = LOWER(?) AND (LOWER(TraApellido) = LOWER(?) OR TraApellido = '')");
        $stmt->execute([$nuevoNombre, $nuevoApellido, $originalNombre, $originalApellido]);
    } else {
        // Si no hay apellido, buscar solo por nombre y que el apellido esté vacío
        $stmt = $conn->prepare("UPDATE trabajadores SET TraNombre = ?, TraApellido = ? WHERE LOWER(TraNombre) = LOWER(?) AND (TraApellido = '' OR TraApellido IS NULL)");
        $stmt->execute([$nuevoNombre, $nuevoApellido, $originalNombre]);
    }
    
    if ($stmt->rowCount() > 0) {
        echo json_encode(['success' => true, 'message' => 'Trabajador actualizado correctamente']);
    } else {
        echo json_encode(['success' => false, 'message' => 'No se pudo actualizar el trabajador']);
    }

} catch(PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Error en la base de datos: ' . $e->getMessage()]);
} catch(Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}

$conn = null;
?>