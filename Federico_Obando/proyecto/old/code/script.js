let x = 0;
let y = 0;
let tankPosition = {
    x : 200,
    y : 200,
    rotation : 0
};

let mapa = [
    ['esquinaA', 'muroA', 'muroB', 'muroA', 'muroB', 'muroA', 'muroB', 'muroA', 'muroB', 'muroA', 'muroB', 'muroA', 'muroB','muroA', 'muroB', 'esquinaB'],
    ['paredA', 'piso', 'piso', 'piso', 'paredA', 'piso', 'piso', 'piso', 'piso', 'piso', 'bloqueS', 'piso', 'piso','piso', 'piso', 'paredA'],
    ['paredB', 'piso', 'esquinaA', 'piso', 'paredB', 'piso', 'bloqueS', 'esquinaA', 'muroA', 'muroB', 'esquinaA', 'piso', 'esquinaA','muroA', 'muroB', 'paredB'],
    ['paredA', 'piso', 'paredA', 'piso', 'esquinaA', 'piso', 'esquinaA', 'piso', 'piso', 'piso', 'piso', 'piso', 'piso','piso', 'piso', 'paredA'],
    ['paredB', 'piso', 'paredB', 'piso', 'piso', 'piso', 'piso', 'piso', 'esquinaA', 'bloqueS', 'esquinaA', 'piso', 'esquinaA','muroA', 'muroB', 'paredB'],
    ['paredA', 'piso', 'esquinaA', 'muroA', 'muroB', 'bloqueS', 'esquinaA', 'piso', 'piso', 'piso', 'paredA', 'piso', 'bloqueS','piso', 'piso', 'paredA'],
    ['paredB', 'piso', 'piso', 'piso', 'piso', 'piso', 'bloqueS', 'piso', 'piso', 'piso', 'paredB', 'piso', 'piso','piso', 'piso', 'paredB'],
    ['esquinaB', 'muroA', 'muroB', 'muroA', 'muroB', 'muroA', 'muroB', 'muroA', 'muroB', 'muroA', 'muroB', 'muroA', 'muroB','muroA', 'muroB', 'esquinaA']
];

let tabler = document.getElementById("tabler");

let dimensionCuadro = 84;
let componeneteY = mapa.length;
let componeneteX = mapa[0].length;
let alto = componeneteY * dimensionCuadro;
let ancho = componeneteX * dimensionCuadro;
//let tablero = document.tablero.getBoundingClientRect();
let ubicacionTableroX = 0;
let ubicacionTableroY = 0;

console.log ("ubicacionTableroX: " + ubicacionTableroX);
console.log ("ubicacionTableroY: " + ubicacionTableroY);

let objeto = document.addEventListener ("keydown", elTanque);

document.getElementById ("tabler").style.width = ancho;
document.getElementById ("tabler").style.width = alto;

for (let col = 0; col < mapa.length; col++) {
    for (let fil = 0; fil < mapa[col].length; fil++) {
        let div = document.createElement("div");
        div.className = mapa[col][fil];
        tabler.appendChild(div);
    }
}

function elTanque(objeto) {
    let tecla = objeto.key;
    let tanqueJugador = document.getElementById ("tk");
    
    if (tecla == "ArrowDown") {
        y +=84;
        tanqueJugador.style.top = y + "px";
    }
    if (tecla == "ArrowUp") {
        y -=84;
        tanqueJugador.style.top = y + "px";
    }
}
