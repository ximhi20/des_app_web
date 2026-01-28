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
                <a href="${datos[j].url}"><button type="button">Enlace al ejercicio</button></a>
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