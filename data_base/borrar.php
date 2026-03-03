<?php
    
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $titulo = "Borrando elemento con id: $id";  // Variable para el tittle
        $nombre = "Borrado correctamente"; // Variable para el h1
    }
    else{
        $titulo = "Nada seleccionado";
        $nombre = "Nada que borrar";
    }

    require_once "_functions.php";

    incluir("inicio");

    if(isset($_GET["id"])){
        conectar();

        $sql = "SELECT `Nombre` FROM `videojuegos` WHERE `id` = '$id'";

        ejecutar();

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<p>{$row["Nombre"]} va a ser borrado.</p>";
            }
        }
        else {
            echo "<p>No existe ningún elemento con la id: $id </p>";
        }

        $sql = "DELETE FROM `videojuegos` WHERE ((`id` = '$id'));";

        ejecutar();

        echo "<p>Elemento borrado correctamente.</p>";

        cerrar();
    }
    else{
        echo "<p>¿Qué haces aquí?</p>";
    }

    incluir("terminar");
?>