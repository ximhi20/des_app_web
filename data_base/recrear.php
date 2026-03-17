<?php
    $titulo = "Recreación";
    $nombre = "Para empezar desde cero";

    require_once "_functions.php";

    incluir("inicio");

    conectar();

    $sql = "DROP TABLE `videojuegos`;";

    ejecutar();

    $sql = "CREATE TABLE `videojuegos` (
        `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `slug` varchar(255) COLLATE 'utf8mb4_spanish2_ci' NULL,
        `Nombre` varchar(255) COLLATE 'utf8mb4_spanish2_ci' NOT NULL,
        `Descripción` tinytext COLLATE 'utf8mb4_spanish2_ci' NULL,
        `Tipo` varchar(255) COLLATE 'utf8mb4_spanish2_ci' NULL,
        `Plataforma` varchar(255) COLLATE 'utf8mb4_spanish2_ci' NULL,
        `Desarrolladora` varchar(255) COLLATE 'utf8mb4_spanish2_ci' NULL,
        `Publicadora` varchar(255) COLLATE 'utf8mb4_spanish2_ci' NULL,
        `Precio` decimal(4,2) NULL,
        `Lanzamiento` date NULL,
        `Portada` varchar(255) COLLATE 'utf8mb4_spanish2_ci' NULL
    ) COLLATE 'utf8mb4_spanish2_ci';";

    ejecutar();

    $sql = "INSERT INTO `videojuegos` 
            (`slug`, `Nombre`, `Descripción`, `Tipo`, `Plataforma`, `Desarrolladora`, `Publicadora`, `Precio`, `Lanzamiento`, `Portada`)
            VALUES
            ('Kingdom-Hearts-I', 'Kingdom Hearts', 'Trata de las aventuras de Sora visitando otros Mundos y salvándoles de los Sincorazón mientras busca a sus amigos junto con Donald y Goofy', 'RPG', 'PlayStation 2', 'Square', 'Disney', 15.00, '2002-03-28', 'kh.webp'),
            ('Dragon-Age-Origins', 'Dragon Age: Origins', 'Vive las aventuras del Guarda Gris, único superviviente de una orden que necesita salvar su continente de la Ruina, enfrentándose a los Engendros Tenebrosos en su camino a derrotar al Archidemonio y detenerlos antes de que sea demasiado tarde', 'RPG', 'Xbox 360', 'BioWare', 'Electronic Arts', 20.00, '2009-11-03', 'dao.png'),
            ('Baldurs-gate-I', 'Baldur`s Gate', 'En este juego experimentas los Reinos Olvidados en una aventura donde te enfrentas a quienes desean destruir Faerûn', 'RPG', 'PC', 'BioWare', 'Interplay Entertainment', 20.00, '1998-11-30', 'bg.webp'),
            ('The-Elder-Scrolls-Arena', 'The Elder Scrolls: Arena', 'En el primer videojuego de la famosa saga The Elder Scrolls, viajas por todo el continente de Tamriel con el objetivo de rescatar al emperador', 'RPG', 'PC', 'Bethesda', 'Bethesda', 2.00, '1994-03-25', 'tesa.webp'),
            ('Horizon-Zero-Dawn', 'Horizon Zero Dawn', 'En este juego experimentas la vida de Aloy junto con sus intentos de descubrir quien es su madre y detener planes de erradicación mundial que descubrió entre medias', 'Aventura', 'PlayStation 4', 'Guerrilla Games', 'Sony', 35.00, '2017-02-28', 'hzd.jpg'),
            ('Final-Fantasy-I', 'Final Fantasy', 'En el juego que empezó la saga, cuatro compañeros tienen que reestablecer la luz de los orbes elementales del mundo que llevan consigo y salvar su mundo de las fuerzas malvadas a las que se enfrentan durante el juego', 'RPG', 'NES', 'Square', 'Square', 10.00, '1987-12-18', 'ffi.webp'),
            ('God-of-War-2005', 'God of War', 'En el juego que inició todo (no confundir con el del mismo nombre de PS4), Kratos desea redimirse y olvidar todo lo que hizo bajo las órdenes de Ares, el dios de la guerra, por lo que los dioses le comandan enfrentarse a él bajo esa promesa', 'Hack and slash', 'PlayStation 2', 'Santa Monica Studio', 'Sony', 15.00, '2005-03-22', 'gow.webp'),
            ('The-Legend-of-Zelda-I', 'The Legend of Zelda', 'Este juego empieza la misión común de la saga de enfrentarse a Ganon para salvar Hyrule y rescatar a la princesa Zelda, obteniendo las piezas de la Trifuerza por el camino', 'Aventura', 'Famicon', 'Nintendo', 'Nintendo', 10.00, '1986-02-21', 'tloz.jpg'),
            ('Donkey-Kong-Arcade', 'Donkey Kong', 'Jumpman (Mario) tiene que rescatar a una dama (Pauline) del gorila Donkey Kong (aunque juegos futuros implican que en realidad se trata de su abuelo, Cranky Kong), teniendo que escalar un edificio y evitar los barriles que le lanzan', 'Plataformas', 'Arcade', 'Nintendo', 'Nintendo', 10.00, '1981-07-09', 'dk.jpg'),
            ('Grand-Theft-Auto-I', 'Grand Theft Auto', 'En este juego que empezó una de las sagas más vendidas de la historia, el protagonista tiene que hacer todo lo que pueda para obtener dinero, trabajando para organizaciones criminales y haciendo varias misiones con ese objetivo', 'Aventura', 'PC', 'DMA Design', 'BMG Interactive', 12.00, '1997-11-28', 'gta.webp'),
            ('Red-Dead-Revolver', 'Red Dead Revolver', 'Este juego trata sobre las aventuras de Red Harlow en sus intentos por vengar la muerte de su padre, convirtiéndose en un cazarrecompensas con la esperanza de encontrarse con el asesino entre los criminales a los que se enfrenta', 'Aventura', 'PlayStation 2', 'Rockstar', 'Rockstar', 15.00, '2004-05-04', 'rdr.jpg'),
            ('The-Witcher-I', 'The Witcher', 'Este juego es una secuela de los libros, Geralt se olvida de quien es y todo lo que hizo y sus amigos intentan curarle de esa condición', 'RPG', 'PC', 'CD Projekt', 'Atari', 8.00, '2007-10-26', 'tw.jpg'),
            ('Pokemon-Red-Blue', 'Pocket Monsters Red and Blue', 'Aquí se inició la saga de juegos de Pokémon, en estos juegos (la saga siempre saca dos juegos a la vez) vives las aventuras de un niño deseando convertirse en maestro pokémon', 'RPG', 'Game Boy', 'Game Freak', 'Nintendo', 5.00, '1996-02-27', 'pmr.webp'),
            ('Sonic-the-Hedgehog-I', 'Sonic the Hedgehog', 'En esta primera aventura de Sonic, este tiene que detener los malvados planes del doctor Eggman y evitar que obtenga las Chaos Emeralds, salvando los animales que el doctor loco encerró para convertir en máquinas por el camino', 'Plataformas', 'Genesis', 'Sega', 'Sega', 9.00, '1997-06-21', 'sth.jpg');
        ";

    ejecutar();

    if($result){
        echo "<p>Reinicio realizado correctamente.</p>";
    }

    cerrar();

    incluir("terminar");
?>