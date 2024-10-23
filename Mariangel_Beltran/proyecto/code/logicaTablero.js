let x=0;
let y=0;

let tankPosition ={
    x: 2, //Coordenadas iniciales X en la matriz (Columna)
    y: 2, //Coordenadas iniciales Y en la matriz (Fila)
    rotation: 0 //Rotacion inicial en grados

};

let mapa = [
    ["d", "d", "d", "d", "d", "d", "d", "d", "d", "d"],
    ["d", "p", "f", "f", "f", "p", "p", "p", "p", "d"],
    ["d", "p", "p", "p", "f", "p", "p", "p", "p", "d"],
    ["d", "f", "p", "p", "f", "p", "f", "f", "f", "d"],
    ["d", "f", "p", "p", "p", "p", "f", "p", "p", "d"],
    ["d", "p", "p", "f", "p", "p", "f", "p", "p", "d"],
    ["d", "p", "p", "f", "p", "p", "p", "p", "p", "d"],
    ["d", "d", "d", "d", "d", "d", "d", "d", "d", "d"]
];

//Determina el tamaño del mapa en X y Y 
let dimencionCuadro= 84;
let componentesY= mapa.length;
let componentesX= mapa[0].length;
let tablero = document.getElementById("tabler");
let tanqueJugador = document.getElementById("tk");

//Ajustar tamaño del tablero 
let alto= componentesY * dimencionCuadro;
let ancho= componentesX * dimencionCuadro;
tabler.style.width = ancho + "px";
tabler.style.height = alto + "px";

//Generar tablero
for (col = 0; col < componentesY; col++) {
    for (let fil = 0; fil < componentesX; fil++) {
        let div = document.createElement("div");// Crea un nuevo div
        div.className = mapa[col][fil]; //Asignar la clase segun el mapa 
        tabler.appendChild(div);//Agrega el div en el tablero 
    }
}

//Funcion para mover y rotar el tanque 
function moverTanque(tecla) {
    let nuevaX = tankPosition.x;
    let nuevaY = tankPosition.y;
    console.log("pulse la tecla = " + tecla);
    if(tecla === "q"){
        alert("disparando");
    }

    if (tecla === "ArrowDown") { //Gira 180 grados
       nuevaY += 1;
       tankPosition.rotation = -180; 

    }else if (tecla === "ArrowUp") { // Sin rotacion //problema
        nuevaY -= 1;
       tankPosition.rotation = 0; 

    }else if (tecla === "ArrowLeft") { // Gira 90 grados a la izquierda
        nuevaX -= 1;
       tankPosition.rotation = -90; 

    }else if (tecla === "ArrowRight") { // Gira 90 grados a la derecha
        nuevaX += 1;
       tankPosition.rotation = 90; 
    }

    //Verifica que la nueva posicion sea camino
    if (nuevaX >= 0 && nuevaX < componentesX && nuevaY >= 0 && nuevaY < componentesY){
        if (mapa [nuevaY][nuevaX] === 'p'){
        tankPosition.x = nuevaX;
        tankPosition.y = nuevaY;
        actualizarPosicionTanque();
        }
    }
}

//Actualizacion de la posicion y rotacion del tanque
function actualizarPosicionTanque(){
    let nuevaPosX = tankPosition.x * dimencionCuadro;
    let nuevaPosY = tankPosition.y * dimencionCuadro;
    tanqueJugador.style.left = nuevaPosX + "px";
    tanqueJugador.style.top = nuevaPosY + "px";

    //Aplicar rotacion al tanque
    tanqueJugador.style.transform = `rotate(${tankPosition.rotation}deg)`;
}

//Detectar ebentos del teclado
document.addEventListener('keydown', function(event){
    moverTanque(event.key);
});

//Inicializar la posicion y rotacion del tanque 
actualizarPosicionTanque();
