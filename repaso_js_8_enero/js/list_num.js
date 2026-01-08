let miHTML = '';
for (let i = 1; i <= 150; i++) {
    miHTML+= '<li>'+i+'</li>';
};

document.querySelector('#listNum').innerHTML=miHTML;