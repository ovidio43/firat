<?php

//session_start();
foreach ($_POST as $key => $value) {
    $_SESSION[$key] = $value;
}
//$destinatario = "jorge.quispe@altra.com.bo";
$destinatario = "josephine@firateducation.com";
$asunto = "Join our Administrative Team";

$nameAttr = Array(
    'entry0single' => 'First name',
    'entry2single' => 'Middle Name',
    'entry1single' => 'Last name',
    'entry4single' => 'Street Address',
    'entry6single' => 'City, State',
    'entry10single' => 'Zip Code',
    'entry34single' => 'Are you legally authorized to work in the U.S. without any sponsorships?',
    'entry175single' => 'Have you ever been convicted of a felony or subjected to deferred adjudication on a felony charge?',
    'entry177single' => 'If yes, explain in concise detail, giving dates and nature of the offense, name and location of the..',
    'entry179single' => 'Do you have a form of reliable transportation AND are insured?',
    'entry32single' => 'Please provide your work availability.',
    'entry18single' => 'Mobile Number',
    'entry22single' => 'Home Number',
    'entry24single' => 'E-mail Address',
    'entry48single' => 'Best method of contact',
    'entry242single' => 'What is your expected salary?',
    /* end step 1 */
    'entry36single' => 'Name of college or university attended',
    'entry42single' => 'Degree type',
    'entry44single' => 'Major of study',
    'entry46single' => 'Minor (if applicable)',
    'entry52single' => 'Major GPA',
    'entry65single' => 'Graduation date',
    'entry171single' => '# of Years Attended',
    'entry54single' => 'Name of college or university attended',
    'entry57single' => 'Degree type',
    'entry59single' => 'Major of study',
    'entry61single' => 'Minor (if applicable)',
    'entry63single' => 'Major GPA On a 4.0 Scale',
    'entry50single' => 'Graduation date (Month/Year)',
    'entry173single' => 'of Years Attended',
    'entry162single' => 'List other qualifications such as special skills, abilities or honors that should be considered.',
    'entry164single' => 'List types of computers, software or other technological platforms you can operate.',
    'entry166single' => 'Professional licenses, certifications or registrations (if applicable)',
    'entry168single' => " Additional Skills, including other languages or information regarding the career/occupation you wish to bring to the employer's attention",
    /*     * *******end 3**************** */
    'entry82single' => 'Company Name',
    'entry89single' => 'Company Phone Number',
    'entry217single' => 'Dates Employed',
    'entry91single' => 'Name of Supervisor',
    'entry93single' => 'Supervisor Phone Number',
    'entry95single' => ' Job Title',
    'entry97single' => ' Job Description',
    'entry20single' => 'Are you currently employed by this company?',
    'entry99single' => 'Explain your reason for leaving if you answered "No" to the question above.',
    'entry26single' => 'May we contact this employer?',
    'entry181single' => 'If you answered "No" to the question above, explain why.',
    'entry103single' => 'Company Name',
    'entry102single' => 'Company Phone Number',
    'entry219single' => 'Dates Employed(Month/Year) to (Month/Year)',
    'entry104single' => 'Name of Supervisor',
    'entry106single' => 'Supervisor Phone Number',
    'entry108single' => 'Job Title',
    'entry110single' => 'Job Description',
    'entry183single' => 'Are you currently employed by this company?',
    'entry185single' => 'Explain your reason for leaving if you answered "No" to the question above.',
    'entry187single' => 'May we contact this employer?',
    'entry189single' => 'If you answered "No" to the question above, explain why.',
    'entry115single' => 'Company Name',
    'entry117single' => 'Company Phone Number',
    'entry221single' => 'Dates Employed',
    'entry119single' => 'Name of Supervisor',
    'entry121single' => 'Supervisor Phone Number',
    'entry123single' => 'Job Title',
    'entry125single' => 'List the jobs you held, duties performed, skills used or learned, advancements or promotions while you worked at this company.',
    'entry191single' => 'Are you currently employed by this company?',
    'entry193single' => 'Explain your reason for leaving if you answered &quot;No&quot; to the question above.',
    'entry195single' => 'May we contact this employer?',
    'entry197single' => 'If you answered &quot;No&quot; to the question above, explain why.',
    /*     * ********end step 4************** */
    'entry228single' => 'Please sign below (First & Last Name)',
    /*     * ********end step 5************** */
    'entry233single' => 'Gender',
    'entry235single' => 'Birth Date',
    'entry237group' => 'Please check the box(es) that best describes your race/ethnicity',
    'entry237groupother_option_' => 'Other',
    'entry241group' => 'How did you hear about us?',
    'entry241groupother_option_' => 'Other',
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

$headers .= "From: Join our Administrative Team <noreply@firateducation.com>\r\n";     
if (mail($destinatario, $asunto, $cuerpo, $headers)) {
    echo '<h1>Your response has been recorded.</h1>';
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

