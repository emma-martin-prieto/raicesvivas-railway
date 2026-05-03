<?php
namespace RaicesVivas\Database;

use RaicesVivas\Config\ConfigBD;

class Conexion {
    public static function conectar(): ?\PDO {
        try {
            $dsn = 'mysql:host=' . ConfigBD::host()
                 . ';port=' . ConfigBD::port()
                 . ';dbname=' . ConfigBD::db()
                 . ';charset=utf8mb4';

            $conn = new \PDO($dsn, ConfigBD::user(), ConfigBD::pass());
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            return $conn;

        } catch (\PDOException $e) {
            echo '<p>Error de conexión: ' . $e->getMessage() . '</p>';
            return null;
        }
    }
}