<?php
//! Start Session
session_start();
//! Connection
include "../admin-dashboard/config/database.php";
//! Include Services Functions
include "../admin-dashboard/core/services/allservices.php";
//! Services Function
$getServices = services();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="color" theme=#0000000>
    <link rel="shortcut icon" href="../../assets/imgs/fav.ico.PNG" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="../../assets/styles/fonts.css">
    <link rel="stylesheet" href="../../assets/styles/main.css">
    <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
    <title>ITECH</title>
</head>

<body>
    <section class="page_toplogo table_section ls columns_padding_0 section_padding_15">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-4 text-center text-sm-left">
                    <div class="small-teaser margin_0">
                        <p class="small-text semibold grey margin_0">
                            Call Us Today:
                        </p>
                        <p class="highlight fontsize_18 medium">
                            8 800 269 8469
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <a href="../../index.php" class="logo top_logo text-left">
                        <img src="../../assets/imgs/fav.ico.PNG" width="150" class="m-4" alt="logo">
                    </a>
                </div>
                <div class="col-sm-4 text-center text-sm-right">
                    <div class="page_social_icons greylinks">
                        <a href="https://www.facebook.com/profile.php?id=100066743105347" class="social-icon color-bg-icon rounded-icon soc-facebook"></a>
                        <a href="https://api.whatsapp.com/send?phone=%2B201222910100&data=AWCR4r74PwUEeyaor5SA83Xka3KCGGbeyW6XVFas7zVfyyfvfMctu-E2yr3VareiMQVz2YzuA33BpuDhz206J8-8rsob8gBswnpaSZHb9Wwyot_rdjIDVpP2YTyf0Cr59zYgQTPpQAQF4SfQU61oxZlRF9k8DZX-8eqJzomDxzjCLDPRrD9bT4a_djrBx9pe25QhTCKZIF3rh5CZr1WOW6iOilAXIsyGC_N2uyRVlX5uVQ03gGxjD9MS1WoRzsQ-ghdu0j9OtJCYjc0Vn2nWFxE7FuKe4UaXJjst1cFg2d3JR9o-2oTq-Ru-Zk4JxtCUV4Y&source=FB_Page&app=facebook&entry_point=page_cta&fbclid=IwAR32ZLKF0gclImQiXsPG8dDwOofQ_iZ5-ZYObu8q1V9mgv1r5fu9VgZmQF8" class="social-icon color-bg-icon rounded-icon soc-whatsapp"></a>
                    </div>
                </div>
                <span class="toggle_menu">
                    <span></span>
                </span>
            </div>
        </div>
    </section>
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-duotone fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-center align-items-center" id="navbarSupportedContent">
                <ul class="nav justify-content-center">
                    <?php if (!isset($_SESSION['login'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link text-white border-end" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white border-end" href="../pages/services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white border-end" href="../pages/products.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white border-end" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Contact</a>
                        </li>
                    <?php elseif ($_SESSION['login']['email'] == 'omar@omar.com') : ?>
                        <li class="nav-item">
                            <a class="nav-link text-white border-end" href="../../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white border-end" href="../pages/services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white border-end" href="../pages/products.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white border-end" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Contact</a>
                        </li>
                    <?php endif; ?>
                </ul>
                <?php if (isset($_SESSION['login'])) : ?>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="../admin-dashboard/views/pages/dashboard.php" class="nav-link border-end">My Panal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../admin-dashboard/logout.php">Logout</a>
                        </li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <section class="banner bg-primary d-flex align-items-center justify-content-center text-white"></section>
    <section class="service py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($getServices as $service) : ?>
                    <div class="col-lg-4">
                        <div class="card justify-content-center">
                            <div class="card-img mx-auto" style="background-image: url(../../assets/imgs/images/services/<?= $services['img'] ?>);"></div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?= $services['name'] ?>
                                </h5>
                                <p class="card-desc me-auto">
                                    <?= $services['description'] ?>
                                </p>
                                <p class="service-price mt-3 ">
                                    <?= $services['price'] ?>
                                    <span class="currency">EGP</span>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

    </section>
    <div class="scroll">
        <a class="btn">
            <i class="fa-duotone fa-arrow-up"></i>
        </a>
    </div>
    <footer class="bg-secondary text-white text-center p-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="title">
                        <h3>WHY US?</h3>
                    </div>
                    <div class="desc mt-30">
                        <p class="text-left">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Fuga aspernatur magni ea voluptas repudiandae animi facere nulla,
                            quisquam ut?
                            Facilis magni sint fugiat expedita pariatur laudantium perspiciatis voluptas,
                            distinctio quas.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="title">
                        <h3>CONTACT US</h3>
                    </div>
                    <div class="address text-left mt-30">
                        <p class="p-2">PO Box 54321 Some str. 765, Los Angeles, California, United States</p>
                        <p class="p-2">
                            <i class="fa-duotone fa-mobile"></i>
                            <a href="tel:+201234567890" target="blank" class="btn">+201234567890</a>
                        </p>
                        <p class="p-2">
                            <i class="fa-duotone fa-globe"></i>
                            <a href="https://www.example.com" target="blank" class="btn">https://www.example.com</a>
                        </p>
                        <p class="p-2">
                            <i class="fa-duotone fa-at"></i>
                            <a href="mailto:example@example.com" class="btn">example@example.com</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="title">
                        <h3>STAY CONNECTED</h3>
                    </div>
                    <div class="social mt-30">
                        <p class="facebook mb-30">
                            <a href="www.facebook.com" class="btn">
                                <i class="fa-brands fa-facebook-f"></i>
                                Facebook
                            </a>
                        </p>
                        <p class="whatsapp">
                            <a href="https://api.whatsapp.com/send?phone=%2B201222910100&data=AWCR4r74PwUEeyaor5SA83Xka3KCGGbeyW6XVFas7zVfyyfvfMctu-E2yr3VareiMQVz2YzuA33BpuDhz206J8-8rsob8gBswnpaSZHb9Wwyot_rdjIDVpP2YTyf0Cr59zYgQTPpQAQF4SfQU61oxZlRF9k8DZX-8eqJzomDxzjCLDPRrD9bT4a_djrBx9pe25QhTCKZIF3rh5CZr1WOW6iOilAXIsyGC_N2uyRVlX5uVQ03gGxjD9MS1WoRzsQ-ghdu0j9OtJCYjc0Vn2nWFxE7FuKe4UaXJjst1cFg2d3JR9o-2oTq-Ru-Zk4JxtCUV4Y&source=FB_Page&app=facebook&entry_point=page_cta&fbclid=IwAR32ZLKF0gclImQiXsPG8dDwOofQ_iZ5-ZYObu8q1V9mgv1r5fu9VgZmQF8" target="blank" class="btn">
                                <i class="fa-brands fa-whatsapp"></i>
                                Whatsapp
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <section class="copyright bg-dark text-center p-3 text-white">
        <div class="logo p-2">
            <a href="/index.php" class="btn">
                <img src="../../assets/imgs/fav.ico.PNG" width="150" alt="">
            </a>
        </div>
        <p class="m-0">© Copyright
            <span id="year"></span>
            All Rights Reserved
            <a href="/index.php" class="text-white p-0">ITECH</a>
        </p>
    </section>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js'
        const swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
                clickable: true,
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            loop: true,
            touchMoveStopPropagation: true,
            speed: 700,
        })
    </script>
    <script src="../../assets/js/custom.js"></script>
</body>

</html>