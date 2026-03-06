<?php
    require_once "_config.php";

    function inclusion($zona){
        include ENLACES[$zona];
    }

    function escribir($selection){
        switch($selection){
            case "titulo":
                global $titulo;
                if($titulo){
                    echo $titulo;
                }
                else{
                    echo "Mail";
                }
                break;
            case "nombre":
                global $nombre;
                if($nombre){
                    echo $nombre;
                }
                else{
                    echo "Mandar mail";
                }
                break;
            default:
                echo "Pruebas mail";
        }
    }
?>