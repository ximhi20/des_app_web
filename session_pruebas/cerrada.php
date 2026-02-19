<?php
    session_start();
    session_destroy();

    $title = "Cierre";
    $nombre = "Sesión cerrada";
    require "_functions.php";

    iniciar();
?>

<p>Sesión cerrada correctamente.</p>

<?php
    terminar();
?>