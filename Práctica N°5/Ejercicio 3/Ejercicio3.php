<?php 
// EJERCICIO 3

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tuNombre   = trim($_POST['tuNombre']   ?? '');
    $tuEmail    = trim($_POST['tuEmail']    ?? '');
    $amigoEmail = trim($_POST['amigoEmail'] ?? '');

    $subject = "$tuNombre te recomienda este sitio web";
    $message = 
      "Hola,\n\n" .
      "$tuNombre ($tuEmail) cree que te podría interesar esta web:\n" .
      "https://www.google.com\n\n"
      ;

    $headers = "From: $tuNombre <$tuEmail>\r\n";

    if ( mail($amigoEmail, $subject, $message, $headers) ) {
        echo "Email enviado a $amigoEmail.";
    } else {
        echo "Error al enviar el email.";
    }
    exit;
}

// Solo faltaría configurar el SMTP y funcionaría ya (lo dejo acá para poder verlo luego en base a algún SMTP de un proveedor o de google)
?>

<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Recomendar a un amigo</title></head>
<body>

<h2>Recomendá este sitio a un amigo</h2>
<form action="" method="post">
  Tu nombre:     <input type="text" name="tuNombre" required><br>
  Tu email:      <input type="email" name="tuEmail" required><br>
  Email del amigo: <input type="email" name="amigoEmail" required><br>
  <button type="submit">Enviar recomendación</button>
</form>

</body>
</html>
