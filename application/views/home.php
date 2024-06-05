<!-- START SLIDER SECTION -->
<section class="slider-section">
    <div class="home-slides owl-carousel owl-theme ">
        <div class="home-single-slide" data-background="assets/img/1.png">
            <div class="home-slide-overlay"></div>
            <div class="home-single-slide-inner">
                <div class="auto-container">
                    <div class="row">
                        <div class="col-lg-7 col-md-8 col-sm-8 col-12">
                            <div class="home-single-slide-dec">
                                <p>WELL CARE</p>
                                <h2>PROVIDING</h2>
                                <h2>TOTAL LAB SOLUTION</h2>
                                <span><i class="icofont icofont-plus"></i> CARING YOUR REPORTS</span>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-4 col-sm-4 col-12 d-lg-block d-md-block d-sm-block d-none">
                            <img class="img-fluid" src="assets/img/short1.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end single slider -->
        <div class="home-single-slide" data-background="assets/img/2.png">
            <div class="home-slide-overlay"></div>
            <div class="home-single-slide-inner">
                <div class="auto-container">
                    <div class="row">
                        <div class="col-lg-7 col-md-8 col-sm-8 col-12">
                            <div class="home-single-slide-dec">
                                <p>TOTAL CARE</p>
                                <h2>PROVIDING</h2>
                                <h2>HEALTH SOLUTION</h2>
                                <span><i class="icofont icofont-plus"></i> WE ARE CARING</span>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-4 col-sm-4 col-12 d-lg-block d-md-block d-sm-block d-none">
                            <img class="home-single-slide--img img-fluid" src="assets/img/short2.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end single slider -->
    </div>
</section>
<!-- END SLIDER SECTION  -->
<!-- START feature SECTION -->
<section id="service" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mx-auto">
                <div class="section-title">
                    <h3>Our<span> Featured Category</span></h3>
                    <span class="line"></span>
                </div>
            </div>
            <!-- end section title -->
        </div>
        <div class="row">
            <?php
            if ($cate != '') {
                foreach ($cate as $row) {
                    $count = getNumRows('product', array('category_id' => $row['category_id']));
                    ?>
                    <div class="col-lg-4 col-md-3 col-sm-12 col-12" style="position: relative;">
                        <img class="rounded img-fluid align-self-top mt-2 mr-4 category-img"
                            src="<?= base_url(); ?>upload/category/<?= $row['image']; ?>" alt="<?= $row['category_name']; ?>">

                        <div class="fea-overlay">
                            <a
                                href="<?= base_url() ?>product?category=<?= encryptId($row['category_id']); ?>&&<?= url_title($row['category_name']); ?>">
                                <h6><?= $row['category_name']; ?></h6>
                            </a>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
            <!-- <div class="col-lg-3 col-md-3 col-sm-12 col-12" style="position: relative;">
                <img class="rounded img-fluid align-self-top mt-2 mr-4" src="assets/img/product/scalpel.png" alt=""
                    style="position: relative; z-index: 0;">
                <div class="fea-overlay">
                    <a href="<?= base_url('precisionpro') ?>">
                        <h6>Extraction</h6>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12" style="position: relative;">
                <img class="rounded img-fluid align-self-top mt-2 mr-4" src="assets/img/product/needle_holder.png"
                    alt="" style="position: relative; z-index: 0;">
                <div class="fea-overlay">
                    <a href="<?= base_url('precisionpro') ?>">
                        <h6>Conservative</h6>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12" style="position: relative;">
                <img class="rounded img-fluid align-self-top mt-2 mr-4" src="assets/img/product/scalpel.png" alt=""
                    style="position: relative; z-index: 0;">
                <div class="fea-overlay">
                    <a href="<?= base_url('precisionpro') ?>">
                        <h6>Crown Instruments</h6>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12" style="position: relative;">
                <img class="rounded img-fluid align-self-top mt-2 mr-4" src="assets/img/product/scalpel.png" alt=""
                    style="position: relative; z-index: 0;">
                <div class="fea-overlay">
                    <a href="<?= base_url('precisionpro') ?>">
                        <h6>Implantology</h6>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12" style="position: relative;">
                <img class="rounded img-fluid align-self-top mt-2 mr-4" src="assets/img/product/scalpel.png" alt=""
                    style="position: relative; z-index: 0;">
                <div class="fea-overlay">
                    <a href="<?= base_url('precisionpro') ?>">
                        <h6>Orthodontics</h6>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12" style="position: relative;">
                <img class="rounded img-fluid align-self-top mt-2 mr-4" src="assets/img/product/scalpel.png" alt=""
                    style="position: relative; z-index: 0;">
                <div class="fea-overlay">
                    <a href="<?= base_url('precisionpro') ?>">
                        <h6>Endodontic</h6>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12" style="position: relative;">
                <img class="rounded img-fluid align-self-top mt-2 mr-4" src="assets/img/product/scalpel.png" alt=""
                    style="position: relative; z-index: 0;">
                <div class="fea-overlay">
                    <a href="<?= base_url('precisionpro') ?>">
                        <h6>Micro Surgery</h6>
                    </a>
                </div>
            </div> -->
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER -->
</section>
<!-- END feature SECTION -->

<!-- START product SECTION -->
<section id="services" class="section-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">
                <div class="section-title">
                    <h3>Popular<span> Products</span></h3>
                    <span class="line"></span>
                </div>
            </div>
            <!-- end section title -->
        </div>
        <div class="row mt-4">
            <div class="service-slider owl-carousel owl-theme">
                <div class="single-service-item">
                    <div class="single-service text-center">
                        <img class="img-fluid" src="assets/img/product/needle_holder.png" alt="" />
                        <h5>Needle Holder</h5>
                        <p><del style="color: #d02727;font-weight: 300;">₹600</del> ₹300</p>
                        <a class="serv-rmbtn" href="<?= base_url('product-details') ?>">Add to cart</a>

                    </div>
                </div>
                <!-- end single service -->
                <div class="single-service-item">
                    <div class="single-service text-center">
                        <img class="img-fluid" src="assets/img/product/needle_holder.png" alt="" />
                        <h5>Needle Holder</h5>
                        <p><del style="color: #d02727;font-weight: 300;">₹600</del> ₹300</p>
                        <a class="serv-rmbtn" href="<?= base_url('product-details') ?>">Add to cart</a>
                    </div>
                </div>
                <!-- end single service -->
                <div class="single-service-item">
                    <div class="single-service text-center">
                        <img class="img-fluid" src="assets/img/product/needle_holder.png" alt="" />
                        <h5>Needle Holder</h5>
                        <p><del style="color: #d02727;font-weight: 300;">₹600</del> ₹300</p>
                        <a class="serv-rmbtn" href="<?= base_url('product-details') ?>">Add to cart</a>
                    </div>
                </div>
                <!-- end single service -->
                <div class="single-service-item">
                    <div class="single-service text-center">
                        <img class="img-fluid" src="assets/img/product/needle_holder.png" alt="" />
                        <h5>Needle Holder</h5>
                        <p><del style="color: #d02727;font-weight: 300;">₹600</del> ₹300</p>
                        <a class="serv-rmbtn" href="<?= base_url('product-details') ?>">Add to cart</a>
                    </div>
                </div>
                <!-- end single service -->
            </div>
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END product SECTION -->

<!-- START Event SERCTION -->
<section id="blog" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">
                <div class="section-title">
                    <h3>Upcoming<span> Events</span></h3>
                    <span class="line"></span>
                </div>
            </div>
            <!-- end section title -->
        </div>
        <div class="row">
            <?php
            if ($blog) {
                foreach ($blog as $row) {
                    // echo '<pre>';
                    // print_r($row);
                    // exit();
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                        <div class="single-blog-home">
                            <div class="single-blog-home-img">
                                <a href="#"><img class="img-fluid" src="<?= base_url(); ?>upload/blog/<?= $row['image']; ?>" alt=""></a>
                                <div class="single-blog-home-meta">
                                    <span class="post-date"><i class="lnr lnr-calendar-full"></i> 15 Dec</span>
                                    <span class="post-user"><i class="lnr lnr-user"></i> Admin</span>
                                    <span class="post-comment"><i class="lnr lnr-bubble"></i> 5 comments</span>
                                </div>
                            </div>
                                <h5><?= $row['title']?></h5>
                            <p><?= $row['description']?></p>
                        </div>
                    </div>
                <?php }
            } ?>
            <!-- end single blog -->

        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END Event SERCTION -->

<!-- START TESTIMONIAL -->
<section id="testimonialfaq" class="section-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">
                <div class="section-title">
                    <h3>Our<span> Testimonial</span></h3>
                    <span class="line"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            if ($testimonial) {
                foreach ($testimonial as $row) {
                    // echo '<pre>';
                    // print_r($row);
                    // exit();
                    ?>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="single-testimonial mb-4">
                            <div class="single-testimonial-img">
                                <img class="img-fluid" src="<?= base_url(); ?>upload/testimonial/<?= $row['image']; ?>" alt="">
                            </div>
                            <div class="single-testimonial-text-warp">
                                <div class="single-testimonial-text-inner">
                                    <p><?= $row['content'] ?></p>
                                    <footer class="blockquote-footer"><?= $row['name'] ?>
                                    </footer>
                                </div>
                                <div class="single-testimonial-text-icon">
                                    <i class="icofont icofont-quote-left"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            } ?>

        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END TESTIMONIAL -->

<!-- START COUNTER SECTION -->
<section id="counter" class="counter-section overlay section-back-image" data-background="assets/img/bg/counter-bg.jpg">
    <div class="container">
        <div class="row wow fadeInDown">
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                <div class="single-counter">
                    <div class="single-counter-icon">
                        <i class="icofont icofont-users-alt-2"></i>
                    </div>
                    <div class="single-counter-text">
                        <h5 class="timer">1250</h5>
                        <p>Happy Patients</p>
                    </div>
                </div>
            </div>
            <!-- end single counter -->
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                <div class="single-counter">
                    <div class="single-counter-icon">
                        <i class="icofont icofont-nurse-alt"></i>
                    </div>
                    <div class="single-counter-text">
                        <h5 class="timer">1350</h5>
                        <p>Medical Workers</p>
                    </div>
                </div>
            </div>
            <!-- end single counter -->
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                <div class="single-counter">
                    <div class="single-counter-icon">
                        <i class="icofont icofont-doctor-alt"></i>
                    </div>
                    <div class="single-counter-text">
                        <h5 class="timer">1560</h5>
                        <p>Total Doctors</p>
                    </div>
                </div>
            </div>
            <!-- end single counter -->
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                <div class="single-counter">
                    <div class="single-counter-icon">
                        <i class="icofont icofont-hat-alt"></i>
                    </div>
                    <div class="single-counter-text">
                        <h5 class="timer">1670</h5>
                        <p>Medical Experience</p>
                    </div>
                </div>
            </div>
            <!-- end single counter -->
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END COUNTER SECTION -->
<!-- START APPOINTMENT SECTION -->
<section id="appointment" class="appointment-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 d-lg-block d-md-block d-sm-none d-none">
                <div class="appointment-image">
                    <img src="assets/img/bg/single-doc3.png" alt="">
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                <h4>Send Us Message</h4>
                <div class="appointment-form">
                    <form class="form" action="" method="POST">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input name="name" class="form-control " placeholder="Enter Your Name" id="cname"
                                    required="required" type="text">
                            </div>
                            <div class="form-group col-lg-6">
                                <input name="email" class="form-control " id="cmail" required="required"
                                    placeholder="Enter Email" type="email">
                            </div>
                            <div class="form-group col-lg-6">
                                <input name="phone" placeholder="Enter Phone Number" class="form-control " id="cnumber"
                                    required="required" type="text">
                            </div>
                            <div class="form-group col-lg-6">
                                <input name="subject" placeholder="Enter Subject" class="form-control " id="csubject"
                                    required="required" type="text">
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea rows="6" name="message" class="form-control" id="cmessage"
                                    placeholder="Your Message Here..." required="required"></textarea>
                            </div>
                            <div class="form-group col-lg-12 mb0">
                                <div class="actions">
                                    <input value="Submit" id="submitButton" class="btn btn-lg btn-contact-bg"
                                        title="Click here to submit your message!" type="submit">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end col -->
            </div>
            <!-- end col -->
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END APPOINTMENT SECTION -->