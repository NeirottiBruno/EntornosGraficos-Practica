Creé la bd y ejecuté las siguientes instrucciones:

CREATE DATABASE prueba;
USE prueba;

CREATE TABLE buscador (
  id INT AUTO_INCREMENT PRIMARY KEY,
  cancion VARCHAR(100)
);

INSERT INTO buscador (cancion) VALUES
('Let it be'),
('Imagine'),
('Bohemian Rhapsody'),
('Despacito'),
('Shape of You'),
('Another Brick in the Wall'),
('Hey Jude'),
('Thunderstruck');
