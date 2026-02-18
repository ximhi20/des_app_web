<?php
    $json = file_get_contents("datos.json");
    $comida = json_decode($json, true);
    $anadir = false;

    function listar($tipo){
        global $comida;
        echo "<h2>$tipo</h2><div>";
            foreach ($comida[$tipo] as $alimento) {
                echo "
                    <div>
                        <h3>{$alimento["nombre"]}</h3>
                        <p>Sus ingredientes son:<br>{$alimento["ingredientes"]}.</p>
                        <p>Tiene los alérgenos:<br>{$alimento["alérgenos"]}.</p>
                        <p>Su precio es: {$alimento["precio"]}€</p>
                        <img src='{$alimento["foto"]}' alt='Imagen de {$alimento["nombre"]}.'>
                    </div>
                ";
            };
            echo "</div>";
    };

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
        <section><?php
            foreach ($comida as $type => $thing){
                listar($type);
            };
        ?></section>

        <?php
            if($anadir){
                echo "
                    <form action='plato.php' method='get'>
                        <label>Tipo de plato: <select name='type'>";
                        foreach ($comida as $type => $thing){
                            echo "<option value='$type'>$type</option>";
                        };
                        echo "</select></label><br>
                        <label>Nombre del plato: <input type='text' name='nom'></label><br>
                        <label>Ingredientes: <input type='text' name='ing'></label><br>
                        <label>Alérgenos: <input type='text' name='alr'></label><br>
                        <label>Precio: <input type='number' name='prc'></label><br>
                        <label>URL de la foto: <input type='text' name='url'></label><br>
                        <input type='submit' value='Añade el nuevo plato.'>
                    </form>
                ";
            };
        ?>
    </main>

    <footer>
        <p>&copy; Himi y Román.</p>
    </footer>
</body>
</html>