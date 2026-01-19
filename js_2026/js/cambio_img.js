const botones=4;

function cargar(num) {
    document.querySelector('#cambioImg').src=`https://picsum.photos/id/${num}/200/300`;
};

let miHTML='';
for (let i = 0; i < botones; i++) {
    miHTML+=`<button onclick="cargar(${i})">Imagen ${i+1}</button>`;
};

document.querySelector('#botones').innerHTML=miHTML;