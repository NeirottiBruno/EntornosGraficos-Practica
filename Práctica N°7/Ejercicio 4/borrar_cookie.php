<?php
setcookie('titular', '', time() - 3600);
header("Location: noticias.php");
exit;
?>