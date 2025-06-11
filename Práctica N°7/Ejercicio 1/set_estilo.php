<?php
if (isset($_POST['estilo'])) {
  setcookie('estilo', $_POST['estilo'], time() + (86400 * 30)); // 30 días
}
header("Location: index.php");
exit;
