let tablas =prompt("Dime hasta que tabla quieres llegar.");
// hacer un Array "como bucle".
let numero = []; /* Se crea la array que quieres hacer. */
for(let i=0; i<=tablas; i++) { /* Se hace un bucle en el que se mete el "resultado" en la array. */
        numero.push(i); /* El "push" se usa poniendo entre paréntesis lo que quieres meter en la array. */
}

let miHTML='<h1>Tablas de multiplicar hasta la del '+tablas+'</h1><section>';
for (let i = 1; i < numero.length; i++) {
    miHTML+='<div class="destaque"><h2>Tabla del '+numero[i]+'</h2><ul>';
    for (let i2 = 1; i2 <= 10; i2++) {
        miHTML += '<li>'+numero[i]+'*'+i2+'='+(i2*numero[i])+'</li>';
    };
    miHTML+='</ul></div>';
};
miHTML+='</section>'

document.body.innerHTML=miHTML;