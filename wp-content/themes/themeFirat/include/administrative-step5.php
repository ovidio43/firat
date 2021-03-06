<?php
foreach ($_POST as $key => $value) {
    $_SESSION[$key] = $value;
}
?>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#ss-form5').validate({
            rules: {
                entry228single: {required: true}
            }
        });
     jQuery('#back-page').on('click', function() {            
            jQuery('#formBack').submit();
        });
    });
</script>
<h1 class="ss-form-title">FES Administrative Team Member Application Form <span class="ss-required-asterisk">* Required</span></h1>
<form action="" method="POST" id="ss-form5">

    <h2 class="ss-page-title">Authorization</h2>

    <div class="ss-page-description ss-no-ignore-whitespace">Please read the following statement carefully and indicate your understanding and acceptance by providing your electronic signature.  </div>

    <label class="ss-q-title" for="entry_228">I certify that all the information provided by me in connection with my application, whether on this document or not, is true and complete, and I understand that any misstatement, falsification, or omission of information may be grounds for refusal to hire or, if  hired, termination.  I understand that as a condition of employment, I will be required to provide legal proof of authorization to work in the U.S.  I authorize any of the persons or organizations referenced in this application to give you any and all information concerning my previous employment, education, or any other information they might have, personal or otherwise, with regard to any of the subjects covered by this application, and I release all such parties from all liability from any damages which may result from furnishing such information to you.
    <span class="ss-required-asterisk">*</span></label>
<div class="content_block ">
    <div class="full-block">
    <label class="ss-q-help" for="entry_228">Please sign below (First &amp; Last Name):</label>
    <input type="text" name="entry228single" value="<?php echo $_SESSION['entry228single']; ?>" class="ss-q-short" id="entry_228">

    </div>
</div>
    <input type="hidden" name="step" value="6">
    <button type="button" id="back-page" >Back</button>
    <input type="submit" name="continue" value="Continue &raquo;">
</form>
<form action="" id="formBack" method="post">
      <input type="hidden" name="step" value="4">
</form>