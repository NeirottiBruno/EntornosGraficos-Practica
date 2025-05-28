<?php
// EJERCICIO 8

$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds] segundos, del $fun[mday]/$fun[mon]/$fun[year]"; 

/* Salida: muestra la fecha y hora actual desglosada*/


function sumar($sumando1,$sumando2){
$suma=$sumando1+$sumando2;
echo $sumando1."+".$sumando2."=".$suma;
}
sumar(5,6);

/* Salida: imprime "5 + 6 = 11" */
?>