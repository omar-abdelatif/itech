<div class="logo">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="contact text-center">
                    <p>CALL US TODAY:</p>
                    <p>8 800 269 8469</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="logo text-center">
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/imgs/fav.ico.PNG" width="150" class="m-4" alt="logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="social-icons text-center">
                    <a href="https://www.facebook.com/profile.php?id=100066743105347" class="facebook mr-30 text-decoration-none" target="blank" class="facebook btn">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=%2B201222910100&data=AWCR4r74PwUEeyaor5SA83Xka3KCGGbeyW6XVFas7zVfyyfvfMctu-E2yr3VareiMQVz2YzuA33BpuDhz206J8-8rsob8gBswnpaSZHb9Wwyot_rdjIDVpP2YTyf0Cr59zYgQTPpQAQF4SfQU61oxZlRF9k8DZX-8eqJzomDxzjCLDPRrD9bT4a_djrBx9pe25QhTCKZIF3rh5CZr1WOW6iOilAXIsyGC_N2uyRVlX5uVQ03gGxjD9MS1WoRzsQ-ghdu0j9OtJCYjc0Vn2nWFxE7FuKe4UaXJjst1cFg2d3JR9o-2oTq-Ru-Zk4JxtCUV4Y&source=FB_Page&app=facebook&entry_point=page_cta&fbclid=IwAR32ZLKF0gclImQiXsPG8dDwOofQ_iZ5-ZYObu8q1V9mgv1r5fu9VgZmQF8" class="whatsapp text-decoration-none" target="blank" class="btn">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg bg-success">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-duotone fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-center align-items-center" id="navbarSupportedContent">
            <ul class="nav justify-content-center">
                <?php if (!isset($_SESSION['login'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                <?php elseif ($_SESSION['login']['email'] == 'omar@omar.com') : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                <?php endif; ?>
            </ul>
            <?php if (isset($_SESSION['login'])) : ?>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="views/admin-dashboard/views/pages/index.php" class="nav-link">My Panal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/admin-dashboard/logout.php">Logout</a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>