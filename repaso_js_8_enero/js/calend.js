let dayName = [
    'L',
    'M',
    'X',
    'J',
    'V',
    'S',
    'D'
];

let mes=[
    'Enero',
    'Febrero',
    'Marzo',
    'Abril',
    'Mayo',
    'Junio',
    'Julio',
    'Agosto',
    'Septiembre',
    'Octubre',
    'Noviembre',
    'Diciembre'
];

let miHTML = '';
for (let i3 = 0; i3 < mes.length; i3++) {
    miHTML+= '<div><h2>'+mes[i3]+'</h2><ul>';
    for (let i2 = 0; i2 < dayName.length; i2++) {
        miHTML+= '<li class="dayName">'+dayName[i2]+'</li>';
    }
    for (let i = 1; i <= 31; i++) {
        miHTML+='<li class="dias">'+i+'</li>';
    };
    miHTML+='</ul></div>';
};

document.querySelector('#cal').innerHTML=miHTML;