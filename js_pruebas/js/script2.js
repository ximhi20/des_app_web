// Hacer una lista con variables.
let repeticiones=prompt('¿Cuántas repeticiones quieres ver?');
let inicio=1;
let incremento=1;

let miHTML='<ul>';
for (let i=inicio; i<=repeticiones; i+=incremento) {
    miHTML+='<li>'+i+'</li>';
};
miHTML+='</ul>'

document.body.innerHTML=miHTML;