<div style="width:100%;background:#19a1e3;">
    <div>
        <h3 style="color: white;text-align: center;line-height: 130px;font-size: 40px;">Our Products</h3>
    </div>
</div>

<section id="service" class="">
    <div style="padding: 40px 100px;">
        <div class="service-tab">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <ul id="tabsJustified" class="nav nav-tabs text-center">
                        <?php if (!empty($subcategory)) {
                            foreach ($subcategory as $row) {
                                $count = getNumRows('product', array('sub_category_id' => $row['sub_category_id']));
                                ?>
                                <li class="nav-item">
                                    <a href="#" data-target="#one" data-toggle="tab" class="nav-link active">
                                        <h6> <?= $row['sub_category_name'] ?> </h6>
                                    </a>
                                </li>
                                <?php
                            }
                        }
                        ?>
                        <!-- <li class="nav-item">
                            <a href="#" data-target="#two" data-toggle="tab" class="nav-link ">
                                <h6>Micro Surgical Mirror </h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-target="#three" data-toggle="tab" class="nav-link">
                                <h6>Mirrors </h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-target="#four" data-toggle="tab" class="nav-link">
                                <h6>PMT Sets</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-target="#five" data-toggle="tab" class="nav-link">
                                <h6>Probes</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-target="#six" data-toggle="tab" class="nav-link">
                                <h6>Tweezers</h6>
                            </a>
                        </li> -->
                    </ul>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div id="tabsJustifiedContent" class="tab-content">
                        <div id="one" class="tab-pane animated fadeInRight active show">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <a href="<?= base_url('product-details') ?>">
                                        <div class="single-doctor ">
                                            <div style=" border: 2px solid #0000001a;margin: 8px;">

                                                <img class="img-fluid" src="assets/img/product/prod1.png" alt="" />
                                            </div>
                                            <div class="single-doctor-info" style="padding-top:15px;">
                                                <h4>Needle Holder</h4>
                                                <span>Description here</span>
                                                <span>Article No - 2088</span>
                                                <!-- <a class="product-btn" href="<?= base_url('product-details') ?>">Add to
                                                cart</a> -->
                                                <button>
                                                    Add To Cart</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <a href="<?= base_url('product-details') ?>">
                                        <div class="single-doctor ">
                                            <div style=" border: 2px solid #0000001a;margin: 8px;">

                                                <img class="img-fluid" src="assets/img/product/prod1.png" alt="" />
                                            </div>
                                            <div class="single-doctor-info" style="padding-top:15px;">
                                                <h4>Needle Holder</h4>
                                                <span>Description here</span>
                                                <span>Article No - 2088</span>
                                                <!-- <a class="product-btn" href="<?= base_url('product-details') ?>">Add to
                                                cart</a> -->
                                                <button>
                                                    Add To Cart</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <a href="<?= base_url('product-details') ?>">
                                        <div class="single-doctor ">
                                            <div style=" border: 2px solid #0000001a;margin: 8px;">

                                                <img class="img-fluid" src="assets/img/product/prod1.png" alt="" />
                                            </div>
                                            <div class="single-doctor-info" style="padding-top:15px;">
                                                <h4>Needle Holder</h4>
                                                <span>Description here</span>
                                                <span>Article No - 2088</span>
                                                <!-- <a class="product-btn" href="<?= base_url('product-details') ?>">Add to
                                                cart</a> -->
                                                <button>
                                                    Add To Cart</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                              
                                <!-- <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                                    <a href="<?= base_url('product-details') ?>">
                                        <div class="single-doctor ">
                                            <img class="img-fluid" src="assets/img/product/needle_holder.png" alt="" />
                                            <div class="single-doctor-info" style="padding-top:15px;">
                                                <h4>Needle Holder</h4>
                                                <span><b>Description here</b></span>
                                                <span><b>Article No - 2088</b></span>
                                                <button style="background: #1a1e51;padding: 6px 100px;   color: white;">
                                                    Add To Cart</button>
                                            </div>
                                        </div>
                                    </a>
                                </div> -->
                               
                            </div>
                        </div>
                        <div id="two" class="tab-pane animated fadeInRight ">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="single-doctor ">
                                        <img class="img-fluid" src="assets/img/product/scalpel.png" alt="" />
                                        <div class="single-doctor-info">
                                            <ul class="prod-icons">
                                                <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                                <li><a href="#"><i class="icofont icofont-social-instagram"></i></a>
                                                </li>
                                                <li><a href="#"><i class="icofont icofont-social-linkedin"></i></a></li>
                                                <li><a href="#"><i class="icofont icofont-social-youtube"></i></a></li>
                                            </ul>
                                            <span>Description here</span>
                                            <h4>Scalpe</h4>
                                            <a class="product-btn" href="<?= base_url('product-details') ?>">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="single-doctor ">
                                        <img class="img-fluid" src="assets/img/product/scalpel.png" alt="" />
                                        <div class="single-doctor-info">
                                            <ul class="prod-icons">
                                                <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                                <li><a href="#"><i class="icofont icofont-social-instagram"></i></a>
                                                </li>
                                                <li><a href="#"><i class="icofont icofont-social-linkedin"></i></a></li>
                                                <li><a href="#"><i class="icofont icofont-social-youtube"></i></a></li>
                                            </ul>
                                            <span>Description here</span>
                                            <h4>Scalpe</h4>
                                            <a class="product-btn" href="<?= base_url('product-details') ?>">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="single-doctor ">
                                        <img class="img-fluid" src="assets/img/product/scalpel.png" alt="" />
                                        <div class="single-doctor-info">
                                            <ul class="prod-icons">
                                                <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                                <li><a href="#"><i class="icofont icofont-social-instagram"></i></a>
                                                </li>
                                                <li><a href="#"><i class="icofont icofont-social-linkedin"></i></a></li>
                                                <li><a href="#"><i class="icofont icofont-social-youtube"></i></a></li>
                                            </ul>
                                            <span>Description here</span>
                                            <h4>Scalpe</h4>
                                            <a class="product-btn" href="<?= base_url('product-details') ?>">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="three" class="tab-pane animated fadeInRight">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="single-doctor ">
                                        <img class="img-fluid" src="assets/img/Whitening.png" alt="" />
                                        <div class="single-doctor-info">
                                            <ul class="prod-icons">
                                                <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                                <li><a href="#"><i class="icofont icofont-social-instagram"></i></a>
                                                </li>
                                                <li><a href="#"><i class="icofont icofont-social-linkedin"></i></a></li>
                                                <li><a href="#"><i class="icofont icofont-social-youtube"></i></a></li>
                                            </ul>
                                            <span>Description here</span>
                                            <h4>Scalpe</h4>
                                            <a class="product-btn" href="<?= base_url('product-details') ?>">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="four" class="tab-pane animated fadeInRight">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="single-doctor ">
                                        <img class="img-fluid" src="assets/img/Surgical.png" alt="" />
                                        <div class="single-doctor-info">
                                            <ul class="prod-icons">
                                                <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                                <li><a href="#"><i class="icofont icofont-social-instagram"></i></a>
                                                </li>
                                                <li><a href="#"><i class="icofont icofont-social-linkedin"></i></a></li>
                                                <li><a href="#"><i class="icofont icofont-social-youtube"></i></a></li>
                                            </ul>
                                            <span>Description here</span>
                                            <h4>Surgical</h4>
                                            <a class="product-btn" href="<?= base_url('product-details') ?>">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- END CONTAINER -->
</section>