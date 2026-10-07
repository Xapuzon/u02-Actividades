<?php
$frase = 'Los programadores llevan a cabo tareas de todo tipo y trabajan con cifras de gran tamaño '
    . 'en el desarrollo de aplicaciones de gestión para empresas de cualquier sector.';

$fraseInvertida = strrev($frase);
$posicionCifras = strpos($frase, 'cifras');
$textoPosterior = substr($frase, strpos($frase, 'cabo') + strlen('cabo'));
$vecesDe = substr_count($frase, ' de ');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analizando una frase</title>
</head>
<body>
    <h1>Analizando una frase</h1>
    <p><strong>Frase original:</strong> <?= $frase ?></p>
    <p><strong>Frase invertida:</strong> <?= $fraseInvertida ?></p>
    <p><strong>Posición de "cifras":</strong> <?= $posicionCifras ?></p>
    <p><strong>Texto posterior a "cabo":</strong> <?= $textoPosterior ?></p>
    <p><strong>Veces que aparece "de":</strong> <?= $vecesDe ?></p>
</body>
</html>