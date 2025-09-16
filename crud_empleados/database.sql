-- Crear base de datos
CREATE DATABASE IF NOT EXISTS gaes2_db;
USE gaes2_db;

-- Crear tabla empleados
CREATE TABLE IF NOT EXISTS empleados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefono VARCHAR(20),
    cargo VARCHAR(50),
    salario DECIMAL(10,2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insertar algunos datos de ejemplo
INSERT INTO empleados (nombre, email, telefono, cargo, salario)
VALUES
('Carlos Pérez', 'carlos@example.com', '3001234567', 'Desarrollador', 2500000),
('Ana Gómez', 'ana@example.com', '3019876543', 'Diseñadora', 2200000),
('Luis Martínez', 'luis@example.com', '3025554444', 'Analista', 2800000);
