const cant=100;

let images=[];
for (let i=0; i<cant; i++){
    images.push(`https://picsum.photos/id/${i}/200/300`);
};

let position=10;
function sig(){
    position=16;
    document.querySelector('#cambioImg_sec').src=actual;
};

let miHTML=`<button onclick="ant()">Anterior</button><button onclick="sig()">Siguiente</button>`;

let actual=images[position];

document.querySelector('#cambioImg_sec').src=actual;
document.querySelector(`#botones_sec`).innerHTML=miHTML;