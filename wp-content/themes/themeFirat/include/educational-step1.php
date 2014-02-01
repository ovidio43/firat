<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery.validator.setDefaults({
            debug: true,
            success: "valid"
        });
        jQuery('#ss-form1').validate({
            rules: {
                entry0single: {required: true},
                entry1single: {required: true},
                entry4single: {required: true},
                entry6single: {required: true},
                entry10single: {required: true},
                entry34single: {required: true},
                entry175single: {required: true},
                entry177single: {required: true},
                entry179single: {required: true},
                entry32single: {required: true},
                entry18single: {required: true, phoneUS: true},
                entry22single: {required: false, phoneUS: true},
                entry24single: {required: true, email: true},
                entry48single: {required: true},
                entry242single: {required: true}
            }
        });
    });
</script>
<h1 class="ss-form-title">FES Educational Team Member Application Form</h1>

<div class="ss-form-desc ss-no-ignore-whitespace">Fill out application form completely.  If questions are not applicable, enter &quot;NA.&quot;  Do not leave questions blank.<span class="ss-required-asterisk">* Required</span></div>

<form action="" method="POST" id="ss-form1">

    <h2 class="ss-section-title">Personal Information</h2>

    <div class="content_block ">
        <div class="align_left ">
            <label class="ss-q-title" for="entry_0">First Name<span class="ss-required-asterisk">*</span></label>
            <input type="text" name="entry0single" value="<?php echo $_SESSION['entry0single']; ?>" class="ss-q-short" id="entry_0">
        </div>
        <div class="align_right ">
            <label class="ss-q-title" for="entry_2">Middle Name</label>
            <input type="text" name="entry2single" value="<?php echo $_SESSION['entry2single']; ?>" class="ss-q-short" id="entry_2">
        </div>
    </div>
    <div class="content_block ">
        <div class="align_left ">
            <label class="ss-q-title" for="entry_1">Last Name<span class="ss-required-asterisk">*</span></label>
            <input type="text" name="entry1single" value="<?php echo $_SESSION['entry1single']; ?>" class="ss-q-short" id="entry_1">
        </div>
        <div class="align_right ">
            <label class="ss-q-title" for="entry_4">Street Address<span class="ss-required-asterisk">*</span></label>
            <input type="text" name="entry4single" value="<?php echo $_SESSION['entry4single']; ?>" class="ss-q-short" id="entry_4">
        </div>
    </div>
    <div class="content_block ">
        <div class="align_left ">
            <label class="ss-q-title" for="entry_6">City, State<span class="ss-required-asterisk">*</span></label>
            <input type="text" name="entry6single" value="<?php echo $_SESSION['entry6single']; ?>" class="ss-q-short" id="entry_6">
        </div>
        <div class="align_right ">
            <label class="ss-q-title" for="entry_10">Zip Code<span class="ss-required-asterisk">*</span></label>
            <input type="text" name="entry10single" value="<?php echo $_SESSION['entry10single']; ?>" class="ss-q-short" id="entry_10">
        </div>
    </div>
    <div class="content_block ">
        <div class="align_left ">
            <label class="ss-q-title" for="entry_34">Are you legally authorized to work in the U.S. without any sponsorships?
                <span class="ss-required-asterisk">*</span></label>
            <?php
            $selected = Array();
            $selected[0] = 'Yes';
            $selected[1] = 'No';
            $count = count($selected);
            ?>  
            <select name="entry34single" id="entry_34">
                <?php
                for ($i = 0; $i < $count; $i++) {
                    if ($_SESSION['entry34single'] == $selected[$i]) {
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
            <label class="ss-q-title" for="entry_175">Have you ever been convicted of a felony or subjected to deferred adjudication on a felony charge?<span class="ss-required-asterisk">*</span></label>
            <select name="entry175single" id="entry_175">
                <?php
                for ($i = 0; $i < $count; $i++) {
                    if ($_SESSION['entry175single'] == $selected[$i]) {
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
            <label class="ss-q-title" for="entry_177">If yes, explain in concise detail, giving dates and nature of the offense, name and location of the court, and disposition of the case(s).  A conviction may not disqualify you, but a false statement will.
                <span class="ss-required-asterisk">*</span></label>
            <label class="ss-q-help" for="entry_177">Answer &quot;NA&quot; if you answered &quot;No&quot; to the question above.</label>
            <textarea name="entry177single" rows="8" cols="75" class="ss-q-long" id="entry_177"><?php echo $_SESSION['entry177single']; ?></textarea>
        </div>
    </div>
    <div class="content_block ">
        <div class="align_left ">
            <label class="ss-q-title" for="entry_179">Do you have a form of reliable transportation AND are insured?
                <span class="ss-required-asterisk">*</span></label>
            <select name="entry179single" id="entry_179">
                <?php
                for ($i = 0; $i < $count; $i++) {
                    if ($_SESSION['entry179single'] == $selected[$i]) {
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
            <label class="ss-q-title" for="entry_32">Please provide your work availability.<span class="ss-required-asterisk">*</span></label>
            <label class="ss-q-help" for="entry_32">i.e. Mondays, Wednesdays &amp; Fridays (3p-9p) and weekends (9a-5p)</label>
            <textarea name="entry32single" rows="8" cols="75" class="ss-q-long" id="entry_32"><?php echo $_SESSION['entry32single']; ?></textarea>
        </div>
    </div>

    <h2 class="ss-section-title">Contact Information</h2>

    <div class="content_block ">
        <div class="align_left ">
            <label class="ss-q-title" for="entry_18">Mobile Number<span class="ss-required-asterisk">*</span></label>
            <label class="ss-q-help" for="entry_18">(555) 555-5555</label>
            <input type="text" name="entry18single" value="<?php echo $_SESSION['entry18single']; ?>" class="ss-q-short" id="entry_18">
        </div>
        <div class="align_right ">
            <label class="ss-q-title" for="entry_22">Home Number</label>
            <label class="ss-q-help" for="entry_22">(555) 555-5555</label>
            <input type="text" name="entry22single" value="<?php echo $_SESSION['entry22single']; ?>" class="ss-q-short" id="entry_22">
        </div>
    </div>
    <div class="content_block ">
        <div class="align_left ">
            <label class="ss-q-title" for="entry_24">E-mail Address<span class="ss-required-asterisk">*</span></label>
            <input type="text" name="entry24single" value="<?php echo $_SESSION['entry24single']; ?>" class="ss-q-short" id="entry_24">
        </div>
        <div class="align_right ">
            <label class="ss-q-title" for="entry_48">Best method of contact<span class="ss-required-asterisk">*</span></label>
            <?php
            $selected[0] = 'Mobile Phone';
            $selected[1] = 'Home Phone';
            $selected[2] = 'E-mail';
            $selected[3] = 'No Preference';
            $count = count($selected);
            ?>  
            <select name="entry48single" id="entry_48">
                <?php
                for ($i = 0; $i < $count; $i++) {
                    if ($_SESSION['entry48single'] == $selected[$i]) {
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

    <input type="hidden" name="step" value="2">
    <input type="hidden" name="backupCache" value="">

    <input type="submit" name="continue" value="Continue &raquo;">
</form>