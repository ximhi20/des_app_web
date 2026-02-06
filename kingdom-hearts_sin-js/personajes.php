<?php
    $pag = "Personajes - ";
    $ejec = "onload='lanzar(`pers`)'";
    include "php-asset/inicio.php";
?>

<h1>Personajes de Kingdom Hearts:</h1>


<h2>Protagonistas:</h2>
<section id="char_prin" class="ficha"><?php lista($list["char"]["main"]); ?></section>

<h2>Antagonistas</h2>
<section id="char_ant" class="ficha"><?php lista($list["char"]["ant"]); ?></section>

<?php include "php-asset/final.php" ?>