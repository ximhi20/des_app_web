<?php
    $title = "Error";
    $h1 = "Error, no deberías estar aquí.";
    require_once "_functions.php";
    incluirAp("inicio");
?>

<p>No se como llegaste aquí, prueba a usar otro URL.</p>
<a href="/index.php">Vuelta al inicio.</a>

<?php incluirAp("final"); ?>