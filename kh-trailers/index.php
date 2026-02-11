<?php
    $fichas = [
        [
            "e" => "VZYOARp9WDk", // Enlace del video.
            "j" => "Final Mix (1.5 ReMIX)", // Juego del trailer.
            "c" => "PS3" //  Consola del juego.
        ],
        [
            "e" => "8t_0sPk-qOk",
            "j" => "Re:Chain of Memories",
            "c" => "PS2"
        ],
        [
            "e" => "Evogc1RnSgE",
            "j" => "II Final Mix (2.5 ReMIX)",
            "c" => "PS3"
        ],
        [
            "e" => "mHHMHDPZPZU",
            "j" => "358/2 Days",
            "c" => "Nintendo DS"
        ],
        [
            "e" => "WamEUfOnWmM",
            "j" => "Birth By Sleep Final Mix",
            "c" => "PSP"
        ],
        [
            "e" => "C2PanjejEfY",
            "j" => "Re:coded",
            "c" => "Nintendo DS"
        ],
        [
            "e" => "kwRT1P7U4ps",
            "j" => "3D: Dream Drop Distance",
            "c" => "Nintendo 3DS"
        ],
        [
            "e" => "YWXio_Jra9s",
            "j" => "III Re Mind",
            "c" => "PS4"
        ],
        [
            "e" => "LGbdvN67iVk",
            "j" => "Dark Road",
            "c" => "Dispositivos móviles"
        ],
        [
            "e" => "w2yDdr8r6Nc",
            "j" => "Melody of Memory",
            "c" => "PS4"
        ]
    ];

    function lista(){
        // Necesario al no tenerlo com parámetro.
        global $fichas;

        foreach ($fichas as $listado) {
            echo "
                <div>
                    <h2>Trailer de Kingdom Hearts {$listado["j"]}<h2>
                    <iframe width='100%' height='300' src='https://www.youtube.com/embed/{$listado["e"]}' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' referrerpolicy='strict-origin-when-cross-origin' allowfullscreen></iframe>
                    <p>{$listado["c"]}<p>
                </div>
            ";
        };
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trailers de KH</title>

    <style>
        html{
            background-color: black;
            color: lightblue;
            text-align: center;
        }

        section.listando{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        section.listando div{
            background-color: coral;
            max-width: 300px;
            margin: 10px;
            padding: 10px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Listado de trailers de la saga de Kingdom Hearts</h1>
    </header>

    <main>
        <section class="listando"><?php lista(); ?></section>
    </main>

    <footer>
        <p>&copy; Square Enix.</p>
    </footer>
</body>
</html>