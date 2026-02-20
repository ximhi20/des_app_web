<?php
    session_start();
    $_SESSION["usuario"] = "Ximhi20";

    $title = "Apertura";
    $nombre = "Sesión abierta";
    require_once "_functions.php";

    incluir("inicio");
?>

<p>Sesión iniciada correctamente.</p>

<?php
    incluir("final");
?>