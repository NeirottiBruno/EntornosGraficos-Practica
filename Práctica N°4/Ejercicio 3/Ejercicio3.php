<?php
// A)
?>

<html>
<head><title>Documento 1</title></head>
<body>
<?php
echo "<table width = 90% border = '1' >";
$row = 5;
$col = 2;
for ($r = 1; $r <= $row; $r++) {
echo "<tr>";
for ($c = 1; $c <= $col;$c++) {
echo "<td>&nbsp;</td>\n";
} echo "</tr>\n";
}
echo "</table>\n";
?>
</body></html>

<?php
/*
Explicación
- Genera una tabla de 5 filas y 2 columnas con PHP
- Cada celda viene vacía (&nbsp;) para que tenga tamaño visible
- Se usa un for anidado para controlar filas y columnas y generar la tabla acorde a los valores establecidos en las variables
*/

// B)
?>

<html>
<head><title>Documento 2</title></head>
<body>
<?php
if (!isset($_POST['submit'])) {
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Edad: <input name="age" size="2">
<input type="submit" name="submit" value="Ir">
</form>
<?php
}
else {
$age = $_POST['age'];
if ($age >= 21) {
echo 'Mayor de edad';
}
else {
echo 'Menor de edad';
}
}
?>
</body></html>

<?php
/*
Explicación
- Genera una página web con un formulario que solicita al usuario que ingrese su edad. El formulario se muestra solo si todavía no ha sido enviado, lo cual se detecta mediante la función isset que comprueba si se ha presionado el botón de envío.
- Se utiliza el método POST y se envía a sí mismo, gracias a que el atributo action del formulario contiene $_SERVER['PHP_SELF'], lo cual permite que el mismo archivo PHP procese la información que el usuario introduce.
- Una vez que el usuario envía el formulario, el código lee el valor ingresado (edad) y evalúa si es mayor o igual a 21. Si lo es, muestra el mensaje “Mayor de edad”; si no, muestra “Menor de edad”.
*/
?>