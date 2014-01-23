<?php
session_start();
foreach ($_POST as $key => $value) {
    $_SESSION[$key] = $value;
}

//$destinatario = "angie@mommyhotspot.com";
$destinatario = "jorge.quispe@altra.com.bo";
$asunto = "Badge Program Referral Contest, 1-2014";

$cuerpo = '';
foreach ($_SESSION as $key => $value) {
    $cuerpo.= $key . " : " . $value . " \r\n";
}
$headers = "MIME-Version: 1.0\r\n";

$headers .= "From: Mommyhotspot <noreply@mommyhotspot.com>\r\n";
if (mail($destinatario, $asunto, $cuerpo, $headers))
    echo '<h1>gracias por suscribirse</h1>';
else
    echo "Error. Please try again.";


session_destroy();
?>
<!--<meta http-equiv = "Refresh" content = "3;URL=http://www.firateducation.com/fes2" />-->