const FRASE = [
    {
        loDicho: `I've been having these weird thoughts lately,<br>like is any of this for real, or not?`,
        elUrl: 'img/kh.jpeg',
        elAlt: 'Portada de KH',
        dichoEn: 'KH',
        dichoPor: 'Sora',
        clase: 'primer'
    },
    {
        loDicho: `A scattered dream that's like a far-off memory.<br>A far-off memory that's like a scattered dream.<br>I wanna line the pieces up<br>—yours and mine.`,
        elUrl: 'img/khii.jpeg',
        elAlt: 'Portada de KH II',
        dichoEn: 'KH II',
        dichoPor: 'Sora',
        clase: 'segundo'
    },
    {
        loDicho: `Keep on running,<br>but I'll always be there to bring you back`,
        elUrl: 'img/axel_xion.webp',
        elAlt: 'Escena del combate entre Axel y Xion',
        dichoEn: '358/2 Days',
        dichoPor: 'Axel',
        clase: 'days'
    },
    {
        loDicho: `They can take your world.<br>They can take your heart.<br>Cut you loose from all you know.<br>But if it's your fate...<br>Then every step forward will always be a step closer to home.`,
        elUrl: 'img/khiii.jpeg',
        elAlt: 'Portada de KH III',
        dichoEn: 'KH III',
        dichoPor: 'Sora',
        clase: 'tercero'
    },
    {
        loDicho: `May your heart be your guiding key.`,
        elUrl: 'img/khchi.jpeg',
        elAlt: 'Portada de KH Chi',
        dichoEn: 'KH χ (Chi)',
        dichoPor: 'Keyblade Masters',
        clase: 'chi'
    }
];

let actual = Math.floor(FRASE.length/2);
let mostrar = '';


function ejecutar(){
    mostrar = `
        <p class="quote">${FRASE[actual].loDicho}</p>
        <img src="${FRASE[actual].elUrl}" alt="${FRASE[actual].elAlt}">
        <p class="talk">- ${FRASE[actual].dichoPor}, ${FRASE[actual].dichoEn}</p>
    `;
    document.querySelector('#color').className = FRASE[actual].clase;
    document.querySelector('#frases').innerHTML = mostrar;
    if(actual==0){
        document.querySelector('#ant').disabled=`true`;
        document.querySelector('#pri').disabled=`true`;
        document.querySelector('#ult').disabled=``;
        document.querySelector('#sig').disabled=``;
    }
    else if(actual==FRASE.length-1){
        document.querySelector('#ant').disabled=``;
        document.querySelector('#pri').disabled=``;
        document.querySelector('#ult').disabled=`true`;
        document.querySelector('#sig').disabled=`true`;
    }
    else{
        document.querySelector('#ant').disabled=``;
        document.querySelector('#pri').disabled=``;
        document.querySelector('#ult').disabled=``;
        document.querySelector('#sig').disabled=``;
    };
};


function prev(){
    if(actual>0){
        actual--;
    };
    ejecutar();
};
function first(){
    actual=0;
    ejecutar();
};
function rand(){
    actual=Math.floor(Math.random() * FRASE.length)
    ejecutar();
};
function next(){
    if(actual<FRASE.length-1){
        actual++;
    };
    ejecutar();
};
function last(){
    actual=FRASE.length-1;
    ejecutar();
};

ejecutar();