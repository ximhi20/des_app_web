let miLista=[
    'Perro',
    'Gato',
    'Tortuga',
    'Serpiente',
    'Murciélago',
    'Nutria',
    'Grillo',
    'Búho',
    'Cuervo',
    'Pato',
    'León',
    'Hiena'
];

let miHTML = ''
for (let i = 0; i < miLista.length; i++) {
    miHTML += '<li>'+miLista[i]+'.</li>';
};

document.querySelector('#listSer').innerHTML=miHTML