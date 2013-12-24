<?php
/**
 * The default template for displaying Tutorial-Videos
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
 
 
 <div id="main-content">
        
		<div class="wrap-content">
		
		  <?php while ( have_posts() ) : the_post(); ?>
         
				<div class="entry-content">
					<b>Parents:</b><br><br>
					<?php the_title(); ?><br><br>
					<?php the_field('video_embed_code'); ?>					
					<?php the_field('display_video_in'); ?>					
				</div>
		  <?php endwhile; // end of the loop. ?>
		
		
		</div>
 </div>

<?php get_footer(); ?>
