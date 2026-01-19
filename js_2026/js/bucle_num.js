let numeromax=8;
let repeticiones=4;

let miHTML = '';
for (let i = 0; i < repeticiones; i++) {
    miHTML+= '<li>';
    for (let i2 = 1; i2 <= numeromax; i2++) {
        miHTML+=i2;
    };
    miHTML+='</li>';
};

document.querySelector('#bucleNum').innerHTML=miHTML;