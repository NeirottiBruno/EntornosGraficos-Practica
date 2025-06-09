<?php include("db.php"); ?>

<h2>Alta de Ciudad</h2>
<form method="post" action="">
  Ciudad: <input type="text" name="ciudad"><br>
  País: <input type="text" name="pais"><br>
  Habitantes: <input type="number" name="habitantes"><br>
  Superficie: <input type="number" step="0.01" name="superficie"><br>
  ¿Tiene metro? <input type="checkbox" name="metro" value="1"><br>
  <input type="submit" name="guardar" value="Guardar">
</form>

<?php
if (isset($_POST['guardar'])) {
  $ciudad = $_POST['ciudad'];
  $pais = $_POST['pais'];
  $habitantes = $_POST['habitantes'];
  $superficie = $_POST['superficie'];
  $metro = isset($_POST['metro']) ? 1 : 0;

  $sql = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro)
          VALUES ('$ciudad', '$pais', $habitantes, $superficie, $metro)";
  mysqli_query($link, $sql) or die(mysqli_error($link));
  echo "Ciudad agregada correctamente.";
}
?>
