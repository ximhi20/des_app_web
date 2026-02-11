<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KH - <?php echo $zona ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<header>
    <?php
        if ($zona == "Juegos") {
            echo "<h1>Listado de juegos de la saga de Kingdom Hearts</h1>";
        }
        else{
            echo "<h1>Kingdom Hearts $nombre<h1>";
        };
    ?>
</header>

<main>