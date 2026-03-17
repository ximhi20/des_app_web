<?php
    if(isset($_GET["slug"])){
        $juego = $_GET["slug"];
        $title = $juego;
        $h1 = $juego;
    }
    else{
        $juego = null;
        $title = "Sin selección";
        $h1 = "Realiza una selección:";
    }

    require_once "_functions.php";
    incluirAp("inicio");

    $conn = new mysqli($SERV, $USER, $PASS, $DBNM);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    if(isset($juego)){
        $sql = "SELECT * FROM videojuegos WHERE slug = '$juego'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()){
                echo "<section class='info' id='{$row["id"]}'>
                <h2>{$row["Nombre"]}</h2>
                <p>Este juego es un {$row["Tipo"]} que salió originalmente para {$row["Plataforma"]} en el {$row["Lanzamiento"]}, ";
                if($row["Desarrolladora"] === $row["Publicadora"]){
                    echo "fue creado y publicado por {$row["Publicadora"]},";
                }
                else{
                    echo "fue creado por {$row["Desarrolladora"]} y publicado por {$row["Publicadora"]},";
                }
                echo " y tiene un precio de {$row["Precio"]}€.</p>
                <p>Descripción: {$row["Descripción"]}.</p>";
                echo "</section>";
            }
        }
    }

    $sql = "SELECT slug, Nombre FROM videojuegos WHERE slug != '$juego'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<div class='enlaces'>";
        while ($row = $result->fetch_assoc()){
            echo "<a href='/product/{$row["slug"]}'>{$row["Nombre"]}</a>";
        }
        echo "</div>";
    }

    $conn->close();
?>

<a href="/apache">Regresar</a>

<?php incluirAp("final"); ?>