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

let daysNumber=[
    31,
    28,
    31,
    30,
    31,
    30,
    31,
    31,
    30,
    31,
    30,
    31
];

let dayName=[
    'L',
    'M',
    'X',
    'J',
    'V',
    'S',
    'D'
];

miHTML='';
for (let i = 0; i < mes.length; i++) {
    miHTML+='<div class="month"><h2>'+mes[i]+'</h2><ul>';
    for (let i3 = 0; i3 < dayName.length; i3++) {
        miHTML+='<li class="dia">'+dayName[i3]+'</li>';
    };
    for (let i2 = 1; i2 <= daysNumber[i]; i2++) {
        miHTML+='<li class="'+mes[i]+'">'+i2+'</li>';
    };
    miHTML+='</ul></div>';
};

document.getElementById('cal').innerHTML=miHTML;