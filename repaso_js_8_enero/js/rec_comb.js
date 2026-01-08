let misImg=[
    '../img/rec/buho.png',
    '../img/rec/cuervo.png',
    '../img/rec/gato.png',
    '../img/rec/nutria.png',
    '../img/rec/serpiente.png'
];

let alt=[
    'Búho',
    'Cuervo',
    'Gato',
    'Nutria',
    'Serpiente'
];

let descImg=[
    'El búho es nocturno y sabio',
    'El cuervo es carroñero y social',
    'El gato es independiente y friolero',
    'La nutria es acuática e inteligente',
    'La serpiente es reptante y misteriosa'
];

let miHTML = ''
for (let i = 0; i < misImg.length; i++) {
    miHTML += '<li><img src="'+misImg[i]+'" alt="'+alt[i]+'."><p>'+descImg[i]+'.</p></li>';
};

document.querySelector('#listGen').innerHTML=miHTML