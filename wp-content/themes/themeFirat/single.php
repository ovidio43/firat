<?php

 get_header();?>

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