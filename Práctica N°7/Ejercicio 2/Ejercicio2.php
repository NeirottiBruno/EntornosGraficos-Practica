<?php

/*
Crear una cookie llamada “contador” que lleve la cuenta en el lado cliente del número de veces que se ha accedido a la página contador.php. Si es la primera vez que se accede, 
la página dará la bienvenida al usuario. Si ya se ha accedido anteriormente, la página hará uso de la cookie para mostrar el número de veces que se ha visitado dicha página.
*/


if (isset($_COOKIE['contador'])) {
    $visitas = $_COOKIE['contador'] + 1;
    setcookie('contador', $visitas, time() + (86400 * 365)); // 1 año
    echo "<h2>Has visitado esta página $visitas veces.</h2>";
} else {
    setcookie('contador', 1, time() + (86400 * 365)); // Primera vez
    echo "<h2>Bienvenido por primera vez a la página.</h2>";
}
?>
