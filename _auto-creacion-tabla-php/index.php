<?php
    $probando = [ // Esta sería la "tabla en sí" (table), esta tabla se llamaria poniendo "tabla($probando);".
        ["Hola", /* th */ "probando"/* Este es el contenido específico (th) */], // Esto serían las filas (tr).
        ["Mundo", /* td */ "que pasa", /* td */ "otra prueba" /* Aquí pasa a td */], // tr.
        ["Esto es para una prueba extra" /* td */] // tr.
    ];
    function tabla($table){ // Función para crear una tabla, arriba hay una referencia.
        //global $probando; // No es necesario al ya estar metiéndolo como parámetro (equivale a $table).
        echo "<table>";
        for ($i=0; $i<count($table); $i++) {
            $filas = $table[$i];
            echo "<tr>";
            for ($j=0; $j<count($filas); $j++){
                $texto = $filas[$j];
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