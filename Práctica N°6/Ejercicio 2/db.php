<?php
// db.php - Conexión a la base de datos
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "Capitales";

$link = mysqli_connect($host, $user, $pass, $dbname)
  or die("Error al conectar: " . mysqli_connect_error());


/*
Usé XAMPP, dentro de la carpeta htdocs creé la carpeta abml_capitales, y dentro copié los archivos presentes en este ejercicio.

Después entré al navegador a http://localhost/phpmyadmin/, y creé una base de datos llamada Capitales, y ejecute la siguiente consulta sql:
CREATE TABLE ciudades (
  id INT AUTO_INCREMENT PRIMARY KEY,
  ciudad VARCHAR(50),
  pais VARCHAR(50),
  habitantes INT,
  superficie DECIMAL(10,2),
  tieneMetro TINYINT(1)
);

Por último inserté los datos que mostraba el ejercicio:
INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro) VALUES
('México D.F.', 'México', 555666, 23434.34, 1),
('Barcelona', 'España', 444333, 1111.11, 0),
('Buenos Aires', 'Argentina', 888111, 333.33, 1),
('Medellín', 'Colombia', 999222, 888.88, 0),
('Lima', 'Perú', 999111, 222.22, 0),
('Caracas', 'Venezuela', 111222, 111.11, 1),
('Santiago', 'Chile', 777666, 222.22, 1),
('Antigua', 'Guatemala', 444222, 877.33, 0),
('Quito', 'Ecuador', 333111, 999.11, 1),
('La Habana', 'Cuba', 111222, 333.11, 0);

Para verlo online vamos a la direccion: http://localhost/abml_capitales/menu.html

Se podría mejorar aun mas la web con un archivo CSS, pero ya todas las funcionalidades están cumplidas con estos archivos
*/
?>