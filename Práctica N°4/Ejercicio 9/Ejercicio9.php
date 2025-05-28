<?php

function comprobar_nombre_usuario($nombre_usuario) {
    if (strlen($nombre_usuario) < 3 || strlen($nombre_usuario) > 20) {
        echo "$nombre_usuario no es válido<br>";
        return false;
    }
    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";
    for ($i = 0; $i < strlen($nombre_usuario); $i++) {
        if (strpos($permitidos, $nombre_usuario[$i]) === false) {
            echo "$nombre_usuario no es válido<br>";
            return false;
        }
    }
    echo "$nombre_usuario es válido<br>";
    return true;
}

// La función analiza si una cadena enviada es válida

// Ejemplos de prueba
comprobar_nombre_usuario("Ana");     // válido
comprobar_nombre_usuario("J0hn_Doe"); // válido
comprobar_nombre_usuario("AB");      // no válido (<3)
comprobar_nombre_usuario("user!");   // no válido (! no permitido)
?>
