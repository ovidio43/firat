<?php
foreach ($_POST as $key => $value) {
    $_SESSION[$key] = $value;
}
?>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#ss-form2').validate({
            rules: {
                
                entry36single: {required: true},
               
                entry42single: {required: true},
                entry44single: {required: true},
                entry52single: {required: true},
                entry171single: {required: true},
            }
        });

        jQuery('#back-page').on('click', function() {
            jQuery('#formBack').submit();
        });
    });
</script>
<h1 class="ss-form-title">FES Educational Team Member Application Form <span class="ss-required-asterisk">* Required</span></h1>
<form action="" method="POST" id="ss-form2">

    <h2 class="ss-page-title">Education</h2>

    <h2 class="ss-section-title">College/University Attended</h2>

    <label class="ss-q-title" for="entry_36">Name of college or university attended
        <span class="ss-required-asterisk">*</span></label>
    <input type="text" name="entry36single" value="<?php echo $_SESSION['entry36single']; ?>" class="ss-q-short" id="entry_36">

    <label class="ss-q-title" for="entry_42">Degree type<span class="ss-required-asterisk">*</span></label>
    <input type="text" name="entry42single" value="<?php echo $_SESSION['entry42single']; ?>" class="ss-q-short" id="entry_42">

    <label class="ss-q-title" for="entry_44">Major of study<span class="ss-required-asterisk">*</span></label>
    <input type="text" name="entry44single" value="<?php echo $_SESSION['entry44single']; ?>" class="ss-q-short" id="entry_44">

    <label class="ss-q-title" for="entry_46">Minor (if applicable)</label>
    <input type="text" name="entry46single" value="<?php echo $_SESSION['entry46single']; ?>" class="ss-q-short" id="entry_46">

    <label class="ss-q-title" for="entry_52">Major GPA<span class="ss-required-asterisk">*</span></label>
    <label class="ss-q-help" for="entry_52">On a 4.0 Scale</label>
    <input type="text" name="entry52single" value="<?php echo $_SESSION['entry52single']; ?>" class="ss-q-short" id="entry_52">

    <label class="ss-q-title" for="entry_65">Graduation date (Month/Year)<span class="ss-required-asterisk">*</span></label>
    <label class="ss-q-help" for="entry_65">Answer &quot;NA&quot; if you have not yet graduated.</label>
    <input type="text" name="entry65single" value="<?php echo $_SESSION['entry65single']; ?>" class="ss-q-short" id="entry_65">

    <label class="ss-q-title" for="entry_171"># of Years Attended<span class="ss-required-asterisk">*</span></label>
    <label class="ss-q-help" for="entry_171"></label>
    <input type="text" name="entry171single" value="<?php echo $_SESSION['entry171single']; ?>" class="ss-q-short" id="entry_171">

    <label class="ss-q-title" for="entry_69">SAT/ACT Score</label>
    <label class="ss-q-help" for="entry_69">(For Test Prep services only.  Please specifiy which test score.)</label>
    <input type="text" name="entry69single" value="<?php echo $_SESSION['entry69single']; ?>" class="ss-q-short" id="entry_69">

    <h2 class="ss-section-title">College/University Attended</h2>

    <div class="ss-section-description ss-no-ignore-whitespace">(If you attended more than one school)</div>
    <label class="ss-q-title" for="entry_54">Name of college or university attended</label>
    <input type="text" name="entry54single" value="<?php echo $_SESSION['entry54single']; ?>" class="ss-q-short" id="entry_54">

    <label class="ss-q-title" for="entry_57">Degree type</label>
    <input type="text" name="entry57single" value="<?php echo $_SESSION['entry57single']; ?>" class="ss-q-short" id="entry_57">

    <label class="ss-q-title" for="entry_59">Major of study</label>
    <input type="text" name="entry59single" value="<?php echo $_SESSION['entry59single']; ?>" class="ss-q-short" id="entry_59">

    <label class="ss-q-title" for="entry_61">Minor (if applicable)</label>
    <input type="text" name="entry61single" value="<?php echo $_SESSION['entry61single']; ?>" class="ss-q-short" id="entry_61">

    <label class="ss-q-title" for="entry_63">Major GPA</label>
    <label class="ss-q-help" for="entry_63">On a 4.0 Scale</label>
    <input type="text" name="entry63single" value="<?php echo $_SESSION['entry63single']; ?>" class="ss-q-short" id="entry_63">

    <label class="ss-q-title" for="entry_50">Graduation date</label>
    <label class="ss-q-help" for="entry_50">(Month/Year)</label>
    <input type="text" name="entry50single" value="<?php echo $_SESSION['entry50single']; ?>" class="ss-q-short" id="entry_50">

    <label class="ss-q-title" for="entry_173"># of Years Attended</label>
    <input type="text" name="entry173single" value="<?php echo $_SESSION['entry173single']; ?>" class="ss-q-short" id="entry_173">

    <input type="hidden" name="step" value="3">
    <input type="hidden" name="backupCache" >
    <button type="button" id="back-page" >Back</button>
    <input type="submit" name="continue" value="Continue &raquo;">
</form>
<form action="" id="formBack" method="post">
    <input type="hidden" name="step" value="1">
</form>
