<?php
$tituloPagina = 'Catálogo';

require __DIR__ . '/includes/header.inc.php';
require __DIR__ . '/includes/menu.inc.php';
?>
    <h1>Bienvenido al catálogo</h1>
    <h2>Bebidas Energéticas disponibles: </h2>
    <ul>
        <li class="tarjeta">
            <h2>Monster Energy Zero Ultra White</h2>
            <img class="imagen" src="img/monsterBlanca.jpg">
            <h3>Precio: $1,79</h3>
        </li>
        <li class="tarjeta">
            <h2>Monster Mango Loco</h2>
            <img class="imagen" src="img/monsterMango.jpg">
            <h3>Precio: $1,79</h3>
            <p class="promocion">Promoción: Compre 2 y lleve 1 gratis</p>
            <a href="promociones.php" class="boton">Pulse aquí</a>
        </li>
        <li class="tarjeta">
            <h2>Monster OG</h2>
            <img class="imagen" src="img/monsterOG.jpg">
            <h3>Precio: $1,79</h3>
        </li>
        <li class="tarjeta">
            <h2>Monster Bad Apple</h2>
            <img class="imagen" src="img/badApple.webp">
            <h3>Precio: $1,79</h3>
        </li>
        <li class="tarjeta">
            <h2>Monster Lando Norris</h2>
            <img class="imagen" src="img/landoNorris.jpg">
            <h3>Precio: $1,79</h3>
        </li>
    </ul>

<?php
require __DIR__ . '/includes/footer.inc.php';