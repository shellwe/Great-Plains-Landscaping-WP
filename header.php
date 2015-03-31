<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Great Plains Landscaping
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="//use.typekit.net/hkh2smp.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'gpl' ); ?></a>
<header class="container-fluid document-header">
    <div class="container">
        <div class="row">
            <div class="logo col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3"> <img src="<?php bloginfo('template_directory'); ?>/source/puresite/img/logo.png" width="369" height="102" alt=""/> </div>
            <div class="telephone col-md-4 col-sm-3 hidden-sm hidden-xs"> <a href="tel:4025707904">402-123-4567</a> </div>
            <nav id="site-navigation" class="site-navigation menu col-md-12 col-sm-6" role="navigation">
                <button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'gpl' ); ?></button>
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </nav>
        </div>
    </div>
</header>
<div class="container">
	<div class="row">