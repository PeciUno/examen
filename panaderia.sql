-- Crear la base de datos para la biblioteca
CREATE DATABASE panaderia;

-- Usar la base de datos
USE panaderia;

-- Tabla para los panes
CREATE TABLE panes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    cantidad INT DEFAULT 0
);

-- Tabla para los usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    dni char(9),
    email VARCHAR(255),
    telefono VARCHAR(20)
);

-- Tabla para los pedidos
CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_pan INT,
    id_usuario INT,
    detalles VARCHAR(255),
    cantidad INT DEFAULT 1,
    FOREIGN KEY (id_pan) REFERENCES panes(id),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);