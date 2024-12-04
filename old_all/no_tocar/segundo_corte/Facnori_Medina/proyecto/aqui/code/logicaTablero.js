let x=0;
let y=0;

let tankPosition ={
    x: 2, //Coordenadas iniciales X en la matriz (Columna)
    y: 2, //Coordenadas iniciales Y en la matriz (Fila)
    rotation: 0 //Rotacion inicial en grados

};
let tank2Position ={
    x: 7, //Coordenadas iniciales X en la matriz (Columna)
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
let tanqueJugador2 = document.getElementById("tk2");


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
function moverTanque(flechas) {
    let nuevaX = tankPosition.x;
    let nuevaY = tankPosition.y;
    console.log("pulse la flechas = " + flechas);
    
    if (flechas === "ArrowDown") { //Gira 180 grados
       nuevaY += 1;
       tankPosition.rotation = -180; 

    }else if (flechas === "ArrowUp") { // Sin rotacion //problema
        nuevaY -= 1;
       tankPosition.rotation = 0; 

    }else if (flechas === "ArrowLeft") { // Gira 90 grados a la izquierda
        nuevaX -= 1;
       tankPosition.rotation = -90; 

    }else if (flechas === "ArrowRight") { // Gira 90 grados a la derecha
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

function moverTanque2(tecla) {
    let nuevaX = tank2Position.x;
    let nuevaY = tank2Position.y;
    console.log("pulse la tecla = " + tecla);
    
    if (tecla === "s") { //Gira 180 grados
       nuevaY += 1;
       tank2Position.rotation = -180; 

    }else if (tecla === "w") { // Sin rotacion //problema
        nuevaY -= 1;
        tank2Position.rotation = 0; 

    }else if (tecla === "a") { // Gira 90 grados a la izquierda
        nuevaX -= 1;
        tank2Position.rotation = -90; 

    }else if (tecla === "d") { // Gira 90 grados a la derecha
        nuevaX += 1;
        tank2Position.rotation = 90; 
    }

    //Verifica que la nueva posicion sea camino
    if (nuevaX >= 0 && nuevaX < componentesX && nuevaY >= 0 && nuevaY < componentesY){
        if (mapa [nuevaY][nuevaX] === 'p'){
        tank2Position.x = nuevaX;
        tank2Position.y = nuevaY;
        actualizarPosicionTanque2();
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
function actualizarPosicionTanque2(){
    let nuevaPosX = tank2Position.x * dimencionCuadro;
    let nuevaPosY = tank2Position.y * dimencionCuadro;
    tanqueJugador2.style.left = nuevaPosX + "px";
    tanqueJugador2.style.top = nuevaPosY + "px";

    //Aplicar rotacion al tanque
    tanqueJugador2.style.transform = `rotate(${tank2Position.rotation}deg)`;
}

//Detectar ebentos del teclado
document.addEventListener('keydown', function(event){
    moverTanque(event.key);
});
document.addEventListener('keydown', function(event){
    moverTanque2(event.key);
});

//Inicializar la posicion y rotacion del tanque 
actualizarPosicionTanque();
actualizarPosicionTanque2();