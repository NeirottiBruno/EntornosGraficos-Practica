Creé la bd y ejecuté las siguientes instrucciones:

CREATE DATABASE Compras;
USE Compras;

CREATE TABLE catalogo (
  id INT AUTO_INCREMENT PRIMARY KEY,
  producto VARCHAR(100),
  precio DECIMAL(9,2)
);

INSERT INTO catalogo (producto, precio) VALUES
('Mouse', 10.99),
('Teclado', 25.50),
('Monitor', 120.00),
('Auriculares', 40.00);
