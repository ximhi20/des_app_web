<?php
    $buscadores = [
        [
            "navega" => "Brave",
            "enlace" => "https://search.brave.com/search",
            "buscar" => "q"
        ],
        [
            "navega" => "Steam",
            "enlace" => "https://store.steampowered.com/search",
            "buscar" => "term"
        ],
        [
            "navega" => "YouTube",
            "enlace" => "https://www.youtube.com/results",
            "buscar" => "search_query"
        ]
    ];
    $recomendaciones = [ "PHP", "Kingdom Hearts", "Gatos", "Perros"];
    if (isset($_GET["s"])) {
        $searcher = $_GET["s"];
    }
    else {
        $searcher = "Brave";
    };
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
</head>

<body>
    <header>
        <h1>Buscador:</h1>
        <form action="index.php" method="get">
            <label>Selecciona el buscador: <select name="s">
                <?php
                    foreach ($buscadores as $busqueda) {
                        echo "<option value='{$busqueda["navega"]}'>{$busqueda["navega"]}</option>";
                    };
                ?>
            </select></label><br>
            <button type="submit">Cambia buscador</button>
        </form>
    </header>

    <main>
        <?php
            foreach ($buscadores as $busqueda) {
                if ($searcher == $busqueda['navega']) {
                    echo "
                            <form action='{$busqueda["enlace"]}' target='_blank'>
                                <label>Haz una búsqueda en {$busqueda["navega"]}: <input type='text' name='{$busqueda["buscar"]}' placeholder='Inserta tu búsqueda'></label><br>
                                <button type='submit'>Pulsa para hacer la búsqueda</button>
                            </form>
                        ";
                };
            };
        ?>

        <div>
            <p>Recomendaciones de búsqueda:</p>
            <ul>
                <?php
                    foreach ($recomendaciones as $recomendado) {
                        echo "<li><a href='https://search.brave.com/search?q=$recomendado' target='_blank'>$recomendado</a></li>";
                    };
                ?>
            </ul>
        </div>
    </main>

    <footer>
        <p>&copy; Buscador.</p>
    </footer>
</body>
</html>