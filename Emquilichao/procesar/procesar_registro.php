<?php
header('Content-Type: application/json');

require_once '../config/db_config.php';

try {
    // Verificar que sea una petición POST
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Método no permitido');
    }

    // Obtener y validar datos del formulario
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $apellido = isset($_POST['apellido']) ? trim($_POST['apellido']) : '';
    $usuario = isset($_POST['usuario']) ? trim($_POST['usuario']) : '';
    $contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : '';

    // Validar campos requeridos
    if (empty($nombre) || empty($apellido) || empty($usuario) || empty($contrasena)) {
        throw new Exception('Todos los campos son obligatorios');
    }

    // Validar longitud de la contraseña
    if (strlen($contrasena) < 6) {
        throw new Exception('La contraseña debe tener al menos 6 caracteres');
    }

    // Crear conexión a la base de datos
    $db = new DatabaseConfig();
    $conn = $db->connect();

    // Verificar si el usuario ya existe
    $stmt = $conn->prepare('SELECT COUNT(*) FROM jefe WHERE JefeUsuario = ?');
    $stmt->execute([$usuario]);
    if ($stmt->fetchColumn() > 0) {
        throw new Exception('El nombre de usuario ya existe');
    }

    // Insertar nuevo jefe sin ID (se generará automáticamente)
    $stmt = $conn->prepare('INSERT INTO jefe (JefeNombre, JefeApellido, JefeUsuario, JefeContraseña) VALUES (?, ?, ?, ?)');
    $stmt->execute([$nombre, $apellido, $usuario, $contrasena]);

    echo json_encode(['success' => true, 'message' => 'Usuario registrado exitosamente']);

} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}