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
		<?php
			$types= $_GET['type'];
			if(!$types){
				$types="parents";
			}

			$type = 'tutorial-videos';							
			$args = array(
				'post_type'     => $type,
				'posts_per_page'    => -1,
				'order' => 'ASC',
				'meta_query'        => array(
					array(
						'key' => 'display_video_in',
						'value' => $types 
					)
				)
			);
			$myposts = new WP_Query($args);
							
		?>
		<span><strong><?php echo $types; ?>:</strong></span>
		<div class="entry-content">			
			<?php	if ( $myposts->have_posts() ) :
					while ( $myposts->have_posts() ) : ?>								
					<?php   $myposts->the_post();  ?>
						<br><br><?php the_title(); ?><br><br>
						<div class="video-container">
							<?php the_field('video_embed_code'); ?>
						</div>
														
					<?php endwhile; ?>								
			<?php	endif;	?>
		</div>
		<?php if($types=="parents") { ?>
				<span style="color: #333399;"><em>** Students– Please click on Page 2 of myFES Tutorials on how to navigate myFES</em></span>
				<p class="pages">Pages: 1 <a href="/firat/tutorial-videos?type=students">2</a> </p>		
		<?php }else{?>
				<p class="pages">Pages: <a href="/firat/tutorial-videos/">1</a> 2</p>		
		<?php } ?>						
		</div>
 </div>

<?php get_footer(); ?>
