<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="Shortcut Icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fesforms.css">

        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <?php wp_head(); ?>
    <body <?php body_class(); ?>>

        <header id="header">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a>
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            <div class="mobile-menu">
                <span class="login-btb mob-nav-item" rel="nav-hidden">Login</span>
                
                <span class="tweets mob-nav-item" rel="nav-hidden">Tweets</span>
                
                <span class="mob-menu mob-nav-item" rel="nav-hidden">Menu</span>
            </div>
            <?php if ( is_active_sidebar( 'header-sidebar' ) ) : ?>
                <?php dynamic_sidebar( 'header-sidebar' ); ?>
            <?php endif; ?>            
        </header>
        <div class="wrapper">