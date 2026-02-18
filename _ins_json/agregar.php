<?php
    $nombre = $_GET["n"];
    $primAp = $_GET["p"];
    $descri = $_GET["d"];
    $json =  file_get_contents("datos.json");
    $personajes = json_decode($json, true);
    array_push($personajes, ["nombre"=>$nombre,"descri"=>$descri,"primAp"=>$primAp]);
    $newJson = json_encode($personajes, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    file_put_contents("datos.json",$newJson);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Probando</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Personaje añadido</h1>
    </header>

    <main>
        <?php
            echo "
                <h2>Muestra:</h2>
                <div>
                    <h3>$nombre</h3>
                    <p>Apareció por primera vex en: KH$primAp</p>
                    <p>$descri.</p>
                </div>
            ";

            echo "<h2>Comprobación</h2>";
            echo "<pre><code>";
            print_r($personajes);
            echo "</pre></code>";
        ?>

        <a href="index.php"><button type="button">Regresa a ver los personajes</button></a>
    </main>

    <footer>
        <p>&copy; KH</p>
    </footer>
</body>
</html>