<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Great Plains Landscaping
 */
?>
    <footer class="container-fluid" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <address>
                    <h2 class="social-media">
						<a href="https://www.facebook.com/GreatPlainsLandscaping" target="new"><i class="fa fa-facebook-official"></i></a>
						<a href="https://www.pinterest.com/greatplainsland/" target="new"><i class="fa fa-pinterest-p"></i></a>
						<a href="https://plus.google.com/107837644911414833271/" target="new"><i class="fa fa-google-plus"></i></a>
						<a href="http://www.yelp.com/biz/great-plains-landscapes-lincoln" target="new"><i class="fa fa-yelp"></i></a>
					</h2>
					Great Plains Landscaping & Design Inc.<br>
					P.O. Box 383<br>
					Bennet, NE 68317-0383<br>
					402-417-6906
                    </address>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h2>Facebook News</h2>
					<?php echo do_shortcode('[custom-facebook-feed]'); ?>
                </div>
				<div class="col-md-4 col-sm-12">
					<form method="post">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" name="name" class="form-control" id="form-name" placeholder="What is your name?" required>
						</div>
						<div class="form-group">
							<label for="telephone">Phone</label>
							<input type="tel" name="telephone" class="form-control" id="form-telephone" placeholder="How can we reach you?" required>
						</div>
						<div class="form-group">
							<label for="email">E-mail address</label>
							<input type="email" name="email" class="form-control" id="form-email" placeholder="What is your e-mail address">
						</div>
						<div class="form-group">
							<label for="comment">How may we help?</label>
							<input type="textarea" name="comment" class="form-control" id="form-comment" placeholder="How may we help you?">
						</div>
						<div class="g-recaptcha" data-sitekey="6LfJSQYTAAAAAGB3Z6V_5U6QmxvR1ftc24vUU9dt"></div>
						<button type="submit" name="submit" id="form-submit" value="Submit" class="btn btn-default">Submit</button>
					</form>				
                </div>					
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
