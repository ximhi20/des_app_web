<?php
    class Videojuego{
        // Atributes
        public $tittle;
        public $tipe;
        public $platform;

        public function __construct($tittle, $tipe, $platform){
            $this->tittle = $tittle;
            $this->tipe = $tipe;
            $this->platform = $platform;
        }
    }

    // Create object
    $KH = new Videojuego("Kingdom Hearts", "RPG", "PlayStation 2");
    $GoW = new Videojuego("God of War", "Hack and Slash", "PlayStation 2");
    $HZD = new Videojuego("Horizon Zero DAwn", "Acción y Aventura", "PlayStation 4");

    // Show public property
    echo $KH->tittle;
    echo " es un ";
    echo $KH->tipe;

    // Modify public property
    $KH->tipe = "JRPG";

    // Show modified property
    echo " o, más específicamente, un ";
    echo $KH->tipe;