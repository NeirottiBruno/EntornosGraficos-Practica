<?php

/*
Crear un formulario que solicite la carga del nombre de usuario. Cuando se presione un botón crear una cookie para dicho usuario. 
Luego cada vez que ingrese al formulario mostrar el último nombre de usuario ingresado.
*/


if (isset($_POST['usuario'])) {
    $nombre = $_POST['usuario'];
    setcookie('ultimo_usuario', $nombre, time() + (86400 * 30)); // 30 días
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Formulario de Usuario</title>
</head>
<body>
  <h2>Formulario de Usuario</h2>

  <?php
  if (isset($_COOKIE['ultimo_usuario'])) {
      echo "<p>Último usuario ingresado: <strong>" . htmlspecialchars($_COOKIE['ultimo_usuario']) . "</strong></p>";
  }
  ?>

  <form method="post" action="">
    <label>Nombre de usuario:</label>
    <input type="text" name="usuario" required>
    <input type="submit" value="Guardar">
  </form>
</body>
</html>
