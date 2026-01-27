const portHimi = {
    alumno: {
        nombre: 'Himi',
        apellidos: 'González Rodríguez',
        nick: '@ximhi20',
        img: 'img/ximhi.jpg',
        descripcion: 'Saludos, soy Himi Rodríguez y estoy estudiando programación web en el certificado de profesionalidad de nivel 3 que imparte Dicampus denominado &quot;Desarrollo de Aplicaciones con Tecnología Web (IFCD0210)&quot;, a fecha del principio de la escritura de este documento (viernes 23 de enero del 2026) estoy practicando con HTML, CSS y JavaScript.',
        redes:[
            {
                red: 'CodePen',
                url: 'https://codepen.io/Ximhi-20'
            },
            {
                red: 'GitHub',
                url: 'https://github.com/ximhi20'
            }
        ]
    },

    html: [
        {
            titulo: 'Ejercicio 1',
            descripcion:'Descripción de lo que se hizo en el ejercicio.',
            url: '#'
        }
    ],

    css: [
        {
            titulo: 'Ejercicio 2',
            descripcion:'Descripción de lo que se hizo en el ejercicio.',
            url: '#'
        }
    ],

    js: [
        {
            titulo: 'Ejercicio 3',
            descripcion:'Descripción de lo que se hizo en el ejercicio.',
            url: '#'
        }
    ],
};

const miIMG = portHimi.alumno.img;
const miNombre = portHimi.alumno.nombre+' '+portHimi.alumno.apellidos;
const miNick = portHimi.alumno.nick;
const miDesc = portHimi.alumno.descripcion;

let misRedes = '';
for(let i=0; i<portHimi.alumno.redes.length; i++){
    misRedes+=`<a href="${portHimi.alumno.redes[i].url}"><button type="button">${portHimi.alumno.redes[i].red}</button></a>`;
};

function show(tipo){
    let datos = portHimi[tipo];
    let misEjer = '';
    if(tipo != 'all'){
        for(let j=0; j<datos.length; j++){
            misEjer+=`
            <div>
                <h3>${datos[j].titulo}</h3>
                <p class="type">${tipo}</p>
                <p class="desc">${datos[j].descripcion}</p>
                <a href="${datos[j].url}"><button type="button">Enlace al ejercicio</button></a>
            </div>
            `;
        };
        document.querySelector(`#all`).innerHTML=misEjer;
    }
    else{
        show('html');
        show('css');
        show('js');
    };
};

show('all');
document.querySelector('#avatar').src=miIMG;
document.querySelector('#nombre').innerHTML=miNombre;
document.querySelector('#nick').innerHTML=miNick;
document.querySelector('#descripcion').innerHTML=miDesc;
document.querySelector('#direccion').innerHTML=misRedes;