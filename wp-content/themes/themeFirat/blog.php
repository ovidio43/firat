<?php
/**
 * Template Name: Blog Template
 * Description: Page Template that blog
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>       
 
 <div id="main-content">
        
		<div class="wrap-content">
		
		
		 <?php while ( have_posts() ) : the_post(); ?>
         
					<div  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
								<h1 class="entry-title"><?php the_title(); ?></h1>
								<div class="post-info"></div>
																
								<!--<div class="entry-content">
										<a href="" title=""><img width="150" height="150" src="" class="alignleft post-image" alt="" title=""></a><a href=""><p></p> </a>
								</div>-->							
								<b><?php ///the_field('display_video_in');?>:</b><br><br>
								<?php //the_title(); ?><br><br>
								<?php //the_field('video_embed_code'); ?>
					
					
					

				</div>
		  <?php endwhile; // end of the loop. ?>	
		
		</div>
</div>
		
<?php get_footer(); ?>
