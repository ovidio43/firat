<?php
foreach ($_POST as $key => $value) {
    $_SESSION[$key] = $value;
}
?>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#ss-form3').validate({
            rules: {
                entry162single: {required: true},
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
<h1 class="ss-form-title">FES Administrative Team Member Application Form</h1>
<form action="" method="POST" id="ss-form3">
    <h2 class="ss-page-title">Skills &amp; Qualifications</h2>
    <h2 class="ss-section-title">Additional Skills</h2>
    <label class="ss-q-title" for="entry_162">List other qualifications such as special skills, abilities or honors that should be considered.
    </label>
    <label class="ss-q-help" for="entry_162"></label>
    <textarea name="entry162single" rows="8" cols="75" class="ss-q-long" id="entry_162"><?php echo $_SESSION['entry162single']; ?></textarea>
    <label class="ss-q-title" for="entry_164">List types of computers, software or other technological platforms you can operate.
    </label>

    <textarea name="entry164single" rows="8" cols="75" class="ss-q-long" id="entry_164"><?php echo $_SESSION['entry164single']; ?></textarea>
    <label class="ss-q-title" for="entry_166">Professional licenses, certifications or registrations (if applicable):
    </label>

    <textarea name="entry166single" rows="8" cols="75" class="ss-q-long" id="entry_166"><?php echo $_SESSION['entry166single']; ?></textarea>
    <label class="ss-q-title" for="entry_168">Additional Skills, including other languages or information regarding the career/occupation you wish to bring to the employer&#39;s attention:</label>

    <textarea name="entry168single" rows="8" cols="75" class="ss-q-long" id="entry_168"><?php echo $_SESSION['entry168single']; ?></textarea>
    <input type="hidden" name="step" value="4">
    <input type="hidden" name="backupCache" value="">

    <!--<input type="submit" name="back" value="&laquo; Back">-->
    <button type="button" id="back-page" >Back</button>
    <input type="submit" name="continue" value="Continue &raquo;">
</form>
<form action="" id="formBack" method="post">
      <input type="hidden" name="step" value="2">
</form>