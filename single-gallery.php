<?php 
/*
 * Template Name: Post with no sidebar
*/
get_header(); ?>
<div id="primary" class="content-area page container">
    <div class="row">
		<main id="main" class="site-main col-md-12" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php gpl_post_nav(); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
    </div>
</div><!-- #primary -->
<?php get_footer(); ?>
