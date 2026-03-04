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
        // Que me de la opción de reiniciar la lista a su estado inicial o hacer una nueva ficha si estoy en el index
        if($index){
            echo "<a href='recrear.php'><button type='button'>Reinicia la lista</button></a>
            <a href='formulario.php'><button type='button'>Haz una nueva ficha</button></a>";
        }
    ?>
</header>
<main>