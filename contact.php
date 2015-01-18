<?php
$title = "Contact";
include 'includes/header.php';
?>

<!-- Start Page Body -->

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>David Gibbons</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24459.753001293!2d-75.12175140000001!3d39.97562044999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6c839264695b7%3A0x76bf727bd8363434!2sPhiladelphia%2C+PA+19125!5e0!3m2!1sen!2sus!4v1415591777796" width="100%" height="400" scrolling="no"></iframe>
                </div>
                <div class="col-md-4">
                    <p>Email:
                        <strong><a href="mailto:me@DavidGibbons.me">me@DavidGibbons.me</a></strong>
                    </p>
                    <p>LinkedIn:
                        <strong><a href="http://www.linkedin.com/pub/david-gibbons/88/757/425/" target="_blank">Professional Profile</a></strong>
                    </p>
                    <p>GitHub:
                        <strong><a href="https://github.com/giblet-goblin" target="_blank">@giblet-goblin</a></strong>
                    </p>
                    <p>Facebook:
                        <strong><a href="http://facebook.com/GibbonsD" target="_blank">@GibbonsD</a></strong>
                    </p>
                    <p>Twitter:
                        <strong><a href="https://twitter.com/giblet_goblin" target="_blank">@giblet_goblin</a></strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <p>Need more infomation? Want some more examples? Prefer to talk to some of my past clients? Feel free to contact me with any questions you may have or any projects you want done. Use the form below to send me a message. I promise to respond as soon as I can. Leave whichever contact method that you would prefer I use to get back to you (phone number or email address).</p>
                    <form role="form" action="contactengine">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" class="form-control" name="inputName">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="inputEmail">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" name="inputPhone">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" rows="6" name="inputMessage"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<!-- End Page Body -->

<?php include 'includes/footer.php'; ?>