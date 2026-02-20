<?php
    //pathinfo(__FILE__, PATHINFO_FILENAME); //Mantengo esto como referencia de como analizar un directorio.
    $index = 1;
    $title = "Entrada";
    $nombre = "Iniciando sesión";
    require_once "_functions.php";
    incluir("inicio");
?>

<a href="abierta.php"><button type="button">Iniciar sesión.</button></a>
<a href="cerrada.php"><button type="button">Cerrar Sesión.</button></a><br>
<a href="privada.php"><button type="button">Entrada.</button></a>

<?php
    incluir("final");
?>