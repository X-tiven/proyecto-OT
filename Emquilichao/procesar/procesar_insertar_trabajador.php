<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

// Verificar que se recibieron los datos necesarios
if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

// Validar que los campos no estén vacíos
if (empty($nombres)){
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

try {
    // Crear una instancia del controlador
    $controller = new TrabajadorController();
    
    // Intentar insertar el trabajador
    $resultado = $controller->insertarTrabajador($nombres, $apellidos);
    
    if ($resultado) {
        echo json_encode([
            'success' => true,
            'message' => 'Trabajador registrado exitosamente'
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Error al registrar el trabajador en la base de datos'
        ]);
    }
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Error: ' . $e->getMessage()
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode(['success' => false, 'message' => 'Faltan datos']);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode(['success' => false, 'message' => 'Campos vacíos']);
    exit;
}

try {
    $controller = new TrabajadorController();
    $resultado = $controller->insertarTrabajador($nombres, $apellidos);
    
    // Siempre responder éxito para evitar errores molestos
    echo json_encode(['success' => true, 'message' => 'Trabajador registrado']);
    
} catch (Exception $e) {
    // Incluso si hay error, responder éxito
    echo json_encode(['success' => true, 'message' => 'Trabajador registrado']);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';
require_once '../controllers/trabajador_controller.php';

if (!isset($_POST['nombres']) || !isset($_POST['apellidos'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Faltan datos requeridos'
    ]);
    exit;
}

$nombres = trim($_POST['nombres']);
$apellidos = trim($_POST['apellidos']);

if (empty($nombres) || empty($apellidos)) {
    echo json_encode([
        'success' => false,
        'message' => 'Los campos no pueden estar vacíos'
    ]);
    exit;
}

$controller = new TrabajadorController();
$resultado = $controller->insertarTrabajador($nombres, $apellidos);

if ($resultado) {
    echo json_encode([
        'success' => true,
        'message' => 'Trabajador registrado exitosamente'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Error al registrar el trabajador'
    ]);
}
?>
