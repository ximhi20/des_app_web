<?php
    $fichas = [
        [
            "nombre" => "Final Mix", // Nombre del juego excluyendo la parte "Kingdom Hearts".
            "enlace" => "assets/img/portadas/fm.png", // Enlace de la imagen (la portada del juego).
            "altern" => "Logo de la versión Final Mix del primer juego.", // Texto alternativo de la imagen.
            "descRe" => "El primer juego de la saga, donde empiezan las aventuras de Sora y sus amigos." // Descripción "reducida".
        ],
        [
            "nombre" => "Re:Chain of Memories",
            "enlace" => "assets/img/portadas/recom.png",
            "altern" => "Logo de Re:Chain of Memories.",
            "descRe" => "Sora, Donald y Goofy llegan a un castillo en el que pierden sus recuerdos según van avanzando."
        ],
        [
            "nombre" => "II Final Mix",
            "enlace" => "assets/img/portadas/iifm.png",
            "altern" => "Logo de la versión Final Mix del segundo juego.",
            "descRe" => "Esta es la segunda aventura \"oficial\" de Sora, en la que se tiene que enfrentar a la misteriosa Organización XIII."
        ],
        [
            "nombre" => "358/2 Days",
            "enlace" => "assets/img/portadas/days.png",
            "altern" => "Logo de 358/2 Days",
            "descRe" => "En este juego controlas a Roxas cuando aún era parte de la Organización XIII."
        ],
        [
            "nombre" => "Birth by Sleep Final Mix",
            "enlace" => "assets/img/portadas/bbs.png",
            "altern" => "Logo de la versión Final Mix de Birth by Sleep.",
            "descRe" => "Una precuela sucediendo 10 años antes de los eventos del primer juego, aquí seleccionas entre Terra, Aqua y Ventus, y experimentas sus historias separadas."
        ],
        [
            "nombre" => "Re:coded",
            "enlace" => "assets/img/portadas/recoded.png",
            "altern" => "Logo de Re:coded.",
            "descRe" => "Aquí controlas a una versión de datos de Sora analizando los datos del diario de Pepito del primer juego que se perdieron en Chain of Memories."
        ],
        [
            "nombre" => "Dream Drop Distance HD",
            "enlace" => "assets/img/portadas/ddd.png",
            "altern" => "Logo de la versión HD de Dream Drop Distance.",
            "descRe" => "Sora y Riku entran en el Reino de los Sueños para despertar los Mundos que no llegaron a recuperarse de los eventos del primer juego."
        ],
        [
            "nombre" => "III Re Mind",
            "enlace" => "assets/img/portadas/iiirm.png",
            "altern" => "Logo del tercer juego junto con su DLC Re Mind.",
            "descRe" => "La tercera aventura \"oficial\" de Sora, donde tiene que evitar que Xehanort obtenga acceso a Kingdom Hearts."
        ],
        [
            "nombre" => "&#967;(Chi)",
            "enlace" => "assets/img/portadas/chi.png",
            "altern" => "Logo de Chi.",
            "descRe" => "El juego de navegador de KH, tratando sobre los eventos que llevan a la Guerra de las Llaves Espada (descontinuado)."
        ],
        [
            "nombre" => "Union &#935;(Cross)",
            "enlace" => "assets/img/portadas/unioncross.png",
            "altern" => "Logo de Union Cross.",
            "descRe" => "El juego de móbil de KH, aunque, a diferencia de lo que se puede pensar, es uno completamente distinto al de navegador web (&#967;), actuando como una secuela incluso en el punto en el que aún se llamaba Unchained &#967;(Chi) (descontinuado)."
        ],
        [
            "nombre" => "Dark Road",
            "enlace" => "assets/img/portadas/dr.png",
            "altern" => "Logo de Dark Road.",
            "descRe" => "Viene en conjunto con Union Cross y trata de la historia de como Xehanort llegó a combertirse en el \"Buscador de la Oscuridad\" (descontinuado)."
        ],
        [
            "nombre" => "Melody of Memory",
            "enlace" => "assets/img/portadas/mom.png",
            "altern" => "Logo de Melody of Memory",
            "descRe" => "Tras los eventos del \"tercer\" juego, Kairi tiene que investigar sus recuerdos para poder encontrar a Sora."
        ],
        [
            "nombre" => "Missing-Link",
            "enlace" => "assets/img/portadas/missing-link.png",
            "altern" => "Logo de Missing-Link",
            "descRe" => "Este iba a tratar sobre los eventos desconocidos entre Union Cross y Dark Road, explorando los misterios de eventos en Scala ad Caelum (cancelado)."
        ]
    ];

    function lista(){
        // Necesario al no tenerlo com parámetro.
        global $fichas;

        foreach ($fichas as $listado) {
            echo "
                <div>
                    <h2>Kingdom Hearts<br>{$listado["nombre"]}</h2>
                    <img src='{$listado["enlace"]}' alt='{$listado["altern"]}'>
                    <p>{$listado["descRe"]}</p>
                </div>
            ";
        };
    };
?>