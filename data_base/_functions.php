<?php
    require_once "_config.php";

    function incluir($zona){
        global $index;
        include ENLACES[$zona];
    }

    function escritura($selection){
        switch($selection){
            case "titulo":
                global $titulo;
                if($titulo){
                    echo $titulo;
                }
                else{
                    echo "SQL";
                }
                break;
            case "nombre":
                global $nombre;
                if($nombre){
                    echo $nombre;
                }
                else{
                    echo "Muestra";
                }
                break;
            default:
                echo "Pruebas SQL";
        }
    }

    function conectar(){
        global $conn;
        // Create connection
        $conn = new mysqli(SERV, USER, PASS, DBNM);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }

    function ejecutar(){
        global $result;
        global $conn;
        global $sql;
        // Execute the SQL query
        $result = $conn->query($sql);
    }

    function cerrar(){
        global $conn;
        // Closing connection
        $conn->close();
    }

    function lista(){
        global $result;
        echo "<h2>Lista de videojuegos</h2><section class='juegos'>";
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<div><a href='info.php?id={$row["id"]}'><div id='{$row["id"]}'>
                <h3>{$row["Nombre"]}</h3>
                <img src='".ENLACES["logo"]."{$row["Portada"]}' alt='portada de {$row["Nombre"]}'>
                <p>Plataforma original: {$row["Plataforma"]}</p>
                <p>Fecha de lanzamiento: {$row["Lanzamiento"]}.</p>
                <p>Publicadora: {$row["Publicadora"]}</p>
                <p>Precio: {$row["Precio"]}€</p>
            </div></a>
            <a href='borrar.php?id={$row["id"]}'><button type='button'>&#8593; Borrar de la lista</button></a>
            <a href='formulario.php?id={$row["id"]}'><button type='button'>&#8593; Actualizar elemento</button></a></div>";
        }
        echo "</section>";
    }
?>