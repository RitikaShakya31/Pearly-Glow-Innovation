<?php $server_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
<div style="width:100%;background:#19a1e3;">
    <div>
        <h3 style="color: white;text-align: center;line-height: 130px;font-size: 40px;">Product Details</h3>
    </div>
</div>

<!-- START SINGLE PRODUCT SECTION -->
<section id="sinproduct" class="min-padding">
    <?php
    if (!empty($product)) {
        // $sub_id = $product['sub_category_id'];
    
        $imgData = getSingleRowById('tbl_product_image', array('product_id' => $product['product_id']));
        $images = getRowById('tbl_product_image', 'product_id', $product['product_id']);
        $sub_id = getSingleRowById('tbl_sub_category', array('sub_category_id' => $product['sub_category_id']));
        ?>
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="tab-pane animated fadeInRight show" id="one">
                        <div class="zoomable">
                            <img class="zoomable__img" id="zoom_01"
                                src="<?= setImage($imgData['image_path'], 'upload/product/') ?>" alt="Pearly Glow"
                                height="500" />
                        </div>
                        <ul id="tabsJustified" class="nav nav-tabs">
                            <?php if ($images): ?>
                                <?php foreach ($images as $index => $imgData): ?>
                                    <li class="nav-item">
                                        <a href="#" data-target="#tab<?= $index + 1 ?>" data-toggle="tab"
                                            class="nav-link <?= $index === 0 ? 'active' : '' ?>">
                                            <img src="<?= setImages($imgData['image_path'], 'upload/product/') ?>" alt=""
                                                height="120" width="120">
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <li>No images found.</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-12 col-12 pl-lg-5 pl-md-2 pl-sm-2 pl-2 mt-lg-0 mt-md-5 mt-sm-5 mt-5">
                    <div class="single-pro-details">
                        <span class="pro-de-cata"><?= $sub_id['sub_category_name'] ?></span>
                        <!-- <p class="rating">
                                <i class="icofont icofont-ui-rating"></i>
                                <i class="icofont icofont-ui-rating"></i>
                                <i class="icofont icofont-ui-rating"></i>
                                <i class="icofont icofont-ui-rate-blank"></i>
                            </p> -->
                        <h3 class="pro-de-title" style="font-size: 40px;"><?= $product['product_name'] ?></h3>
                        <p class="price" style="font-size:29px;">₹<?= $product['sale_price'] ?></p>
                        <p class="single-pro-con"><?= $product['description'] ?></p>
                       
                        <input class="action-input" title="Quantity Number" id="qtysidecart<?= $product['product_id'] ?>" type="text" name="quantity" value="1">
                        <button class="add-to-cart product-add buynow addCart  crtbtn-<?= $product['product_id'] ?>" data-id="<?= $product['product_id'] ?>" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>  Add to cart</span></button>

                        <!-- <a class="add-to-cart">Add to cart <i class="icofont icofont-caret-right"></i></a> -->
                        <div class="single-pro-details-attr table-responsive mt-4">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Manufacturer:</th>
                                        <td>India</td>
                                    </tr>
                                    <tr>
                                        <th>Brand:</th>
                                        <td>Pearly Glow Innovation</td>
                                    </tr>
                                    <tr>
                                        <th>Article Number:</th>
                                        <td><?= $product['article_num'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="header-social" style="text-align: left;">
                            <ul>
                                <li class="share-icon"><a href="">
                                        <i class="icofont icofont-social-facebook"></i></a>
                                </li>
                                <li class="share-icon"><a href=""><i class="icofont icofont-social-twitter"></i></a>
                                </li>

                                <li class="share-icon"><a href=""><i class="icofont icofont-social-linkedin"></i></a>
                                </li>
                                <li class="share-icon"><a href=""><i class="icofont icofont-social-whatsapp"></i></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
        </div>
    <?php }
    ?>
    <!--- END CONTAINER -->
</section>
<!-- END SINGLE SECTION -->


<!-- START product SECTION -->
<section id="services" class="section-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">
                <div class="section-title">
                    <h3>Related<span> Products</span></h3>
                    <span class="line"></span>
                </div>
            </div>
            <!-- end section title -->
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="tabsJustifiedContent" class="tab-content">
                <div id="one" class="tab-pane animated fadeInRight active show">
                    <div class="row">
                        <?php if (!empty($prod)) {
                            foreach ($prod as $row) {
                                $imgData = getSingleRowById('tbl_product_image', array('product_id' => $row['product_id']));
                                $description = $row['description'];
                                $words = explode(' ', $description);
                                $first10words = array_slice($words, 0, 3);
                                $shortDescription = implode(' ', $first10words);
                                ?>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
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
                                                <button><b><a class="text-white"
                                                            href="<?= base_url('product-details/') . $row['product_id'] ?> "><i class="fa fa-eye" aria-hidden="true"></i> View Product</a></b></button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php }
                        } else {
                            echo ' no product available';
                        } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END product SECTION -->