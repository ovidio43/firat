<?php


$var1=$_POST["student_Name"];
$var2=$_POST["parent_Name"];
$var3=$_POST["parent_email_address"];
$var4=$_POST["Address"];
$var5=$_POST["City_State"];
// $var6=$_POST["parent_secondary"];
//$var7=$_POST["parent_primary"];
//$var8=$_POST["student_high"];
//$var9=$_POST["student_grade"];
//$var10=$_POST["Select_your_Practice"];
//$var11=$_POST["Help_on_every"];
//$var12=$_POST["practice_test"];
//$var13=$_POST["date_test"];
//$var14=$_POST["question_one"];
//$var15=$_POST["question_two"];
//$var16=$_POST["question_thrre"];
//$var17=$_POST["question_for"];
//$var18=$_POST["question_five"];

if (!empty($var1) && !empty($var2) && !empty($var3) && !empty($var4)&& !empty($var5)) {
//        if (filter_var($email, FILTER_VALIDATE_EMAIL) && filter_var($paypal, FILTER_VALIDATE_EMAIL)) {
    $destinatario = "alfonsin.marquez@altra.com.bo";
    $asunto = "Badge Program Referral Contest, 1-2014";
    $cuerpo .= "First Name: " . $var1 . "\r\n";
    $cuerpo .= "Last Name: " . $var2 . "\r\n";
    $cuerpo .= "Email: " . $var3 . "\r\n";
    $cuerpo .= "PayPal Email Address for Payment: " . $var4 . "\r\n";
    $cuerpo .= "Site URL: " . $var5 . "\r\n";
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From: Mommyhotspot <noreply@firateducation.com>\r\n";
    if (mail($destinatario, $asunto, $cuerpo, $headers)){
        echo 'OK SEND..';
    }else{
        echo "Error. Please try again.";
    }
           
} else {
    echo 'Some fields are required.';
}

?>
