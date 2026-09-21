<?php

require_once '../models/producto.php';
require_once '../models/cliente.php';
require_once '../models/persona.php';

$productoModel = new Producto();
$clienteModel = new Cliente();
$personaModel = new Persona();

$productos = $productoModel->getAll();
$productoConsultado = $productoModel->getById(3);

$clientes = $clienteModel->getAll();
$clienteConsultado = $clienteModel->getById(1);

$personas = $personaModel->getAll();
$personaConsultada = $personaModel->getById(1);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validaciones Omega</title>
</head>

<body>

    <h1>Datos de la base de datos</h1>

    <h2>Productos - Get All</h2>

    <?php foreach ($productos as $producto): ?>

        <p>
            ID: <?= $producto['id'] ?> |
            Nombre: <?= $producto['nombre'] ?> |
            Precio: <?= $producto['precio'] ?> |
            Cantidad: <?= $producto['cantidad'] ?> |
            Categoría: <?= $producto['categoria'] ?>
        </p>

    <?php endforeach; ?>


    <h2>Producto consultado - Get By ID</h2>

    <?php if ($productoConsultado): ?>

        <p>
            ID: <?= $productoConsultado['id'] ?><br>
            Nombre: <?= $productoConsultado['nombre'] ?><br>
            Precio: <?= $productoConsultado['precio'] ?><br>
            Cantidad: <?= $productoConsultado['cantidad'] ?><br>
            Categoría: <?= $productoConsultado['categoria'] ?>
        </p>

    <?php else: ?>

        <p>Producto no encontrado.</p>

    <?php endif; ?>


    <hr>


    <h2>Clientes - Get All</h2>

    <?php foreach ($clientes as $cliente): ?>

        <p>
            ID: <?= $cliente['id'] ?> |
            Documento: <?= $cliente['documento'] ?> |
            Teléfono: <?= $cliente['telefono'] ?> |
            Ciudad: <?= $cliente['ciudad'] ?> |
            Dirección: <?= $cliente['direccion'] ?>
        </p>

    <?php endforeach; ?>


    <h2>Cliente consultado - Get By ID</h2>

    <?php if ($clienteConsultado): ?>

        <p>
            ID: <?= $clienteConsultado['id'] ?><br>
            Documento: <?= $clienteConsultado['documento'] ?><br>
            Teléfono: <?= $clienteConsultado['telefono'] ?><br>
            Ciudad: <?= $clienteConsultado['ciudad'] ?><br>
            Dirección: <?= $clienteConsultado['direccion'] ?>
        </p>

    <?php else: ?>

        <p>Cliente no encontrado.</p>

    <?php endif; ?>


    <hr>


    <h2>Personas - Get All</h2>

    <?php foreach ($personas as $persona): ?>

        <p>
            ID: <?= $persona['id'] ?> |
            Nombre: <?= $persona['nombre'] ?> |
            Apellido: <?= $persona['apellido'] ?> |
            Edad: <?= $persona['edad'] ?> |
            Correo: <?= $persona['correo'] ?>
        </p>

    <?php endforeach; ?>


    <h2>Persona consultada - Get By ID</h2>

    <?php if ($personaConsultada): ?>

        <p>
            ID: <?= $personaConsultada['id'] ?><br>
            Nombre: <?= $personaConsultada['nombre'] ?><br>
            Apellido: <?= $personaConsultada['apellido'] ?><br>
            Edad: <?= $personaConsultada['edad'] ?><br>
            Correo: <?= $personaConsultada['correo'] ?>
        </p>

    <?php else: ?>

        <p>Persona no encontrada.</p>

    <?php endif; ?>

</body>

</html>