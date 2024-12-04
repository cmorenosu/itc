let x = 0;
let y = 0;
 
let x2 = 0;
let y2 = 0;

let tankPosition = {
    x: 1, // Coordenada inicial X en la matriz (columna)
    y: 1, // Coordenada inicial Y en la matriz (fila)
    rotation: 180 // Rotación inicial (en grados)
};

let misilPosition = {
    x: 1, // Coordenada inicial X en la matriz (columna)
    y: 1, // Coordenada inicial Y en la matriz (fila)
    rotation: 180 // Rotación inicial (en grados)
};
 
let tankPosition2 = {
    x2: 16, // Coordenada inicial X en la matriz (columna)
    y2: 7, // Coordenada inicial Y en la matriz (fila)
    rotation: 0 // Rotación inicial (en grados)
};

let misilPosition2 = {
    x: 16, // Coordenada inicial X en la matriz (columna)
    y: 7, // Coordenada inicial Y en la matriz (fila)
    rotation: 0 // Rotación inicial (en grados)
};

let mapa = [
    ['c','c','c','c','c','c','c','c','c','c','c','c','c','c','c','c','c','c'],
    ['c','j','c','c','j','j','j','c','j','j','j','j','j','j','j','j','j','c'],
    ['c','j','j','j','j','c','j','c','j','j','j','c','j','c','j','g','j','c'],
    ['c','c','c','j','c','c','j','c','j','g','j','j','c','c','j','j','j','c'],
    ['c','j','j','j','c','c','j','j','j','j','j','c','c','j','j','j','c','c'],
    ['c','j','g','j','c','j','j','c','c','c','j','j','j','j','j','j','j','c'],
    ['c','j','j','j','j','j','j','j','c','c','c','j','j','c','j','c','j','c'],
    ['c','c','c','c','j','c','c','j','j','c','c','j','c','c','j','c','j','c'],
    ['c','c','c','c','c','c','c','c','c','c','c','c','c','c','c','c','c','c'],
];
 
let dimencionCuadro = 84;
let componentesY = mapa.length;
let componentesX = mapa[0].length;
let tablero = document.getElementById("jstablero");
let tanqueJugador = document.getElementById("jstanque");
let misil = document.getElementById("jsmisil");
let tanque2Jugador = document.getElementById("jstanque2");
let misil2 = document.getElementById("jsmisil2");

function ocultarDiv() {
    document.getElementById("jsmisil").style.display = "none";
}

function visibleDiv() {
    document.getElementById("jsmisil").style.display = "block";
}

function ocultarDiv2() {
    document.getElementById("jsmisil2").style.display = "none";
}

function visibleDiv2() {
    document.getElementById("jsmisil2").style.display = "block";
}

// Ajustar tamaño del tablero
let alto = componentesY * dimencionCuadro;
let ancho = componentesX * dimencionCuadro;
tablero.style.width = ancho + 'px';
tablero.style.height = alto + 'px';
 
// Generar el tablero
for (let col = 0; col < componentesY; col++) {
    for (let fil = 0; fil < componentesX; fil++) {
        let div = document.createElement('div'); // Crear un nuevo div
        div.className = mapa[col][fil]; // Asignar la clase según el mapa ('c' o 'j')
        tablero.appendChild(div); // Agregar el div al tablero
    }
}




// Función para mover y rotar el tanque 1
function moverTanque(tecla) {
    let nuevaX = tankPosition.x;
    let nuevaY = tankPosition.y;
 
    switch (tecla) {
        case "ArrowDown":
            nuevaY += 1;
            tankPosition.rotation = 180; // Girar 180 grados
            break;
        case "ArrowUp":
            nuevaY -= 1;
            tankPosition.rotation = 0; // Sin rotación
            break;
        case "ArrowLeft":
            nuevaX -= 1;
            tankPosition.rotation = -90; // Girar 90 grados a la izquierda
            break;
        case "ArrowRight":
            nuevaX += 1;
            tankPosition.rotation = 90; // Girar 90 grados a la derecha
            break;
    }
 
    // Verificar si la nueva posición es un camino ('j') y no un bloque ('c')
    if (nuevaX >= 0 && nuevaX < componentesX && nuevaY >= 0 && nuevaY < componentesY) {
        if (mapa[nuevaY][nuevaX] === 'j') {
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




let misilInterval;

// Función para mover y rotar el misil 1
function movMisil(tecla) {
    let nuevaX = misilPosition.x;
    let nuevaY = misilPosition.y;

    ocultarDiv();

    misilPosition.x=tankPosition.x;
    misilPosition.y=tankPosition.y;
    actualizarPosicionMisil();

    switch (tankPosition.rotation) {
        case 180:
            nuevaY += 1;
            misilPosition.rotation = tankPosition.rotation; // Girar 180 grados
            break;
        case 0:
            nuevaY -= 1;
            misilPosition.rotation = tankPosition.rotation; // Sin rotación
            break;
        case -90:
            nuevaX -= 1;
            misilPosition.rotation = tankPosition.rotation; // Girar 90 grados a la izquierda
            break;
        case 90:
            nuevaX += 1;
            misilPosition.rotation = tankPosition.rotation; // Girar 90 grados a la derecha
            break;
    }

    if(tecla === " "){
        visibleDiv();
        clearInterval(misilInterval);
        misilInterval = setInterval(moverMisilAutomatico, 150);
    }

}

function moverMisilAutomatico() {
    let nuevaX = misilPosition.x;
    let nuevaY = misilPosition.y;

    // Actualizar la posición del misil basándose en su rotación y dirección actual
    switch (misilPosition.rotation) {
        case 180:
            nuevaY += 1;
            break;
        case 0:
            nuevaY -= 1;
            break;
        case -90:
            nuevaX -= 1;
            break;
        case 90:
            nuevaX += 1;
            break;
    }

    // Verificar si la nueva posición es un camino ('j') y no un bloque ('c')
    if (nuevaX >= 0 && nuevaX < componentesX && nuevaY >= 0 && nuevaY < componentesY) {
        if (mapa[nuevaY][nuevaX] === 'j' || mapa[nuevaY][nuevaX] === 'c'  || mapa[nuevaY][nuevaX] === 'g') {
            misilPosition.x = nuevaX;
            misilPosition.y = nuevaY;
            actualizarPosicionMisil();

            // Si el misil toca un bloque 'c' o 'g', detenerlo
            if (mapa[nuevaY][nuevaX] === 'c' || mapa[nuevaY][nuevaX] === 'g') {
                misilPosition.x = tankPosition.x;
                misilPosition.y = tankPosition.y;
                ocultarDiv();
                actualizarPosicionMisil();
                clearInterval(misilInterval); // Detener el intervalo
            }
        }
    }
}
 
// Actualizar la posición y rotación del tanque en el tablero
function actualizarPosicionMisil() {
    let nuevaPosX = misilPosition.x * dimencionCuadro;
    let nuevaPosY = misilPosition.y * dimencionCuadro;
    misil.style.left = nuevaPosX + "px";
    misil.style.top = nuevaPosY + "px";

    // Aplicar rotación al misil
    misil.style.transform = `rotate(${misilPosition.rotation}deg)`;
}




// Función para mover y rotar el tanque 2
function moverTanque2(tecla) {
    let nuevaX2 = tankPosition2.x2;
    let nuevaY2 = tankPosition2.y2;
 
    switch (tecla) {
        case "s":
            nuevaY2 += 1;
            tankPosition2.rotation = 180; // Girar 180 grados
            break;
        case "w":
            nuevaY2 -= 1;
            tankPosition2.rotation = 0; // Sin rotación
            break;
        case "a":
            nuevaX2 -= 1;
            tankPosition2.rotation = -90; // Girar 90 grados a la izquierda
            break;
        case "d":
            nuevaX2 += 1;
            tankPosition2.rotation = 90; // Girar 90 grados a la derecha
            break;
    }

    // Verificar si la nueva posición es un camino ('j') y no un bloque ('c')
    if (nuevaX2 >= 0 && nuevaX2 < componentesX && nuevaY2 >= 0 && nuevaY2 < componentesY) {
        if (mapa[nuevaY2][nuevaX2] === 'j') {
            tankPosition2.x2 = nuevaX2;
            tankPosition2.y2 = nuevaY2;
            actualizarPosicionTanque2();
        }
    }
}

// Actualizar la posición y rotación del tanque en el tablero
function actualizarPosicionTanque2() {
    let nuevaPosX2 = tankPosition2.x2 * dimencionCuadro;
    let nuevaPosY2 = tankPosition2.y2 * dimencionCuadro;
    tanque2Jugador.style.left = nuevaPosX2 + "px";
    tanque2Jugador.style.top = nuevaPosY2 + "px";
 
    // Aplicar rotación al tanque
    tanque2Jugador.style.transform = `rotate(${tankPosition2.rotation}deg)`;
}




let misilInterval2;

// Función para mover y rotar el misil 2
function movMisil2(tecla) {
    let nuevaX = misilPosition2.x;
    let nuevaY = misilPosition2.y;

    ocultarDiv2();

    misilPosition2.x = tankPosition2.x2;
    misilPosition2.y = tankPosition2.y2;
    actualizarPosicionMisil2();

    switch (tankPosition2.rotation) {
        case 180:
            nuevaY += 1;
            misilPosition2.rotation = tankPosition2.rotation; // Girar 180 grados
            break;
        case 0:
            nuevaY -= 1;
            misilPosition2.rotation = tankPosition2.rotation; // Sin rotación
            break;
        case -90:
            nuevaX -= 1;
            misilPosition2.rotation = tankPosition2.rotation; // Girar 90 grados a la izquierda
            break;
        case 90:
            nuevaX += 1;
            misilPosition2.rotation = tankPosition2.rotation; // Girar 90 grados a la derecha
            break;
    }

    if (tecla === "e") {
        visibleDiv2();
        clearInterval(misilInterval2);
        misilInterval2 = setInterval(moverMisilAutomatico2, 150);
    }
}

function moverMisilAutomatico2() {
    let nuevaX = misilPosition2.x;
    let nuevaY = misilPosition2.y;

    // Actualizar la posición del misil basándose en su rotación y dirección actual
    switch (misilPosition2.rotation) {
        case 180:
            nuevaY += 1;
            break;
        case 0:
            nuevaY -= 1;
            break;
        case -90:
            nuevaX -= 1;
            break;
        case 90:
            nuevaX += 1;
            break;
    }

    // Verificar si la nueva posición es un camino ('j') y no un bloque ('c')
    if (nuevaX >= 0 && nuevaX < componentesX && nuevaY >= 0 && nuevaY < componentesY) {
        if (mapa[nuevaY][nuevaX] === 'j' || mapa[nuevaY][nuevaX] === 'c' || mapa[nuevaY][nuevaX] === 'g') {
            misilPosition2.x = nuevaX;
            misilPosition2.y = nuevaY;
            actualizarPosicionMisil2();

            // Si el misil toca un bloque 'c' o 'g', detenerlo
            if (mapa[nuevaY][nuevaX] === 'c' || mapa[nuevaY][nuevaX] === 'g') {
                misilPosition2.x = tankPosition2.x2;
                misilPosition2.y = tankPosition2.y2;
                ocultarDiv2();
                actualizarPosicionMisil2();
                clearInterval(misilInterval2); // Detener el intervalo
            }
        }
    }
}
 
// Actualizar la posición y rotación del tanque en el tablero
function actualizarPosicionMisil2() {
    let nuevaPosX = misilPosition2.x * dimencionCuadro;
    let nuevaPosY = misilPosition2.y * dimencionCuadro;
    misil2.style.left = nuevaPosX + "px";
    misil2.style.top = nuevaPosY + "px";

    // Aplicar rotación al misil
    misil2.style.transform = `rotate(${misilPosition2.rotation}deg)`;
}




// Detectar eventos del teclado
document.addEventListener('keydown', function(event) {
    moverTanque(event.key);
    moverTanque2(event.key);
    movMisil(event.key);
    movMisil2(event.key);
});

// Inicializar la posición y rotación de los tanques y los misiles
actualizarPosicionTanque();
actualizarPosicionMisil();
actualizarPosicionMisil2();
actualizarPosicionTanque2();