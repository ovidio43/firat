<?php get_header();?>
    <div class="leftsidebar">
		<?php get_sidebar();?>
    </div>
    <div class="rightside">
        <?php while ( have_posts() ) : the_post(); ?>
        	<div class="entry-title">
        		<?php
					$attachment_id = get_field('image_replace_title',get_the_ID());
					$size = "full";
					echo wp_get_attachment_image( $attachment_id, $size );
        		?>
        	</div>
        	<div class="entry-content">
				<?php the_content();?>
        	</div>
        <?php endwhile; // end of the loop. ?>    
    </div>
<?php get_footer();?>