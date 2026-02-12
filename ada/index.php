<?php
    // Se carga el archivo.
    $json = file_get_contents("datos.json");

    // Se convierte JSON a array PHP.
    $arrayDatos = json_decode($json, true);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutería Ada</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">inicio</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Frutería Ada.</h1>
        <!-- Recordatorio de como se puede meter un array para que sea "humanamente leible" (creo que el PHP está dentro del comentario HTML, aunque no lo parezca). -->
        <!-- <pre><code><?php var_dump($arrayDatos) ?></code></pre> -->

        <ul><?php foreach ($arrayDatos["frutas"] as $elemento) {
            echo "
                <li>
                    <p>{$elemento['icono']}</p>
                    <h2>{$elemento['nombre']}</h2>
                    <p>Color: {$elemento['color']}</p>
                    <p>P.V.P: {$elemento['precio']}€</p>
                </li>
            ";
        }; ?></ul>
    </main>

    <footer>
        <p>&copy; <?= date('Y') ?></p>
    </footer>
</body>
</html>