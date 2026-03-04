<?php
    $titulo = "Inicio";  // Variable para el tittle
    $nombre = "Lista de SQL"; // Variable para el h1

    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
    else{
        $id = 1;
    }

    require_once "_functions.php";

    // Llamada para incluir el inicio del documento
    incluir("inicio");

    // Llamada a la función creada para conectarse a SQL
    conectar();

    // SQL query
    $sql = "SELECT * FROM Videojuegos WHERE id = $id";
    //Llamada a la función creada para ejecutar la SQL query
    ejecutar();

    // Process the result set
    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<section class='info' id='{$row["id"]}'>
                <h2>{$row["Nombre"]}</h2>
                <img src='".ENLACES["logo"]."{$row["Portada"]}' alt='portada de {$row["Nombre"]}'>
                <p>Este juego es un {$row["Tipo"]} que salió originalmente para {$row["Plataforma"]} en el {$row["Lanzamiento"]}, ";
                if($row["Desarrolladora"] === $row["Publicadora"]){
                    echo "fue creado y publicado por {$row["Publicadora"]},";
                }
                else{
                    echo "fue creado por {$row["Desarrolladora"]} y publicado por {$row["Publicadora"]},";
                }
                echo " y tiene un precio de {$row["Precio"]}€.</p>
                <p>Descripción: {$row["Descripción"]}.</p>
                <a href='borrar.php?id={$row["id"]}'><button type='button'>Borrar de la lista</button></a>
                <a href='formulario.php?id={$row["id"]}'><button type='button'>&#8593; Actualizar elemento</button></a></div>
            </section>";
        }
    }
    else {
        echo "<h2>No se encontró el elemento</h2>";
    }

    $sql = "SELECT id, Nombre, Portada, Plataforma, Lanzamiento, Publicadora, Precio FROM Videojuegos WHERE id != $id ORDER BY RAND() DESC LIMIT 4";

    ejecutar();

    if ($result->num_rows > 0) {
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