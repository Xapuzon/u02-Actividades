<?php
$primerNumero = 17;
$segundoNumero = 5;

if ($primerNumero > $segundoNumero) {
    $comparacion = $primerNumero . ' es mayor que ' . $segundoNumero;
} elseif ($primerNumero < $segundoNumero) {
    $comparacion = $segundoNumero . ' es mayor que ' . $primerNumero;
} else {
    $comparacion = 'Los dos números son iguales';
}

$paridadPrimero = $primerNumero % 2 === 0 ? 'par' : 'impar';
$paridadSegundo = $segundoNumero % 2 === 0 ? 'par' : 'impar';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando</title>
</head>
<body>
    <h1>Calculando con <?= $primerNumero ?> y <?= $segundoNumero ?></h1>
    <ul>
        <li>Suma: <?= $primerNumero + $segundoNumero ?></li>
        <li>Resta: <?= $primerNumero - $segundoNumero ?></li>
        <li>Multiplicación: <?= $primerNumero * $segundoNumero ?></li>
        <li>División: <?= $primerNumero / $segundoNumero ?></li>
        <li>Módulo: <?= $primerNumero % $segundoNumero ?></li>
    </ul>
    <p><?= $comparacion ?></p>
    <p><?= $primerNumero ?> es <?= $paridadPrimero ?>.</p>
    <p><?= $segundoNumero ?> es <?= $paridadSegundo ?>.</p>
</body>
</html>