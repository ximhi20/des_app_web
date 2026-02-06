<?php
    $juego = $_GET["game"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $juego; ?></title>
</head>
<body>
    <header>
        <ul>
            <li><a href="?game=Kingdom%20Hearts%20II">Kingdom Hearts II</a></li>
            <li><a href="?game=Horizon%20Zero%20Dawn">Horizon Zero Dawn</a></li>
            <li><a href="?game=Dragon%20Age:%20Origins">Dragon Age: Origins</a></li>
        </ul>
    </header>

    <main>
        <h1>Mi juego favorito es <?php echo $juego; ?>.</h1>
        <p>Este juego (<?php echo $juego; ?>) es muy interesante.</p>
        <p>Aunque quizá te gusten otros juegos, <?php echo $juego; ?> es el que me agrada a mi.</p>
    </main>

    <footer>
        <p>&copy; <?php echo $juego; ?></p>
    </footer>
</body>
</html>