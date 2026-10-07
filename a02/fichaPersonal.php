<?php
$persona = [
    'nombre' => 'Álex',
    'apellidos' => 'Torres Gil',
    'email' => 'alex.torres@example.com',
    'fechaNacimiento' => '2004-05-17',
    'telefono' => '612345678',
];

$etiquetas = [
    'nombre' => 'Nombre',
    'apellidos' => 'Apellidos',
    'email' => 'Email',
    'fechaNacimiento' => 'Fecha de nacimiento',
    'telefono' => 'Teléfono',
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha personal</title>
</head>
<body>
    <h1>Ficha personal</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Dato</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($persona as $clave => $valor) { ?>
                <tr>
                    <th><?= $etiquetas[$clave] ?></th>
                    <td><?= $valor ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>