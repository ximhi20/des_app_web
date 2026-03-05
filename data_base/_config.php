<?php
    // Data base conection values
    const SERV = "localhost"; // Server name
    const USER = "root";      // User name
    const PASS = "root";      // Password
    const DBNM = "local";     // Data base name

    // Para modo administrador
    const ADMIN = false;

    // Lista de los enlaces relativos a nivel de data_base/ a usar
    const ENLACES = [
        "inicio" => "assets/inc/_inicio.php", // El de para incluir el incio en un PHP
        "terminar" => "assets/inc/_terminar.php", // El de para incluir el final en un PHP
        "logo" => "assets/img/games-logos/" // El del logo de los juegos, sin el nombre del archivo (SQL)
    ]
?>