<?php
    $nombre='Ximhi';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esta es la web de <?php echo $nombre; ?>.</title>
</head>

<body>
<header>
    <? include 'menu.php'; ?>
</header>

<main>
    <h1>Bienvenidos a la web de <?php echo $nombre; ?>.</h1>
    <p>Hola, soy <?php echo $nombre; ?>, bienvenidos a mi web.</p>
</main>

<footer>
    <p>&copy; <?php echo $nombre; ?>.</p>
</footer>
</body>
</html>