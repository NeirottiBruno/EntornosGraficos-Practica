<?php
if (isset($_POST['titular'])) {
    setcookie('titular', $_POST['titular'], time() + (86400 * 30));
}
header("Location: noticias.php");
exit;
?>