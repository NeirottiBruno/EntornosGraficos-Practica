<?php
// EJERCICIO 1

function doble($i) {
    return $i * 2;
}
$a = TRUE;
$b = "xyz";
$c = 'xyz';
$d = 12;
echo gettype($a);
echo gettype($b);
echo gettype($c);
echo gettype($d);
if (is_int($d)) {
    $d += 4;
}
if (is_string($a)) {
    echo "Cadena: $a";
}
$d = $a ? ++$d : $d * 3;
$f = doble($d++);
$g = $f += 10;
echo $a, $b, $c, $d, $f, $g;

/*
Variables
- $a: booleano (TRUE)
- $b: cadena doble comilla ("xyz")
- $c: cadena simple comilla ('xyz')
- $d: entero (12)
- $f, $g: enteros (se definen más abajo)

Operadores
- Aritméticos: *, +, +=, ++
- Ternario: ?:
- Asignación: =
- Concatenación implícita en echo

Funciones y parámetros
- doble($i): recibe un entero $i, devuelve $i * 2.
- gettype($x): devuelve el tipo de la variable que se pasa por parámetro.
- is_int($d), is_string($a): comprueban el tipo.

Estructuras de control
- Definición de función (function …)
- if ( … ) { … } elseif …
- Operador ternario $a ? … : …

Salidas por pantalla:
Se evalúa como van cambiando las variables y cuándo se imprimen
1. Al imprimir el tipo de cada variable obtenemos 
booleanstringstringinteger
2. Luego de comprobar is_int($d), $d pasa de 12 a 16.
3. El segundo if no se ejecuta (no es string).
4. Como $a es TRUE, entonces $d se incrementa en 1, pasando de 16 a 17.
5. $f se asigna el doble de 17, y se incrementa nuevamente $d en 1
6. $f se le suma 10, $g recibe el mismo valor de $f (44).
7. echo $a, $b, $c, $d, $f, $g; imprime: 1xyzxyz1844 (ahí 1 es la representación de TRUE).
En definitiva, todo en conjunto va a devolver lo siguiente: booleanstringstringinteger1xyzxyz184444

*/
?>