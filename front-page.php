<?php get_header(); ?>
<div class="content-area container" id="primary" role="main">
	<div class="row">
		<div class="col-md-12">
            <?php wp_get_attachment_image( 4, 'large', false, $default_attr ); ?>
        </div>
	</div>
	<div class="row">
		<div class="col-md-12">
            <p>Great Plains Landscaping &amp; Design delivers unparalleled craftsmanship in landscape design, construction and maintenance at reasonable prices. We are dedicated to provide our customer with prompt and professional customer service. Our team believes in a strong client relationship built on working together, trust and understanding the desired outdoor spaces.</p>
        </div>
	</div>
	<div class="row front-page">
		<div class="col-md-4 col-sm-6">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vl0nmm1aVtA"></iframe>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<img src="<?php echo get_template_directory_uri(); ?>/img/epoxy.jpg" alt="test" class="img-responsive" />
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/lEp5e9L7wi0"></iframe>
			</div>
		</div>
	</div>
	<div class="row gallery-group">
	<h2>View some of our galleries!</h2>
		<div class="col-md-3 col-sm-4 col-xs-6">
			<a href="<?php echo $permalink = get_permalink(132); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/patiowalkway.jpg" alt="test" class="img-responsive img-circle img-thumbnail" /></a>
		</div>
		<div class="col-md-3 col-sm-4 col-xs-6">
			<a href="<?php echo $permalink = get_permalink(134); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/walls.jpg" alt="test" class="img-responsive img-circle img-thumbnail" /></a>
		</div>
		<div class="col-md-3 col-sm-4 col-xs-6">
			<a href="<?php echo $permalink = get_permalink(136); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/concretecurbing.jpg" alt="test" class="img-responsive img-circle img-thumbnail" /></a>
		</div>
		<div class="col-md-3 col-sm-4 col-xs-6">
			<a href="<?php echo $permalink = get_permalink(138); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/waterfeatures.jpg" alt="test" class="img-responsive img-circle img-thumbnail" /></a>
		</div>
	</div>
</div>
<?php get_footer(); ?>