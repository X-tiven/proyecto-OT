<?php
require_once 'config/db_config.php';
require_once 'controllers/trabajador_controller.php';

try {
    $controller = new TrabajadorController();
    
    // Probar insertar un trabajador de prueba
    $resultado = $controller->insertarTrabajador('Juan', 'Pérez');
    
    if ($resultado) {
        echo "✅ Trabajador insertado correctamente<br>";
        
        // Mostrar todos los trabajadores
        $trabajadores = $controller->obtenerTrabajadores();
        echo "📊 Total de trabajadores: " . count($trabajadores) . "<br><br>";
        
        foreach ($trabajadores as $trabajador) {
            echo "- " . $trabajador['TraNombre'] . " " . $trabajador['TraApellido'] . "<br>";
        }
    } else {
        echo "❌ Error al insertar trabajador";
    }
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>