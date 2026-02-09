<?php
    $path = "css/";
    $est = array_diff(scandir($path), array(".", ".."));
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada</title>
    <style>
        html{
            text-align: center;
            background-color: red;
            color: blue;
        }

        form *{
            margin: 5px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Selección:</h1>
    </header>

    <main>
        <form action="juego.php" method="GET">
            <label>Nombre de tu juego favorito: <input type="text" name="game"></label><br>
            <label>Selecciona el estilo: <select name="style">
                <?php
                    foreach ($est as $arch) {
                        $partes = explode(".", $arch);
                        $antes = $partes[0];
                        echo "<option value='$path$arch'>$antes</option>";
                    };
                ?>
            </select></label><br>
            <button type="submit">Cargar la información</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2026</p>
    </footer>
</body>
</html>