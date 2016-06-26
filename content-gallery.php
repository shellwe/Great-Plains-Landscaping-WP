<?php
/**
 * @package Great Plains Landscaping
 */
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
        </header>
        <!-- .entry-header -->

        <div class="entry-content gallery-content">
            <?php the_content(); ?>
        </div>
        <!-- .entry-content -->


        <p>test - does this page work? YES IT DOES!!!</p>
        <?php 
    $args = array(

        "post_status"=>"publish",
        "post_type"=>"image", // I'm not sure if its a custom post type or not.
        "posts_per_page"=>100 // how many do you want to see?

    );
    $galleries = new WP_Query( $args ); // let's get that query object

    // HERE IS YOUR LOOP
    if ( $galleries->have_posts() ) {
        ?>

            <div class="row gallery-group">
                <h2>View some of our galleries!</h2>

                <?php
        while ( $galleries->have_posts() ) {
            $galleries->the_post();
            // This is the section that actually repeats.
            ?>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                        <div class="hovereffect">
                            <img class="img-responsive" src="<?php echo get_field(" gallery_image ");?>" alt="<?php echo get_field(" gallery_title ");?>">
                            <div class="overlay">
                                <h2><?php echo get_field("gallery_title");?>/h2>
                    <a class="info" href="<?php echo $permalink = get_permalink(get_the_id()); ?>">gallery_link</a>
                </div>
            </div>
        </div>

        <?php

            // OK we're done repeating here.
        }
        echo '</div>'; // close up that div at the top.
    } else {
            // No posts. We're all doomed!!!
    }
    // Reset that post data, dawg.
    wp_reset_postdata();

    ?>
    
    
    
    
    
	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->