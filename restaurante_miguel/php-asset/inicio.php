<?php
    $nombre_largo = "Restaurante $nombre $lugar";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page.$nombre_largo; ?></title>
    <meta name="description" content="Restaurante Bretón: Galetes saladas, Crêpes, sidra.">
    <link rel="stylesheet" href="style.css">
</head>
<body id="<?php echo $id; ?>">
    <header>
        <a href="index.php" class="logo">Le Menhir</a>
        <?php include "php-asset/menu.php"; ?>
    </header>
    <main>