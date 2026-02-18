<?php
    $tipo = $_GET["type"];
    $nombre = $_GET["nom"];
    $ingredientes = $_GET["ing"];
    $alergenos = $_GET["alr"];
    $precio = $_GET["prc"];
    $foto = $_GET["url"];

    $json = file_get_contents("datos.json");
    $comida = json_decode($json, true);
    array_push($comida[$tipo], ["nombre"=>$nombre,"ingredientes"=>$ingredientes,"alérgenos"=>$alergenos,"precio"=>$precio,"foto"=>$foto]);
    $newJson = json_encode($comida, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    file_put_contents("datos.json", $newJson);

    /* echo "<pre><code>";
    print_r($comida);
    echo "</code></pre>"; */
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante japonés</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Restaurante japonés de Himi y Román.</h1>
    </header>

    <main>
        <?php
            echo "
                    <h2>$tipo</h2>
                    <div><div>
                        <h3>$nombre</h3>
                        <p>Sus ingredientes son:<br>{$ingredientes}.</p>
                        <p>Tiene los alérgenos:<br>{$alergenos}.</p>
                        <p>Su precio es: {$precio}€</p>
                        <img src='$foto' alt='Imagen de {$nombre}.'>
                    </div></div>
                "
        ?>
        <a href="index.php">Retorno.</a>
    </main>

    <footer>
        <p>&copy; Himi y Román.</p>
    </footer>
</body>
</html>