<?php
session_start();
header('Content-Type: application/json');

require_once '../config/db_config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Método no permitido']);
    exit;
}

$usuario = isset($_POST['usuario']) ? trim($_POST['usuario']) : '';
$contrasena = isset($_POST['contrasena']) ? trim($_POST['contrasena']) : '';

if (empty($usuario) || empty($contrasena)) {
    echo json_encode(['success' => false, 'message' => 'Por favor, complete todos los campos']);
    exit;
}

try {
    $db = new DatabaseConfig();
    $conn = $db->connect();

    $stmt = $conn->prepare("SELECT * FROM jefe WHERE JefeUsuario = ? AND JefeContraseña = ?");
    $stmt->execute([$usuario, $contrasena]);

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['usuario_id'] = $user['JefeUsuario'];
        $_SESSION['nombre'] = $user['JefeNombre'];
        $_SESSION['apellido'] = $user['JefeApellido'];
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Usuario o contraseña incorrectos']);
    }
} catch(Exception $e) {
    error_log("Error: " . $e->getMessage());
    echo json_encode(['success' => false, 'message' => 'Error al conectar con la base de datos']);
}