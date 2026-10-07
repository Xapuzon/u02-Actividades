<?php
$numeros = [42, 7, 19, 3, 88, 25, 61, 14, 50, 9];
$original = $numeros;

$longitud = count($numeros);

for ($i = 0; $i < $longitud - 1; $i++) {
    $indiceMinimo = $i;

    for ($j = $i + 1; $j < $longitud; $j++) {
        if ($numeros[$j] < $numeros[$indiceMinimo]) {
            $indiceMinimo = $j;
        }
    }

    if ($indiceMinimo !== $i) {
        $temporal = $numeros[$i];
        $numeros[$i] = $numeros[$indiceMinimo];
        $numeros[$indiceMinimo] = $temporal;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenando datos</title>
</head>
<body>
    <h1>Ordenación por selección</h1>
    <p><strong>Array original:</strong> <?= implode(', ', $original) ?></p>
    <p><strong>Array ordenado:</strong> <?= implode(', ', $numeros) ?></p>
</body>
</html>