<?php

class DatabaseConfig {
    private $host = 'Localhost';
    private $dbname = 'alcantarillado';
    private $username = 'root';
    private $contrasena = '';
    private $conn = null;

    public function connect() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4";
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch(PDOException $e) {
            // Sin mensajes de error, solo log silencioso
            error_log("Error de conexión: " . $e->getMessage());
            return null;
        }
    }
}

class Jefe {
    private $jefeNombre;
    private $jefeApellido;
    private $jefeUsuario;
    private $jefeContrasena;
}
?>