<div id="popup-box" class="full-height">
    <span class="btn-close">
        <i class="icon_close"></i>
    </span>

    <div class="container center-y">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="deco id-color"><span>We Invite You</span></h2>
                <h2 data-wow-delay=".2s">Saturday, 27 November 2021</h2>
            </div>

            <div class="spacer-double"></div>

            <div class="col-md-5 col-md-offset-1 text-right">
                <h3>Wedding Ceremony</h3>
                13:00 PM - 14:00 PM<br> 100 Mainstreet Center, Sydney<br>
            </div>

            <div class="col-md-5">
                <h3>Wedding Reception</h3>
                14:00 PM - 16:00 PM<br> 100 Mainstreet Center, Sydney<br>
            </div>

            <div class="spacer-double"></div>

            <form name="rsvp" id='rsvp_form' class="form-underline" method="post" action="rsvp.php">
                <div class="col-md-3">
                    <input type='text' name='Name' id='name' class="form-control" placeholder="Your Name" required maxlength="50">
                </div>
                <div class="col-md-3">
                    <input type='text' name='Email' id='email' class="form-control" placeholder="Your Email" required maxlength="50">
                </div>
                <div class="col-md-3">
                    <select id="guest" name="Guest" size="1" class="form-control">
                        <option value="" disabled selected>Guests</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select id="attend" name="Attend" size="1" class="form-control">
                        <option value="" disabled selected>Are you attending?</option>
                        <option>yes</option>
                        <option>no</option>
                    </select>
                </div>
                <div class="col-md-12 text-center">
                    <div class="spacer-single"></div>
                    <input type='submit' id='submit' value='Submit' class="btn btn-custom">
                    <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                    <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.
                    </div>
                </div>
            </form>
            <div id="success_message">
                <h1>Thank You!</h1>
                <p> We will get back to you soon. </p>
            </div>
            <div id="error_message">
                <h1>Error</h1> Sorry there was an error sending your form.
            </div>

            <div class="spacer-single"></div>
        </div>
    </div>
</div>