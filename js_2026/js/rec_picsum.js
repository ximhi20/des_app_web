let cant=50;

let miHTML = ''
for (let i = 0; i < cant; i++) {
    miHTML += '<li><img src="https://picsum.photos/id/'+i+'/200/300" alt="Imagen '+i+'"></li>';
};

document.querySelector('#listPicsum').innerHTML=miHTML