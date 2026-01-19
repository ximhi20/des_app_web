let repeticionesInicial=8;
let repeticionesFinal=4;
let anchoTronco=3;

let miHTML = '';
for (let i = 0; i < repeticionesInicial; i++) {
    miHTML+= '<li class="navidad">';
    for (let i2 = 0; i2 <= i; i2++) {
        miHTML+='*';
    };
    miHTML+='</li>';
};
for (let i3 = 0; i3 < repeticionesFinal; i3++) {
    miHTML+='<li>';
    for (let i4 = 0; i4 < anchoTronco; i4++) {
        miHTML+='*';
    };
    miHTML+='</li>'
};

document.querySelector('#bucleArbol').innerHTML=miHTML;