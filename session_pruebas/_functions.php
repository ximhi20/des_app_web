<?php
function iniciar(){
    global $title;
    global $nombre;
    include "assets/php/iniciar.php";
};

function terminar(){
    global $index;
    include "assets/php/terminar.php";
};

function regreso(){
    echo "<a href='index.php'><button>Regresa al inicio de sesión.</button></a>";
};
?>