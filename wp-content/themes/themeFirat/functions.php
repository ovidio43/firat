<?php

add_theme_support( 'post-thumbnails' );
register_nav_menu( 'primary', 'Main Menu');
register_nav_menu( 'footer', 'Footer Menu');
function firatTheme_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'firatTheme' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'firatTheme_wp_title', 10, 2 );

function firatTheme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Right Widget Area', 'firatTheme' ),
		'id'            => 'main-sidebar',
		'description'   => __( 'Appears in the right section of the site.', 'firatTheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'firatTheme_widgets_init' );
function getShare(){
	?>
    <iframe style="border: none; overflow: hidden; width: 130px; height: 21px;" src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2FFiratEducation&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" frameborder="0" scrolling="no" width="320" height="240"></iframe>
    <a class="twitter-follow-button" href="https://twitter.com/FiratEducation" data-show-count="false">Follow @FiratEducation</a><br />
    <script type="mce-mce-mce-mce-mce-mce-mce-mce-mce-mce-mce-mce-mce-mce-mce-mce-mce-mce-mce-mce-mce-mce-mce-mce-text/javascript">// <![CDATA[
    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
    // ]]&gt;</script>	
<?php }