<!-- START HEADER SECTION -->
<header class="main-header header-1">
    <!-- START TOP AREA -->
    <div class="top-area">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                    <button class="track-btn">Tracking</button>
                    <div class="header-social">
                        <ul>
                            <li><a href="tel:+<?= $contact[0]['phone_number'] ?>"><i
                                        class="fa-solid fa-phone"></i><span>
                                        +<?= $contact[0]['phone_number'] ?></span></a>
                            </li>
                            <li><a href="mailto:<?= $contact[0]['email'] ?>"><i class="fa-solid fa-envelope"></i><span>
                                        <?= $contact[0]['email'] ?></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end col -->
                <!-- end col -->
            </div>
        </div>
    </div>
    <!-- END TOP AREA -->
    <!-- START LOGO AREA -->
    <div style="padding:10px;">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-7 mx-md-auto mx-sm-auto mx-auto pl-0  ">
                    <div class="logo">
                        <a href="<?= base_url('home') ?>">
                            <img style="width:250px;" class="img-fluid" src="<?= base_url() ?>assets/img/new-logo.png"
                                alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 top-user-icon">
                    <i class="fa-solid fa-user"></i>

                    <?php if ($this->session->has_userdata('isLogin')): ?>
                        <a class="d-lg-block d-md-none d-sm-none d-none mt-2 pl-3" href="<?= base_url('logout') ?>"><b>Log
                                Out</b></a>
                    <?php else: ?>
                        <a href="<?= base_url('sign-up') ?>">
                            <p class="d-lg-block "><b>Login/Register</b> </p>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="col-lg-5 col-md-5 d-lg-block d-md-none d-sm-none d-none " style="padding-top:35px">
                    <form method="get" action="<?= base_url('product') ?>" role="search">
                        <div class="form-group">
                            <input class="form-control" name="product_name" placeholder="Search..." type="text">
                        </div>
                        <button type="submit" class="btn blg-se-btn"><i
                                class="icofont icofont-search-alt-2"></i></button>
                    </form>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 top-cart-sec">
                    <!-- <a href="<?= base_url('checkout') ?>">
                        <i class="fa-solid fa-cart-shopping "></i>
                    </a> -->
                    <!-- <p><b>Total Items <br> <span> ₹ 0/-</span></b> </p> -->
                    <!-- <p class="totalitem"><b>Total Items<?= $this->cart->total_items(); ?> <br> -->
                    <a href="<?= base_url('checkout') ?>">
                        <i title="Proceed to Checkout" class="fa-solid fa-cart-shopping"></i>
                    </a>
                    <!-- <sub style="font-size:14px;"><?= $this->cart->total_items(); ?></sub> -->
                    <sup>
                        <p class="totalitem"></p>
                    </sup>
                    <p>
                        Total Price
                        <span class="totalamount"> ₹
                            <?php echo $this->cart->format_number($this->cart->total()); ?></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- END LOGO AREA -->
    <hr style="margin:0 !important;">
    <!-- START NAVIGATION AREA -->
    <div class="sticky-menu">
        <div class="mainmenu-area">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-12 d-lg-block d-md-none d-sm-none d-none ">
                        <nav class="navbar navbar-expand-lg justify-content-center">
                            <ul class="navbar-nav">
                                <li><a href="<?= base_url() ?>home" class="nav-link">Home</a></li>
                                <li><a href="<?= base_url() ?>about" class="nav-link">About</a> </li>
                                <li class="dropdown">
                                    <a href="<?= base_url() ?>" class="nav-link">Product</a>
                                    <ul class="dropdown-menu">
                                        <?php
                                        if ($cate != '') {
                                            $count = 0;
                                            foreach ($cate as $row) {
                                                if ($count % 5 == 0) {
                                                    if ($count > 0) {
                                                        echo '</li>';
                                                    }
                                                    echo '<li class="text-center">';
                                                }
                                                ?>
                                                <a href="<?= base_url('product/' . $row['category_id']) ?>">
                                                    <img src="<?= base_url() ?>upload/category/<?= $row['image']; ?>" alt=""
                                                        width="200" height="150">
                                                    <br>
                                                    <b><?= $row['category_name']; ?></b>
                                                </a>
                                                <?php
                                                $count++;
                                            }
                                            echo '</li>';
                                        }
                                        ?>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="<?= base_url() ?>" class="nav-link">PrecisionPro</a>
                                    <ul class="dropdown-menu">
                                        <?php
                                        if ($cate != '') {
                                            $count = 0;
                                            foreach ($cate as $row) {
                                                if ($count % 5 == 0) {
                                                    if ($count > 0) {
                                                        echo '</li>';
                                                    }
                                                    echo '<li class="text-center">';
                                                }
                                                ?>
                                                <a href="<?= base_url('precisionpro/' . $row['category_id']) ?>">
                                                    <img src="<?= base_url() ?>upload/category/<?= $row['image']; ?>" alt=""
                                                        width="200" height="150">
                                                    <br>
                                                    <b><?= $row['category_name']; ?></b>
                                                </a>
                                                <?php
                                                $count++;
                                            }
                                            echo '</li>';
                                        }
                                        ?>
                                    </ul>
                                    <!-- <ul class="dropdown-menu">
                                        <li class="text-center">
                                            <?php
                                            if ($cate != '') {
                                                foreach ($cate as $row) {
                                                    ?>
                                                    <a href="<?= base_url('product/' . $row['category_id']) ?>">
                                                        <img src="<?= base_url() ?>upload/category/<?= $row['image']; ?>" alt=""
                                                            width="200" height="150">
                                                        <br>
                                                        <b><?= $row['category_name']; ?></b> </a>
                                                <?php }
                                            } ?>
                                        </li>
                                    </ul> -->
                                </li>
                                <li class="dropdown">
                                    <a href="<?= base_url() ?>" class="nav-link">Catalog </a>
                                    <ul class="dropdown-menu">
                                        <li class="text-center">
                                            <a href="<?= base_url('catalog') ?>">
                                                <img src="<?= base_url() ?>assets/img/product/needle_holder.png" alt=""
                                                    width="150">
                                                <br>
                                                <b>Catalog </b> </a>
                                            <a href="<?= base_url('brochures') ?>"><img
                                                    src="<?= base_url() ?>assets/img/product/needle_holder.png" alt=""
                                                    width="150"><br>
                                                <b>Brochures</b></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="<?= base_url() ?>" class="nav-link">Gallery</a>
                                    <ul class="dropdown-menu">
                                        <li class="text-center">
                                            <a href="<?= base_url('gallery') ?>">
                                                <img src="<?= base_url() ?>assets/img/product/needle_holder.png" alt=""
                                                    width="150">
                                                <br>
                                                <b>Image Gallery </b> </a>
                                            </a>
                                            <a href="<?= base_url('video-gallery') ?>">
                                                <img src="<?= base_url() ?>assets/img/product/needle_holder.png" alt=""
                                                    width="150">
                                                <br>
                                                <b>Video Gallery </b> </a>
                                            </a>
                                        </li>
                                    </ul>

                                </li>
                                <li><a href="<?= base_url() ?>contact" class="nav-link">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- <div class="col-lg-2  d-lg-block d-md-none d-sm-none d-none call-sec-top ">
                        <i class="fa-solid fa-phone"></i>
                        <p><b> <a href="tel:+<?= $contact[0]['phone_number'] ?>">
                                    +<?= $contact[0]['phone_number'] ?></a></b></p>
                    </div>
                    <div class="col-lg-2  d-lg-block d-md-none d-sm-none d-none call-sec-top">
                        <i class="fa-solid fa-envelope"></i>
                        <p><b><a href="mailto:<?= $contact[0]['email'] ?>"><?= $contact[0]['email'] ?></a></b></p>
                    </div> -->
                </div>
            </div>
            <!--- END CONTAINER -->
        </div>
        <!-- END NAVIGATION AREA -->

        <!-- MOBILE-MENU-AREA START -->
        <div class="mobile-menu-area d-lg-none d-md-block d-sm-block d-block">
            <div class="col-md-9">
                <div class="mobile-menu">
                    <div class="logo-part">
                        <form method="get" action="<?= base_url('product') ?>" role="search">
                            <div class="form-group">
                                <input class="form-control" name="product_name" placeholder="Search..." type="text">
                            </div>
                            <button type="submit" class="btn blg-se-btn"><i
                                    class="icofont icofont-search-alt-2"></i></button>
                        </form>
                    </div>
                    <nav id="dropdown">
                        <ul class="navbar-nav">
                            <li><a href="<?= base_url('home') ?>" class="nav-link">Home</a></li>
                            <li><a href="<?= base_url() ?>about" class="nav-link">About</a> </li>
                            <li><a href="<?= base_url() ?>product" class="nav-link">Product</a>
                                <ul class="dropdown--mob-menu">
                                    <li><a href="<?= base_url() ?>precisionpro">Diagnostic</a></li>
                                    <li><a href="#">Extraction</a></li>
                                    <li><a href="#">Conservative</a></li>
                                    <li><a href="#">Crown Instruments</a></li>
                                    <li><a href="#">Crown Instruments</a></li>
                                    <li><a href="#">Implantology</a></li>
                                    <li><a href="#">Orthodontics</a></li>
                                    <li><a href="#">Endodontic</a></li>
                                    <li><a href="#">Oral Surgery</a></li>
                                    <li><a href="#">Prosthodontics</a></li>
                                    <li><a href="#">Periodontal</a></li>
                                    <li><a href="#">Trays And Cassettes</a></li>

                                </ul>
                            </li>
                            <li><a href="" class="nav-link">PrecisionPro</a>
                                <ul class="dropdown--mob-menu">
                                    <li><a href="<?= base_url() ?>precisionpro">Diagnostic</a></li>
                                    <li><a href="#">Extraction</a></li>
                                    <li><a href="#">Conservative</a></li>
                                    <li><a href="#">Crown Instruments</a></li>
                                    <li><a href="#">Crown Instruments</a></li>
                                    <li><a href="#">Implantology</a></li>
                                    <li><a href="#">Orthodontics</a></li>
                                    <li><a href="#">Endodontic</a></li>
                                    <li><a href="#">Oral Surgery</a></li>
                                    <li><a href="#">Prosthodontics</a></li>
                                    <li><a href="#">Periodontal</a></li>
                                    <li><a href="#">Trays And Cassettes</a></li>
                                </ul>
                            </li>
                            <li><a href="" class="nav-link">Catalog</a>
                                <ul class="dropdown--mob-menu">
                                    <li><a href="<?= base_url() ?>catalog">Catalog</a></li>
                                    <li><a href="#">Brochures</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= base_url() ?>gallery" class="nav-link">Gallery</a></li>
                            <li><a href="<?= base_url() ?>contact" class="nav-link">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- MOBILE-MENU-AREA END -->
    </div>
</header>
<!-- END HEADER SECTION -->

<body>