let nacimiento=prompt('¿En que año naciste?');
let currentYear=new Date().getFullYear();

let miHTML='<p>Si naciste en '+nacimiento+' y como estamos en el año '+currentYear+', entonces tienes (o tendrás este año): '+(currentYear-nacimiento)+' años. </p>';

document.body.innerHTML=miHTML;