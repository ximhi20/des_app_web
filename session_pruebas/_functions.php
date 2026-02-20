<?php
    function escrituras($zona){
        switch ($zona) {
            case "title":
                global $title;
                if($title){
                    echo $title;
                }
                else{
                    echo "Sesiones";
                }
                break;
            case "nombre":
                global $nombre;
                if($nombre){
                    echo $nombre;
                }
                else{
                    echo "Página de Himi";
                }
                break;
            default:
                echo "Probando sesiones";
        }
    };

    function incluir($zona){
        $enlaces = [
            "inicio" => "iniciar.php",
            "final" => "terminar.php"
        ];

        include "assets/php/_$enlaces[$zona]";
    };

    function regreso(){
        global $index;
        if(!$index){
            echo "<a href='index.php'><button>Regresa al inicio de sesión.</button></a>";
        }
    };
?>