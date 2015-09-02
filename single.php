<?php get_header();?>
<div id="primary single-layout" class="content-area page container">
    <div class="row">
		<main id="main" class="site-main <?php
        if( get_post_format() === false ) {echo "col-md-9 col-sm-8";} else {echo "col-md-12";}?> " role="main">

		<?php while ( have_posts() ) : the_post(); ?>
<?php
    if ( has_post_format( 'gallery' ) ) {
        get_template_part( 'content', 'gallery' );
    } else {
        get_template_part( 'content', 'single' );
    }
?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
        <?php if (has_post_format( 'Standard' )) { get_sidebar(); }?>
    </div>
</div><!-- #primary -->
<?php get_footer(); ?>
