let x = 0;
let y = 0;

let tankPosition = {
    x: 2, // Coordenada inicial X en la matriz (columna)
    y: 2, // Coordenada inicial Y en la matriz (fila)
    rotation: 0 // Rotación inicial (en grados)
};

let mapa = [
    ['b','b','b','b','b','b','b','b'],
    ['b','p','b','b','p','p','p','b'],
    ['b','p','p','p','p','b','p','b'],
    ['b','b','b','p','b','b','p','b'],
    ['b','p','p','p','b','b','b','b'],
    ['b','p','b','p','b','p','p','b'],
    ['b','p','p','p','p','p','p','b'],
    ['b','b','b','b','p','p','p','b'],
    ['b','b','b','b','b','b','b','b'],
];

let dimencionCuadro = 84;
let componentesY = mapa.length;
let componentesX = mapa[0].length;
let tabler = document.getElementById("tabler");
let tanqueJugador = document.getElementById("tanque");

// Ajustar tamaño del tablero
let alto = componentesY * dimencionCuadro;
let ancho = componentesX * dimencionCuadro;
tabler.style.width = ancho + 'px';
tabler.style.height = alto + 'px';

// Generar el tablero
for (let col = 0; col < componentesY; col++) {
    for (let fil = 0; fil < componentesX; fil++) {
        let div = document.createElement('div'); // Crear un nuevo div
        div.className = mapa[col][fil]; // Asignar la clase según el mapa ('b' o 'p')
        tabler.appendChild(div); // Agregar el div al tablero
    }
}

// Función para mover y rotar el tanque
function moverTanque(tecla) {
    let nuevaX = tankPosition.x;
    let nuevaY = tankPosition.y;
    console.log("pulse la tecla = " + tecla);
    if(tecla === "q"){
        alert("disparando");
    }
    
    if (tecla === "ArrowDown") {
        nuevaY += 1;
        tankPosition.rotation = 180; // Girar 180 grados
    } else if (tecla === "ArrowUp") {
        nuevaY -= 1;
        tankPosition.rotation = 0; // Sin rotación
    } else if (tecla === "ArrowLeft") {
        nuevaX -= 1;
        tankPosition.rotation = -90; // Girar 90 grados a la izquierda
    } else if (tecla === "ArrowRight") {
        nuevaX += 1;
        tankPosition.rotation = 90; // Girar 90 grados a la derecha
    }

    // Verificar si la nueva posición es un camino ('p') y no un bloque ('b')
    if (nuevaX >= 0 && nuevaX < componentesX && nuevaY >= 0 && nuevaY < componentesY) {
        if (mapa[nuevaY][nuevaX] === 'p') {
            tankPosition.x = nuevaX;
            tankPosition.y = nuevaY;
            actualizarPosicionTanque();
        }
    }
}

// Actualizar la posición y rotación del tanque en el tablero
function actualizarPosicionTanque() {
    let nuevaPosX = tankPosition.x * dimencionCuadro;
    let nuevaPosY = tankPosition.y * dimencionCuadro;
    tanqueJugador.style.left = nuevaPosX + "px";
    tanqueJugador.style.top = nuevaPosY + "px";

    // Aplicar rotación al tanque
    tanqueJugador.style.transform = `rotate(${tankPosition.rotation}deg)`;
}

// Detectar eventos del teclado
document.addEventListener('keydown', function(event) {
    moverTanque(event.key);
});

// Inicializar la posición y rotación del tanque
actualizarPosicionTanque();
