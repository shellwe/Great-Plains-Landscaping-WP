<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Great Plains Landscaping
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="//use.typekit.net/hkh2smp.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
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
<a class="skip-link screen-reader-text" href="#content">
<?php _e( 'Skip to content', 'gpl' ); ?>
</a>
<header class="container-fluid document-header">
	<div class="container">
		<div class="row">
			<div class="logo col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1"> <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/logo.png"> </div>
		</div>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container' => 'nav' ) ); ?>
	</div>
</header>
