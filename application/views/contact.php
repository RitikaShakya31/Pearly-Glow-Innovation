<div style="width:100%;background:#1a1e51;">
    <div>
        <h3 style="color: white;text-align: center;line-height: 130px;font-size: 40px;">Contact Us</h3>
    </div>
</div>


<!-- START CONTACT SECTION -->
<section id="contact" class="section-padding">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="contact-title">
                    <h4>You Have Any question? Simply Send Us Message</h4>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p> -->
                    <hr>
                </div>
                <div class="contact-form mt-4">
                    <form class="form" action="" method="POST">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Name</label>
                                <span class="form-icon"><i class="icofont icofont-user-alt-5"></i></span>
                                <input name="name" class="form-control form-controlb" id="cname" placeholder="Enter Your Name" required="required"
                                    type="text">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Email</label>
                                <span class="form-icon"><i class="icofont icofont-envelope"></i></span>
                                <input name="email" class="form-control form-controlb" id="cmail" placeholder="Enter Email" required="required"
                                    type="email">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Number</label>
                                <span class="form-icon"><i class="icofont icofont-telephone"></i></span>
                                <input name="phone" class="form-control form-controlb" id="cnumber" placeholder="Enter Phone Number" required="required"
                                    type="text">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Subject</label>
                                <span class="form-icon"><i class="icofont icofont-ui-email"></i></span>
                                <input name="subject" class="form-control form-controlb" placeholder="Enter Subject" id="csubject"
                                    required="required" type="text">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea rows="6" name="message" class="form-control" id="cmessage"
                                    placeholder="Your Message Here..." required="required"></textarea>
                            </div>
                            <div class="form-group col-lg-12 mb0">
                                <div class="actions">
                                    <input value="Submit" id="submitButton"
                                        class="btn btn-lg btn-contact-bg" title="Click here to submit your message!"
                                        type="submit">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 pl-lg-5 pl-md-5 pl-sm-2 pl-2 mt-lg-0 mt-md-0 mt-sm-3 mt-3">
                <div class="contact-title">
                    <h4>Get In Touch</h4>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, na aliqua.</p> -->
                    <hr>
                </div>
                <div class="address-box mt-4">
                    <div class="single-address-box mb-3">
                        <span>Address:</span>
                        <p><?= $contact[0]['address']?></p>
                    </div>
                    <div class="single-address-box mb-3">
                        <span>Phone:</span>
                        <p>+<?= $contact[0]['phone_number']?> </p>
                    </div>
                    <div class="single-address-box">
                        <span>Inquires:</span>
                        <p><?= $contact[0]['email']?></p>
                        <!-- <p>www.pearlyglowinnovations.com</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END CONTACT SECTION -->