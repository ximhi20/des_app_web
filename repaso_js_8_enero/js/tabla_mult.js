let comienzo = -2;
let final = 5;
let tablaIni = 2;
let tablaFin = 5;


let miHTML='<h2>Tablas del '+tablaIni+' al '+tablaFin+':</h2><div>';
for (let i = tablaIni; i <= tablaFin; i++) {
    miHTML+='<div class="resalte"><h3>Tabla del '+i+' desde el '+comienzo+' hasta el '+final+':</h3><ul>'
    for (let i2 = comienzo; i2 <= final; i2++) {
        miHTML+='<li>'+i+'*'+i2+'='+(i2*i)+'</li>';
    };
    miHTML+='</ul></div>'
};
miHTML+='</div>'

document.querySelector('#tablaMult').innerHTML=miHTML;