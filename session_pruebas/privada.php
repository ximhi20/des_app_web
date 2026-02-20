<?php
    session_start();
    if(!isset($_SESSION["usuario"]) || $_SESSION["usuario"]!=="Ximhi20"){
        header("location: denegada.php");
        exit();
    }

    $title = "Privado";
    $nombre = "Página privada";
    require "_functions.php";
    incluir("inicio");
?>

<p>Esta es la página principal.</p>

<?php
    incluir("final");
?>