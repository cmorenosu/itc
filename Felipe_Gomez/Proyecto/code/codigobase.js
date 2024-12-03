let mapa = [
    ["c","b","b","b","b","b","b","b","b","p"],
    ["p","p","p","p","p","p","p","p","b","b"],
    ["p","p","p","p","p","p","p","p","b","b"],
    ["p","p","p","p","p","p","p","p","b","b"],
    ["p","p","p","p","p","p","p","p","b","b"],
    ["p","p","p","p","p","p","p","p","b","b"],
    ["b","b","b","b","b","b","b","b","b","p "],
];

// Determina el tamaño del mapa en X y Y 
let dimencionCuadro = 84;
let componentesY = mapa.length;
let componentesX = mapa[0].length;
let tablero = document.getElementById("tabler");
let tanqueJugador = document.getElementById("tk");

// Ajustar tamaño del tablero 
let alto = componentesY * dimencionCuadro;
let ancho = componentesX * dimencionCuadro;
tablero.style.width = ancho + "px";
tablero.style.height = alto + "px";

// Generar tablero
for (let col = 0; col < componentesY; col++) {
    for (let fil = 0; fil < componentesX; fil++) {
        let div = document.createElement("div"); // Crea un nuevo div
        div.className = mapa[col][fil]; // Asignar la clase según el mapa 
        tablero.appendChild(div); // Agrega el div en el tablero 
    }
}

// Inicializar la posición y rotación del tanque
let tankPosition = {
    x: 2, // Coordenada inicial X
    y: 1, // Coordenada inicial Y
    rotation: 0 // Rotación inicial (0 grados)
};

function actualizarPosicionTanque() {
    let nuevaPosX = tankPosition.x * dimencionCuadro;
    let nuevaPosY = tankPosition.y * dimencionCuadro;
    tanqueJugador.style.left = nuevaPosX + "px";
    tanqueJugador.style.top = nuevaPosY + "px";
    
    // Aplicar rotación al tanque
    tanqueJugador.style.transform = `rotate(${tankPosition.rotation}deg)`; 
}

// Función para mover y rotar el tanque 
function moverTanque(tecla) {
    let nuevaX = tankPosition.x;
    let nuevaY = tankPosition.y;
    console.log("pulse la tecla = " + tecla);
    
    if(tecla === "q"){
        alert("disparando");
    }

    if (tecla === "ArrowDown") { // Mover hacia abajo
       nuevaY += 1;
       tankPosition.rotation = -180; 

    } else if (tecla === "ArrowUp") { // Mover hacia arriba
        nuevaY -= 1;
        tankPosition.rotation = 0; 

    } else if (tecla === "ArrowLeft") { // Mover hacia la izquierda
        nuevaX -= 1;
        tankPosition.rotation = -90; 

    } else if (tecla === "ArrowRight") { // Mover hacia la derecha
        nuevaX += 1;
        tankPosition.rotation = 90; 
    }

    // Verifica que la nueva posición sea camino ('p') y dentro de los límites
    if (nuevaX >= 0 && nuevaX < componentesX && nuevaY >= 0 && nuevaY < componentesY) {
        if (mapa[nuevaY][nuevaX] === 'p') {
            tankPosition.x = nuevaX;
            tankPosition.y = nuevaY;
            actualizarPosicionTanque();
        }
    }
}

// Detectar eventos del teclado
document.addEventListener('keydown', function(event) {
    moverTanque(event.key);
});

// Inicializar la posición del tanque al cargar
actualizarPosicionTanque(); 
