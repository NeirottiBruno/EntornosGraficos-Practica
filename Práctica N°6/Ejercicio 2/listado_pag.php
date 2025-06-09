<?php
include("db.php");

$limite = 5;
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
$inicio = ($pagina - 1) * $limite;

$res = mysqli_query($link, "SELECT * FROM ciudades LIMIT $inicio, $limite");

echo "<h2>Listado con Paginación</h2><table border='1'>";
echo "<tr><th>ID</th><th>Ciudad</th><th>País</th><th>Habitantes</th><th>Superficie</th><th>Metro</th></tr>";
while ($f = mysqli_fetch_assoc($res)) {
  echo "<tr>
          <td>{$f['id']}</td>
          <td>{$f['ciudad']}</td>
          <td>{$f['pais']}</td>
          <td>{$f['habitantes']}</td>
          <td>{$f['superficie']}</td>
          <td>{$f['tieneMetro']}</td>
        </tr>";
}
echo "</table>";

$totalRes = mysqli_query($link, "SELECT COUNT(*) as total FROM ciudades");
$total = mysqli_fetch_assoc($totalRes)['total'];
$totalPaginas = ceil($total / $limite);

for ($i = 1; $i <= $totalPaginas; $i++) {
  echo "<a href='?pagina=$i'>$i</a> ";
}
?>
