<?php
    session_start();
    session_destroy();

    $title = "Cierre";
    $nombre = "Sesión cerrada";
    require "_functions.php";

    incluir("inicio");
?>

<p>Sesión cerrada correctamente.</p>

<?php
    incluir("final");
?>