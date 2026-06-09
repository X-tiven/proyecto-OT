<?php
require_once 'config/db_config.php';

try {
    $db = new DatabaseConfig();
    $conn = $db->connect();
    
    echo "<h2>🔍 TRABAJADORES EN LA BASE DE DATOS:</h2>";
    $stmt = $conn->query("SELECT * FROM trabajadores ORDER BY id");
    $trabajadores = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($trabajadores as $index => $trabajador) {
        $estilo = ($index === 0) ? 'color: red; font-weight: bold;' : 'color: black;';
        echo "<p style='$estilo'>";
        echo "ID: " . $trabajador['id'] . " | ";
        echo "Nombre: " . $trabajador['TraNombre'] . " " . $trabajador['TraApellido'];
        if ($index === 0) {
            echo " ← ESTE ES EL QUE SIEMPRE APARECE (PRIMER REGISTRO)";
        }
        echo "</p>";
    }
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>


<?php
require_once 'config/db_config.php';

try {
    $db = new DatabaseConfig();
    $conn = $db->connect();
    
    echo "<h2>🔍 TRABAJADORES EN LA BASE DE DATOS:</h2>";
    $stmt = $conn->query("SELECT * FROM trabajadores ORDER BY id");
    $trabajadores = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($trabajadores as $index => $trabajador) {
        $estilo = ($index === 0) ? 'color: red; font-weight: bold;' : 'color: black;';
        echo "<p style='$estilo'>";
        echo "ID: " . $trabajador['id'] . " | ";
        echo "Nombre: " . $trabajador['TraNombre'] . " " . $trabajador['TraApellido'];
        if ($index === 0) {
            echo " ← ESTE ES EL QUE SIEMPRE APARECE (PRIMER REGISTRO)";
        }
        echo "</p>";
    }
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>


<?php
require_once 'config/db_config.php';

try {
    $db = new DatabaseConfig();
    $conn = $db->connect();
    
    echo "<h2>🔍 TRABAJADORES EN LA BASE DE DATOS:</h2>";
    $stmt = $conn->query("SELECT * FROM trabajadores ORDER BY id");
    $trabajadores = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($trabajadores as $index => $trabajador) {
        $estilo = ($index === 0) ? 'color: red; font-weight: bold;' : 'color: black;';
        echo "<p style='$estilo'>";
        echo "ID: " . $trabajador['id'] . " | ";
        echo "Nombre: " . $trabajador['TraNombre'] . " " . $trabajador['TraApellido'];
        if ($index === 0) {
            echo " ← ESTE ES EL QUE SIEMPRE APARECE (PRIMER REGISTRO)";
        }
        echo "</p>";
    }
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>


<?php
require_once 'config/db_config.php';

try {
    $db = new DatabaseConfig();
    $conn = $db->connect();
    
    echo "<h2>🔍 TRABAJADORES EN LA BASE DE DATOS:</h2>";
    $stmt = $conn->query("SELECT * FROM trabajadores ORDER BY id");
    $trabajadores = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($trabajadores as $index => $trabajador) {
        $estilo = ($index === 0) ? 'color: red; font-weight: bold;' : 'color: black;';
        echo "<p style='$estilo'>";
        echo "ID: " . $trabajador['id'] . " | ";
        echo "Nombre: " . $trabajador['TraNombre'] . " " . $trabajador['TraApellido'];
        if ($index === 0) {
            echo " ← ESTE ES EL QUE SIEMPRE APARECE (PRIMER REGISTRO)";
        }
        echo "</p>";
    }
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>


<?php
require_once 'config/db_config.php';

try {
    $db = new DatabaseConfig();
    $conn = $db->connect();
    
    echo "<h2>🔍 TRABAJADORES EN LA BASE DE DATOS:</h2>";
    $stmt = $conn->query("SELECT * FROM trabajadores ORDER BY id");
    $trabajadores = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($trabajadores as $index => $trabajador) {
        $estilo = ($index === 0) ? 'color: red; font-weight: bold;' : 'color: black;';
        echo "<p style='$estilo'>";
        echo "ID: " . $trabajador['id'] . " | ";
        echo "Nombre: " . $trabajador['TraNombre'] . " " . $trabajador['TraApellido'];
        if ($index === 0) {
            echo " ← ESTE ES EL QUE SIEMPRE APARECE (PRIMER REGISTRO)";
        }
        echo "</p>";
    }
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>


<?php
require_once 'config/db_config.php';

try {
    $db = new DatabaseConfig();
    $conn = $db->connect();
    
    echo "<h2>🔍 TRABAJADORES EN LA BASE DE DATOS:</h2>";
    $stmt = $conn->query("SELECT * FROM trabajadores ORDER BY id");
    $trabajadores = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($trabajadores as $index => $trabajador) {
        $estilo = ($index === 0) ? 'color: red; font-weight: bold;' : 'color: black;';
        echo "<p style='$estilo'>";
        echo "ID: " . $trabajador['id'] . " | ";
        echo "Nombre: " . $trabajador['TraNombre'] . " " . $trabajador['TraApellido'];
        if ($index === 0) {
            echo " ← ESTE ES EL QUE SIEMPRE APARECE (PRIMER REGISTRO)";
        }
        echo "</p>";
    }
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>


<?php
require_once 'config/db_config.php';

try {
    $db = new DatabaseConfig();
    $conn = $db->connect();
    
    echo "<h2>🔍 TRABAJADORES EN LA BASE DE DATOS:</h2>";
    $stmt = $conn->query("SELECT * FROM trabajadores ORDER BY id");
    $trabajadores = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($trabajadores as $index => $trabajador) {
        $estilo = ($index === 0) ? 'color: red; font-weight: bold;' : 'color: black;';
        echo "<p style='$estilo'>";
        echo "ID: " . $trabajador['id'] . " | ";
        echo "Nombre: " . $trabajador['TraNombre'] . " " . $trabajador['TraApellido'];
        if ($index === 0) {
            echo " ← ESTE ES EL QUE SIEMPRE APARECE (PRIMER REGISTRO)";
        }
        echo "</p>";
    }
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>


<?php
require_once 'config/db_config.php';

try {
    $db = new DatabaseConfig();
    $conn = $db->connect();
    
    echo "<h2>🔍 TRABAJADORES EN LA BASE DE DATOS:</h2>";
    $stmt = $conn->query("SELECT * FROM trabajadores ORDER BY id");
    $trabajadores = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($trabajadores as $index => $trabajador) {
        $estilo = ($index === 0) ? 'color: red; font-weight: bold;' : 'color: black;';
        echo "<p style='$estilo'>";
        echo "ID: " . $trabajador['id'] . " | ";
        echo "Nombre: " . $trabajador['TraNombre'] . " " . $trabajador['TraApellido'];
        if ($index === 0) {
            echo " ← ESTE ES EL QUE SIEMPRE APARECE (PRIMER REGISTRO)";
        }
        echo "</p>";
    }
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>


<?php
require_once 'config/db_config.php';

try {
    $db = new DatabaseConfig();
    $conn = $db->connect();
    
    echo "<h2>🔍 TRABAJADORES EN LA BASE DE DATOS:</h2>";
    $stmt = $conn->query("SELECT * FROM trabajadores ORDER BY id");
    $trabajadores = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($trabajadores as $index => $trabajador) {
        $estilo = ($index === 0) ? 'color: red; font-weight: bold;' : 'color: black;';
        echo "<p style='$estilo'>";
        echo "ID: " . $trabajador['id'] . " | ";
        echo "Nombre: " . $trabajador['TraNombre'] . " " . $trabajador['TraApellido'];
        if ($index === 0) {
            echo " ← ESTE ES EL QUE SIEMPRE APARECE (PRIMER REGISTRO)";
        }
        echo "</p>";
    }
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>


<?php
require_once 'config/db_config.php';

try {
    $db = new DatabaseConfig();
    $conn = $db->connect();
    
    echo "<h2>🔍 TRABAJADORES EN LA BASE DE DATOS:</h2>";
    $stmt = $conn->query("SELECT * FROM trabajadores ORDER BY id");
    $trabajadores = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($trabajadores as $index => $trabajador) {
        $estilo = ($index === 0) ? 'color: red; font-weight: bold;' : 'color: black;';
        echo "<p style='$estilo'>";
        echo "ID: " . $trabajador['id'] . " | ";
        echo "Nombre: " . $trabajador['TraNombre'] . " " . $trabajador['TraApellido'];
        if ($index === 0) {
            echo " ← ESTE ES EL QUE SIEMPRE APARECE (PRIMER REGISTRO)";
        }
        echo "</p>";
    }
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>


<?php
require_once 'config/db_config.php';

try {
    $db = new DatabaseConfig();
    $conn = $db->connect();
    
    echo "<h2>🔍 TRABAJADORES EN LA BASE DE DATOS:</h2>";
    $stmt = $conn->query("SELECT * FROM trabajadores ORDER BY id");
    $trabajadores = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($trabajadores as $index => $trabajador) {
        $estilo = ($index === 0) ? 'color: red; font-weight: bold;' : 'color: black;';
        echo "<p style='$estilo'>";
        echo "ID: " . $trabajador['id'] . " | ";
        echo "Nombre: " . $trabajador['TraNombre'] . " " . $trabajador['TraApellido'];
        if ($index === 0) {
            echo " ← ESTE ES EL QUE SIEMPRE APARECE (PRIMER REGISTRO)";
        }
        echo "</p>";
    }
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>


<?php
require_once 'config/db_config.php';

try {
    $db = new DatabaseConfig();
    $conn = $db->connect();
    
    echo "<h2>🔍 TRABAJADORES EN LA BASE DE DATOS:</h2>";
    $stmt = $conn->query("SELECT * FROM trabajadores ORDER BY id");
    $trabajadores = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($trabajadores as $index => $trabajador) {
        $estilo = ($index === 0) ? 'color: red; font-weight: bold;' : 'color: black;';
        echo "<p style='$estilo'>";
        echo "ID: " . $trabajador['id'] . " | ";
        echo "Nombre: " . $trabajador['TraNombre'] . " " . $trabajador['TraApellido'];
        if ($index === 0) {
            echo " ← ESTE ES EL QUE SIEMPRE APARECE (PRIMER REGISTRO)";
        }
        echo "</p>";
    }
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>


<?php
require_once 'config/db_config.php';

try {
    $db = new DatabaseConfig();
    $conn = $db->connect();
    
    echo "<h2>🔍 TRABAJADORES EN LA BASE DE DATOS:</h2>";
    $stmt = $conn->query("SELECT * FROM trabajadores ORDER BY id");
    $trabajadores = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($trabajadores as $index => $trabajador) {
        $estilo = ($index === 0) ? 'color: red; font-weight: bold;' : 'color: black;';
        echo "<p style='$estilo'>";
        echo "ID: " . $trabajador['id'] . " | ";
        echo "Nombre: " . $trabajador['TraNombre'] . " " . $trabajador['TraApellido'];
        if ($index === 0) {
            echo " ← ESTE ES EL QUE SIEMPRE APARECE (PRIMER REGISTRO)";
        }
        echo "</p>";
    }
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>


<?php
require_once 'config/db_config.php';

try {
    $db = new DatabaseConfig();
    $conn = $db->connect();
    
    echo "<h2>🔍 TRABAJADORES EN LA BASE DE DATOS:</h2>";
    $stmt = $conn->query("SELECT * FROM trabajadores ORDER BY id");
    $trabajadores = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($trabajadores as $index => $trabajador) {
        $estilo = ($index === 0) ? 'color: red; font-weight: bold;' : 'color: black;';
        echo "<p style='$estilo'>";
        echo "ID: " . $trabajador['id'] . " | ";
        echo "Nombre: " . $trabajador['TraNombre'] . " " . $trabajador['TraApellido'];
        if ($index === 0) {
            echo " ← ESTE ES EL QUE SIEMPRE APARECE (PRIMER REGISTRO)";
        }
        echo "</p>";
    }
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>


<?php
require_once 'config/db_config.php';

try {
    $db = new DatabaseConfig();
    $conn = $db->connect();
    
    echo "<h2>🔍 TRABAJADORES EN LA BASE DE DATOS:</h2>";
    $stmt = $conn->query("SELECT * FROM trabajadores ORDER BY id");
    $trabajadores = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($trabajadores as $index => $trabajador) {
        $estilo = ($index === 0) ? 'color: red; font-weight: bold;' : 'color: black;';
        echo "<p style='$estilo'>";
        echo "ID: " . $trabajador['id'] . " | ";
        echo "Nombre: " . $trabajador['TraNombre'] . " " . $trabajador['TraApellido'];
        if ($index === 0) {
            echo " ← ESTE ES EL QUE SIEMPRE APARECE (PRIMER REGISTRO)";
        }
        echo "</p>";
    }
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>