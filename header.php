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
            <div class="logo col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
				<img src="<?php bloginfo('template_directory'); ?>/source/puresite/img/logo.png" width="369" height="102" alt=""/>
			</div>
		</div>



      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
              <li><a href="../navbar-static-top/">Static top</a></li>
              <li><a href="../navbar-fixed-top/">Fixed top</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>


		<nav id="site-navigation" class="site-navigation menu col-md-12 col-sm-6" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'gpl' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>
    </div>
</header>