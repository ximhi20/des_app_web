const PLAYA = document.querySelector(`#videoPlaya`);

function pausar(){
    PLAYA.pause();
}

function iniciar(){
    PLAYA.play();
}

function parar(){
    PLAYA.pause();
    PLAYA.currentTime = 0;
}

function reiniciar(){
    PLAYA.currentTime = 0;
    PLAYA.play();
}

function s15(){
    PLAYA.pause();
    PLAYA.currentTime = 15;
}