<?php

try {

    require_once '../clase/producto.php';
    require_once '../clase/persona.php';
    require_once '../clase/cliente.php';


    // PRODUCTO

    $producto = new Producto(
        "Computador Portátil",
        2500000,
        10,
        "Tecnología"
    );


    // CLIENTE

    $cliente1 = new Cliente(
        "Laura",
        "Gómez",
        25,
        "laura@correo.com",
        "123456789",
        "3001234567",
        "La Dorada",
        "Carrera 5 # 10-20"
    );

} catch (Exception $e) {

    echo "Error en el sistema: " . $e->getMessage();
}

?>

<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Encapsulamiento y Herencia</title>

</head>

<body>

    <h1>Información del sistema</h1>


    <h2>Producto</h2>

    <?php

    try {

        echo "Nombre: " . $producto->getNombre() . "<br>";
        echo "Precio: $" . $producto->getPrecio() . "<br>";
        echo "Cantidad: " . $producto->getCantidad() . "<br>";
        echo "Categoría: " . $producto->getCategoria() . "<br>";

    } catch (Exception $e) {

        echo "Error al mostrar el producto: " . $e->getMessage();
    }

    ?>


    <hr>


    <h2>Cliente</h2>

    <?php

    try {

        echo $cliente1->saludar();

    } catch (Exception $e) {

        echo "Error al mostrar el cliente: " . $e->getMessage();
    }

    ?>

</body>

</html>