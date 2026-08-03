<?php

require_once '../models/producto.php';

$producto = new Producto(
    "Computador Portátil",
    2500000,
    10,
    "Tecnología"
);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Producto - Encapsulamiento y Validaciones</title>

</head>

<body>

    <h1>Registro de Producto</h1>

    <h2>Información correcta del producto</h2>

    <?php

    echo "<p><strong>Nombre:</strong> "
        . $producto->getNombre()
        . "</p>";

    echo "<p><strong>Precio:</strong> $"
        . $producto->getPrecio()
        . "</p>";

    echo "<p><strong>Cantidad:</strong> "
        . $producto->getCantidad()
        . "</p>";

    echo "<p><strong>Categoría:</strong> "
        . $producto->getCategoria()
        . "</p>";

    ?>


    <hr>

    <h2>Prueba de información correcta</h2>

    <?php

    $resultadoNombre = $producto->setNombre("Televisor Smart TV");

    $resultadoPrecio = $producto->setPrecio(1800000);

    $resultadoCantidad = $producto->setCantidad(5);

    $resultadoCategoria = $producto->setCategoria("Electrodomésticos");


    if ($resultadoNombre) {
        echo "<p> Nombre actualizado correctamente.</p>";
    }

    if ($resultadoPrecio) {
        echo "<p> Precio actualizado correctamente.</p>";
    }

    if ($resultadoCantidad) {
        echo "<p> Cantidad actualizada correctamente.</p>";
    }

    if ($resultadoCategoria) {
        echo "<p> Categoría actualizada correctamente.</p>";
    }

    ?>


    <h3>Datos después de actualizar</h3>

    <?php

    echo "<p><strong>Nombre:</strong> "
        . $producto->getNombre()
        . "</p>";

    echo "<p><strong>Precio:</strong> $"
        . $producto->getPrecio()
        . "</p>";

    echo "<p><strong>Cantidad:</strong> "
        . $producto->getCantidad()
        . "</p>";

    echo "<p><strong>Categoría:</strong> "
        . $producto->getCategoria()
        . "</p>";

    ?>


    <hr>

    <h2>Pruebas de información incorrecta</h2>


    <?php

    echo "<h3>Prueba 1: Nombre vacío</h3>";

    $resultado = $producto->setNombre("   ");

    if ($resultado == false) {

        echo "<p> El nombre vacío fue rechazado.</p>";

    }

    echo "<p><strong>Nombre actual:</strong> "
        . $producto->getNombre()
        . "</p>";


    echo "<h3>Prueba 2: Precio inválido</h3>";

    $resultado = $producto->setPrecio(0);

    if ($resultado == false) {

        echo "<p> El precio 0 fue rechazado.</p>";

    }

    echo "<p><strong>Precio actual:</strong> $"
        . $producto->getPrecio()
        . "</p>";


    echo "<h3>Prueba 3: Cantidad negativa</h3>";

    $resultado = $producto->setCantidad(-5);

    if ($resultado == false) {

        echo "<p> La cantidad -5 fue rechazada.</p>";

    }

    echo "<p><strong>Cantidad actual:</strong> "
        . $producto->getCantidad()
        . "</p>";


    echo "<h3>Prueba 4: Categoría vacía</h3>";

    $resultado = $producto->setCategoria("");

    if ($resultado == false) {

        echo "<p> La categoría vacía fue rechazada.</p>";

    }

    echo "<p><strong>Categoría actual:</strong> "
        . $producto->getCategoria()
        . "</p>";

    ?>

</body>

</html>