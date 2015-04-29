<?php get_header(); ?>
<div class="content-area container" id="primary" role="main">
	<div class="row">
		<div class="col-md-12">
            <?php wp_get_attachment_image( 4, large, false, $default_attr ); ?>
        </div>
	</div>
	<main class="row">
		<div class="col-md-4">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vl0nmm1aVtA"></iframe>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="banner">We now specialize in Epoxy protective flooring!</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="banner">
			<h5>How to Connect</h5>
			
			</div>
		</div>
        <ul>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();    

 $args = array(
   'post_type' => 'attachment',
   'numberposts' => -1,
   'post_status' => null,
   'post_parent' => $post->ID
  );

  $attachments = get_posts( $args );
     if ( $attachments ) {
        foreach ( $attachments as $attachment ) {
           echo '<li>';
           echo wp_get_attachment_image( $attachment->ID, 'full' );
           echo '<p>';
           echo apply_filters( 'the_title', $attachment->post_title );
           echo '</p></li>';
          }
     }

 endwhile; endif; ?>
</ul>

	</main>
</div>
<?php get_footer(); ?>