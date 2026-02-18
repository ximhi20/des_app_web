<?php
    $json =  file_get_contents("assets/json/datos.json");
    $personajes = json_decode($json, true);
    $debug = false;

    function listar(){
        global $personajes;
        foreach ($personajes as $id => $info) {
            echo "
                <div id='$id'>
                    <h3>{$info["nombre"]}</h3>
                    <p>Apareció por primera vex en: KH{$info["primAp"]}</p>
                    <p>{$info["descri"]}.</p>
                </div>
            ";
        };
    };

    function inicio(){
        global $title;
        include "assets/php/inicio.php";
    };

    function terminar(){
        include "assets/php/final.php";
    }
?>