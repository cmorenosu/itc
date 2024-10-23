// Este código crea un juego en el que un tanque puede
//moverse dentro de un tablero basado en una matriz, utilizando las flechas del teclado.
let x = 0;
let y = 0;

//tankPosition define la posición inicial del tanque en el tablero (x: 2, y: 2) y su rotación (rotation: 0 grados).
let tankPosition = {
    x: 2, //Coordenada inicial X en la matriz (columna)
    y: 2, //Coordenada inicial Y en la matriz (fila)
    rotation: 0 // Rotación inicial (en grados)
};

//mapa es una matriz que representa el tablero del juego. Los diferentes caracteres ('p', 'e', 'd', 'b', etc.) representan
//diferentes tipos de terreno o elementos.
let mapa = [
    ["p", "p", "p", "e", "e", "e", "d", "p"],
    ["a", "b", "p", "p", "p", "p", "f", "p"],
    ["g", "h", "p", "d", "e", "d", "p", "p"],
    ["e", "p", "p", "f", "e", "f", "e", "e"],
    ["p", "p", "e", "p", "p", "p", "p", "p"],
    ["e", "p", "p", "p", "h", "p", "a", "b"],
    ["a", "b", "e", "g", "p", "p", "p", "p"],
    ["p", "p", "p", "p", "p", "e", "a", "b"],
    ["e", "h", "g", "h", "p", "p", "p", "p"]

];

//dimencionCuadro define el tamaño de cada celda en el tablero (84px).
let dimencionCuadro = 84;
//Se calcula el tamaño total del tablero (ancho y alto) basado en la cantidad de celdas
//(componentesX y componentesY) y se ajusta el tamaño del contenedor HTML (tabler).
let componentesY = mapa.length;
let componentesX = mapa[0].length;
let tabler = document.getElementById("tabler");
let tanqueJugador = document.getElementById("tanque");

// Ajustar tamaño
let alto = componentesY * dimencionCuadro;
let ancho = componentesX * dimencionCuadro;
tabler.style.width = ancho + 'px';
tabler.style.height = alto + 'px';

//Generar el tablero:
//Un bucle doble recorre la matriz mapa y crea un div por cada celda, asignándole una clase correspondiente al valor en la matriz ('p', 'e', etc.), que representa visualmente los diferentes terrenos.
// Generar el tablero
for (let col = 0; col < componentesY; col++) {
    for (let fil = 0; fil < componentesY; fil++) {
        let div = document.createElement("div");
        div.className = mapa[col][fil];
        tabler.appendChild(div);
    }
}

//Función moverTanque(tecla):
//Mueve el tanque dependiendo de la tecla presionada (arriba, abajo, izquierda, derecha) y actualiza su rotación.
function moverTanque(tecla) {
    let nuevaX = tankPosition.x;
    let nuevaY = tankPosition.y;

    if (tecla === "ArrowDown") {
        nuevaY += 1;
        tankPosition.rotation = 180;

    } else if (tecla === "ArrowUp") {
        nuevaY -= 1;
        tankPosition.rotation = 0;

    } else if (tecla === "ArrowRight") {
        nuevaX += 1;
        tankPosition.rotation = 90;

    } else if (tecla === "ArrowLeft") {
        nuevaX -= 1;
        tankPosition.rotation = -90;

    }

    //Verifica si la nueva posición es válida (dentro del tablero y en una celda de tipo 'p', que representa un camino).
    // Verificar si la nueva posición es un camino ('p') y no un bloque ('b')
    if (nuevaX >= 0 && nuevaX < componentesX && nuevaY >= 0 && nuevaY < componentesY) {
        if (mapa[nuevaY][nuevaX] === 'p') {
            tankPosition.x = nuevaX;
            tankPosition.y = nuevaY;
            actualizarPosicionTanque();

        }
    }

}

// Actualiza la posición del tanque en el tablero ajustando las coordenadas y aplica la rotación visualmente utilizando CSS.
function actualizarPosicionTanque() {
    let nuevaPosX = tankPosition.x * dimencionCuadro;
    let nuevaPosY = tankPosition.y * dimencionCuadro;
    tanqueJugador.style.left = nuevaPosX + "px";
    tanqueJugador.style.top = nuevaPosY + "px";

    // Aplicar rotación al tanque
    tanqueJugador.style.transform = `rotate(${tankPosition.rotation}deg)`;
}
//Capturar eventos del teclado:
//Un listener detecta las teclas presionadas y llama a moverTanque() cuando se presionan las flechas del teclado.
//Detectar eventos del teclado
document.addEventListener('keydown', function (event) {
    moverTanque(event.key);

})
//actualizarPosicionTanque() es llamada al principio para colocar el tanque en su posición inicial.
//Iniciar la posición y rotación del tanque
actualizarPosicionTanque();