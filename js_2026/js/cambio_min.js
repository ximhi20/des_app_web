const prin=70
const cant=10;
const ini=Math.floor(cant/2);

let actual='';
let texto='';
let style='';
function ejecutar(){
actual=images[position][0];
texto=images[position][1];
style='border: yellow 5px solid;';
document.querySelector('#cambioImg_min').src=actual;
document.querySelector('#cambioImg_min').alt=texto;
document.querySelector(`#text_min`).innerHTML=texto;
document.querySelector(`#miniaturas`).innerHTML=miHTML;
}

let miHTML='';
let images=[];
for (let i=prin; i<prin+cant; i++){
    images.push([`https://picsum.photos/id/${i}/300/300`, `Imagen de Lorem picsum con el id ${i}.`]);
    miHTML+=`<img id="imagen${i-prin}" onclick="sele(${i-prin})" src="https://picsum.photos/id/${i}/100/100" alt="Imagen de Lorem picsum con el id ${i}.">`;
};

let position=ini;

function sele(pos){
    position=pos;
    ejecutar();
    document.querySelector(`#imagen${pos}`).style=style;
};

ejecutar();
document.querySelector(`#imagen${ini}`).style=style;