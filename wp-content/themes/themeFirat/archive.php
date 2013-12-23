<?php

 get_header();?>

    <div id="main-content">
        <div class="wrap-content">
        <?php while ( have_posts() ) : the_post(); ?>
         
        	<div class="entry-content">
                <b>Parents:</b><br><br>
                <?php the_title(); ?><br><br>
                <?php the_field('video_embed_code'); ?>
        	</div>
        <?php endwhile; // end of the loop. ?> 
        </div>   
    </div>   
<?php get_footer();?>