<?php

add_theme_support( 'post-thumbnails' );
register_nav_menu( 'primary', 'Main Menu');
register_nav_menu( 'footer', 'Fotter Menu');
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