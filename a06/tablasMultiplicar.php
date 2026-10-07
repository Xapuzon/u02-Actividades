<?php
const TAMANO_TABLA = 10;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplicar</title>
    <style>
        th { background: #1f3a5f; color: #fff; padding: 0.4rem 0.7rem; }
        td { text-align: center; padding: 0.4rem 0.7rem; }
        .diagonal { background: #ffe9a8; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Tabla de multiplicar</h1>
    <table border="1">
        <?php for ($fila = 0; $fila <= TAMANO_TABLA; $fila++) { ?>
            <tr>
                <?php for ($columna = 0; $columna <= TAMANO_TABLA; $columna++) { ?>
                    <?php if ($fila === 0 && $columna === 0) { ?>
                        <th>x</th>
                    <?php } elseif ($fila === 0) { ?>
                        <th><?= $columna ?></th>
                    <?php } elseif ($columna === 0) { ?>
                        <th><?= $fila ?></th>
                    <?php } elseif ($fila === $columna) { ?>
                        <td class="diagonal"><?= $fila * $columna ?></td>
                    <?php } else { ?>
                        <td><?= $fila * $columna ?></td>
                    <?php } ?>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>