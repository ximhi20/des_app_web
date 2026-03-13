<?php
    require_once "_config.php";

    function incluirAp($path){
        include ENLACES[$path];
    }

    function escrituraAp($selection){
        switch($selection){
            case "title":
                global $title;
                if($title){
                    echo $title;
                }
                else{
                    echo "Apache";
                }
                break;
            case "h1":
                global $h1;
                if($h1){
                    echo $h1;
                }
                else{
                    echo "Probando apache";
                }
                break;
            default:
                echo "Las pruebas de apache";
        }
    }
?>