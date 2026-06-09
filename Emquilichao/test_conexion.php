<?php
require_once 'config/db_config.php';

echo "<h2>🔧 Prueba de Conexión a Base de Datos</h2>";

try {
    $db = new DatabaseConfig();
    $conn = $db->connect();
    echo "✅ <strong>Conexión exitosa</strong> a la base de datos 'alcantarillado'<br><br>";
    
    // Probar que existe la tabla trabajadores
    $stmt = $conn->query("SHOW TABLES LIKE 'trabajadores'");
    if ($stmt->rowCount() > 0) {
        echo "✅ <strong>Tabla 'trabajadores' encontrada</strong><br><br>";
        
        // Mostrar estructura de la tabla
        $stmt = $conn->query("DESCRIBE trabajadores");
        $columns = $stmt->fetchAll();
        echo "📋 <strong>Estructura de la tabla:</strong><br>";
        foreach ($columns as $column) {
            echo "- {$column['Field']} ({$column['Type']})<br>";
        }
        echo "<br>";
        
        // Contar trabajadores existentes
        $stmt = $conn->query("SELECT COUNT(*) as total FROM trabajadores");
        $result = $stmt->fetch();
        echo "👥 <strong>Total de trabajadores:</strong> {$result['total']}<br><br>";
        
    } else {
        echo "❌ <strong>Tabla 'trabajadores' no encontrada</strong><br>";
        echo "<p>Ejecuta este SQL en phpMyAdmin:</p>";
        echo "<code>CREATE TABLE trabajadores (id INT AUTO_INCREMENT PRIMARY KEY, TraNombre VARCHAR(50), TraApellido VARCHAR(50));</code><br><br>";
    }
    
} catch (Exception $e) {
    echo "❌ <strong>Error de conexión:</strong> " . $e->getMessage() . "<br><br>";
    echo "<p><strong>Verifica que:</strong></p>";
    echo "<ul>";
    echo "<li>XAMPP esté ejecutándose (Apache + MySQL)</li>";
    echo "<li>La base de datos 'alcantarillado' exista en phpMyAdmin</li>";
    echo "<li>La tabla 'trabajadores' exista</li>";
    echo "</ul>";
}
?>