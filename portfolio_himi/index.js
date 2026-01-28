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
            titulo: 'Horizon',
            descripcion:'Hice una página web sobre la saga de Horizon con 3 páginas enlazados entre sí, pudiendo ir de una a cualquiera de las otras dos.',
            url: 'https://github.com/ximhi20/des_app_web/tree/main/dragon_age'
        },
        {
            titulo: 'Videojuegos',
            descripcion: 'Una lista con distintos videojuegos de distintas plataformas con una descripción y la opción de escuchar el tema musical principal de cada juego.',
            url: 'https://github.com/ximhi20/des_app_web/tree/main/videojuegos'
        },
        {
            titulo: 'Kingdom Hearts',
            descripcion: 'Una página web simple en la que se muestra una descripción sobre distintos aspectos relacionados con Kingdom Hearts.',
            url: 'https://codepen.io/Ximhi-20/pen/WbwgVPY'
        }
    ],

    css: [
        {
            titulo: 'Fotografía',
            descripcion:'Realización de una página web basada en la que David Fernández Casado hizo en Figma.',
            url: 'https://github.com/ximhi20/des_app_web/tree/main/fotografia'
        },
        {
            titulo: 'Tablero de ajedrez',
            descripcion: 'Creación de un tablero de ajedrez, mostrando los números de las filas y las letras de las columnas y con dos colores distintos.',
            url: 'https://codepen.io/Ximhi-20/pen/GgqKYEG'
        },
        {
            titulo: 'Escuela diseño',
            descripcion: 'Usando variables de CSS para  modificar los colores de una página web.',
            url: 'https://codepen.io/Ximhi-20/pen/JoKPwjV'
        },
        {
            titulo: 'Examen',
            descripcion: 'El ejercicio del primer examen del curso, donde se hizo una lista de los alumnos de clase con lo que se había estudiado hasta ese momento.',
            url: 'https://codepen.io/Ximhi-20/pen/GgqJNJj'
        },
        {
            titulo: 'Animación',
            descripcion: 'Una animación en una lista de Llaves Espada que sucede mientras estés pulsando una de ellas.',
            url: 'https://codepen.io/Ximhi-20/pen/ZYOLPrK'
        }
    ],

    js: [
        {
            titulo: 'Portfolio',
            descripcion:'Creación de un portfolio en el que se muestran algunos ejercicios realizados, (Este mismo ejercicio).',
            url: 'https://github.com/ximhi20/des_app_web/tree/main/portfolio_himi'
        },
        {
            titulo: 'Calendario',
            descripcion: 'Se creó un calendario basado en el de 2026 (lo relevante son &quot005.html&quot, &quotscript5.js&quot y &quotstyle.css&quot).',
            url: 'https://github.com/ximhi20/des_app_web/tree/main/js_pruebas'
        },
        {
            titulo: 'Interactividad',
            descripcion: 'Realicé una ficha que se puede cambiar pulsando en las flechas o las imágenes de abajo (es relevante todo con el nombre &quotcambio_lib&quot y el css)',
            url: 'https://github.com/ximhi20/des_app_web/tree/main/js_2026'
        },
        {
            titulo: 'Lugares Dragon Age',
            descripcion: 'Una lista de lugares en el mundo de Thedas del universo de Dragon Age, con un filtro para los habitantes.',
            url: 'https://codepen.io/Ximhi-20/pen/myErvXQ'
        },
        {
            titulo: 'Contador letras',
            descripcion: 'Se muestra el monólogo que Sylens hace al principio de Horizon Forbidden West (spoilers para Zero Dawn), saliendo letra por letra y teniendo contándolas final',
            url: 'https://codepen.io/Ximhi-20/pen/KwMaYEB'
        },
        {
            titulo: 'Menú de comandos',
            descripcion: 'Una muestra de como se ve el menú de comandos de KHII, puedes pulsar los distintos botones para comprobar como se vería en otros mundos o mientras se selecciona una parte en el juego.',
            url: 'https://codepen.io/Ximhi-20/pen/RNRgRJy'
        }
    ]
};

const miIMG = portHimi.alumno.img;
const miNombre = portHimi.alumno.nombre+' '+portHimi.alumno.apellidos;
const miNick = portHimi.alumno.nick;
const miDesc = portHimi.alumno.descripcion;

let misRedes = '';
for(let i=0; i<portHimi.alumno.redes.length; i++){
    misRedes+=`<a href="${portHimi.alumno.redes[i].url}" target="_blank"><button type="button">${portHimi.alumno.redes[i].red}</button></a>`;
};

function show(tipo='all'){
    let misEjer = '';
    function muestra(tipo){
        let datos = portHimi[tipo];
        for(let j=0; j<datos.length; j++){
            misEjer+=`
            <div>
                <h3>${datos[j].titulo}</h3>
                <p class="type">${tipo}</p>
                <p class="desc">${datos[j].descripcion}</p>
                <a href="${datos[j].url}" target="_blank"><button type="button">Enlace al ejercicio</button></a>
            </div>
            `;
        };
    };
    let boton=`
        <button id="css" type="button" onclick="show('css')">CSS</button>
        <button id="html" type="button" onclick="show('html')">HTML</button>
        <button id="js" type="button" onclick="show('js')">JS</button>
        <button id="all" type="button" onclick="show('all')">General</button>
    `;
    if(tipo != 'all'){
        muestra(tipo);
        document.querySelector(`#ejer`).innerHTML=misEjer;
        document.querySelector('#btn').innerHTML=boton;
        document.querySelector(`#${tipo}`).style='display: none;';
        document.querySelector('#actual').innerHTML=tipo;
        document.querySelector(`#actual`).style='text-transform: uppercase;';
    }
    else{
        muestra('html');
        muestra('css');
        muestra('js');
        document.querySelector(`#ejer`).innerHTML=misEjer;
        document.querySelector('#btn').innerHTML=boton;
        document.querySelector('#all').style='display: none;';
        document.querySelector('#actual').innerHTML='General';
        document.querySelector(`#actual`).style='';
    };
};



show();
document.querySelector('#avatar').src=miIMG;
document.querySelector('#nombre').innerHTML=miNombre;
document.querySelector('#nick').innerHTML=miNick;
document.querySelector('#descripcion').innerHTML=miDesc;
document.querySelector('#direccion').innerHTML=misRedes;