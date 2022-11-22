<?php
include "config/database.php";
include "views/inc/header.php";
include "views/inc/nav.php";
?>
<section class="hero">
    <div class="overlay"></div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="text ml-150">
                    <p class="text-white">Any Computer Problems ?</p>
                    <h1 class="text-white">WE WILL HELP</h1>
                    <a href="" class="btn btn-outline-primary">All Services</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="text text-center">
                    <p class="text-white">Multi-Brand</p>
                    <h1 class="text-white">Device Services</h1>
                    <a href="" class="btn btn-outline-primary mx-auto">About Us</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="text text-center">
                    <p class="text-white">Fast Services</p>
                    <h1 class="text-white">Same Day Device Repair</h1>
                    <a href="" class="btn btn-outline-primary mx-auto">About Us</a>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
</section>
<?php include "views/sections/features.php"; ?>
<?php include "views/inc/footer.php"; ?>