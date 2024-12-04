 let mapa = [
        ['b', 'p', 'b', 'b', 'b', 'b'],
            ['b', 'p', 'p', 'p', 'p', 'b'],
            ['b', 'p', 'p', 'p', 'p', 'b'],
            ['b', 'p', 'b', 'b', 'p', 'b'],
            ['b', 'p', 'p', 'p', 'p', 'b'],
            ['b', 'p', 'p', 'p', 'p', 'b'],
            ['b', 'b', 'b', 'b', 'b', 'b']];

        let tabler = document.getElementById("tabler");

        for (col = 0; col < mapa.length; col++) {
            for (fil = 0; fil < mapa[col].length; fil++) {
                let div = document.createElement('div'); // Crear un nuevo div
                div.className = mapa[col][fil]; // Asignar la clase al div
                tabler.appendChild(div); // Agregar el div al contenedor
            }
        }
