<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "base2");

$mail = $_POST['mail'];
$result = mysqli_query($link, "SELECT nombre FROM alumnos WHERE mail = '$mail'");

if ($row = mysqli_fetch_assoc($result)) {
    $_SESSION['nombre'] = $row['nombre'];
    header("Location: bienvenida.php");
} else {
    echo "Mail no registrado. <a href='ingresar_mail.php'>Volver</a>";
}
?>
