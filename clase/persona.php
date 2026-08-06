<?php

class Persona
{
    protected $nombre;
    protected $apellido;
    protected $edad;
    protected $correo;

    public function __construct($nombre, $apellido, $edad, $correo)
    {
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setEdad($edad);
        $this->setCorreo($correo);
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
        return "Hola, Mi nombre es: " . $this->nombre . "<br>"
            . "Mi apellido es: " . $this->apellido . "<br>"
            . "Mi Edad es: " . $this->edad . "<br>"
            . "Mi Correo es: " . $this->correo . "<br>";
    }
}

?>