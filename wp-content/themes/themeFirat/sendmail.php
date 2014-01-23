<?php


$body ="<b>Student Name: </b>".$_POST["student_Name"]."<br>";
$body .="<b>Parent Name: </b>".$_POST["parent_Name"]."<br>";
$body .="<b>Parent Email Address: </b>".$_POST["parent_email_address"]."<br>";
$body .="<b>Adress: </b>".$_POST["Address"]."<br>";
$body .="<b>City State: </b>".$_POST["City_State"]."<br>";
$body .="<b>Parent Secondary: </b>".$_POST["parent_secondary"]."<br>";
$body .="<b>Parent Primary: </b>".$_POST["parent_primary"]."<br>";
$body .="<b>Student's High School: </b>".$_POST["student_high"]."<br>";
$body .="<b>Student Grade Level: </b>".$_POST["student_grade"]."<br>";
$body .="<b>Practice Test Selected: </b>".$_POST["Select_your_Practice"]." ".$_POST["Select_your_Practice_other"]."<br>";
$body .="<b>date of your practice test: </b>".$_POST["Help_on_every"]."<br>";
$body .="<b>location that you are registering to take the practice test: </b>".$_POST["practice_test"]."<br>";
foreach($_POST['date_test'] as $date_test){
    $date_test_aux .= $date_test." , ";
}
$body .="<b>tell us the date or dates you are planning on taking the OFFICIAL SAT or ACT. </b>".$date_test_aux."<br>";
$body .="<b>take an exam for High School Admissions: </b>".$_POST["question_one"]."<br>";
$body .="<b>tell us if you have already taken the SAT or ACT tests: </b>".$_POST["question_two"]."<br>";
$body .="<b>tell us how you have prepared: </b>".$_POST["question_thrre"]."<br>";
$body .="<b>Do you currently have a test preparation book that you use to prepare? </b>".$_POST["question_for"]."<br>";
$body .="<b>Is there any other information you would like to tell us that can help us analyze your practice test? </b>".$_POST["question_five"];

if (!empty($_POST["student_Name"]) && !empty($_POST["parent_Name"]) && !empty($_POST["parent_email_address"]) && !empty($_POST["Address"])&& !empty($_POST["City_State"])) {
//        if (filter_var($email, FILTER_VALIDATE_EMAIL) && filter_var($paypal, FILTER_VALIDATE_EMAIL)) {
    $from = "edwin.condori@altra.com.bo";
    $subject = "Register 2nd Saturday Form";
    $body = $body;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";    
    $headers .= "From: firat education 2nd Saturday <noreply@firateducation.com>\r\n";
    if (mail($from, $subject, $body, $headers)){
        echo 'Your response has been recorded.';
    }else{
        echo "Error. Please try again.";
    }
           
} else {
    echo 'Looks like you have a question or two that still needs to be filled out.';
}

?>
