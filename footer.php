<?php /** * The template for displaying the footer. * * Contains the closing of the #content div and all content after * * @package Great Plains Landscaping */ ?>

<footer class="container-fluid site-footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="social-media col-sm-4 col-md-3">
                <a href="http://www.yelp.com/biz/great-plains-landscapes-lincoln" data-toggle="modal" data-target="#contactform"><i class="fa fa-envelope"></i></a>
                <a href="https://www.facebook.com/GreatPlainsLandscaping" target="new"><i class="fa fa-facebook-official"></i></a>
                <a href="https://www.pinterest.com/greatplainsland/" target="new"><i class="fa fa-pinterest-p"></i></a>
                <a href="https://plus.google.com/107837644911414833271/" target="new"><i class="fa fa-google-plus"></i></a>
                <a href="http://www.yelp.com/biz/great-plains-landscapes-lincoln" target="new"><i class="fa fa-yelp"></i></a>
            </div>

            <address class="col-sm-8 col-md-9">
				<p>Great Plains Landscaping &amp; Design Inc. | P.O. Box 383 | Bennet, NE 68317-0383</p>
           <p class="contact-phone">402-417-6906</p>
            </address>
            <!-- Button trigger modal -->
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="contactform" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
				<?php include 'ReCaptcha/form.php'; ?>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- #page -->

<?php wp_footer(); ?>
</body>

</html>