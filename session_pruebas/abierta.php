<?php
    session_start();
    $_SESSION["usuario"] = "Ximhi20";

    $title = "Apertura";
    $nombre = "Sesión abierta";
    require "_functions.php";

    iniciar();
?>

<p>Sesión iniciada correctamente.</p>

<?php
    terminar();
?>