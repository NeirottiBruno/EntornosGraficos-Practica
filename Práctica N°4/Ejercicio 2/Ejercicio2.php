<?php
// EJERCICIO 2

// A) Vemos que los tres casos imprimen la secuencia 12345678910, por lo que son equivalentes en la salida
// usando while
$i = 1;
while ($i <= 10) {
    print $i++;
}

$i = 1;
while ($i <= 10):
    print $i;
    $i++;
endwhile;

// do..while
$i = 0;
do {
    print ++$i;
} while ($i < 10);


// B) Vemos que los cuatro casos también imprimen la secuencia 12345678910, por lo que son equivalentes en la salida
// for clásico
for ($i = 1; $i <= 10; $i++) {
    print $i;
}

// for con break
for ($i = 1; ; $i++) {
    if ($i > 10) break;
    print $i;
}

// for infinito + break
$i = 1;
for (;;) {
    if ($i > 10) break;
    print $i;
    $i++;
}

// for en una sola linea
for ($i = 1; $i <= 10; print $i, $i++);


// C) Vemos que la lógica es equivalente en salida (if…elseif evalúa cada condición en orden nuebtras que switch salta directamente a la rama correspondiente (mejor cuando hay muchas opciones)
if ($i == 0) {
    print "i equals 0";
} elseif ($i == 1) {
    print "i equals 1";
} elseif ($i == 2) {
    print "i equals 2";
}

switch ($i) {
    case 0:
        print "i equals 0";
        break;
    case 1:
        print "i equals 1";
        break;
    case 2:
        print "i equals 2";
        break;
}

?>