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
                    <h2>
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
					this is where the facebook feed goes
                </div>
                <div class="col-md-4 col-sm-12">
                    <form>
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name"><br />
                        <label for="phone">Telphone:</label>
                        <input type="tel" name="phone" id="phone"><br />
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email"><br />
                        <label for="textarea">How can we help:<br>
                        </label>
                        <textarea name="textarea" id="textarea"></textarea>
                        <input type="submit" name="submit" id="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
