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
        	<div class="entry-title">
        		<?php
                    echo '<h1 class="entry-title">';
                    the_title();
                    echo '</h1>';
        		?>
        	</div>
<div class="post-info">
                <?php
                if ( 'post' == get_post_type() )
                    firatTheme_posted_on();
                ?>
                <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'firatTheme' ), __( '1 Comment', 'firatTheme' ), __( '% Comments', 'firatTheme' ) ); ?></span></div>              
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
            <?php if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }?>
        <?php endwhile; // end of the loop. ?> 
        </div>   
    </div>   
<?php get_footer();?>