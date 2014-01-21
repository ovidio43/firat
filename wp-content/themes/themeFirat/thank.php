<?php
session_start();
foreach ($_POST as $key => $value) {
    $_SESSION[$key] = $value;
}
echo '<h1>gracias por suscribirse</h1>';
foreach ($_SESSION as $key => $value) {
    echo $key . '-->' . $value;
    echo '<br>';
}
session_destroy();
?>
<!--<meta http-equiv = "Refresh" content = "3;URL=http://www.firateducation.com/fes2" />-->