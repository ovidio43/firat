<?php
/**
 * The default template for displaying Tutorial-Videos
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
 
 <?php 
 
 ?>
 
 <div id="main-content">
        
		<div class="wrap-content">
		
		  <?php// while ( have_posts() ) : the_post(); ?>
         
				<!--<div class="entry-content">
					<b><?php ///the_field('display_video_in');?>:</b><br><br>
					<?php //the_title(); ?><br><br>
					<?php //the_field('video_embed_code'); ?>
				</div>-->
		  <?php //endwhile; // end of the loop. ?>		
		  
		<?php
					/*$type="parents";											
					$posts = get_posts(array(
					'post_type'		=> 'tutorial-videos',
					'posts_per_page'	=> -1,
					'meta_key'		=> 'video_embed_code',
					'meta_value'		=> 'parents'
					)); */
					
					
					//$query = new WP_Query( array( 'meta_key' => 'price', 'meta_value' => '22', 'meta_compare' => '<=', 'post_type' => 'product' ) );
					
					$type = 'tutorial-videos';					
					$args = array(
						'post_type'     => $type,
						'posts_per_page'    => 1,
						'order' => 'ASC',
						'meta_key'		=> 'video_embed_code',
						'meta_value'		=> 'parents'
					);
					$wp_query = new WP_Query($args);
		?>
		
		
					
		<?php    if ( $wp_query->have_posts() ) {  ?>
		
			<div class="entry-content">					
		
					<b><?php echo $type;//the_field('display_video_in');?>:</b><br><br>
					
					<?php    while ( $myposts->have_posts() ) : 
                                    $myposts->the_post();   ?>
								
							<?php the_title(); ?><br><br>
							<?php the_field('video_embed_code'); ?>
							
						<?php endwhile; ?>
						
			</div>						
		<?php }	?>
		
		
		<!--<span style="color: #333399;"><em>** Students– Please click on Page 2 of myFES Tutorials on how to navigate myFES</em></span>		
		<p class="pages">Pages: </p>-->
		
		</div>
 </div>

<?php get_footer(); ?>
