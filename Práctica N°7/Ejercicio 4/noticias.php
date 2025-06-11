<?php

/*
Confeccionar una página que simule ser la de un periódico. La misma debe permitir configurar qué tipo de titular deseamos que aparezca al visitarla, pudiendo ser:
Noticia política, Noticia económica o Noticia deportiva.
Mediante tres objetos de tipo radio, permitir seleccionar qué titular debe mostrar el periódico. Almacenar en una cookie el tipo de titular que desea ver el cliente. 
La primera vez que visita el sitio deben aparecer los tres titulares. Disponer un hipervínculo a una tercer página que borre la cookie creada.
*/

$opcion = isset($_COOKIE['titular']) ? $_COOKIE['titular'] : 'todos';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Mi Periódico</title>
</head>
<body>
  <h1>Bienvenido al Periódico</h1>

  <form method="post" action="set_titular.php">
    <p>Seleccione el tipo de titular:</p>
    <input type="radio" name="titular" value="politica" <?= $opcion === 'politica' ? 'checked' : '' ?>> Política<br>
    <input type="radio" name="titular" value="economia" <?= $opcion === 'economia' ? 'checked' : '' ?>> Economía<br>
    <input type="radio" name="titular" value="deportes" <?= $opcion === 'deportes' ? 'checked' : '' ?>> Deportes<br>
    <input type="submit" value="Guardar preferencia">
  </form>

  <p><a href="borrar_cookie.php">Borrar preferencia</a></p>

  <hr>

  <?php
  if ($opcion === 'todos') {
      echo "<h3>Política: Reforma constitucional en debate</h3>";
      echo "<h3>Economía: Argentina comienza a exportar salmón a Perú</h3>";
      echo "<h3>Deportes: Argentina le ganó 4 a 1 a Brasil</h3>";
  } else {
      if ($opcion === 'politica') {
          echo "<h3>Política: Reforma constitucional en debate</h3>";
      } elseif ($opcion === 'economia') {
          echo "<h3>Economía: Argentina comienza a exportar salmón a Perú</h3>";
      } elseif ($opcion === 'deportes') {
          echo "<h3>Deportes: Argentina le ganó 4 a 1 a Brasil</h3>";
      }
  }
  ?>
</body>
</html>
