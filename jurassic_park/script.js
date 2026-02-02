const MOVIES=[
    {
        image: 'img/jp.jpg',
        nombre: 'Jurassic Park',
        info: 'Un científico logra hacer clones de los dinosaurios prehistóricos y decide crear un parque en el que estos son la atracción principal, pero puede que no salga tan bien como supuso.'
    },
    {
        image: 'img/tlw_jp.jpg',
        nombre: 'The Lost World: Jurassic Park',
        info: 'Resulta que hay una segunda isla con dinosaurios y el sobrino del científico de la película original quiere abrir un parque diferente para sacar a su empresa de la bancarrota.'
    },
    {
        image: 'img/jp3.jpg',
        nombre: 'Jurassic Park III',
        info: 'Una pareja rica le ofrece a un científico pagarle sus investigaciones si le dan un tour aéreo guiado, asegurando que tienen permiso para volar por ahí, pero no todo es lo que parece...'
    },
    {
        image: 'img/jw.jpg',
        nombre: 'Jurassic World',
        info: 'Al final, tras un par de décadas, llegaron a hacer un parque sobre dinosaurios en la isla original, aunque puede que lleguen a arrepentirse de hacerlo...'
    },
    {
        image: 'img/jwfk.png',
        nombre: 'Jurassic World: Fallen Kingdom',
        info: 'Se discute la moralidad sobre haber clonado a los dinosaurios y si se deberian salvar de una erupción volcánica que está a punto de suceder.'
    },
    {
        image: 'img/jwd.jpeg',
        nombre: 'Jurassic World Dominion',
        info: 'Los dinosaurios ahora viven por todo el mundo junto con los humanos, y los científicos tienen que asegurarse de que no se reproduzcan en exceso.'
    },
    {
        image: 'img/jwr.jpg',
        nombre: 'Jurassic World Rebirth',
        info: 'Al final resulta que los dinosaurios solo pueden sobrevivir en zonas concretas de la Tierra, pero los científicos necesitan investigar un grupo específico para curar una enfermedad.'
    }
];
const LAST = MOVIES.length;

let miInfo = '';
let actual = '';

function ejecutar(){
    miInfo=`
        <h2>${MOVIES[actual].nombre}</h2>
        <img src="${MOVIES[actual].image}">
        <p>${MOVIES[actual].info}</p>
    `;
    document.querySelector('#info').innerHTML=miInfo;
    if(actual==0){
        document.querySelector('#ant').disabled='true';
        document.querySelector('#one').disabled='true';
    }
    else{
        document.querySelector('#ant').disabled='';
        document.querySelector('#one').disabled='';
    };
    if(actual==LAST-1){
        document.querySelector('#sig').disabled='true';
        document.querySelector('#ult').disabled='true';
    }
    else{
        document.querySelector('#sig').disabled='';
        document.querySelector('#ult').disabled='';
    };
};

function start(){
    actual=0;
    ejecutar();
};

function next(){
    if(actual<LAST-1){
        actual++
    };
    ejecutar();
};

function prev(){
    if(actual>0){
        actual--
    };
    ejecutar();
};

function last(){
    actual=LAST-1;
    ejecutar();
};

function rand(){
    actual = Math.floor(Math.random() * LAST);
    ejecutar();
};

start();