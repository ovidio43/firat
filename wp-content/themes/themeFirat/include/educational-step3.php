<?php
foreach ($_POST as $key => $value) {
    $_SESSION[$key] = $value;
}
?>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#ss-form3').validate({
            rules: {
                entry72single: {required: true},
                entry162single: {required: true},
                entry74single: {required: true},
                entry164single: {required: true},
                entry166single: {required: true},
                entry168single: {required: true}
            }
        });

        jQuery('#back-page').on('click', function() {
            jQuery('#formBack').submit();
        });
    });
</script>
<h1 class="ss-form-title">FES Educational Team Member Application Form <span class="ss-required-asterisk">* Required</span></h1>

<form action="" method="POST" id="ss-form3">

    <h2 class="ss-page-title">Skills &amp; Qualifications</h2>

    <h2 class="ss-section-title">Teaching Experience</h2>

    <label class="ss-q-title" for="entry_72">Do you have an active or expired (for retired) teaching license or certificate?
        <span class="ss-required-asterisk">*</span></label><label class="ss-q-help" for="entry_72">Please list all licenses and/or certificates &amp; mention if they&#39;re active or expired.  Answer &quot;N/A&quot; if you don&#39;t have any.</label>
    <textarea name="entry72single" rows="8" cols="75" class="ss-q-long" id="entry_72"><?php echo $_SESSION['entry72single']; ?>"</textarea>

    <label class="ss-q-title" for="entry_74">Do you have at least two (2) years of classroom teaching experience in elementary, middle, and/or high school level(s)?<span class="ss-required-asterisk">*</span></label>
    <label class="ss-q-help" for="entry_74">If so, please specify which grade levels. Answer &quot;N/A&quot; if you don&#39;t.</label>
    <input type="text" name="entry74single" value="<?php echo $_SESSION['entry74single']; ?>" class="ss-q-short" id="entry_74">

    <label class="ss-q-title" for="entry_76">Do you have at least two (2) years of one-on-one and/or group tutoring experience at any level?<span class="ss-required-asterisk">*</span></label>
    <?php
    $selected = Array();
    $selected[0] = 'Yes';
    $selected[1] = 'No';
    $count = count($selected);
    ?>  
    <select name="entry76single" id="entry_76">
        <?php
        for ($i = 0; $i < $count; $i++) {
            if ($_SESSION['entry76single'] == $selected[$i]) {
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

    <label class="ss-q-title" for="entry_78">Do you have at least two (2) years of one-on-one and/or group tutoring experience at any level?<span class="ss-required-asterisk">*</span></label>
    <select name="entry78single" id="entry_78">
         <?php
        for ($i = 0; $i < $count; $i++) {
            if ($_SESSION['entry78single'] == $selected[$i]) {
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

    <h2 class="ss-section-title">Additional Skills</h2>

    <label class="ss-q-title" for="entry_162">List other qualifications such as special skills, abilities or honors that should be considered.</label>
    <textarea name="entry162single" rows="8" cols="75" class="ss-q-long" id="entry_162"><?php echo $_SESSION['entry162single']; ?>"</textarea>

    <label class="ss-q-title" for="entry_164">List types of computers, software or other technological platforms you can operate.
    </label><textarea name="entry164single" rows="8" cols="75" class="ss-q-long" id="entry_164"><?php echo $_SESSION['entry164single']; ?>"</textarea>

    <label class="ss-q-title" for="entry_166">Professional licenses, certifications or registrations (if applicable):
    </label><textarea name="entry166single" rows="8" cols="75" class="ss-q-long" id="entry_166"><?php echo $_SESSION['entry166single']; ?>"</textarea>

    <label class="ss-q-title" for="entry_168">Additional Skills, including other languages or information regarding the career/occupation you wish to bring to the employer&#39;s attention:</label>
    <textarea name="entry168single" rows="8" cols="75" class="ss-q-long" id="entry_168"><?php echo $_SESSION['entry168single']; ?>"</textarea>


    <input type="hidden" name="backupCache" value="">
    <input type="hidden" name="step" value="4">
    <button type="button" id="back-page" >Back</button>
    <input type="submit" name="continue" value="Continue &raquo;">

</form>
<form action="" id="formBack" method="post">
    <input type="hidden" name="step" value="2">
</form>