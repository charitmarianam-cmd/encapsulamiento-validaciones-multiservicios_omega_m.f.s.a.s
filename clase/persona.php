<?php

class Persona
{
    protected $nombre;
    protected $apellido;
    protected $edad;
    protected $correo;

    public function __construct($nombre, $apellido, $edad, $correo)
    {
        try {

            $this->setNombre($nombre);
            $this->setApellido($apellido);
            $this->setEdad($edad);
            $this->setCorreo($correo);

        } catch (Exception $e) {

            echo "Error al crear la persona: " . $e->getMessage();
        }
    }

    // GETTERS

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function getCorreo()
    {
        return $this->correo;
    }


    // SETTERS

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }


    // MÉTODO

    public function saludar()
    {
        try {

            return "Hola, Mi nombre es: " . $this->nombre . "<br>"
                . "Mi apellido es: " . $this->apellido . "<br>"
                . "Mi Edad es: " . $this->edad . "<br>"
                . "Mi Correo es: " . $this->correo . "<br>";

        } catch (Exception $e) {

            return "Error al mostrar la información: " . $e->getMessage();
        }
    }
}

?>