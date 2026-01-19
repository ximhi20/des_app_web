let misImg=[
    '../img/rec/buho.png',
    '../img/rec/cuervo.png',
    '../img/rec/gato.png',
    '../img/rec/nutria.png',
    '../img/rec/serpiente.png'
];

let miHTML = ''
for (let i = 0; i < misImg.length; i++) {
    miHTML += '<li><img src="'+misImg[i]+'" alt="Imagen"></li>';
};

document.querySelector('#listImg').innerHTML=miHTML