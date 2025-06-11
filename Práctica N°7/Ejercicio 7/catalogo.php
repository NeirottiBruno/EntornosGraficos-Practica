<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "Compras");

$result = mysqli_query($link, "SELECT * FROM catalogo");

echo "<h2>Catálogo</h2><ul>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<li>{$row['producto']} - $ {$row['precio']}
        <a href='agregar.php?id={$row['id']}'>Agregar al carrito</a></li>";
}
echo "</ul>";
echo "<p><a href='carrito.php'>Ver carrito</a></p>";
?>
