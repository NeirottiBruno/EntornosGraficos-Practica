<?php 
// EJERCICIO 4

session_start();

if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 0;
}

$_SESSION['visitas']++;
echo "<p>Visitaste esta página {$_SESSION['visitas']} veces en esta sesión.</p>";

?>