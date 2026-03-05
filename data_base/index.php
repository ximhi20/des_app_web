<?php
    $titulo = "Inicio";  // Variable para el tittle
    $nombre = "Lista de SQL"; // Variable para el h1
    $index = 1; // Para las cosas en las que influye si estoy en el index o no

    if(isset($_GET['p'])){
        $page = $_GET['p'];
    }
    else{
        $page = 1;
    }

    require_once "_functions.php";

    // Llamada para incluir el inicio del documento
    incluir("inicio");

    // Llamada a la función creada para conectarse a SQL
    conectar();

    // SQL query
    const START = 8;
    $offset = ($page-1)*START;
    $sql = "SELECT id, Nombre, Portada, Plataforma, Lanzamiento, Publicadora, Precio FROM Videojuegos LIMIT ".START." OFFSET $offset";
    //Llamada a la función creada para ejecutar la SQL query
    ejecutar();

    // Process the result set
    if ($result->num_rows > 0) {
        // Llamada a la función creada para las fichas, output dentro de la función
        lista();

        $sql = "SELECT COUNT(*) FROM videojuegos;";
        ejecutar();

        while($row = $result->fetch_assoc()) {
            $total = $row['COUNT(*)'];
        }
        $actual = $offset+START;
        if($page > 1){
            $ant = $page-1;
            echo "<a href='?p=$ant' class='page'><button type='button'>&#8592;</button></a>";
        }
        if($actual < $total){
            $sig = $page+1;
            echo "<a href='?p=$sig' class='page'><button type='button'>&#8594;</button></a>";
        }
    }
    else {
        echo "<h2>Sin resultados</h2>";
    }

    // Llamada a la función creada para cerrar la conexión SQL
    cerrar();

    // Llamada para incluir el final del documento
    incluir("terminar");
?>