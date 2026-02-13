<?php
    $probando = [ // Esta sería la "tabla en sí", esta tabla se llamaria poniendo tabla($probando);.
        ["Hola", "probando"/* El contenido específico se pone aquí dentro */], // Esto serían las filas.
        ["Mundo", "que pasa", "otra prueba"],
        ["Esto es para una prueba extra"]
    ];
    function tabla($contenido){ // Función para crear una tabla, arriba hay una referencia.
        global $probando;
        echo "<table>";
        for ($i=0; $i<count($contenido); $i++) {
            echo "<tr>";
            for ($j=0; $j<count($contenido[$i]); $j++){
                $texto = $contenido[$i][$j];
                if ($i==0) {
                    echo "<th>{$texto}</th>";
                }
                else{
                    echo "<td>{$texto}</td>";
                };
            };
            echo "</tr>";
        };
        echo "</table>";
    };
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas</title>
    <style>
        html{
            text-align: center;
        }

        table{
            justify-self: center;
        }

        table,
        td,
        th{
            border: 1px solid black;
        }

        td,
        th{
            padding: 3px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Prueba:</h1>
    </header>

    <main>
        <?php tabla($probando); // Llamada a la función. ?>
    </main>

    <footer>
        <p>&copy; 2026.</p>
    </footer>
</body>
</html>