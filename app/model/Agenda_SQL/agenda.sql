CREATE DATABASE prueba;

USE prueba;

CREATE TABLE contactos (
    id INT AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(50),
    telefono VARCHAR(50),
    email VARCHAR(50),
    PRIMARY KEY (id)
);

CREATE TABLE categorias (
    id INT AUTO_INCREMENT NOT NULL,
    categoria VARCHAR(50),
    PRIMARY KEY (id)
);

CREATE TABLE relacion (
    id_contacto INT,
    id_categoria INT,
    FOREIGN KEY (id_contacto) REFERENCES contactos(id),
    FOREIGN KEY (id_categoria) REFERENCES categorias(id)
);


INSERT INTO contactos (nombre, telefono, email)
VALUES
    ('Juan Pérez', '123-456-7890', 'juan@example.com'),
    ('María González', '987-654-3210', 'maria@example.com'),
    ('Pedro Rodríguez', '555-555-5555', 'pedro@example.com'),
    ('Ana López', '777-888-9999', 'ana@example.com'),
    ('Luisa Martínez', '111-222-3333', 'luisa@example.com');
    
INSERT INTO categorias (categoria)
VALUES
    ('Amigos'),
    ('Familia'),
    ('Trabajo'),
    ('Clientes'),
    ('Amigos'),
    ('Compañeros'),
    ('Proveedores');
    
-- Supongamos que los IDs de los contactos y categorías son 1 y 1 respectivamente
INSERT INTO relacion (id_contacto, id_categoria)
VALUES
    (1, 1),
    (2, 2),
    (3, 3),
    (4, 4),
    (5, 5),
    (6, 6),
    (7, 7);
    
    
SELECT contactos.*
FROM contactos
INNER JOIN relacion ON contactos.id = relacion.id_contacto;


CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Inserta cinco registros de ejemplo en la tabla usuarios
INSERT INTO usuarios (email, password)
VALUES
    ('a@gmail.com', 'Contraseña1'),
    ('a2@gmail.com', 'Contraseña1')




