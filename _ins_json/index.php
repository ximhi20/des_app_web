<?php
    $json =  file_get_contents("datos.json");
    $personajes = json_decode($json, true);
    $debug = false;

    function listar(){
        global $personajes;
        foreach ($personajes as $id => $info) {
            echo "
                <div id='$id'>
                    <h3>{$info["nombre"]}</h3>
                    <p>Apareció por primera vex en: KH{$info["primAp"]}</p>
                    <p>{$info["descri"]}.</p>
                </div>
            ";
        };
    };
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
        <h1>Probando</h1>
    </header>

    <main>
        <?php
            if($debug){
                echo "<pre><code>";
                print_r($personajes);
                echo "</pre></code>";
            };

            echo "<h2>Lista de personajes</h2>";
            listar();
        ?>

        <h2>Añade un personaje:</h2>
        <form action="agregar.php" method="get">
            <label>Nombre: <input type="text" placeholder="Nombre del personaje." name="n"></label><br>
            <label>Acrónimo del juego en el que apareció por primera vez (sin KH): <input type="text" placeholder="Su primera aparición" name="p"></label><br>
            <label>Dale una pequeña descripción: <input type="text" placeholder="Descripción" name="d"></label><br>
            <input type="submit" value="Mandar el personaje.">
        </form>
    </main>

    <footer>
        <p>&copy; KH</p>
    </footer>
</body>
</html>