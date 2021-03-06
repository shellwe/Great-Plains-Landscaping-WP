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
				Great Plains Landscaping &amp; Design Inc. | P.O. Box 383 | Bennet, NE 68317-0383
           <p class="contact-phone">Phone: 402-417-6906</p>
            </address>
            <!-- Button trigger modal -->
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="contactform" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="post" action="reCaptcha/form.php">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Contact Form</h4>
                    </div>
                    <div class="modal-body">
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" id="form-submit" value="Submit" class="btn btn-default">Send</button>
                    </div>
                </form>
				<?php //include 'ReCaptcha/form.php'; ?>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- #page -->

<?php wp_footer(); ?>
</body>

</html>