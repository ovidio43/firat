<?php
foreach ($_POST as $key => $value) {
    $_SESSION[$key] = $value;
}
?>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#back-page').on('click', function() {
            jQuery('#formBack').submit();
        });
    });
</script>
<h1 class="ss-form-title">FES Educational Team Member Application Form</h1>
<form action="<?php echo get_template_directory_uri(); ?>/thank.php" method="POST" id="ss-form">

    <h2 class="ss-page-title">Equal Employment Opportunity Data Form</h2>
    <div class="ss-page-description ss-no-ignore-whitespace">Firat Educational Solutions, LLC is an equal opportunity employer and surveys all job applicants in accordance with the U.S. Department of Labor&rsquo;s affirmative action requirements. Therefore, Firat Educational Solutions, LLC requests that you complete this optional personal data form. Information will be detached and kept separate from your application of employment. Any information that you choose to provide will be treated as personal and confidential. </div>
<div class="content_block ">
    <div class="align_left">
    <label class="ss-q-title" for="entry_233">Gender</label>
    <?php
    $selected = Array();
    $selected[0] = 'Male';
    $selected[1] = 'Female';
    $count = count($selected);
    ?> 
    <select name="entry233single" id="entry_233">
        <?php
        for ($i = 0; $i < $count; $i++) {
            if ($_SESSION['entry233single'] == $selected[$i]) {
                ?>
                <option value="<?php echo $selected[$i]; ?>" selected="selected"><?php echo $selected[$i]; ?></option> 
                <?php
            } else {
                ?>
                <option value="<?php echo $selected[$i]; ?>"><?php echo $selected[$i]; ?></option> 
                <?php
            }
        }
        ?> 
    </select>
    </div>
    <div class="align_right ">
    <label class="ss-q-title" for="entry_235">Birth Date</label>
    <label class="ss-q-help" for="entry_235">(MM/DD/YYYY)</label>
    <input type="text" name="entry235single" value="<?php echo $_SESSION['entry235single']; ?>" class="ss-q-short" id="entry_235">
    </div>
</div>
<div class="content_block ">
    <div class="full-block">
    <label class="ss-q-title" for="entry_237">Ethnicity Category</label>
    <label class="ss-q-help" for="entry_237">Please check the box(es) that best describes your race/ethnicity:</label>
    <ul class="ss-choices">
        <li class="ss-choice-item"><label class="ss-choice-label">
                <input type="checkbox" name="entry237group" value="WHITE: Persons having origins in any of the original peoples of Europe, North Africa, or the Middle East." class="ss-q-checkbox" id="group_237_1">
                WHITE: Persons having origins in any of the original peoples of Europe, North Africa, or the Middle East.</label></li>

        <li class="ss-choice-item"><label class="ss-choice-label">
                <input type="checkbox" name="entry237group" value="BLACK OR AFRICAN-AMERICAN: Persons having origins in any of the black racial groups of Africa." class="ss-q-checkbox" id="group_237_2">
                BLACK OR AFRICAN-AMERICAN: Persons having origins in any of the black racial groups of Africa.</label></li>

        <li class="ss-choice-item"><label class="ss-choice-label">
                <input type="checkbox" name="entry237group" value="HISPANIC: Persons of Mexican, Puerto Rican, Cuban, Central or South American, or other Spanish culture or origin, regardless of race." class="ss-q-checkbox" id="group_237_3">HISPANIC: Persons of Mexican, Puerto Rican, Cuban, Central or South American, or other Spanish culture or origin, regardless of race.</label></li>

        <li class="ss-choice-item"><label class="ss-choice-label">
                <input type="checkbox" name="entry237group" value="ASIAN/PACIFIC ISLANDER: Persons having origins in any of the original peoples of the Far East, Southeast Asia, or the Indian Subcontinent, including, for example, Cambodia, China, India, Japan, Korea, Malaysia, Pakistan, the Philippine Islands, Thailand, and Vietnam." class="ss-q-checkbox" id="group_237_4">ASIAN/PACIFIC ISLANDER: Persons having origins in any of the original peoples of the Far East, Southeast Asia, or the Indian Subcontinent, including, for example, Cambodia, China, India, Japan, Korea, Malaysia, Pakistan, the Philippine Islands, Thailand, and Vietnam.</label></li>

        <li class="ss-choice-item"><label class="ss-choice-label">
                <input type="checkbox" name="entry237group" value="AMERICAN INDIAN/ALASKAN NATIVE: Persons having origins in any of the original peoples of North and South America (including Central America), and who maintain tribal affiliation or community attachment." class="ss-q-checkbox" id="group_237_5">
                AMERICAN INDIAN/ALASKAN NATIVE: Persons having origins in any of the original peoples of North and South America (including Central America), and who maintain tribal affiliation or community attachment.</label></li>

        <li class="ss-choice-item">
            <input type="checkbox" name="entry237group" value="__option__" class="ss-q-checkbox" id="other_option:237"><label for="other_option:237">Other:</label>
            <input type="text" name="entry237groupother_option_" value="<?php echo $_SESSION['entry237groupother_option_']; ?>" class="ss-q-other"></li>
    </ul>
    </div>
</div>
<div class="content_block ">
    <div class="full-block">
    <label class="ss-q-title" for="entry_241">How did you hear about us?</label>
    <label class="ss-q-help" for="entry_241">Please check all that apply</label>
    <ul class="ss-choices">
        <li class="ss-choice-item"><label class="ss-choice-label">
                <input type="checkbox" name="entry241group" value="Advertisement" class="ss-q-checkbox" id="group_241_1">
                Advertisement</label></li> 

        <li class="ss-choice-item"><label class="ss-choice-label">
                <input type="checkbox" name="entry241group" value="Employee Referral" class="ss-q-checkbox" id="group_241_2">
                Employee Referral</label></li>

        <li class="ss-choice-item"><label class="ss-choice-label">
                <input type="checkbox" name="entry241group" value="FES Client Referral" class="ss-q-checkbox" id="group_241_3">
                FES Client Referral</label></li> 

        <li class="ss-choice-item"><label class="ss-choice-label">
                <input type="checkbox" name="entry241group" value="Facebook" class="ss-q-checkbox" id="group_241_4">
                Facebook</label></li> 

        <li class="ss-choice-item"><label class="ss-choice-label">
                <input type="checkbox" name="entry241group" value="Twitter" class="ss-q-checkbox" id="group_241_5">
                Twitter</label></li> 

        <li class="ss-choice-item"><label class="ss-choice-label">
                <input type="checkbox" name="entry241group" value="Yelp" class="ss-q-checkbox" id="group_241_6">
                Yelp</label></li>

        <li class="ss-choice-item"><input type="checkbox" name="entry.241.group" value="__option__" class="ss-q-checkbox" id="other_option:241"><label for="other_option:241">Other:</label>
            <input type="text" name="entry241groupother_option_" value="<?php echo $_SESSION['entry241groupother_option_']; ?>" class="ss-q-other"></li>

    </ul>
    </div>
</div>
    <input type="hidden" name="backupCache" value="">

    <button type="button" id="back-page" >Back</button>
    <input type="submit" name="submit" value="Submit">
    <div class="password-warning">Never submit passwords through Google Forms.</div>
</form>
<form action="" id="formBack" method="post">
    <input type="hidden" name="step" value="5">
</form>