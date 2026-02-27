<?php
    $titulo = "Inicio";
    $nombre = "Lista de SQL";

    require_once "_functions.php";

    incluir("inicio");

    // Llamada a la función creada para conectarse a SQL
    conectar();

    // SQL query
    $sql = "SELECT id, Nombre, Portada, Plataforma, Lanzamiento, Publicadora, Precio FROM Videojuegos LIMIT 15";
    //Llamada a la función creada para ejecutar la SQL query
    ejecutar();

    // Process the result set
    if ($result->num_rows > 0) {
        // Llamada a la función creada para las ficghas, output dentro de la función
        lista();
    }
    else {
        echo "<h2>Sin resultados</h2>";
    }

    // Llamada a la función creada para cerrar la conexión SQL
    cerrar();

    incluir("terminar");
?>