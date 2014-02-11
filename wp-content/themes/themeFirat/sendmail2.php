<?php
//var_dump($_POST);
require $_SERVER['DOCUMENT_ROOT'].'/fes2/wp-content/themes/themeFirat/PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.1and1.com';
$mail->SMTPAuth = true;
$mail->Port = 25;
$mail->Username = 'noreply@firateducation.com';
$mail->Password = 'noreplyfes';

$mail->setFrom('noreply@firateducation.com', 'FES Educational Assessment');
$mail->addReplyTo('noreply@firateducation.com', 'Firateducation mail');
$mail->addAddress('josephine@firateducation.com', 'Firateducational');
$mail->addAddress('JLGough@gmail.com', 'JL');
$mail->addAddress('altra@omnilogic.us', 'Eddy');

$mail->Subject = 'Register for your FES Educational Assessment and Roadmap today';

$body ="<b>First Name: </b>".$_POST["first_name"]."<br>";
$body .="<b>Last Name </b>".$_POST["last_name"]."<br>";
$body .="<b>Email </b>".$_POST["email"]."<br>";
$body .="<b>Phone Number </b>".$_POST["phone_number"]."<br>";
$body .="<b>Address </b>".$_POST["__address"]."<br>";
$body .="<b>City, State </b>".$_POST["__city_state"]."<br>";
$body .="<b>ZIP code </b>".$_POST["__zip_code"]."<br>";
$body .="<b>How would you like to be contacted? </b>".$_POST["you_like_contacted"]."<br>";
foreach($_POST['consultation_session'] as $consultation_session){
    $consultation_session_aux .= $consultation_session." , ";
}
$body .="<b>availability for our FREE consultation session </b>".$consultation_session_aux."<br>";
$body .="<b>Student Name </b>".$_POST["student_name"]."<br>";
$body .="<b>Student's Grade Level </b>".$_POST["entry_single"]."<br>";
$body .="<b>Student's Current School </b>".$_POST["student_current_school"]."<br>";
$body .="<b>Student's Overall GPA </b>".$_POST["student_overall_gpa"]."<br>";
foreach($_POST['standardid_tests'] as $standardid_tests){
    $standardid_tests_aux .= $standardid_tests." , ";
}
$body .="<b>Has the student taken any of the following standardized tests? </b>".$standardid_tests_aux." ".$_POST["standardid_tests_other"]."<br>";
$body .="<b>indicate the student's scores in the tests you have mentioned above </b>".$_POST["student_scores"]."<br>";
foreach($_POST['student_struggles'] as $student_struggles){
    $student_struggles_aux .= $student_struggles." , ";
}
$body .="<b>Which of the following academic areas do you believe the student struggles the most? </b>".$student_struggles_aux." ".$_POST["student_struggles_other"]."<br>";
foreach($_POST['fes_service'] as $fes_service){
    $fes_service_aux .= $fes_service." , ";
}
$body .="<b>Which FES service are you interested in? </b>".$fes_service_aux."<br>";
$body .="<b>How did you hear about us? </b>".$_POST["about_us"]." ".$_POST["about_us_other"]."<br>";
$mail->msgHTML($body);
if (!empty($_POST["first_name"]) && !empty($_POST["last_name"]) && !empty($_POST["email"]) && !empty($_POST["phone_number"])&& !empty($_POST["__city_state"])) {
//        if (filter_var($email, FILTER_VALIDATE_EMAIL) && filter_var($paypal, FILTER_VALIDATE_EMAIL)) {
    if (!$mail->send()) {
        echo "Error. Please try again. " . $mail->ErrorInfo;
    } else {
        echo "Your response has been recorded";
    }
           
} else {
    echo 'Looks like you have a question or two that still needs to be filled out.';
}

?>