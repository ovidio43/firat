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
         
        	<div class="entry-content">
                <b>Parents:</b><br><br>
                <?php the_title(); ?><br><br>
                <?php the_field('video_embed_code'); ?>
        	</div>
        <?php endwhile; // end of the loop. ?> 
        </div>   
    </div>   
<?php get_footer();?>