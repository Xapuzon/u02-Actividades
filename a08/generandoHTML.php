<?php
$numeroAleatorio = random_int(-200, 200);

$nota = random_int(0, 10);

$numeroTabla = random_int(0, 100);

$filas = random_int(1, 10);
$columnas = random_int(1, 10);

$cantidad = random_int(1, 1000);
$billetes500 = intval($cantidad / 500);
$resto = $cantidad % 500;
$billetes200 = intval($resto / 200);
$resto = $resto % 200;
$billetes100 = intval($resto / 100);
$resto = $resto % 100;
$billetes50 = intval($resto / 50);
$resto = $resto % 50;
$billetes20 = intval($resto / 20);
$resto = $resto % 20;
$billetes10 = intval($resto / 10);
$resto = $resto % 10;
$billetes5 = intval($resto / 5);
$resto = $resto % 5;
$monedas2 = intval($resto / 2);
$resto = $resto % 2;
$monedas1 = intval($resto / 1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generando HTML</title>
</head>
<body>
    <ul>
        <?php for ($indice = 1; $indice <= 5; $indice++) { ?>
            <li><a href="#sec<?= $indice ?>">Sección <?= $indice ?></a></li>
        <?php } ?>
    </ul>

    <section>
        <article id="sec1">
            <h1>Sección 1: Número aleatorio</h1>
            <p>
                El número <?= $numeroAleatorio ?> es
                <?php if ($numeroAleatorio < 0) {
                    echo 'negativo';
                } elseif ($numeroAleatorio > 0) {
                    echo 'positivo';
                } else {
                    echo 'cero';
                } ?>.
            </p>
        </article>

        <article id="sec2">
            <h1>Sección 2: Calificación</h1>
            <p>
                Nota: <?= $nota ?> -
                <?php
                switch ($nota) {
                    case 0:
                    case 1:
                    case 2:
                    case 3:
                    case 4:
                        echo 'Insuficiente';
                        break;
                    case 5:
                        echo 'Suficiente';
                        break;
                    case 6:
                        echo 'Bien';
                        break;
                    case 7:
                    case 8:
                        echo 'Notable';
                        break;
                    default:
                        echo 'Sobresaliente';
                }
                ?>
            </p>
        </article>

        <article id="sec3">
            <h1>Sección 3: Tabla del <?= $numeroTabla ?></h1>
            <table border="1">
                <?php for ($multiplicador = 0; $multiplicador <= 20; $multiplicador++) { ?>
                    <tr>
                        <td><?= $numeroTabla ?> x <?= $multiplicador ?></td>
                        <td><?= $numeroTabla * $multiplicador ?></td>
                    </tr>
                <?php } ?>
            </table>
        </article>

        <article id="sec4">
            <h1>Sección 4: Tabla de <?= $filas ?> filas x <?= $columnas ?> columnas</h1>
            <table border="1">
                <?php for ($fila = 0; $fila < $filas; $fila++) { ?>
                    <tr>
                        <?php for ($columna = 0; $columna < $columnas; $columna++) { ?>
                            <td><?= $fila . 'x' . $columna ?></td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </table>
        </article>

        <article id="sec5">
            <h1>Sección 5: Desglose de <?= $cantidad ?> €</h1>
            <ul>
                <li>Billetes de 500 €: <?= $billetes500 ?></li>
                <li>Billetes de 200 €: <?= $billetes200 ?></li>
                <li>Billetes de 100 €: <?= $billetes100 ?></li>
                <li>Billetes de 50 €: <?= $billetes50 ?></li>
                <li>Billetes de 20 €: <?= $billetes20 ?></li>
                <li>Billetes de 10 €: <?= $billetes10 ?></li>
                <li>Billetes de 5 €: <?= $billetes5 ?></li>
                <li>Monedas de 2 €: <?= $monedas2 ?></li>
                <li>Monedas de 1 €: <?= $monedas1 ?></li>
            </ul>
        </article>
    </section>
</body>
</html>