<?php
    $juego = $_GET["game"];
    $estilo = $_GET["style"];
    $path = "css/";
    $est = array_diff(scandir($path), array(".", ".."));
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $juego; ?></title>
    <link rel="stylesheet" href="<?php echo $estilo ?>">
</head>
<body>
    <header>
        <form action="index.php" method="GET">
            <label for="jg">Nombre de tu juego favorito:</label><br>
            <input type="text" name="game" id="jg" require><br>
            <label for="estilo">Selecciona el estilo:</label><br>
            <select name="style" id="estilo">
                <?php
                    foreach ($est as $arch) {
                        $partes = explode(".", $arch);
                        $antes = $partes[0];
                        echo "<option value='$path$arch'>$antes</option>";
                    };
                ?>
            </select><br>
            <button type="submit">Cargar la información</button>
        </form>
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