<?php
require_once __DIR__ . '/funcionesXapuzon.php';

$primerNumero = 17;
$segundoNumero = 5;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando v2.0</title>
</head>
<body>
    <h1>Calculando v2.0 con <?= $primerNumero ?> y <?= $segundoNumero ?></h1>
    <ul>
        <li>Suma: <?= sumar($primerNumero, $segundoNumero) ?></li>
        <li>Resta: <?= restar($primerNumero, $segundoNumero) ?></li>
        <li>Multiplicación: <?= multiplicar($primerNumero, $segundoNumero) ?></li>
        <li>División: <?= dividir($primerNumero, $segundoNumero) ?></li>
        <li>Módulo: <?= calcularModulo($primerNumero, $segundoNumero) ?></li>
        <li>¿Son iguales? <?= sonIguales($primerNumero, $segundoNumero) ? 'Sí' : 'No' ?></li>
        <li>¿<?= $primerNumero ?> es par? <?= esPar($primerNumero) ? 'Sí' : 'No' ?></li>
        <li>¿<?= $segundoNumero ?> es par? <?= esPar($segundoNumero) ? 'Sí' : 'No' ?></li>
    </ul>
</body>
</html>