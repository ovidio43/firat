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
                entry213single: {required: true}
            }
        });
        jQuery('#back-page').on('click', function() {
            jQuery('#formBack').submit();
        });
    });
</script>
<h1 class="ss-form-title">FES Educational Team Member Application Form<span class="ss-required-asterisk">* Required</span></h1>

<form action="" method="POST" id="ss-form4">

    <h2 class="ss-page-title">Employment History</h2>
    <div class="ss-page-description ss-no-ignore-whitespace">List most recent employment first.  Be sure all your experience or employers related to this job are listed here. </div>

    <h2 class="ss-section-title">Employer 1</h2>
<div class="content_block ">
    <div class="align_left">
    <label class="ss-q-title" for="entry_82">Company Name<span class="ss-required-asterisk">*</span></label>
    <input type="text" name="entry82single" value="<?php echo $_SESSION['entry0single']; ?>" class="ss-q-short" id="entry_82">
    </div>
    <div class="align_right ">
    <label class="ss-q-title" for="entry_89">Company Phone Number<span class="ss-required-asterisk">*</span></label>
    <label class="ss-q-help" for="entry_89">(555) 555-5555</label>
    <input type="text" name="entry89single" value="<?php echo $_SESSION['entry0single']; ?>" class="ss-q-short" id="entry_89">
    </div>
</div>
<div class="content_block ">
    <div class="align_left">
    <label class="ss-q-title" for="entry_217">Dates Employed<span class="ss-required-asterisk">*</span></label>
    <label class="ss-q-help" for="entry_217">(Month/Year) to (Month/Year)</label>
    <input type="text" name="entry217single" value="<?php echo $_SESSION['entry0single']; ?>" class="ss-q-short" id="entry_217">
    </div>
    <div class="align_right ">
    <label class="ss-q-title" for="entry_91">Name of Supervisor<span class="ss-required-asterisk">*</span></label>
    <input type="text" name="entry91single" value="<?php echo $_SESSION['entry0single']; ?>" class="ss-q-short" id="entry_91">
    </div>
</div>
<div class="content_block ">
    <div class="align_left">
    <label class="ss-q-title" for="entry_93">Supervisor Phone Number<span class="ss-required-asterisk">*</span></label>
    <label class="ss-q-help" for="entry_93">(555) 555-5555</label>
    <input type="text" name="entry93single" value="<?php echo $_SESSION['entry0single']; ?>" class="ss-q-short" id="entry_93">
    </div>
    <div class="align_right ">
    <label class="ss-q-title" for="entry_95">Job Title<span class="ss-required-asterisk">*</span></label>
    <input type="text" name="entry95single" value="<?php echo $_SESSION['entry0single']; ?>" class="ss-q-short" id="entry_95">
    </div>
</div>
<div class="content_block ">
    <div class="full-block">
    <label class="ss-q-title" for="entry_97">Job Description<span class="ss-required-asterisk">*</span></label>
    <label class="ss-q-help" for="entry_97">List the jobs you held, duties performed, skills used or learned, advancements or promotions while you worked at this company.</label>
    <textarea name="entry97single" rows="8" cols="75" class="ss-q-long" id="entry_97"><?php echo $_SESSION['entry0single']; ?>"</textarea>
    </div>
</div>
<div class="content_block ">
    <div class="align_left">
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
    </div>
</div>
<div class="content_block ">
    <div class="full-block">
    <label class="ss-q-title" for="entry_99">Explain your reason for leaving if you answered &quot;No&quot; to the question above.
        <span class="ss-required-asterisk">*</span></label><label class="ss-q-help" for="entry_99">Answer &quot;NA&quot; if still employed by this company.</label>
    <textarea name="entry.99.single" rows="8" cols="75" class="ss-q-long" id="entry_99"><?php echo $_SESSION['entry0single']; ?>"</textarea>
    </div>
</div>
<div class="content_block ">
    <div class="align_left">
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
    </div>
</div>
<div class="content_block ">
    <div class="full-block">
    <label class="ss-q-title" for="entry_181">If you answered &quot;No&quot; to the question above, explain why.
    </label><textarea name="entry181single" rows="8" cols="75" class="ss-q-long" id="entry_181"><?php echo $_SESSION['entry0single']; ?>"</textarea>
    </div>
</div>
    <h2 class="ss-section-title">Employer 2</h2>
<div class="content_block ">
    <div class="align_left">
    <label class="ss-q-title" for="entry_103">Company Name</label>
    <input type="text" name="entry103single" value="<?php echo $_SESSION['entry0single']; ?>" class="ss-q-short" id="entry_103">
    </div>
    <div class="align_right ">
    <label class="ss-q-title" for="entry_102">Company Phone Number</label>
    <input type="text" name="entry102single" value="<?php echo $_SESSION['entry0single']; ?>" class="ss-q-short" id="entry_102">
    </div>
</div>
<div class="content_block ">
    <div class="align_left">
    <label class="ss-q-title" for="entry_219">Dates Employed</label>
    <label class="ss-q-help" for="entry_219">(Month/Year) to (Month/Year)</label>
    <input type="text" name="entry219single" value="<?php echo $_SESSION['entry0single']; ?>" class="ss-q-short" id="entry_219">
    </div>
    <div class="align_right ">
    <label class="ss-q-title" for="entry_104">Name of Supervisor</label>
    <input type="text" name="entry104single" value="<?php echo $_SESSION['entry0single']; ?>" class="ss-q-short" id="entry_104">
    </div>
</div>
<div class="content_block ">
    <div class="align_left">
    <label class="ss-q-title" for="entry_106">Supervisor Phone Number</label>
    <label class="ss-q-help" for="entry_106">(555) 555-5555</label>
    <input type="text" name="entry106single" value="<?php echo $_SESSION['entry0single']; ?>" class="ss-q-short" id="entry_106">
    </div>
    <div class="align_right ">
    <label class="ss-q-title" for="entry_108">Job Title</label>
    <input type="text" name="entry108single" value="<?php echo $_SESSION['entry0single']; ?>" class="ss-q-short" id="entry_108">
    </div>
</div>
<div class="content_block ">
    <div class="full-block">
    <label class="ss-q-title" for="entry_110">Job Description</label>
    <label class="ss-q-help" for="entry_110">List the jobs you held, duties performed, skills used or learned, advancements or promotions while you worked at this company.</label>
    <textarea name="entry110single" rows="8" cols="75" class="ss-q-long" id="entry_110"><?php echo $_SESSION['entry0single']; ?>"</textarea>
    </div>
</div>
<div class="content_block ">
    <div class="align_left">
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
    </div>
</div>
<div class="content_block ">
    <div class="full-block">
    <label class="ss-q-title" for="entry_185">Explain your reason for leaving if you answered &quot;No&quot; to the question above.
        <span class="ss-required-asterisk">*</span></label>
    <label class="ss-q-help" for="entry_185">Answer &quot;NA&quot; if still employed by this company.</label>
    <textarea name="entry185single" rows="8" cols="75" class="ss-q-long" id="entry_185"><?php echo $_SESSION['entry0single']; ?>"</textarea>
    </div>
</div>
<div class="content_block ">
    <div class="align_left">
    <label class="ss-q-title" for="entry_187">May we contact this employer?
        <span class="ss-required-asterisk">*</span></label>
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
    </div>
</div>
<div class="content_block ">
    <div class="full-block">
    <label class="ss-q-title" for="entry_189">If you answered &quot;No&quot; to the question above, explain why.
    </label><textarea name="entry189single" rows="8" cols="75" class="ss-q-long" id="entry_189"><?php echo $_SESSION['entry0single']; ?>"</textarea>
    </div>
</div>
    <h2 class="ss-section-title">Employer 3</h2>
<div class="content_block ">
    <div class="align_left">
    <label class="ss-q-title" for="entry_157">Company Name</label>
    <input type="text" name="entry157single" value="<?php echo $_SESSION['entry0single']; ?>" class="ss-q-short" id="entry_157">
    </div>
    <div class="align_right ">
    <label class="ss-q-title" for="entry_153">Company Phone Number</label>
    <label class="ss-q-help" for="entry_153">(555) 555-5555</label>
    <input type="text" name="entry153single" value="<?php echo $_SESSION['entry0single']; ?>" class="ss-q-short" id="entry_153">
    </div>
</div>
<div class="content_block ">
    <div class="align_left">
    <label class="ss-q-title" for="entry_225">Dates Employed</label>
    <label class="ss-q-help" for="entry_225">(Month/Year) to (Month/Year)</label>
    <input type="text" name="entry225single" value="<?php echo $_SESSION['entry0single']; ?>" class="ss-q-short" id="entry_225">
    </div>
    <div class="align_right ">
    <label class="ss-q-title" for="entry_155">Name of Supervisor</label>
    <input type="text" name="entry155single" value="<?php echo $_SESSION['entry0single']; ?>" class="ss-q-short" id="entry_155">
    </div>
</div>
<div class="content_block ">
    <div class="align_left">
    <label class="ss-q-title" for="entry_151">Supervisor Phone Number</label>
    <label class="ss-q-help" for="entry_151">(555) 555-5555</label>
    <input type="text" name="entry151single" value="<?php echo $_SESSION['entry0single']; ?>" class="ss-q-short" id="entry_151">
    </div>
    <div class="align_right ">
    <label class="ss-q-title" for="entry_149">Job Title</label>
    <input type="text" name="entry149single" value="<?php echo $_SESSION['entry0single']; ?>" class="ss-q-short" id="entry_149">
    </div>
</div>
<div class="content_block ">
    <div class="full-block">
    <label class="ss-q-title" for="entry_140">Job Description</label>
    <label class="ss-q-help" for="entry_140">List the jobs you held, duties performed, skills used or learned, advancements or promotions while you worked at this company.</label>
    <textarea name="entry140single" rows="8" cols="75" class="ss-q-long" id="entry_140"><?php echo $_SESSION['entry0single']; ?>"</textarea>
    </div>
</div>
<div class="content_block ">
    <div class="align_left">
    <label class="ss-q-title" for="entry_215">Are you currently employed by this company?<span class="ss-required-asterisk">*</span></label>
    <select name="entry215single" id="entry_215">
           <?php
        for ($i = 0; $i < $count; $i++) {
            if ($_SESSION['entry215single'] == $selected[$i]) {
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
</div>
<div class="content_block ">
    <div class="full-block">
    <label class="ss-q-title" for="entry_213">Explain your reason for leaving if you answered &quot;No&quot; to the question above.
        <span class="ss-required-asterisk">*</span></label>
    <label class="ss-q-help" for="entry_213">Answer &quot;NA&quot; if still employed by this company.</label>
    <textarea name="entry213single" rows="8" cols="75" class="ss-q-long" id="entry_213"><?php echo $_SESSION['entry0single']; ?>"</textarea>
    </div>
</div>
<div class="content_block ">
    <div class="align_left">
    <label class="ss-q-title" for="entry_205">May we contact this employer?
        <span class="ss-required-asterisk">*</span></label>
    <select name="entry205single" id="entry_205">
             <?php
        for ($i = 0; $i < $count; $i++) {
            if ($_SESSION['entry205single'] == $selected[$i]) {
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
</div>
<div class="content_block ">
    <div class="full-block">
    <label class="ss-q-title" for="entry_209">If you answered &quot;No&quot; to the question above, explain why.
    </label><textarea name="entry209single" rows="8" cols="75" class="ss-q-long" id="entry_209"><?php echo $_SESSION['entry209single']; ?>"</textarea>
    </div>
</div>
    <input type="hidden" name="pageNumber" value="3">
    <input type="hidden" name="backupCache" value="">

    <input type="hidden" name="step" value="5">
    <button type="button" id="back-page" >Back</button>
    <input type="submit" name="continue" value="Continue &raquo;">
</form>
<form action="" id="formBack" method="post">
    <input type="hidden" name="step" value="3">
</form>