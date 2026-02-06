// Lista con la información sobre los distintos personajes y Mundos.
const LIST = {
    char: { // Los personajes.
        main: [ // Los principales.
            {
                name: 'Sora', // Nombre del personaje o mundo.
                url: 'img/personajes/protas/sora.webp', // URL para la imagen.
                alt: 'Sora de Kingdom Hearts III.', // Alt de la imagen.
                desc: 'El protagonista y a quien controlas en la mayoría de los juegos.' // la información.
            },
            {
                name: 'Aqua, Terra y Ventus',
                url: 'img/personajes/protas/aqua_terra_ventus.webp',
                alt: 'Los protagonistas de BbS em la necrópolis.',
                desc: 'Quienes controlas en KH Birth by Sleep.'
            },
            {
                name: 'Roxas',
                url: 'img/personajes/protas/roxas.webp',
                alt: 'Roxas como se ve en KH II.',
                desc: 'Personaje principal de KH 358/2 Days.'
            }
        ],
        ant: [ // Los antagonistas.
            {
                name: 'Xehanort',
                url: 'img/personajes/antagonistas/xehanort.webp',
                alt: 'Todos los miembros de la Organización XIII.',
                desc: 'El antagonista principal en la mayoría de los juegos.'
            },
            {
                name: 'Organización XIII',
                url: 'img/personajes/antagonistas/organizationxiii.webp',
                alt: 'El Maestro Xehanort como se ve en KH III.',
                desc: 'Un grupo antagonístico recurrente en varios juegos.'
            }
        ]
    },
    world: { // Los Mundos.
        orig: [ // Los originales de KH.
            {
                name: 'Islas del Destino',
                url: 'img/mundos/originales/destiny_islands.png',
                alt: 'Representación de las Islas del Destino.',
                desc: 'Mundo original de Sora y Riku, de donde desean salir para visitar otros mundos.'
            },
            {
                name: 'Villa Crepúsculo',
                url: 'img/mundos/originales/traverse_town.png',
                alt: 'Representación de Villa Crepúsculo.',
                desc: 'Mundo en el que Roxas se encuentra durante el tutorial de KH II.'
            },
            {
                name: 'Ciudad de Paso',
                url: 'img/mundos/originales/twilight_town.png',
                alt: 'Representación de Ciudad de Paso.',
                desc: 'Mundo en el que se encuentran aquellos personajes que hallan perdido el suyo por culpa de los Sincorazón.'
            }
        ],
        disney: [ // Los que salieron de Disney.
            {
                name: 'Castillo Disney',
                url: 'img/mundos/disney/disney_castle.png',
                alt: 'Representación del Castillo Disney.',
                desc: 'Mundo en el que se encuentran varios personajes Disney que no tienen uno "oficial".'
            },
            {
                name: 'Wonderland',
                url: 'img/mundos/disney/wonderland.png',
                alt: 'Representación de Wonderland.',
                desc: 'Mundo representando la película animada de Alicia en el País de las Maravillas.'
            }
        ]
    }
};

// Función para crear las listas de personajes y mundos, con "rele" como la parte de LIST a usar y "id" la id del elemento a "sustituir".
function lista(rele, id) {
    let laLista = '';
    // Se mantiene la parte del for como referencia:
    /* let rel = rele;
    for (let i=0; i<rel.length; i++) {
        laLista += `
            <div>
                <h3>${rel[i].name}</h3>
                <img src="${rel[i].url}" alt="${rel[i].alt}">
                <p>${rel[i].desc}</p>
            </div>
        `;
    };*/
    // Prueba del forEach:
    rele.forEach(element => {
        laLista += `
            <div>
                <h3>${element.name}</h3>
                <img src="${element.url}" alt="${element.alt}">
                <p>${element.desc}</p>
            </div>
        `;
    });
    document.querySelector(`#${id}`).innerHTML = laLista;
};


// Se usa la función varias veces para sacar las distintas listas que se requieren (hay que empezar por LIST y pasar por todos los "puntos necesarios" excepto por el "número" y el último punto, con un "if" para que solo saque los ids que existan).
function lanzar(tipo) {
    if (tipo=='pers'){
        lista(LIST.char.main, 'char_prin'); // Lista de personajes principales.
        lista(LIST.char.ant, 'char_ant'); // Lista de antagonistas.
    }
    else if(tipo=='mund'){
        lista(LIST.world.orig, 'mun_ori'); // Lista de Mundos originales.
        lista(LIST.world.disney, 'mun_dis'); // Lista de Mundos Disney.
    }
};