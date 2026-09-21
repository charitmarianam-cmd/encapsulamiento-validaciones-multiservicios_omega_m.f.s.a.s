<?php

class Conexion
{
    private $host = "localhost";
    private $usuario = "root";
    private $password = "";
    private $baseDatos = "validaciones_omega";
    private $conexion;

    public function conectar()
    {
        try {

            $this->conexion = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->baseDatos,
                $this->usuario,
                $this->password
            );

            $this->conexion->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            return $this->conexion;

        } catch (PDOException $e) {

            echo "Error en la conexión: " . $e->getMessage();

            return null;
        }
    }
}

?>