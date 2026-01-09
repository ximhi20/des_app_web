let misJuegos = [
    /* 'Videojuego',      'Director',    Año,            'Imagen' */
    ['Kingdom Hearts', 'Tetsuya Nomura', 2002, '../img/matriz/kh.jpg'],
    ['Horizon Zero Dawn', 'Mathijs de Jonge', 2017, '../img/matriz/hzd.jpg'],
    ['Undertale', 'Toby Fox', 2015, '../img/matriz/ut.jpg']
];

let miHTML = '';

for (let i = 0; i < misJuegos.length; i++) {
    miHTML+='<div class="gen"><img src="'+misJuegos[i][3]+'">';
    miHTML+='<div><h2>'+misJuegos[i][0]+'</h2>';
    miHTML+= '<p><span>Director: </span>'+misJuegos[i][1]+'</p>';
    miHTML+= '<p><span>Año: </span>'+misJuegos[i][2]+'</p></div></div>';
};

document.querySelector('#matriz').innerHTML=miHTML;