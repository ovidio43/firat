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
			<div  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>					
				<h1 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
				<div class="post-info"></div>																
				<div class="entry-content">
					<div class="col-xs-12 col-sm-2 col-md-2">
						<?php
						    if ( has_post_thumbnail() ) {
						        echo'<a href="'.get_permalink().'"><div class="entry-thumbnail">';
						        the_post_thumbnail('thumbnail');
						        echo '</div></a>';
						    } 
						?>
					</div>
					<div class="col-xs-12 col-sm-10 col-md-10">
						<a href="<?php the_permalink();?>"><?php the_excerpt();?></a>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
<div class="post-meta">
	<span class="categories">
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'firatTheme' ) );
				if ( $categories_list ):
			?>
			<span class="cat-links">
				<?php printf( __( '<span class="%1$s">Filed Under:</span> %2$s', 'firatTheme' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list );
				$show_sep = true; ?>
			</span>
			<?php endif; // End if categories ?>
	</span>
	<span class="tags">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', __( ', ', 'firatTheme' ) );
			if ( $tags_list ):
			if ( $show_sep ) : ?>
		<span class="sep"> | </span>
			<?php endif; // End if $show_sep ?>
		<span class="tag-links">
			<?php printf( __( '<span class="%1$s">Tagged With:</span> %2$s', 'firatTheme' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list );
			$show_sep = true; ?>
		</span>
		<?php endif; // End if $tags_list ?>
	</span>
</div>											
					</div>
				</div>							
			</div>
	  <?php endwhile; // end of the loop. ?>	
	
	</div>
</div>		
<?php get_footer(); ?>
