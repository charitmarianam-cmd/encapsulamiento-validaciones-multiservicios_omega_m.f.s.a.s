<?php

require_once __DIR__ . '/../config/conexion.php';

class Cliente
{
    private $conexion;

    public function __construct()
    {
        $conexion = new Conexion();
        $this->conexion = $conexion->conectar();
    }

    public function getAll()
    {
        try {

            $sql = "SELECT * FROM clientes";

            $consulta = $this->conexion->prepare($sql);
            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {

            echo "Error al consultar los clientes: " . $e->getMessage();

            return [];
        }
    }

    public function getById($id)
    {
        try {

            $sql = "SELECT * FROM clientes WHERE id = :id";

            $consulta = $this->conexion->prepare($sql);
            $consulta->bindParam(':id', $id, PDO::PARAM_INT);
            $consulta->execute();

            return $consulta->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {

            echo "Error al consultar el cliente: " . $e->getMessage();

            return null;
        }
    }
}

?>