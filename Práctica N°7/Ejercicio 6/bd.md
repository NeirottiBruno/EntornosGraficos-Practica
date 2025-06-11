Creé la bd y ejecuté las siguientes instrucciones:

CREATE DATABASE base2;
USE base2;

CREATE TABLE alumnos (
  codigo INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100),
  codigocurso INT,
  mail VARCHAR(100)
);

INSERT INTO alumnos (nombre, codigocurso, mail) VALUES
('Juan Pérez', 101, 'juan@mail.com'),
('Ana López', 102, 'ana@mail.com');
