<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "Compras");

echo "<h2>Carrito de Compras</h2>";

if (!isset($_SESSION['carrito']) || count($_SESSION['carrito']) === 0) {
  echo "El carrito está vacío. <a href='catalogo.php'>Volver</a>";
  exit;
}

$total = 0;
echo "<ul>";

foreach ($_SESSION['carrito'] as $id) {
  $res = mysqli_query($link, "SELECT producto, precio FROM catalogo WHERE id = $id");
  if ($fila = mysqli_fetch_assoc($res)) {
    echo "<li>{$fila['producto']} - $ {$fila['precio']}</li>";
    $total += $fila['precio'];
  }
}

echo "</ul>";
echo "<strong>Total: $ $total</strong><br><a href='catalogo.php'>Seguir comprando</a>";
?>
