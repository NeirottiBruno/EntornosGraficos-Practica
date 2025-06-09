<?php
include("db.php");

if (isset($_POST['modificar'])) {
  $id = $_POST['id'];
  $ciudad = $_POST['ciudad'];
  $pais = $_POST['pais'];
  $habitantes = $_POST['habitantes'];
  $superficie = $_POST['superficie'];
  $metro = isset($_POST['metro']) ? 1 : 0;

  $sql = "UPDATE ciudades SET ciudad='$ciudad', pais='$pais', habitantes=$habitantes,
          superficie=$superficie, tieneMetro=$metro WHERE id=$id";
  mysqli_query($link, $sql) or die(mysqli_error($link));
  echo "Ciudad modificada.<br><a href='modificacion.php'>Volver</a>";
  exit;
}

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $res = mysqli_query($link, "SELECT * FROM ciudades WHERE id=$id");
  $fila = mysqli_fetch_assoc($res);
?>
<h2>Modificar Ciudad</h2>
<form method="post" action="">
  <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
  Ciudad: <input type="text" name="ciudad" value="<?php echo $fila['ciudad']; ?>"><br>
  País: <input type="text" name="pais" value="<?php echo $fila['pais']; ?>"><br>
  Habitantes: <input type="number" name="habitantes" value="<?php echo $fila['habitantes']; ?>"><br>
  Superficie: <input type="number" step="0.01" name="superficie" value="<?php echo $fila['superficie']; ?>"><br>
  ¿Tiene metro? <input type="checkbox" name="metro" value="1" <?php if ($fila['tieneMetro']) echo "checked"; ?>><br>
  <input type="submit" name="modificar" value="Modificar">
</form>
<?php
} else {
  $res = mysqli_query($link, "SELECT * FROM ciudades");
  echo "<h2>Seleccione una ciudad para modificar:</h2><ul>";
  while ($fila = mysqli_fetch_assoc($res)) {
    echo "<li><a href='?id={$fila['id']}'>{$fila['ciudad']}</a></li>";
  }
  echo "</ul>";
}
?>
