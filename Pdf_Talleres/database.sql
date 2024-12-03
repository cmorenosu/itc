
CREATE TABLE roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    correo VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    rol_id INT,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (rol_id) REFERENCES roles(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Define los diferentes roles que pueden tener los usuarios (e.g., jugador, administrador, etc.).

-- Guarda los mapas creados por usuarios, permitiendo que los jugadores tengan varios mapas.
CREATE TABLE mapas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    usuario_id INT NOT NULL,
    datos_mapa JSON NOT NULL, --  Guarda el diseño del mapa en formato JSON
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Guarda las partidas que se juegan entre diferentes usuarios en distintos mapas.
CREATE TABLE partidas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mapa_id INT NOT NULL,
    fecha_inicio TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_fin TIMESTAMP NULL,
    ganador_id INT,
    FOREIGN KEY (mapa_id) REFERENCES mapas(id),
    FOREIGN KEY (ganador_id) REFERENCES usuarios(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
-- Asocia jugadores con una partida específica, ya que una partida puede incluir varios usuarios como contrincantes.
CREATE TABLE partidas_usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    partida_id INT NOT NULL,
    usuario_id INT NOT NULL,
    posicion_inicial_x INT DEFAULT 0,
    posicion_inicial_y INT DEFAULT 0,
    puntos INT DEFAULT 0, --  Puntos del jugador en esta partida
    FOREIGN KEY (partida_id) REFERENCES partidas(id) ON DELETE CASCADE,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE lugares (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    efecto VARCHAR(255), --  Descripción del efecto (e.g., "regenerar vida", "incrementar velocidad")
    posicion_x INT NOT NULL,
    posicion_y INT NOT NULL,
    mapa_id INT NOT NULL,
    FOREIGN KEY (mapa_id) REFERENCES mapas(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- instrucciones adicionales

--  Insertar roles
INSERT INTO roles (nombre) VALUES ('jugador'), ('administrador');

--  Insertar usuarios
INSERT INTO usuarios (nombre, correo, password, rol_id) VALUES 
('Juan Pérez', 'juan@example.com', 'hashed_password_juan', 1),
('María López', 'maria@example.com', 'hashed_password_maria', 1);

--  Insertar un mapa
INSERT INTO mapas (nombre, usuario_id, datos_mapa) VALUES 
('Mapa 1', 1, '[["b", "p", "b"], ["p", "p", "p"], ["b", "p", "b"]]');

--  Insertar una partida
INSERT INTO partidas (mapa_id) VALUES (1);

--  Agregar jugadores a la partida
INSERT INTO partidas_usuarios (partida_id, usuario_id, posicion_inicial_x, posicion_inicial_y) VALUES 
(1, 1, 0, 0),
(1, 2, 2, 2);

--  Insertar un lugar especial en el mapa
INSERT INTO lugares (nombre, efecto, posicion_x, posicion_y, mapa_id) VALUES 
('Punto de Vida Extra', 'regenerar vida', 1, 1, 1);
