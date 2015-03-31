<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Great Plains Landscaping
 */
?>
		</div> <!--end row-->
    </div> <!--end container-->
    <footer class="container-fluid" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <address>
                    Great Plains Landscaping<br>
                    Some Address<br>
                    Some city, State Zip
                    </address>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h2>
                    <i class="fa fa-facebook-official"></i>
                    <i class="fa fa-pinterest-p"></i>
                    <i class="fa fa-google-plus"></i>
                    <i class="fa fa-yelp"></i> </h2>
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
