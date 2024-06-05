<!-- START HEADER SECTION -->
<header class="main-header header-1">
    <!-- START TOP AREA -->
    <div class="top-area">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="header-social">
                        <ul>
                            <li><a href="<?= $contact[0]['facebook'] ?>" style="color:#1919c2;"><i
                                        class="icofont icofont-social-facebook"></i></a>
                            </li>
                            <li><a href="<?= $contact[0]['twitter'] ?>" style="color:#1717d7;"><i
                                        class="icofont icofont-social-twitter"></i></a>
                            </li>
                            <li><a href="<?= $contact[0]['youtube'] ?>" style="color:#ac1818;"><i
                                        class="icofont icofont-social-youtube-play"></i></a>
                            </li>
                            <li><a href="<?= $contact[0]['instagram'] ?>" style="color:#8511b4;"><i
                                        class="icofont icofont-social-instagram"></i></a>
                            </li>
                            <li><a href="<?= $contact[0]['linkedin'] ?>" style="color:#1717d7;"><i
                                        class="icofont icofont-social-linkedin"></i></a>
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
                        <a href="index.php">
                            <img class="img-fluid" src="assets/img/Pearlyglow-Innvotion.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 top-user-icon">
                    <i class="fa-solid fa-user"></i>
                    <a href="<?= base_url('sign-up') ?>">
                        <p class="d-lg-block d-md-none d-sm-none d-none"><b>Login/Register</b> </p>
                    </a>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-2 " style="padding-top:35px">
                    <form>
                        <div class="form-group">
                            <input class="form-control" name="searcher" placeholder="Search..." type="text">
                        </div>
                        <button type="submit" class="btn blg-se-btn"><i
                                class="icofont icofont-search-alt-2"></i></button>
                    </form>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 top-cart-sec">
                    <a href="<?= base_url('checkout') ?>">
                        <i class="fa-solid fa-cart-shopping "></i>
                    </a>
                    <p><b>Total Items <br> <span> ₹ 0/-</span></b> </p>
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
                    <div class="col-lg-8 d-lg-block d-md-none d-sm-none d-none ">
                        <nav class="navbar navbar-expand-lg justify-content-center">
                            <ul class="navbar-nav">
                                <li><a href="index.php" class="nav-link">Home</a></li>
                                <li><a href="<?= base_url() ?>about" class="nav-link">About</a> </li>
                                <!-- <li class="dropdown"><a href="<?= base_url() ?>" class="nav-link">Product</a>
                                    <ul class="dropdown-menu">
                                        <li class="text-center">
                                            <?php
                                            if ($cate != '') {
                                                foreach ($cate as $row) {
                                                    ?>
                                                    <a
                                                        href="<?= base_url() ?>product?category=<?= encryptId($row['category_id']); ?>&&<?= url_title($row['category_name']); ?>">
                                                        <img src="upload/category/<?= $row['image']; ?>" alt="" width="200"
                                                            height="150">
                                                        <br>
                                                        <b><?= $row['category_name']; ?></b> </a>
                                                <?php }
                                            } ?>
                                        </li>
                                    </ul>
                                </li> -->
                                <li class="dropdown"><a href="<?= base_url() ?>" class="nav-link">Product</a>
                                    <ul class="dropdown-menu">
                                        <li class="text-center">
                                            <a href="<?= base_url('product') ?>"><img style="object-fit: cover;"
                                                    src="assets/img/demo.jpg" alt="" width="200" height="150"><br>
                                                <b>Diagnostic</b> </a>
                                            <a href="<?= base_url('') ?>"><img
                                                    src="assets/img/product/needle_holder.png" alt="" width="200"
                                                    height="150"><br>
                                                <b>Extraction</b></a>
                                            <a href="<?= base_url('') ?>"><img
                                                    src="assets/img/product/needle_holder.png" alt="" width="200"
                                                    height="150"><br>
                                                <b>Conservative</b></a>
                                            <a href="<?= base_url('') ?>"><img
                                                    src="assets/img/product/needle_holder.png" alt="" width="200"
                                                    height="150"><br>
                                                <b>Crown Instruments</b></a>
                                            <a href="<?= base_url('') ?>"><img
                                                    src="assets/img/product/needle_holder.png" alt="" width="200"
                                                    height="150"><br>
                                                <b>Implantology</b></a>

                                        </li>
                                        <li class="text-center">
                                            <a href="<?= base_url('') ?>"><img
                                                    src="assets/img/product/needle_holder.png" alt="" width="200"
                                                    height="150"><br>
                                                <b>Orthodontics</b></a>
                                            <a href="<?= base_url('') ?>"><img
                                                    src="assets/img/product/needle_holder.png" alt="" width="200"
                                                    height="150"><br>
                                                <b>Endodontic</b></a>
                                            <a href="<?= base_url('') ?>"><img
                                                    src="assets/img/product/needle_holder.png" alt="" width="200"
                                                    height="150"><br>
                                                <b>Oral Surgery</b></a>
                                            <a href="<?= base_url('') ?>"><img
                                                    src="assets/img/product/needle_holder.png" alt="" width="200"
                                                    height="150"><br>
                                                <b>Prosthodontics</b></a>
                                            <a href="<?= base_url('') ?>"><img
                                                    src="assets/img/product/needle_holder.png" alt="" width="200"
                                                    height="150"><br>
                                                <b>Periodontal</b></a>

                                        </li>
                                        <li> <a href="<?= base_url('') ?>"><img
                                                    src="assets/img/product/needle_holder.png" alt="" width="200"
                                                    height="150"><br>
                                                <b>Trays And Cassettes</b></a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="<?= base_url() ?>" class="nav-link">PrecisionPro</a>
                                    <ul class="dropdown-menu">
                                        <li class="text-center">
                                            <a href="<?= base_url('precisionpro') ?>"><img style="object-fit: cover;"
                                                    src="assets/img/demo.jpg" alt="" width="200" height="150"><br>
                                                <b>Diagnostic</b> </a>
                                            <a href="<?= base_url('') ?>"><img
                                                    src="assets/img/product/needle_holder.png" alt="" width="200"
                                                    height="150"><br>
                                                <b>Extraction</b></a>
                                            <a href="<?= base_url('') ?>"><img
                                                    src="assets/img/product/needle_holder.png" alt="" width="200"
                                                    height="150"><br>
                                                <b>Conservative</b></a>
                                            <a href="<?= base_url('') ?>"><img
                                                    src="assets/img/product/needle_holder.png" alt="" width="200"
                                                    height="150"><br>
                                                <b>Crown Instruments</b></a>
                                            <a href="<?= base_url('') ?>"><img
                                                    src="assets/img/product/needle_holder.png" alt="" width="200"
                                                    height="150"><br>
                                                <b>Implantology</b></a>

                                        </li>
                                        <li class="text-center">
                                            <a href="<?= base_url('') ?>"><img
                                                    src="assets/img/product/needle_holder.png" alt="" width="200"
                                                    height="150"><br>
                                                <b>Orthodontics</b></a>
                                            <a href="<?= base_url('') ?>"><img
                                                    src="assets/img/product/needle_holder.png" alt="" width="200"
                                                    height="150"><br>
                                                <b>Endodontic</b></a>
                                            <a href="<?= base_url('') ?>"><img
                                                    src="assets/img/product/needle_holder.png" alt="" width="200"
                                                    height="150"><br>
                                                <b>Oral Surgery</b></a>
                                            <a href="<?= base_url('') ?>"><img
                                                    src="assets/img/product/needle_holder.png" alt="" width="200"
                                                    height="150"><br>
                                                <b>Prosthodontics</b></a>
                                            <a href="<?= base_url('') ?>"><img
                                                    src="assets/img/product/needle_holder.png" alt="" width="200"
                                                    height="150"><br>
                                                <b>Periodontal</b></a>

                                        </li>
                                        <li> <a href="<?= base_url('') ?>"><img
                                                    src="assets/img/product/needle_holder.png" alt="" width="200"
                                                    height="150"><br>
                                                <b>Trays And Cassettes</b></a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="<?= base_url() ?>" class="nav-link">Catalog </a>
                                    <ul class="dropdown-menu">
                                        <li class="text-center">
                                            <a href="<?= base_url('catalog') ?>"><img
                                                    src="assets/img/product/needle_holder.png" alt="" width="150"><br>
                                                <b>Catalog </b> </a>
                                            <a href="<?= base_url('catalog') ?>"><img
                                                    src="assets/img/product/needle_holder.png" alt="" width="150"><br>
                                                <b>Brochures</b></a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url() ?>gallery" class="nav-link">Gallery</a></li>
                                <li><a href="<?= base_url() ?>contact" class="nav-link">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2  d-lg-block d-md-none d-sm-none d-none call-sec-top ">
                        <i class="fa-solid fa-phone"></i>
                        <p><b> <a href="tel:+<?= $contact[0]['phone_number'] ?>">
                                    +<?= $contact[0]['phone_number'] ?></a></b></p>
                    </div>
                    <div class="col-lg-2  d-lg-block d-md-none d-sm-none d-none call-sec-top">
                        <i class="fa-solid fa-envelope"></i>
                        <p><b><a href="mailto:<?= $contact[0]['email'] ?>"><?= $contact[0]['email'] ?></a></b></p>
                    </div>
                </div>
            </div>
            <!--- END CONTAINER -->
        </div>
        <!-- END NAVIGATION AREA -->

        <!-- MOBILE-MENU-AREA START -->
        <div class="mobile-menu-area d-lg-none d-md-block d-sm-block d-block">
            <div class="col-md-9">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="navbar-nav">
                            <li><a href="index.php" class="nav-link">Home</a></li>
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