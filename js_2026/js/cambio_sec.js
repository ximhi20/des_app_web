const cant=1084;
const ini=Math.floor(cant/2);

function ejecutar(){
let actual=images[position][0];
let texto=images[position][1];
document.querySelector('#cambioImg_sec').src=actual;
document.querySelector('#cambioImg_sec').alt=texto;
document.querySelector(`#text_sec`).innerHTML=texto;
document.querySelector(`#botones_sec`).innerHTML=miHTML;
}

let images=[];
for (let i=0; i<=cant; i++){
    images.push([`https://picsum.photos/id/${i}/200/300`, `Imagen de Lorem picsum con el id ${i}.`]);
};

let position=ini;

function sig(){
    if (position<cant) {
        position++;
    }
    else{
        position=0;
    }
    ejecutar();
};
function ale() {
    position=Math.floor(Math.random() * cant);
    ejecutar();
}
function res(){
    position=ini;
    ejecutar();
}
function ant(){
    if (position>0) {
        position--;
    }
    else{
        position=cant;
    }
    ejecutar();
};

let miHTML=
    `
        <button onclick="ant()">Anterior</button>
        <button onclick="ale()">Aleatorio</button>
        <button onclick="res()">Reset</button>
        <button onclick="sig()">Siguiente</button>
    `;

ejecutar();