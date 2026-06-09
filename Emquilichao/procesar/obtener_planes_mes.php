<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Content-Type');

require_once '../config/db_config.php';

try {
    $db = new DatabaseConfig();
    $conn = $db->connect();
    
    // Obtener parámetros de año y mes
    $ano = $_GET['ano'] ?? null;
    $mes = $_GET['mes'] ?? null;
    
    if (!$ano || !$mes) {
        throw new Exception('Año y mes son requeridos');
    }
    
    // Obtener planes del mes específico
    $stmt = $conn->prepare('
        SELECT 
            ActFecha as fecha,
            ActDireccion as direccion,
            ActDescripcion as descripcion,
            ActTrabajador as trabajadores,
            ActObservaciones as observaciones
        FROM actividades 
        WHERE YEAR(ActFecha) = ? AND MONTH(ActFecha) = ?
        ORDER BY ActFecha ASC, ActDireccion ASC
    ');
    
    $stmt->execute([$ano, $mes]);
    
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