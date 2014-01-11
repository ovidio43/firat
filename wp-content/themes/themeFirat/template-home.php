<?php 
/*
*Template name: home page
*
*/
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
                    }else{
                        the_title();
                    }
                    if ( has_post_thumbnail() ) {
                        echo"<br><div class='entry-thumbnail'>";
                        the_post_thumbnail('medium');
                        echo '</div>';
                    }                     
        		?>
        	</div>
            <div class="wrap-share">
                <?php getShare();?>
            </div>
        	<div class="entry-content">
				<?php the_content();?>
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