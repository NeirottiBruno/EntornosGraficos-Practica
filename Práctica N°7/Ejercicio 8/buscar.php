<?php
$link = mysqli_connect("localhost", "root", "", "prueba");

$resultados = [];
if (isset($_GET['query'])) {
  $q = mysqli_real_escape_string($link, $_GET['query']);
  $sql = "SELECT * FROM buscador WHERE cancion LIKE '%$q%'";
  $res = mysqli_query($link, $sql);

  while ($fila = mysqli_fetch_assoc($res)) {
    $resultados[] = $fila['cancion'];
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Buscador de Canciones</title>
</head>
<body>
  <h2>Buscar canción</h2>
  <form method="get" action="">
    <input type="text" name="query" placeholder="Ingrese texto..." required>
    <input type="submit" value="Buscar">
  </form>

  <?php if (isset($_GET['query'])): ?>
    <h3>Resultados:</h3>
    <?php if (count($resultados) > 0): ?>
      <ul>
        <?php foreach ($resultados as $cancion): ?>
          <li><?= htmlspecialchars($cancion) ?></li>
        <?php endforeach; ?>
      </ul>
    <?php else: ?>
      <p>No se encontraron coincidencias.</p>
    <?php endif; ?>
  <?php endif; ?>
</body>
</html>
