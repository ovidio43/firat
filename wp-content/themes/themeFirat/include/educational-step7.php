<?php

//session_start();
foreach ($_POST as $key => $value) {
    $_SESSION[$key] = $value;
}


//$destinatario = "jorge.quispe@altra.com.bo";
$destinatario = "droman@innervel.com";
$asunto = "asunto:Join Our Educational Team";

$nameAttr = Array(
    'entry0single' => 'First name',
    'entry2single' => 'Middle Name',
    'entry1single' => 'Last name',
    'entry4single' => 'Street Address',
    'entry6single' => 'City, State',
    'entry10single' => 'Zip Code',
    'entry177single' => 'If yes, explain in concise detail, giving dates and nature of the offense, name and location of the..',
    'entry32single' => 'Please provide your work availability.',
    'entry36single' => 'Name of college or university attended',
    'entry42single' => 'Degree type',
    'entry44single' => 'Major of study',
    'entry46single' => 'Minor (if applicable)',
    'entry52single' => 'Major GPA',
    'entry65single' => 'Graduation date',
    'entry171single' => 'of Years Attended',
    'entry69single' => 'SAT/ACT Score',
    'entry54single' => 'Name of college or university attended',
    'entry57single' => 'Degree type',
    'entry59single' => 'Major of study',
    'entry61single' => 'Minor (if applicable)',
    'entry63single' => 'Major GPA On a 4.0 Scale',
    'entry50single' => 'Graduation date (Month/Year)',
    'entry173single' => 'of Years Attended',
    'entry72single' => 'Do you have an active or expired (for retired) teaching license or certificate?',
    'entry74single' => 'Do you have at least two (2) years of classroom teaching experience in elementary, middle, and/or high school level(s)?',
    'entry162single' => 'List other qualifications such as special skills, abilities or honors that should be considered.',
    'entry164single' => 'List types of computers, software or other technological platforms you can operate.',
    'entry166single' => 'Professional licenses, certifications or registrations (if applicable)',
    'entry168single' => " Additional Skills, including other languages or information regarding the career/occupation you wish to bring to the employer's attention",
    'entry82single' => 'Company Name',
    'entry217single' => 'Dates Employed',
    'entry91single' => 'Name of Supervisor',
    'entry95single' => ' Job Title',
    'entry97single' => ' Job Description',
    'entry99single' => 'Explain your reason for leaving if you answered "No" to the question above.',
    'entry181single' => 'If you answered "No" to the question above, explain why.',
    'entry103single' => 'Company Name',
    'entry102single' => 'Company Phone Number',
    'entry219single' => 'Dates Employed(Month/Year) to (Month/Year)',
    'entry104single' => 'Name of Supervisor',
    'entry108single' => 'Job Title',
    'entry110single' => 'Job Description',
    'entry185single' => 'Explain your reason for leaving if you answered "No" to the question above.',
    'entry189single' => 'If you answered "No" to the question above, explain why.',
    'entry189single' => 'If you answered "No" to the question above, explain why.',
    'entry157single' => 'Company Name',
    'entry225single' => 'Dates Employed (Month/Year) to (Month/Year)',
    'entry155single' => 'Name of Supervisor',
    'entry149single' => 'Job Title',
    'entry140single' => 'Job Description',
    'entry213single' => 'Explain your reason for leaving if you answered "No" to the question above.',
    'entry209single' => 'If you answered "No" to the question above, explain why.',
    'entry228single' => 'Please sign below (First & Last Name)',
    'entry235single' => 'Birth Date',
    'entry237group' => 'Please check the box(es) that best describes your race/ethnicity',
    'entry241group' => 'How did you hear about us?',
    'entry237groupother_option_' => 'Other',
    'entry241groupother_option_' => 'Other',
    'entry34single' => 'Are you legally authorized to work in the U.S. without any sponsorships?',
    'entry175single' => 'Have you ever been convicted of a felony or subjected to deferred adjudication on a felony charge?',
    'entry179single' => 'Do you have a form of reliable transportation AND are insured?',
    'entry48single' => 'Best method of contact',
    'entry76single' => 'Do you have at least two (2) years of one-on-one and/or group tutoring experience at any level?',
    'entry78single' => 'Do you have at least two (2) years of one-on-one and/or group tutoring experience at any level?',
    'entry20single' => 'Are you currently employed by this company?',
    'entry26single' => 'May we contact this employer?',
    'entry183single' => 'Are you currently employed by this company?',
    'entry187single' => 'May we contact this employer?',
    'entry215single' => 'Are you currently employed by this company?',
    'entry205single' => 'May we contact this employer?',
    'entry233single' => 'Gender',
    'entry18single' => 'Mobile Number',
    'entry22single' => 'Home Number',
    'entry89single' => 'Company Phone Number',
    'entry93single' => 'Supervisor Phone Number',
    'entry106single' => 'Supervisor Phone Number',
    'entry153single' => 'Company Phone Number',
    'entry151single' => 'Supervisor Phone Number'
);

$cuerpo = '';
foreach ($_SESSION as $key => $value) {
   
        if (is_array($value)) {
            $cuerpo.= "---------------------------------------------------\r\n ";
            $cuerpo.="[" . $nameAttr[$key] . " :] \r\n ";
            foreach ($value as $val) {
                $cuerpo.= $val . " \r\n";
            }
        } else {
            $cuerpo.= "---------------------------------------------------\r\n ";
            $cuerpo.="[" . $nameAttr[$key] . " : ] \r\n";
            $cuerpo.= $value . " \r\n";
        }
    
}
$headers = "MIME-Version: 1.0\r\n";

$headers .= "From: Join Our Educational Team <noreply@mommyhotspot.com>\r\n";
if (mail($destinatario, $asunto, $cuerpo, $headers)) {
    echo '<h1>Gracias por Registrarse..</h1>';
    session_destroy();
} else {
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#back-page').on('click', function() {
                jQuery('#formBack').submit();
            });
        });

    </script>
    <button type="button" id="back-page" >Back</button>
    <form action="" id="formBack" method="post">
        <input type="hidden" name="step" value="6">
    </form>
    <?php

}
