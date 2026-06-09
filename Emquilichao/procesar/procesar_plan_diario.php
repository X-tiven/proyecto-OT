<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';

try {
    // Obtener el contenido JSON del cuerpo de la petición
    $jsonData = file_get_contents('php://input');
    $data = json_decode($jsonData, true);

    // Verificar que sea una petición POST
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Método no permitido');
    }

    // Obtener y validar datos del formulario
    $fecha = isset($data['fecha']) ? trim($data['fecha']) : '';
    $direccion = isset($data['direccion']) ? trim($data['direccion']) : '';
    $descripcion = isset($data['descripcion']) ? trim($data['descripcion']) : '';
    $trabajador = isset($data['trabajador']) ? trim($data['trabajador']) : '';
    $observaciones = isset($data['observaciones']) ? trim($data['observaciones']) : '';

    // Validar campos requeridos
    if (empty($fecha)) {
        throw new Exception('La fecha es obligatoria');
    }
    
    if (empty($direccion)) {
        throw new Exception('La dirección es obligatoria');
    }

    // Crear conexión a la base de datos
    $db = new DatabaseConfig();
    $conn = $db->connect();

    // Verificar si ya existe una actividad con la misma dirección
    $stmt = $conn->prepare('SELECT COUNT(*) FROM actividades WHERE ActDireccion = ?');
    $stmt->execute([$direccion]);
    $existe = $stmt->fetchColumn();
    
    if ($existe > 0) {
        // Si ya existe, generar una dirección única agregando un sufijo
        $contador = 1;
        $direccionOriginal = $direccion;
        
        do {
            $direccion = $direccionOriginal . ' - ' . $contador;
            $stmt = $conn->prepare('SELECT COUNT(*) FROM actividades WHERE ActDireccion = ?');
            $stmt->execute([$direccion]);
            $existe = $stmt->fetchColumn();
            $contador++;
        } while ($existe > 0);
    }

    // Insertar el plan diario usando los nombres exactos de las columnas
    $stmt = $conn->prepare('INSERT INTO actividades (ActFecha, ActDireccion, ActDescripcion, 
        ActTrabajador, ActObservaciones) VALUES (?, ?, ?, ?, ?)');
    
    $stmt->execute([
        $fecha,  // Usar solo la fecha sin hora
        $direccion,  // Dirección única (posiblemente modificada)
        $descripcion,
        $trabajador,
        $observaciones
    ]);

    $mensaje = 'Plan diario guardado exitosamente';
    if ($direccion !== $data['direccion']) {
        $mensaje .= '. Nota: La dirección fue modificada a "' . $direccion . '" para evitar duplicados.';
    }

    echo json_encode(['success' => true, 'message' => $mensaje]);

} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
?>
