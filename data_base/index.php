<?php
    $titulo = "Inicio";  // Variable para el tittle
    $nombre = "Lista de SQL"; // Variable para el h1
    $index = 1; // Para las cosas en las que influye si estoy en el index o no

    require_once "_functions.php";

    // Llamada para incluir el inicio del documento
    incluir("inicio");

    // Llamada a la función creada para conectarse a SQL
    conectar();

    // SQL query
    $sql = "SELECT id, Nombre, Portada, Plataforma, Lanzamiento, Publicadora, Precio FROM Videojuegos LIMIT 16";
    //Llamada a la función creada para ejecutar la SQL query
    ejecutar();

    // Process the result set
    if ($result->num_rows > 0) {
        // Llamada a la función creada para las fichas, output dentro de la función
        lista();
    }
    else {
        echo "<h2>Sin resultados</h2>";
    }

    // Llamada a la función creada para cerrar la conexión SQL
    cerrar();

    // Llamada para incluir el final del documento
    incluir("terminar");
?>