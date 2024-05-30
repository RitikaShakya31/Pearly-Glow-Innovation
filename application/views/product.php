<div style="width:100%;background:#1a1e51;">
    <div>
        <h3 style="color: white;text-align: center;line-height: 130px;font-size: 40px;">Our Products</h3>
    </div>
</div>

<section id="service" class="section-padding bg-gray">
    <div class="container">
        <div class="service-tab">
            <div class="row">
                <div class="col-lg-3 col-md-12 c0l-sm-12 col-xs-12">
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
                                    <div class="single-doctor ">
                                        <img class="img-fluid" src="assets/img/product/needle_holder.png" alt="" />
                                        <div class="single-doctor-info">
                                            <ul class="prod-icons">
                                                <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                                <li><a href="#"><i class="icofont icofont-social-instagram"></i></a>
                                                </li>
                                                <li><a href="#"><i class="icofont icofont-social-linkedin"></i></a></li>
                                                <li><a href="#"><i class="icofont icofont-social-youtube"></i></a></li>
                                            </ul>
                                            <span>Description here</span>
                                            <h4>Needle Holder</h4>
                                            <a class="product-btn" href="<?= base_url('product-details') ?>">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="single-doctor ">
                                        <img class="img-fluid" src="assets/img/product/needle_holder.png" alt="" />
                                        <div class="single-doctor-info">
                                            <ul class="prod-icons">
                                                <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                                <li><a href="#"><i class="icofont icofont-social-instagram"></i></a>
                                                </li>
                                                <li><a href="#"><i class="icofont icofont-social-linkedin"></i></a></li>
                                                <li><a href="#"><i class="icofont icofont-social-youtube"></i></a></li>
                                            </ul>
                                            <span>Description here</span>
                                            <h4>Needle Holder</h4>
                                            <a class="product-btn" href="<?= base_url('product-details') ?>">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="single-doctor ">
                                        <img class="img-fluid" src="assets/img/product/needle_holder.png" alt="" />
                                        <div class="single-doctor-info">
                                            <ul class="prod-icons">
                                                <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                                <li><a href="#"><i class="icofont icofont-social-instagram"></i></a>
                                                </li>
                                                <li><a href="#"><i class="icofont icofont-social-linkedin"></i></a></li>
                                                <li><a href="#"><i class="icofont icofont-social-youtube"></i></a></li>
                                            </ul>
                                            <span>Description here</span>
                                            <h4>Needle Holder</h4>
                                            <a class="product-btn" href="<?= base_url('product-details') ?>">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
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