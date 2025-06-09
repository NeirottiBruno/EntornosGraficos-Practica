<?php
include("db.php");

$res = mysqli_query($link, "SELECT * FROM ciudades");

echo "<h2>Listado de Ciudades</h2><table border='1'>";
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
?>
