<div class="row">
    <!-- Mainarea Starts -->
    <div class="col-sm-8 col-xs-12">
        <h4 class="main-heading-1 text-spl-color text-uppercase text-normal">Get in Touch</h4>
        <p class="lead">
            You can contact us any way that is convenient for you. <br>
            We are available 24/7 via phone or email.
        </p>
        <p class="text-medium">
            You can also use a quick contact form below or visit our office personally.
        </p>
        <!-- Contact Form Wrap Starts -->
        <div class="contact-form-wrap">
            <h5 class="sub-heading-1 text-center-xs">Contact Form</h5>
            <!-- Contact Form Starts -->
            <div class="status alert alert-success contact-status"></div>
            <form   method="post" action="{{url('email-send')}}" role="form">
                <!-- Nested Row Starts -->
                {{csrf_field()}}
                <div class="row">
                    <!-- First Name Filed Starts -->
                    <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="fname" class="sr-only">First Name: </label>
                            <input type="text" class="form-control flat" name="form[First Name]" id="fname" required="" placeholder="Your First Name">
                        </div>
                    </div>

                    <!-- First Name Filed Ends -->
                    <!-- Last Name Filed Starts -->
                    <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="lname" class="sr-only">Last Name: </label>
                            <input type="text" class="form-control flat" name="form[Last Name]" id="lname" required="" placeholder="Your Last Name">
                        </div>
                    </div>
                    <!-- Last Name Filed Ends -->
                    <!-- E-mail Filed Starts -->
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email ID: </label>
                            <input type="text" class="form-control flat" name="form[Email]" id="email" required="" placeholder="Your E-mail">
                        </div>
                    </div>
                    <!-- E-mail Filed Ends -->
                    <!-- Message Filed Starts -->
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="message" class="sr-only">Message: </label>
                            <textarea class="form-control flat" rows="8" name="form[Details]"  name="message" id="message" required="" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <!-- Message Filed Ends -->
                    <!-- Send Button Starts -->
                    <div class="col-xs-12">
                        <input type="submit" class="btn btn-big animation" value="Send Message">
                    </div>
                    <!-- Send Button Ends -->
                </div>
                <!-- Nested Row Ends -->
            </form>
            <!-- Contact Form Ends -->
        </div>
        <!-- Contact Form Wrap Ends -->
    </div>
    <!-- Mainarea Ends -->
    <!-- Spacer For Extra Small Screen Starts -->
    <div class="col-xs-12 hidden visible-xs">
        <p class="spacer-small"></p>
    </div>
    <!-- Spacer For Extra Small Screen Ends -->
    <!-- Sidearea Starts -->
    <div class="col-sm-4 col-xs-12">
        <!-- Headquarters Starts -->
        <div class="sblock-2">
            <h5>Address</h5>
            <ul class="list-unstyled address-list">
                <li class="clearfix">
                    <i class="fa fa-map-marker pull-left"></i>
                    <span class="pull-left">S/7 Kabir Street Opp. Meezan Bank, Urdu Bazar, Lahore - Pakistan.
							</span></li>
                <li>
                    <i class="fa fa-phone"></i>
                    + 92 423 7111112 - 3
                </li>
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:info@stationers.com ">info@stationers.com </a>
                </li>
            </ul>
        </div>
        <!-- Headquarters Ends -->

        <!-- Open Hours Starts -->
        <h5 class="sub-heading-2 text-normal">Open Hours</h5>
        <ul class="list-unstyled address-list">
            <li>
                <i class="fa fa-clock-o"></i>
                <strong class="text-medium">Weekday's</strong> -
                9:00 AM - 6:00 PM
            </li>
            <li>
                <i class="fa fa-clock-o"></i>
                <strong class="text-medium">Weekend's</strong> -
                10:00 AM - 4:00 PM
            </li>
            <li><span class="label label-danger">Sunday Close</span></li>
        </ul>
        <!-- Open Hours Ends -->
        <!-- Follow Us Starts -->
        <h5 class="sub-heading-2 text-normal">Follow Us</h5>
        <ul class="list-unstyled list-inline contact-sm-links animation">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        </ul>
        <!-- Follow Us Ends -->
    </div>
    <!-- Sidearea Ends -->
</div>