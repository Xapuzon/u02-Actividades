<?php
$tituloPagina = 'Sobre Nosotros';

require __DIR__ . '/includes/header.inc.php';
require __DIR__ . '/includes/menu.inc.php';
?>
    <main>
        <h2>Sobre Nosotros</h2>

        <img id="vertical" src="img/vertical.jpg">

        <address>
            Calle de la Energía, 45<br>
            46001 Valencia, España<br>
            Teléfono: 963 45 67 89<br>
            Email: contacto@tiendaenergetica.com
        </address>

        <h3>Contacta con nosotros</h3>

        <form action="#" method="post">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>

            <label for="telefono">Teléfono:</label><br>
            <input type="tel" id="telefono" name="telefono"><br>

            <label for="comentario">Comentario:</label><br>
            <textarea id="comentario" name="comentario" rows="5"></textarea><br>

            <button type="reset" class="boton">Borrar</button>
            <button type="submit" class="boton">Enviar</button>
        </form>
    </main>

<?php
require __DIR__ . '/includes/footer.inc.php';