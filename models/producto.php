<?php

class Producto
{

    private $nombre;
    private $precio;
    private $cantidad;
    private $categoria;


    public function __construct($nombre, $precio, $cantidad, $categoria)
    {
        $this->setNombre($nombre);
        $this->setPrecio($precio);
        $this->setCantidad($cantidad);
        $this->setCategoria($categoria);
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }


    public function setNombre($nombre)
    {
        if (is_string($nombre) && trim($nombre) !== "") {

            $this->nombre = trim($nombre);

            return true;
        }

        return false;
    }

    public function setPrecio($precio)
    {
        if (is_numeric($precio) && $precio > 0) {

            $this->precio = $precio;

            return true;
        }

        return false;
    }

    public function setCantidad($cantidad)
    {
        if (is_numeric($cantidad) && $cantidad >= 0) {

            $this->cantidad = $cantidad;

            return true;
        }

        return false;
    }


    public function setCategoria($categoria)
    {
        if (is_string($categoria) && trim($categoria) !== "") {

            $this->categoria = trim($categoria);

            return true;
        }

        return false;
    }
}

?>