let numero = []
for (let i3 = 1; i3 <= 9; i3++) {
    numero += i3;
}

let miHTML='<h1>Tablas de multiplicar</h1>';
for (let i = 0; i < numero.length; i++) {
    miHTML+='<h2>Tabla del '+numero[i]+'</h2><ol>';
    for (let i2 = 1; i2 <= 10; i2++) {
        miHTML += '<li>'+numero[i]+'*'+i2+'='+i2*numero[i]+'</li>';
    };
    miHTML+='</ol>';
};

document.body.innerHTML=miHTML;