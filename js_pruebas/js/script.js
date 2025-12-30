// Definimos las variables.
let ciudad ='Gijón';
let provincia ='Asturias';
let pais ='España';

// Construcción del "código final".
let miHTML ='<p>La ciudad de '+ciudad+' está en la provincia de '+provincia+', la cual se encuentra en el país de '+pais+'.';
miHTML+='<br>Por lo tanto, '+ciudad+' está en '+pais+'.';
miHTML+='</p>';

// Metemos el "código final" en el HTML.
document.body.innerHTML=miHTML;