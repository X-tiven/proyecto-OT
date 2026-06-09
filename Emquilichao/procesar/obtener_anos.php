<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Content-Type');

require_once '../config/db_config.php';

try {
    $db = new DatabaseConfig();
    $conn = $db->connect();
    
    // Obtener años únicos de la tabla actividades
    $stmt = $conn->prepare('SELECT DISTINCT YEAR(ActFecha) as ano FROM actividades WHERE ActFecha IS NOT NULL ORDER BY ano DESC');
    $stmt->execute();
    
    $anos = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $anos[] = $row['ano'];
    }
    
    echo json_encode($anos);
    
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>