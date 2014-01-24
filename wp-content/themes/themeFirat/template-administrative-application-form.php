<?php
/*
 * Template name: administrative form
 *
 */
$step = $_POST['step'];
get_header();
?>
<?php
if (get_field('enabled_twitter_box')) {
    $display_box = "enabled_twitter_box";
} else {
    $display_box = "nodisplay";
}
?>   

<div id="sidebar-left" class="<?php echo $display_box; ?>">
    <?php get_sidebar('left'); ?>
</div>
<div id="main-content">
    <div class="wrap-content">
        <?php while (have_posts()) : the_post(); ?>
            <div class="entry-title">
                <?php
                $attachment_id = get_field('image_replace_title', get_the_ID());
                $size = "full";
                if ($attachment_id) {
                    echo wp_get_attachment_image($attachment_id, $size);
                } else if (get_field('display_title', get_the_ID())) {
                    echo '<h1 class="entry-title">';
                    the_title();
                    echo '</h1>';
                }
                ?>
                <?php
                if (get_field('box_in_right', get_the_ID())) {
                    ?>
                    <span class="mob-nav-item test-dates-btb" rel="nav-hidden">Test Dates</span>
                <?php }
                ?>                 
            </div>
            <?php
            if (has_post_thumbnail()) {
                echo"<br><div class='entry-thumbnail'>";
                the_post_thumbnail('medium');
                echo '</div>';
            }
            ?>
            <div class="wrap-share">
                <?php getShare(); ?>                
            </div>            
            <div class="entry-content">
                <?php the_content(); ?>
                <div class="wrapform content-form backgroud_form">
                    <div class="wrap_date">
                        <?php if ($step == 1 || $step == "") { ?>
                            <div id="step-1"><?php require_once(get_template_directory() . '/include/administrative-step1.php'); ?></div>
                        <?php } else if ($step == 2) { ?>
                            <div id="step-2"><?php require_once(get_template_directory() . '/include/administrative-step2.php'); ?></div>
                        <?php } else if ($step == 3) { ?>
                            <div id="step-3"><?php require_once(get_template_directory() . '/include/administrative-step3.php'); ?></div>
                        <?php } else if ($step == 4) { ?>
                            <div id="step-3"><?php require_once(get_template_directory() . '/include/administrative-step4.php'); ?></div>
                        <?php } else if ($step == 5) { ?>
                            <div id="step-3"><?php require_once(get_template_directory() . '/include/administrative-step5.php'); ?></div>
                        <?php } else if ($step == 6) { ?>
                            <div id="step-3"><?php require_once(get_template_directory() . '/include/administrative-step6.php'); ?></div>                
                        <?php } else if ($step == 7) { ?>
                            <div id="step-3"><?php require_once(get_template_directory() . '/include/administrative-step7.php'); ?></div>
                        <?php } ?>
                    </div>
                </div>

            </div>
        <?php endwhile; // end of the loop. ?> 
    </div>   
</div>
<?php
if (get_field('box_in_right')) {
    ?>
    <div id="sidebar-right">
        <?php get_sidebar('right'); ?>
    </div>
<?php }
?>   
<?php get_footer(); ?>