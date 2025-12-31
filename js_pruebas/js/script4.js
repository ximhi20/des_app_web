let tablas =prompt("Dime hasta que tabla quieres llegar.");
let numero = [];
for(let i=0; i<=tablas; i++) {
        numero.push(i);
}

let miHTML='<h1>Tablas de multiplicar</h1><section>';
for (let i = 1; i < numero.length; i++) {
    miHTML+='<div class="destaque"><h2>Tabla del '+numero[i]+'</h2><ul>';
    for (let i2 = 1; i2 <= 10; i2++) {
        miHTML += '<li>'+numero[i]+'*'+i2+'='+(i2*numero[i])+'</li>';
    };
    miHTML+='</ul></div>';
};
miHTML+='</section>'

document.body.innerHTML=miHTML;