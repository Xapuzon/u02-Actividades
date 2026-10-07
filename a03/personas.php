<?php
$personas = [
    ['nombre' => 'Rick Sanchez', 'altura' => 1.98, 'email' => 'rick@example.com'],
    ['nombre' => 'Morty Smith', 'altura' => 1.50, 'email' => 'morty@example.com'],
    ['nombre' => 'Summer Smith', 'altura' => 1.68, 'email' => 'summer@example.com'],
    ['nombre' => 'Beth Smith', 'altura' => 1.72, 'email' => 'beth@example.com'],
    ['nombre' => 'Jerry Smith', 'altura' => 1.80, 'email' => 'jerry@example.com'],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
</head>
<body>
    <h1>Personas</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Altura (m)</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($personas as $persona) { ?>
                <tr>
                    <td><?= $persona['nombre'] ?></td>
                    <td><?= number_format($persona['altura'], 2) ?></td>
                    <td><?= $persona['email'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>