<?php
include("db.php");

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  mysqli_query($link, "DELETE FROM ciudades WHERE id=$id") or die(mysqli_error($link));
  echo "Ciudad eliminada.<br><a href='baja.php'>Volver</a>";
  exit;
}

$result = mysqli_query($link, "SELECT * FROM ciudades");
echo "<h2>Baja de Ciudad</h2><ul>";
while ($fila = mysqli_fetch_assoc($result)) {
  echo "<li>{$fila['ciudad']} - <a href='?id={$fila['id']}'>Eliminar</a></li>";
}
echo "</ul>";
?>
