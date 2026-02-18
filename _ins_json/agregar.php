<?php
    $title = "Personaje añadido";
    require "_inc.php";
    $nombre = $_GET["n"];
    $primAp = $_GET["p"];
    $descri = $_GET["d"];

    array_push($personajes, ["nombre"=>$nombre,"descri"=>$descri,"primAp"=>$primAp]);
    $newJson = json_encode($personajes, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    file_put_contents("datos.json",$newJson);

    inicio();
?>

<?php
    echo "
        <h2>Muestra:</h2>
        <div>
            <h3>$nombre</h3>
            <p>Apareció por primera vex en: KH$primAp</p>
            <p>$descri.</p>
        </div>
    ";

    if($debug){
        echo "<h2>Comprobación</h2>";
        echo "<pre><code>";
        print_r($personajes);
        echo "</pre></code>";
    };
?>

<a href="index.php"><button type="button">Regresa a ver los personajes</button></a>

<?php terminar(); ?>