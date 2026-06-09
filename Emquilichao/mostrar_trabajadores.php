<?php
require_once 'config/db_config.php';

echo "<h2>👥 Trabajadores en la Base de Datos</h2>";
echo "<style>table { border-collapse: collapse; width: 100%; } th, td { border: 1px solid #ddd; padding: 8px; text-align: left; } th { background-color: #f2f2f2; }</style>";

try {
    $db = new DatabaseConfig();
    $conn = $db->connect();
    
    // Consulta directa a la tabla
    $stmt = $conn->query("SELECT * FROM trabajadores ORDER BY TraNombre");
    $trabajadores = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if (count($trabajadores) > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th></tr>";
        
        foreach ($trabajadores as $trabajador) {
            echo "<tr>";
            echo "<td>" . ($trabajador['id'] ?? 'N/A') . "</td>";
            echo "<td>" . htmlspecialchars($trabajador['TraNombre']) . "</td>";
            echo "<td>" . htmlspecialchars($trabajador['TraApellido']) . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
        echo "<p><strong>Total:</strong> " . count($trabajadores) . " trabajadores</p>";
    } else {
        echo "<p>No hay trabajadores en la tabla.</p>";
    }
    
} catch (Exception $e) {
    echo "<p style='color: red;'>Error: " . $e->getMessage() . "</p>";
}
?>