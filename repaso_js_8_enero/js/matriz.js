let misJuegos = [
    /* 'Videojuego',      'Director',    Año,            'Imagen' */
    ['Kingdom Hearts', 'Tetsuya Nomura', 2002, '../img/matriz/kh.jpg'],
    ['Horizon Zero Dawn', 'Mathijs de Jonge', 2017, '../img/matriz/hzd.jpg'],
    ['Undertale', 'Toby Fox', 2015, '../img/matriz/ut.jpg']
];

let miHTML = '';

miHTML+='<img src="'+misJuegos[0][3]+'">';
miHTML+='<div><h2>'+misJuegos[0][0]+'</h2>';
miHTML+= '<p><span>Director: </span>'+misJuegos[0][1]+'</p>';
miHTML+= '<p><span>Año: </span>'+misJuegos[0][2]+'</p></div>';


document.querySelector('#matriz').innerHTML=miHTML;