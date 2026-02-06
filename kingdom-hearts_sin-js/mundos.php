<?php
    $pag = "Mundos - ";
    $ejec = "onload='lanzar(`mund`)'";
    include "php-asset/inicio.php";
?>

<h1>Mundos de Kingdom Hearts:</h1>


<h2>Mundos originales:</h2>
<section id="mun_ori" class="ficha"><?php lista($list["world"]["orig"]); ?></section>

<h2>Mundos Disney:</h2>
<section id="mun_dis" class="ficha"><?php lista($list["world"]["disney"]); ?></section>

<?php include "php-asset/final.php" ?>