// Hacer una lista
let miHTML='<ul>';
for (let i = 0; i < 100; i++) {
    miHTML+='<li>'+i+'</li>';
};
miHTML+='</ul>'

document.body.innerHTML=miHTML;