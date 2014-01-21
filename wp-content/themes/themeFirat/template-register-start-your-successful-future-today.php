<?php
/*
*Template name: 
*
*/
$step = $_GET['step'];
 get_header();?>
    <?php
     if( get_field('enabled_twitter_box') )
    {     
        $display_box="enabled_twitter_box"; 
    }else{
        $display_box="nodisplay"; 
    }
    ?>        
    <div id="sidebar-left" class="<?php echo $display_box;?>">
        <?php get_sidebar('left');?>
    </div>
    <div id="main-content">
        <div class="wrap-content">
        <?php while ( have_posts() ) : the_post(); ?>
        	<div class="entry-title">
        		<?php
					$attachment_id = get_field('image_replace_title',get_the_ID());
					$size = "full";
                    if($attachment_id){
                        echo wp_get_attachment_image( $attachment_id, $size );                        
                    }else if(get_field('display_title',get_the_ID())){
                        echo '<h1 class="entry-title">';
                        the_title();
                        echo '</h1>';
                    }
        		?>
                <?php
                 if( get_field('box_in_right',get_the_ID()) )
                { ?>
                    <span class="mob-nav-item test-dates-btb" rel="nav-hidden">Test Dates</span>
                <?php    
                } ?>                 
        	</div>
            <?php
                if ( has_post_thumbnail() ) {
                    echo"<br><div class='entry-thumbnail'>";
                    the_post_thumbnail('medium');
                    echo '</div>';
                } 
            ?>
            <div class="wrap-share">
                <?php getShare();?>                
            </div>            
        	<div class="entry-content">
				<?php the_content();?>
                <div class="wrapform content-form backgroud_form">
						<div class="wrap_date">
								<?php require_once(get_template_directory() . '/include/2nd_saturday_form_two.php');?>
						</div>
                </div>
 
        	</div>
        <?php endwhile; // end of the loop. ?> 
        </div>   
    </div>
    <?php
     if( get_field('box_in_right') )
    { ?>
        <div id="sidebar-right">
            <?php get_sidebar('right');?>
        </div>
    <?php    
    } ?>   
<?php get_footer();?>