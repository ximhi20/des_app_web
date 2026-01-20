let images=[
    {link:'../img/cambio_lib/inf.webp', name:'InFamous', info:'El primer juego de la saga, dónde se introduce a Cole MacGrath y este obtiene sus poderes eléctricos con los que puede salvar Empire City... O destruirla.'},
    {link:'../img/cambio_lib/inf2.webp', name:'InFamous 2', info:'La secuela del primer juego, tras lo sucedido en Empire City, Cole MacGrath llega a New Marais y tiene que detener a la Bestia... ¿Pero será un héroe o una amenaza aún mayor?'},
    {link:'../img/cambio_lib/fob.webp', name:'InFamous: Festival of Blood', info:'En este DLC vives una realidad alternativa en la qu Cole MacGrath se convirtió en vampiro y tiene que recuperar su humanidad.'},
    {link:'../img/cambio_lib/ss.webp', name:'InFamous: Second Son', info:'Años después de los eventos de los juegos originales, Delsin Rowe tiene que aprender a controlar sus nuevos poderes en Seattle.'},
    {link:'../img/cambio_lib/fl.webp', name:'InFamous: First Light'}
];
const ini=Math.floor(images.length/2);

let actual='';
let titulo='';
let style='';
function ejecutar(){
actual=images[position].link;
titulo=images[position].name;
style='border: yellow 5px solid;';
document.querySelector('#cambioImg_lib').src=actual;
document.querySelector('#cambioImg_lib').alt=titulo;
document.querySelector(`#text_lib`).innerHTML=titulo;
document.querySelector(`#botones_lib`).innerHTML=miHTML;
document.querySelector(`#imag${position}`).style=style;
}

let miHTML='<button onclick="ant()"><</button>';
for (let i=0; i<images.length; i++){
    miHTML+=`<img id="imag${i}" onclick="sele(${i})" src="${images[i].link}" alt="${images[i].name}">`;
};
miHTML+='<button onclick="sig()">></button>';

let position=ini;

function sele(pos){
    position=pos;
    ejecutar();
};
function sig(){
    if(position<images.length){
        position++;
    }
    else{
        position=0;
    }
    ejecutar();
};
function ant(){
    if(position>0){
        position--;
    }
    else{
        position=images.length;
    }
    ejecutar();
};

ejecutar();