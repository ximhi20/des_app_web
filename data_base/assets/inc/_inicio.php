<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php escritura("titulo"); ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header>
    <h1><?php escritura("nombre"); ?></h1>
    <?php
        if($index){
            // Que me de la opción de reiniciar la lista a su estado inicial si estoy en el index
            echo "<a href='recrear.php'><button type='button'>Reinicia la lista</button></a>";
        }
    ?>
</header>
<main>