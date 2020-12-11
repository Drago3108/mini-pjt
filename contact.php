<?php include'header.php' ;?>

        <!-- Start Page Banner -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Contact</h2>

                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Contact Area -->
        <section class="contact-area ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12">
                        <div class="contact-form">
                            <div class="tile">
                                <h3>Leave us a Message</h3>
                                <p>Your email address will not be published. Required fields are marked *</p>
                            </div>

                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Message*</label>

                                            <textarea name="message" id="message" cols="30" rows="5" required data-error="Please enter your message" class="form-control"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Your Name*</label>

                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Email address*</label>

                                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Phone*</label>

                                            <input type="text" name="phone_number" id="phone_number" class="form-control" required data-error="Please enter your phone number">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Subject*</label>

                                            <input type="text" name="subjects" id="subjects" class="form-control" required data-error="Please enter your subjects">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn">
                                            Send Message
                                            <span></span>
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12">
                        <div class="contact-information">
                            <h3>Visit us</h3>

                            <ul class="contact-list">
                                <li><i class='bx bx-map'></i> Address: <span>4848 Hershell Hollow Road, Bothell, WA 89076</span></li>
                                <li><i class='bx bx-phone-call'></i> Phone: <a href="tel:+15143214567">+1 (514) 321-4567</a></li>
                                <li><i class='bx bx-envelope'></i> Email: <a href="mailto:hello@ejon.com">hello@ejon.com</a></li>
                            </ul>

                            <h4>Hours of operation:</h4>
                            <ul class="opening-hours">
                                <li>Monday: <span>08:00am-10:00pm</span></li>
                                <li>Tuesday: <span>08:00am-10:00pm</span></li>
                                <li>Wednesday: <span>08:00am-10:00pm</span></li>
                                <li>Thursday: <span>08:00am-10:00pm</span></li>
                                <li>Friday: <span>08:00am-10:00pm</span></li>
                                <li>Saturday: <span>08:00am-10:00pm</span></li>
                                <li>Sunday: <span>Closed</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Area -->

        <!-- Map -->
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9476519598093!2d-73.99185268459418!3d40.74117737932881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a3f81d549f%3A0xb2a39bb5cacc7da0!2s175%205th%20Ave%2C%20New%20York%2C%20NY%2010010%2C%20USA!5e0!3m2!1sen!2sbd!4v1588746137032!5m2!1sen!2sbd"></iframe>
        </div>
        <!-- End Map -->
        
<?php include'footer.php' ;?>