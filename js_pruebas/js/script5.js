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

miHTML='';
for (let i = 0; i < mes.length; i++) {
    miHTML+='<div class="month"><h2>'+mes[i]+'</h2><ul>';
    for (let i2 = 1; i2 <= 30; i2++) {
        miHTML+='<li>'+i2+'</li>';
    };
    miHTML+='</ul></div>';
};

document.getElementById('cal').innerHTML=miHTML;