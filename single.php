<?php get_header(); ?>
<div id="primary" class="content-area page container">
    <div class="row">
		<main id="main" class="site-main col-md-9" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php gpl_post_nav(); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
        <?php get_sidebar(); ?>
    </div>
</div><!-- #primary -->
<?php get_footer(); ?>
