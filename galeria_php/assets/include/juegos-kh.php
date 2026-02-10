<?php
    $fichas = [
        [
            "nombre" => "Kingdom Hearts Final Mix",
            "enlace" => "assets/img/portadas/fm.png",
            "altern" => "Logo de la versión Final Mix del primer juego.",
            "descri" => "El primer juego de la saga, donde empiezan las aventuras de Sora y sus amigos."
        ],
        [
            "nombre" => "Kingdom Hearts Re:Chain of Memories",
            "enlace" => "assets/img/portadas/recom.png",
            "altern" => "Logo de Re:Chain of Memories.",
            "descri" => "Sora, Donald y Goofy llegan a un castillo en el que pierden sus recuerdos según van avanzando."
        ],
        [
            "nombre" => "Kingdom Hearts II Final Mix",
            "enlace" => "assets/img/portadas/iifm.png",
            "altern" => "Logo de la versión Final Mix del segundo juego.",
            "descri" => "Esta es la segunda aventura \"oficial\" de Sora, en la que se tiene que enfrentar a la misteriosa Organización XIII."
        ],
        [
            "nombre" => "Kingdom Hearts 358/2 Days",
            "enlace" => "assets/img/portadas/days.png",
            "altern" => "Logo de 358/2 Days",
            "descri" => "En este juego controlas a Roxas cuando aún era parte de la Organización XIII."
        ],
        [
            "nombre" => "Kingdom Hearts Birth by Sleep Final Mix",
            "enlace" => "assets/img/portadas/bbs.png",
            "altern" => "Logo de la versión Final Mix de Birth by Sleep.",
            "descri" => "Una precuela sucediendo 10 años antes de los eventos del primer juego, aquí seleccionas entre Terra, Aqua y Ventus, y experimentas sus historias separadas."
        ],
        [
            "nombre" => "Kingdom Hearts Re:coded",
            "enlace" => "assets/img/portadas/recoded.png",
            "altern" => "Logo de Re:coded.",
            "descri" => "Aquí controlas a una versión de datos de Sora analizando los datos del diario de Pepito del primer juego que se perdieron en Chain of Memories."
        ],
        [
            "nombre" => "Kingdom Hearts Dream Drop Distance HD",
            "enlace" => "assets/img/portadas/ddd.png",
            "altern" => "Logo de la versión HD de Dream Drop Distance.",
            "descri" => "Sora y Riku entran en el Reino de los Sueños para despertar los Mundos que no llegaron a recuperarse de los eventos del primer juego."
        ],
        [
            "nombre" => "Kingdom Hearts III Re Mind",
            "enlace" => "assets/img/portadas/iiirm.png",
            "altern" => "Logo del tercer juego junto con su DLC Re Mind.",
            "descri" => "La tercera aventura \"oficial\" de Sora, donde tiene que evitar que Xehanort obtenga acceso a Kingdom Hearts."
        ],
        [
            "nombre" => "Kingdom Hearts Chi",
            "enlace" => "assets/img/portadas/chi.png",
            "altern" => "Logo de Chi.",
            "descri" => "El juego de navegador de KH, tratando sobre los eventos que llevan a la Guerra de las Llaves Espada (descontinuado)."
        ],
        [
            "nombre" => "Kingdom Hearts Union Cross",
            "enlace" => "assets/img/portadas/unioncross.png",
            "altern" => "Logo de Union Cross.",
            "descri" => "El juego de móbil de KH, aunque, a diferencia de lo que se puede pensar, es uno completamente distinto al de navegador web (Chi), actuando como una secuela incluso en el punto en el que aún se llamaba Unchained Chi (descontinuado)."
        ],
        [
            "nombre" => "Kingdom Hearts Dark Road",
            "enlace" => "assets/img/portadas/dr.png",
            "altern" => "Logo de Dark Road.",
            "descri" => "Viene en conjunto con Union Cross y trata de la historia de como Xehanort llegó a combertirse en el \"Buscador de la Oscuridad\" (descontinuado)."
        ],
        [
            "nombre" => "Kingdom Hearts Melody of Memory",
            "enlace" => "assets/img/portadas/mom.png",
            "altern" => "Logo de Melody of Memory",
            "descri" => "Tras los eventos del \"tercer\" juego, Kairi tiene que investigar sus recuerdos para poder encontrar a Sora."
        ],
        [
            "nombre" => "Kingdom Hearts Missing-Link",
            "enlace" => "assets/img/portadas/missing-link.png",
            "altern" => "Logo de Missing-Link",
            "descri" => "Este iba a tratar sobre los eventos desconocidos entre Union Cross y Dark Road, explorando los misterios de eventos en Scala ad Caelum (cancelado)."
        ]
    ];

    function lista(){
        global $fichas;

        foreach ($fichas as $listado) {
            echo "
                <div>
                    <h2>{$listado["nombre"]}</h2>
                    <img src='{$listado["enlace"]}' alt='{$listado["altern"]}'>
                    <p>{$listado["descri"]}</p>
                </div>
            ";
        };
    };
?>