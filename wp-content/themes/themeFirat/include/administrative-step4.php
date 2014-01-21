<?php
foreach ($_POST as $key => $value) {
    $_SESSION[$key] = $value;
}
?>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#ss-form4').validate({
            rules: {
                entry82single: {required: true},
                entry89single: {required: true},
                entry217single: {required: true},
                entry91single: {required: true},
                entry93single: {required: true},
                entry95single: {required: true},
                entry20single: {required: true},
                entry26single: {required: true},
                entry185single: {required: true},
                entry187single: {required: true},
                entry191single: {required: true},
                entry193single: {required: true},
                entry195single: {required: true},
            }
        });
        jQuery('#back-page').on('click', function() {
            jQuery('#formBack').submit();
        });
    });
</script>
<h1 class="ss-form-title">FES Administrative Team Member Application Form <span class="ss-required-asterisk">* Required</span></h1>

<form action="" method="POST" id="ss-form4">

    <h2 class="ss-page-title">Employment History</h2>

    <div class="ss-page-description ss-no-ignore-whitespace">List most recent employment first.  Be sure all your experience or employers related to this job are listed here. </div>

    <h2 class="ss-section-title">Employer 1</h2>

    <label class="ss-q-title" for="entry_82">Company Name<span class="ss-required-asterisk">*</span></label>
    <input type="text" name="entry82single" value="<?php echo $_SESSION['entry82single']; ?>" class="ss-q-short" id="entry_82">

    <label class="ss-q-title" for="entry_89">Company Phone Number<span class="ss-required-asterisk">*</span></label>
    <label class="ss-q-help" for="entry_89">(555) 555-5555</label>
    <input type="text" name="entry89single" value="<?php echo $_SESSION['entry89single']; ?>" class="ss-q-short" id="entry_89">

    <label class="ss-q-title" for="entry_217">Dates Employed<span class="ss-required-asterisk">*</span></label>
    <label class="ss-q-help" for="entry_217">(Month/Year) to (Month/Year)</label>
    <input type="text" name="entry217single" value="<?php echo $_SESSION['entry217single']; ?>" class="ss-q-short" id="entry_217">

    <label class="ss-q-title" for="entry_91">Name of Supervisor<span class="ss-required-asterisk">*</span></label>
    <input type="text" name="entry91single" value="<?php echo $_SESSION['entry91single']; ?>" class="ss-q-short" id="entry_91">

    <label class="ss-q-title" for="entry_93">Supervisor Phone Number<span class="ss-required-asterisk">*</span></label>
    <label class="ss-q-help" for="entry_93">(555) 555-5555</label>
    <input type="text" name="entry93single" value="<?php echo $_SESSION['entry93single']; ?>" class="ss-q-short" id="entry_93">

    <label class="ss-q-title" for="entry_95">Job Title<span class="ss-required-asterisk">*</span></label>
    <input type="text" name="entry95single" value="<?php echo $_SESSION['entry95single']; ?>" class="ss-q-short" id="entry_95">

    <label class="ss-q-title" for="entry_97">Job Description<span class="ss-required-asterisk">*</span></label>
    <label class="ss-q-help" for="entry_97">List the jobs you held, duties performed, skills used or learned, advancements or promotions while you worked at this company.</label>
    <textarea name="entry97single" rows="8" cols="75" class="ss-q-long" id="entry_97"><?php echo $_SESSION['entry97single']; ?></textarea>

    <label class="ss-q-title" for="entry_20">Are you currently employed by this company?<span class="ss-required-asterisk">*</span></label>
    <?php
    $selected = Array();
    $selected[0] = 'Yes';
    $selected[1] = 'No';
    $count = count($selected);
    ?>
    <select name="entry20single" id="entry_20">
        <?php
        for ($i = 0; $i < $count; $i++) {
            if ($_SESSION['entry20single'] == $selected[$i]) {
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

    <label class="ss-q-title" for="entry_99">Explain your reason for leaving if you answered &quot;No&quot; to the question above.
        <span class="ss-required-asterisk">*</span></label><label class="ss-q-help" for="entry_99">Answer &quot;NA&quot; if still employed by this company.</label>
    <textarea name="entry99single" rows="8" cols="75" class="ss-q-long" id="entry_99"><?php echo $_SESSION['entry99single']; ?></textarea>

    <label class="ss-q-title" for="entry_26">May we contact this employer?<span class="ss-required-asterisk">*</span></label>
    <select name="entry26single" id="entry_26">
        <?php
        for ($i = 0; $i < $count; $i++) {
            if ($_SESSION['entry26single'] == $selected[$i]) {
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

    <label class="ss-q-title" for="entry_181">If you answered &quot;No&quot; to the question above, explain why.</label>
    <textarea name="entry181single" rows="8" cols="75" class="ss-q-long" id="entry_181"><?php echo $_SESSION['entry181single']; ?></textarea>

    <h2 class="ss-section-title">Employer 2</h2>

    <label class="ss-q-title" for="entry_103">Company Name</label>
    <input type="text" name="entry103single" value="<?php echo $_SESSION['entry103single']; ?>" class="ss-q-short" id="entry_103">

    <label class="ss-q-title" for="entry_102">Company Phone Number</label>
    <input type="text" name="entry102single" value="<?php echo $_SESSION['entry102single']; ?>" class="ss-q-short" id="entry_102">

    <label class="ss-q-title" for="entry_219">Dates Employed</label><label class="ss-q-help" for="entry_219">(Month/Year) to (Month/Year)</label>
    <input type="text" name="entry219single" value="<?php echo $_SESSION['entry219single']; ?>" class="ss-q-short" id="entry_219">


    <label class="ss-q-title" for="entry_104">Name of Supervisor</label>
    <input type="text" name="entry104single" value="<?php echo $_SESSION['entry104single']; ?>" class="ss-q-short" id="entry_104">

    <label class="ss-q-title" for="entry_106">Supervisor Phone Number</label><label class="ss-q-help" for="entry_106">(555) 555-5555</label>
    <input type="text" name="entry106single" value="<?php echo $_SESSION['entry106single']; ?>" class="ss-q-short" id="entry_106">

    <label class="ss-q-title" for="entry_108">Job Title</label>
    <input type="text" name="entry108single" value="<?php echo $_SESSION['entry108single']; ?>" class="ss-q-short" id="entry_108">

    <label class="ss-q-title" for="entry_110">Job Description</label><label class="ss-q-help" for="entry_110">List the jobs you held, duties performed, skills used or learned, advancements or promotions while you worked at this company.</label>
    <textarea name="entry110single" rows="8" cols="75" class="ss-q-long" id="entry_110"><?php echo $_SESSION['entry110single']; ?></textarea>

    <label class="ss-q-title" for="entry_183">Are you currently employed by this company?<span class="ss-required-asterisk">*</span></label>
    <select name="entry183single" id="entry_183">
        <?php
        for ($i = 0; $i < $count; $i++) {
            if ($_SESSION['entry183single'] == $selected[$i]) {
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

    <label class="ss-q-title" for="entry_185">Explain your reason for leaving if you answered &quot;No&quot; to the question above.
        <span class="ss-required-asterisk">*</span></label><label class="ss-q-help" for="entry_185">Answer &quot;NA&quot; if still employed by this company.</label>ç
    <textarea name="entry185single" rows="8" cols="75" class="ss-q-long" id="entry_185"><?php echo $_SESSION['entry185single']; ?></textarea>


    <label class="ss-q-title" for="entry_187">May we contact this employer?<span class="ss-required-asterisk">*</span></label>
    <select name="entry187single" id="entry_187">
        <?php
        for ($i = 0; $i < $count; $i++) {
            if ($_SESSION['entry187single'] == $selected[$i]) {
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

    <label class="ss-q-title" for="entry_189">If you answered &quot;No&quot; to the question above, explain why.</label>
    <textarea name="entry189single" rows="8" cols="75" class="ss-q-long" id="entry_189"><?php echo $_SESSION['entry189single']; ?></textarea>

    <h2 class="ss-section-title">Employer 3</h2>

    <label class="ss-q-title" for="entry_115">Company Name</label>
    <input type="text" name="entry115single" value="<?php echo $_SESSION['entry115single']; ?>" class="ss-q-short" id="entry_115">

    <label class="ss-q-title" for="entry_117">Company Phone Number</label><label class="ss-q-help" for="entry_117">(555) 555-5555</label>
    <input type="text" name="entry117single" value="<?php echo $_SESSION['entry117single']; ?>" class="ss-q-short" id="entry_117">

    <label class="ss-q-title" for="entry_221">Dates Employed</label><label class="ss-q-help" for="entry_221">(Month/Year) to (Month/Year)</label>
    <input type="text" name="entry221single" value="<?php echo $_SESSION['entry221single']; ?>" class="ss-q-short" id="entry_221">

    <label class="ss-q-title" for="entry_119">Name of Supervisor</label>
    <input type="text" name="entry119single" value="<?php echo $_SESSION['entry119single']; ?>" class="ss-q-short" id="entry_119">

    <label class="ss-q-title" for="entry_121">Supervisor Phone Number</label>
    <input type="text" name="entry121single" value="<?php echo $_SESSION['entry121single']; ?>" class="ss-q-short" id="entry_121">

    <label class="ss-q-title" for="entry_123">Job Title</label>
    <input type="text" name="entry123single" value="<?php echo $_SESSION['entry123single']; ?>" class="ss-q-short" id="entry_123">

    <label class="ss-q-title" for="entry_125">Job Description</label>
    <label class="ss-q-help" for="entry_125">List the jobs you held, duties performed, skills used or learned, advancements or promotions while you worked at this company.</label>
    <textarea name="entry125single" rows="8" cols="75" class="ss-q-long" id="entry_125"><?php echo $_SESSION['entry125single']; ?></textarea>

    <label class="ss-q-title" for="entry_191">Are you currently employed by this company?<span class="ss-required-asterisk">*</span></label>
    <select name="entry191single" id="entry_191">
        <?php
        for ($i = 0; $i < $count; $i++) {
            if ($_SESSION['entry191single'] == $selected[$i]) {
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

    <label class="ss-q-title" for="entry_193">Explain your reason for leaving if you answered &quot;No&quot; to the question above.
        <span class="ss-required-asterisk">*</span></label><label class="ss-q-help" for="entry_193">Answer &quot;NA&quot; if still employed by this company.</label>
    <textarea name="entry193single" rows="8" cols="75" class="ss-q-long" id="entry_193"><?php echo $_SESSION['entry193single']; ?></textarea>

    <label class="ss-q-title" for="entry_195">May we contact this employer?<span class="ss-required-asterisk">*</span></label>
    <select name="entry195single" id="entry_195">
        <?php
        for ($i = 0; $i < $count; $i++) {
            if ($_SESSION['entry195single'] == $selected[$i]) {
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

    <label class="ss-q-title" for="entry_197">If you answered &quot;No&quot; to the question above, explain why.
    </label><textarea name="entry197single" rows="8" cols="75" class="ss-q-long" id="entry_197"><?php echo $_SESSION['entry197single']; ?></textarea>

    <input type="hidden" name="step" value="5">
    <input type="hidden" name="backupCache" value="">

    <button type="button" id="back-page" >Back</button>
    <input type="submit" name="continue" value="Continue &raquo;">
</form>
<form action="" id="formBack" method="post">
    <input type="hidden" name="step" value="3">
</form>