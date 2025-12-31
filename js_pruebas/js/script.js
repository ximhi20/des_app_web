// Definimos las variables.
let ciudad =[
    'Gijón',
    'Cherboug'
];
let provincia =[
    'Asturias',
    'Normandía'
];
let pais =[
    'España',
    'Francia'
];

// Construcción del "código final".
let miHTML='<div>';
for (let i = 0; i < ciudad.length; i++) { /* Creación de un "bucle" para meter los datos ahí. */
    miHTML+='<p>La ciudad de '+ciudad[i]+' está en la provincia de '+provincia[i]+', la cual se encuentra en el país de '+pais[i]+'.';
    miHTML+='<br>Por lo tanto, '+ciudad[i]+' está en '+pais[i]+'.';
    miHTML+='</p>';
};
miHTML+='</div>'

// Metemos el "código final" en el HTML.
document.body.innerHTML=miHTML;