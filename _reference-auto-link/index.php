<!-- Para dejar constancia de como hice para que pueda entrar en los directorios que necesite automáticamente, suponiendo que se está en una carpeta creada por "Local" en la que entraste en la carpeta "public", dentro de "app", se borró todo y se puso la carpeta con los directorios de GitHub. -->

<?php
    $path = "GitHub/des_app_web/*";
    $dir = glob($path, GLOB_ONLYDIR);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direcciones</title>
    <style>
        html{
            text-align: center;
            background-color: lightblue;
        }

        ul{
            list-style: none;
        }

        li{
            margin: 10px;
        }

        a{
            text-decoration: none;
            color: red;
            background-color: violet;
            padding: 3px;
            border-radius: 3px;
            transition: .75s;

            &:hover{
                color: blue;
                background-color: red;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>¿A dónde quieres ir?</h1>
    </header>

    <main>
        <ul>
            <?php
                foreach ($dir as $folder) {
                    $exp = explode("/", $folder);
                    $name = $exp[2];
                    echo "<li><a href=";
                    if($name != "_apache"){
                        echo"'$folder'";
                    }
                    else{
                        echo "apache";
                    }
                    echo ">$name</a></li>";
                };
            ?>
        </ul>
    </main>

    <footer>
        <p>&copy; Selección.</p>
    </footer>
</body>
</html>