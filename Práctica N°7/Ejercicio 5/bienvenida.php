<?php
session_start();

if (isset($_SESSION['usuario']) && isset($_SESSION['clave'])) {
    echo "<h2>Bienvenido, " . htmlspecialchars($_SESSION['usuario']) . "</h2>";
    echo "<p>Tu clave es: " . htmlspecialchars($_SESSION['clave']) . "</p>";
} else {
    echo "No has iniciado sesión. <a href='login.php'>Volver</a>";
}
?>
