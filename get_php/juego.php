<?php
    $juego = $_GET["game"];
    $estilo = $_GET["style"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $juego; ?></title>
    <style>
        html{
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="<?php echo $estilo ?>">
</head>
<body>
    <header>
        <h1>Mi juego favorito es <?php echo $juego; ?>.</h1>
    </header>

    <main>
        <p>Este juego (<?php echo $juego; ?>) es muy interesante.</p>
        <p>Aunque quizá te gusten otros juegos, <?php echo $juego; ?> es el que me agrada a mi.</p>
    </main>

    <footer>
        <p>&copy; <?php echo $juego; ?></p>
        <a href="index.php"><button type="button">Retorno</button></a>
    </footer>
</body>
</html>