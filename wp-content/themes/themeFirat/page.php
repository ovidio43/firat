<?php

 get_header();?>
    <?php
     if( get_field('enabled_twitter_box') )
    { ?>
        <div id="sidebar-left">
            <?php get_sidebar('left');?>
        </div>
    <?php    
        $left_s="whit-left-sidebar";
    }
     if( get_field('box_in_right') ){
        $right_s="whit-right-sidebar";
    }
    ?>
    <div id="main-content" class="<?php echo $left_s.' '.$right_s;?>">
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
                    <span class="test-dates-btb" rel="nav-hidden">Test Dates</span>
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