<?php
    $zona = $_GET["a"]; // a de abreviatura (el juego en el que se "está").
    include "assets/include/juegos-kh.php";
    foreach ($fichas as $listado){
        if ($listado["abrevi"] == $zona) {
            $nombre = $listado["nombre"];
            $src = $listado["enlace"];
            $alt = $listado["altern"];
            $des = $listado["descAv"];
        };
    };
    include "assets/include/inicio.php";
?>

<img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" class="sola">
<p class="largo"><?php echo $des; ?></p>

<?php
    include "assets/include/final.php";
?>