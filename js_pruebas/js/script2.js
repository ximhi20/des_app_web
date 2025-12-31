// Hacer una lista con variables.
let repeticiones=prompt('¿Cuántas repeticiones quieres ver?');
let inicio=1;
let incremento=1;

let miHTML='<h1>Esta lista contiene '+repeticiones+' elementos</h1>';
miHTML+='<ul>';
for (let i=inicio; i<=repeticiones; i+=incremento) {
    miHTML+='<li>'+i+'</li>';
};
miHTML+='</ul>'

document.body.innerHTML=miHTML;