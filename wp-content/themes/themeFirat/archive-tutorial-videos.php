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
					
					
					
					$type= $_GET['type'];
					
					if($type!="students"){
						$type="parents";	
					}
					$posts = get_posts(array(
					'post_type'		=> 'tutorial-videos',
					'posts_per_page'	=> -1,
					'meta_key'		=> 'video_embed_code',
					'meta_value'		=> $type
					));
					
					
					//$query = new WP_Query( array( 'meta_key' => 'price', 'meta_value' => '22', 'meta_compare' => '<=', 'post_type' => 'product' ) );
		?>
		
		
					
		<?php if($posts){ ?>
		
			<div class="entry-content">					
		
					<b><?php echo $type;//the_field('display_video_in');?>:</b><br><br>
					
					<?php  foreach($posts as $post){
						
								setup_postdata($post);
						?>
								
							<?php the_title(); ?><br><br>
							<?php the_field('video_embed_code'); ?>
							
						<?php } ?>
						
			</div>						
		<?php }	?>
		
		
		<!--<span style="color: #333399;"><em>** Students– Please click on Page 2 of myFES Tutorials on how to navigate myFES</em></span>		
		<p class="pages">Pages: </p>-->
		
		</div>
 </div>

<?php get_footer(); ?>
