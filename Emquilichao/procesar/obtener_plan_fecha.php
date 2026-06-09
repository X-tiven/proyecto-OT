<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Content-Type');

require_once '../config/db_config.php';

try {
    $db = new DatabaseConfig();
    $conn = $db->connect();
    
    // Obtener parámetro de fecha
    $fecha = $_GET['fecha'] ?? null;
    
    if (!$fecha) {
        throw new Exception('Fecha es requerida');
    }
    
    // Validar formato de fecha
    $fechaObj = DateTime::createFromFormat('Y-m-d', $fecha);
    if (!$fechaObj || $fechaObj->format('Y-m-d') !== $fecha) {
        throw new Exception('Formato de fecha inválido. Use YYYY-MM-DD');
    }
    
    // Obtener planes de la fecha específica
    $stmt = $conn->prepare('
        SELECT 
            ActFecha as fecha,
            ActDireccion as direccion,
            ActDescripcion as descripcion,
            ActTrabajador as trabajadores,
            ActObservaciones as observaciones
        FROM actividades 
        WHERE DATE(ActFecha) = ?
        ORDER BY ActDireccion ASC
    ');
    
    $stmt->execute([$fecha]);
    
    $planes = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $planes[] = [
            'fecha' => $row['fecha'],
            'direccion' => $row['direccion'],
            'descripcion' => $row['descripcion'],
            'trabajadores' => $row['trabajadores'],
            'observaciones' => $row['observaciones'] ?? ''
        ];
    }
    
    echo json_encode($planes);
    
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>