const LIST = {
    char: {
        main: [
            {
                name: 'Sora',
                url: 'img/personajes/protas/sora.webp',
                alt: 'Sora de Kingdom Hearts III.',
                desc: 'El protagonista y a quien controlas en la mayoría de los juegos.'
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
        ant: [
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
    }
};

function lista(rele, id) {
    let laLista = '';
    for (let i=0; i<rele.length; i++) {
        laLista += `
            <div>
                <h3>${rele[i].name}</h3>
                <img src="${rele[i].url}" alt="${rele[i].alt}">
                <p>${rele[i].desc}</p>
            </div>
        `;
    };
    document.querySelector(`#${id}`).innerHTML = laLista;
}

lista(LIST.char.main, 'char_prin');
lista(LIST.char.ant, 'char_ant')