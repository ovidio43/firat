<?php

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
                    echo '<h1 class="entry-title">';
                    the_title();
                    echo '</h1>';
        		?>
        	</div>
            <div class="wrap-share">
                <?php getShare();?>
                <?php
                 if( get_field('box_in_right',get_the_ID()) )
                { ?>
                    <span class="test-dates-btb" rel="nav-hidden">Test Dates</span>
                <?php    
                } ?>                 
                
            </div>            
        	<div class="entry-content">
				<?php the_content();?>
        	</div>
        <?php endwhile; // end of the loop. ?> 
        </div>   
    </div>   
<?php get_footer();?>