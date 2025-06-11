<?php

/*
Realizar una página donde carguemos en un formulario el nombre de usuario y clave de un cliente. Luego realizar una segunda página donde se creen dos variables de sesión.
Y como última página crear una tercera en la cual se recuperen los valores almacenados en las variables de sesión anterior.
*/

session_start();

if (isset($_POST['usuario']) && isset($_POST['clave'])) {
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['clave'] = $_POST['clave'];
    header("Location: bienvenida.php");
} else {
    echo "Faltan datos. <a href='login.php'>Volver</a>";
}
?>
