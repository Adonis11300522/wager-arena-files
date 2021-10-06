<?php include("header.php"); ?>

<div class="container page1">
<div class="space90"></div>
		
                <form class="form-group" id="contactForm" method="POST">
                	<input type="hidden" id="contact-captcha-answer" value="9">
                    <div class="col-lg-6 first-name">
                        <div class="form-group">
                            <label class="control-label">First Name</label>
                            <input id="contact-first-name" type="text" class="form-control" placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-lg-6 last-name">
                        <div class="form-group">
                            <label class="control-label">Last Name</label>
                            <input id="contact-last-name" type="text" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="col-lg-6 email">
                        <div class="form-group">
                            <label class="control-label">E-Mail</label>
                            <input id="contact-email" type="text" class="form-control" placeholder="E-Mail">
                        </div>
                    </div>
                    <div class="col-lg-6 twitter-handle">
                        <div class="form-group">
                            <label class="control-label">Twitter Handle</label>
                            <input id="contact-twitter" type="text" class="form-control" placeholder="@Handle">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="control-label">Message</label>
                            <textarea name="message" rows="8" id="contact-message" class="form-control" placeholder="Your message..."></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">What is 7 + 2?</label>
                            <input id="contact-captcha" type="text" class="form-control" placeholder="CAPTCHA Answer">
                        </div>
                        <hr>
                        <div class="success">
                            <div class="success_text"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success contact-us-btn">Send Message</button>
                        </div>
                    </div>
                </form>

</div>


<?php include("footer.php"); ?>
  