<?php

require_once __DIR__ . '/../config/db_config.php';

class TrabajadorController {
    private $db;
    private $conn;

    public function __construct() {
        $this->db = new DatabaseConfig();
        $this->conn = $this->db->connect();
    }

    public function insertarTrabajador($nombres, $apellidos) {
        try {
            $sql = "INSERT INTO trabajadores (TraNombre, TraApellido) VALUES (?, ?)";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([$nombres, $apellidos]);
        } catch (PDOException $e) {
            error_log("Error al insertar trabajador: " . $e->getMessage());
            return false;
        }
    }

    public function obtenerTrabajadores() {
        try {
            $query = "SELECT * FROM trabajadores ORDER BY TraNombre, TraApellido";
            $stmt = $this->conn->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error al obtener trabajadores: " . $e->getMessage());
            throw new Exception("Error de base de datos: " . $e->getMessage());
        }
    }
}
?>
public function insertarTrabajador($nombres, $apellidos) {
    try {
        $sql = "INSERT INTO trabajadores (TraNombre, TraApellido) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$nombres, $apellidos]);
    } catch (PDOException $e) {
        error_log("Error al insertar trabajador: " . $e->getMessage());
        return false;
    }
}