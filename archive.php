<?php get_header(); ?>
<div class="page container">
	<div class="row">
	   <main id="primary" class="content-area content content-archive col-md-9 col-sm-8">

            <?php if ( have_posts() ) : ?>
                
				<?php while ( have_posts() ) : the_post(); ?>
                
                    <?php
                        /* Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'content', get_post_format() );
                    ?>
                <?php endwhile; ?>

                <?php gpl_paging_nav(); ?>

            <?php else : ?>

                <?php get_template_part( 'content', 'none' ); ?>

            <?php endif; ?>

        </main><!-- #main -->

    <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
