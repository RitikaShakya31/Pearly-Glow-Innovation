<div style="width:100%;background:#19a1e3;">
    <div>
        <h3 style="color: white;text-align: center;line-height: 130px;font-size: 40px;">Our Products</h3>
    </div>
</div>

<section id="service" class="">
    <div style="padding: 40px 100px;">
        <div class="service-tab">
            <div class="row">
                <aside 
                    class="col-lg-4 col-md-4 col-sm-12 col-12 mb-lg-0 mb-md-0 mb-sm-5 mb-5 pr-lg-5 pr-md-5 pr-sm-0 pr-0">
                    <div class="sidebar-widget">
                        <h5 class="widget-title">Sub Categories</h5>
                        <div class="servide-list">
                            <ul>
                                <?php if (!empty($subcategory)) {
                                    foreach ($subcategory as $row) {
                                        $count = getNumRows('product', array('sub_category_id' => $row['sub_category_id']));
                                        ?>
                                        <li><a
                                                href="<?= base_url('product/' . $row['category_id'] . '/' . $row['sub_category_id']) ?>">
                                                <!-- <i class="icofont icofont-star"></i> -->
                                                <?= $row['sub_category_name'] ?></a>
                                        </li>
                                        <?php
                                    }
                                } else {
                                    echo 'no data found';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <!-- end widget -->
                </aside>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div id="tabsJustifiedContent" class="tab-content">
                        <div id="one" class="tab-pane animated fadeInRight active show">
                            <div class="row">
                                <?php if (!empty($product)) {
                                    foreach ($product as $row) {
                                        $imgData = getSingleRowById('tbl_product_image', array('product_id' => $row['product_id']));
                                        $description = $row['description'];
                                        $words = explode(' ', $description);
                                        $first10words = array_slice($words, 0, 5);
                                        $shortDescription = implode(' ', $first10words);
                                        ?>

                                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                            <a href="<?= base_url('product-details/') . $row['product_id'] ?>">
                                                <div class="single-doctor ">
                                                    <div style=" border: 2px solid #0000001a;margin: 8px;">
                                                        <img class="img-fluid"
                                                            src="<?= setImage($imgData['image_path'], 'upload/product/') ?>"
                                                            alt="product" />
                                                    </div>
                                                    <div class="single-doctor-info">
                                                        <h4><?= $row['product_name'] ?></h4>
                                                        <span>Article No -<?= $row['article_num'] ?></span>
                                                        <span><?= htmlspecialchars($shortDescription) ?></span>
                                                        <span><del>₹<?= $row['market_price'] ?></del>
                                                            ₹<b><?= $row['sale_price'] ?></b></span>
                                                        <!-- <button><b><a class="text-white" href="<?= base_url('product-details/') . $row['product_id'] ?> ">Add
                                                                    To Cart</a></b></button> -->
                                                        <button><b><a class="text-white"
                                                                    href="<?= base_url('product-details/') . $row['product_id'] ?> "><i
                                                                        class="fa fa-eye" aria-hidden="true"></i> View
                                                                    Product</a></b></button>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php }
                                } else {
                                    echo ' no product available';
                                } ?>
                                <!-- <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <a href="<?= base_url('product-details') ?>">
                                        <div class="single-doctor ">
                                            <div style=" border: 2px solid #0000001a;margin: 8px;">

                                                <img class="img-fluid"
                                                    src="<?= base_url() ?>assets/img/product/prod1.png" alt="" />
                                            </div>
                                            <div class="single-doctor-info" style="padding-top:15px;">
                                                <h4>Needle Holder</h4>
                                                <span>Article No - 2088</span>
                                                <span>Description here</span>
                                                <span><del>₹2400</del> ₹2000</span>
                                                <button><b>Add To Cart</b></button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <a href="<?= base_url('product-details') ?>">
                                        <div class="single-doctor ">
                                            <div style=" border: 2px solid #0000001a;margin: 8px;">
                                                <img class="img-fluid"
                                                    src="<?= base_url() ?>assets/img/product/prod1.png" alt="" />
                                            </div>
                                            <div class="single-doctor-info" style="padding-top:15px;">
                                                <h4>Needle Holder</h4>
                                                <span>Article No - 2088</span>
                                                <span>Description here</span>
                                                <span><del>₹2400</del> ₹2000</span>
                                                <button><b>Add To Cart</b></button>
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