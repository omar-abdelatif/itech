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
                    <div class="desc">
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
                    <div class="address text-left">
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
                <img src="assets/imgs/fav.ico.PNG" width="150" alt="">
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
    <script src="/assets/js/custom.js"></script>
    </body>

    </html>