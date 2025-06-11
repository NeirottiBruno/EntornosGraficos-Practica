<?php
session_start();

if (isset($_SESSION['nombre'])) {
    echo "<h2>Bienvenido/a, " . htmlspecialchars($_SESSION['nombre']) . "</h2>";
} else {
    echo "No podés acceder a esta página. <a href='ingresar_mail.php'>Iniciar sesión</a>";
}
?>
