<?php

require_once "persona.php";

class Cliente extends Persona
{
    protected $documento;
    protected $telefono;
    protected $ciudad;
    protected $direccion;

    public function __construct(
        $nombre,
        $apellido,
        $edad,
        $correo,
        $documento,
        $telefono,
        $ciudad,
        $direccion
    ) {

        try {

            parent::__construct($nombre, $apellido, $edad, $correo);

            $this->documento = $documento;
            $this->telefono = $telefono;
            $this->ciudad = $ciudad;
            $this->direccion = $direccion;

        } catch (Exception $e) {

            echo "Error al crear el cliente: " . $e->getMessage();
        }
    }

    public function saludar()
    {
        try {

            return "Hola, Mi nombre es: " . $this->nombre . "<br>"
                . "Mi apellido es: " . $this->apellido . "<br>"
                . "Mi Edad es: " . $this->edad . "<br>"
                . "Mi Correo es: " . $this->correo . "<br>"
                . "Mi Documento es: " . $this->documento . "<br>"
                . "Mi Teléfono es: " . $this->telefono . "<br>"
                . "Mi Ciudad es: " . $this->ciudad . "<br>"
                . "Mi Dirección es: " . $this->direccion . "<br>"
                . "Soy un cliente";

        } catch (Exception $e) {

            return "Error al mostrar el cliente: " . $e->getMessage();
        }
    }
}

?>