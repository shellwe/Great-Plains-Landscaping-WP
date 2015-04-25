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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-18166885-5', 'auto');
  ga('send', 'pageview');

</script>
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
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
			<a class="navbar-brand hidden-md hidden-lg" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
			<?php /* Primary navigation */
			wp_nav_menu( array(
			  'menu' => 'top_menu',
			  'depth' => 2,
			  'container' => false,
			  'menu_class' => 'nav',
			  //Process nav menu using our custom nav walker
			  'walker' => new wp_bootstrap_navwalker())
			);
			?>
          </div><!--/.nav-collapse -->
      </nav>


<!--		<nav id="site-navigation" class="site-navigation menu col-md-12 col-sm-6" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php // _e( 'Primary Menu', 'gpl' ); ?></button>
			<?php // wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>-->
    </div>
</header>