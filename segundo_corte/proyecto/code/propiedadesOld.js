let x=0;
let y=0;

let tankPosition = {
    x: 280,
    y: 280,
    rotation: 0
};

let mapa = [
    ['b', 'b', 'b', 'b', 'b', 'b'],
    ['b', 'b', 'p', 'p', 'p', 'b'],
    ['b', 'b', 'p', 'p', 'p', 'b'],
    ['b', 'b', 'b', 'b', 'p', 'b'],
    ['b', 'b', 'p', 'p', 'p', 'b'],
    ['b', 'b', 'p', 'p', 'p', 'b'],
    ['b', 'b', 'b', 'b', 'b', 'b']];

let tabler = document.getElementById("tabler");


let dimencionCuadro= 84;
let componentesY= mapa.length;
let componentesX= mapa[0].length;
let alto= componentesY*dimencionCuadro;
let ancho= componentesX*dimencionCuadro;
//let tablero=document.tablero.getBoundingClientRect();
let ubicacionTableroX=0;
let ubicacionTableroY=0;

console.log("ubicacionTableroY: "+ubicacionTableroY);
console.log("ubicacionTableroX: "+ubicacionTableroX);

let objeto=document.addEventListener('keydown',elTanque);

document.getElementById("tabler").style.width=ancho;
document.getElementById("tabler").style.width=alto;




for (col = 0; col < componentesY; col++) {
    for (fil = 0; fil < componentesX; fil++) {
        let div = document.createElement('div'); // Crear un nuevo div
        div.className = mapa[col][fil]; // Asignar la clase al div
        tabler.appendChild(div); // Agregar el div al contenedor
    }
}

function elTanque(objeto){
    let tecla = objeto.key;
    let tanqueJugador=document.getElementById("tanque");

    if(tecla=="ArrowDown"){
        //alert("carro baja");
        y +=84;
        console.log(y);
        tanqueJugador.style.top= y + "px";
    }

    if(tecla=="ArrowUp"){
        //alert("carro baja");
        y -=84;
        console.log(y);
        tanqueJugador.style.top= y + "px";
    }

}


elTanque();