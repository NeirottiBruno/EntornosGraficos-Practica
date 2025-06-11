<?php

/*
Crear una página que puede configurarse con distintos estilos CSS. El usuario es quien decide qué aspecto desea que tenga la página, por medio de un formulario. 
Luego la página es capaz de recordar, entre los distintos accesos que realice el usuario, el aspecto que había elegido para mostrar la web.
*/

$estilo = isset($_COOKIE['estilo']) ? $_COOKIE['estilo'] : 'estilo1.css';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Estilo Personalizado</title>
  <link rel="stylesheet" href="<?php echo $estilo; ?>">
</head>
<body>
  <h1>Bienvenido a una página con estilo personalizado</h1>
  <form method="post" action="set_estilo.php">
    <label>Elija un estilo:</label><br>
    <input type="radio" name="estilo" value="estilo1.css" checked> Claro<br>
    <input type="radio" name="estilo" value="estilo2.css"> Oscuro<br>
    <input type="submit" value="Guardar estilo">
  </form>
</body>
</html>
