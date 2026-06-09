<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';

try {
    // Verificar que sea una petición GET o POST
    $fecha = null;
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['fecha'])) {
        $fecha = trim($_GET['fecha']);
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);
        $fecha = isset($data['fecha']) ? trim($data['fecha']) : null;
    }
    
    if (!$fecha) {
        throw new Exception('La fecha es requerida');
    }
    
    // Crear conexión a la base de datos
    $db = new DatabaseConfig();
    $conn = $db->connect();
    
    // Consultar todas las actividades de la fecha especificada
    $stmt = $conn->prepare('SELECT * FROM actividades WHERE ActFecha = ? ORDER BY ActDireccion');
    $stmt->execute([$fecha]);
    
    $actividades = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode([
        'success' => true, 
        'actividades' => $actividades,
        'total' => count($actividades)
    ]);
    
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
?>