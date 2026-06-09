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

    // Crear conexión a la base de datos
    $db = new DatabaseConfig();
    $conn = $db->connect();

    $actividadesGuardadas = 0;
    $errores = [];

    // Procesar cada actividad
    foreach ($data['actividades'] as $actividad) {
        try {
            $fecha = $actividad['fecha'];
            $direccion = $actividad['direccion'];
            $descripcion = $actividad['descripcion'];
            $trabajadores = implode(', ', $actividad['trabajadores']);
            $observaciones = $actividad['observaciones'] ?? '';

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

            // Insertar la actividad
            $stmt = $conn->prepare('INSERT INTO actividades (ActFecha, ActDireccion, ActDescripcion, ActTrabajador, ActObservaciones) VALUES (?, ?, ?, ?, ?)');
            
            $stmt->execute([
                $fecha,
                $direccion,
                $descripcion,
                $trabajadores,
                $observaciones
            ]);

            $actividadesGuardadas++;

        } catch (Exception $e) {
            $errores[] = "Error al guardar actividad en {$actividad['direccion']}: " . $e->getMessage();
        }
    }

    if ($actividadesGuardadas > 0) {
        $mensaje = "Se guardaron {$actividadesGuardadas} actividad(es) exitosamente";
        if (!empty($errores)) {
            $mensaje .= ". Errores: " . implode(', ', $errores);
        }
        echo json_encode(['success' => true, 'message' => $mensaje]);
    } else {
        throw new Exception('No se pudo guardar ninguna actividad. Errores: ' . implode(', ', $errores));
    }

} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
?>