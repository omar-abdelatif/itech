<?php
//! include Session
if (session_status() == PHP_SESSION_NONE) session_start();
//! Include Functions
include "../../../core/functions.php";
//! Include Connection
include INCLUDEURL . "views/admin-dashboard/config/database.php";
//! Include Header
include INCLUDEURL . "views/admin-dashboard/views/inc/header.php";
//! Include Auth
if (!isset($_SESSION['login'])) {
    redirect(ERROR . "pages/error.php ");
}
//! Include Product Functions
include INCLUDEURL . "views/admin-dashboard/core/services/editservices.php";
$id = $_GET['service_id'];
$service = getServiceById($id);
?>
<div class="preloader">
    <div class="preloader_image"></div>
</div>
<!-- MODALS -->
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">
            <i class="rt-icon2-cross2"></i>
        </span>
    </button>
    <div class="widget widget_search">
        <form method="get" class="searchform search-form form-inline" action="<?= URL . "views/admin-dashboard/core/search.php" ?> ">
            <div class="form-group">
                <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
            </div>
            <button type="submit" class="theme_button">Search</button>
        </form>
    </div>
</div>
<div id="canvas">
    <div id="box_wrapper">
        <header class="page_header_side page_header_side_sticked active-slide-side-header ds">
            <div class="side_header_logo ds ms">
                <a href="<?= URL . "views/admin-dashboard/views/pages/dashboard.php" ?>">
                    <span class="logo_text margin_0">
                        Fixit | Dashboard
                    </span>
                </a>
            </div>
            <span class="toggle_menu_side toggler_light header-slide">
                <span></span>
            </span>
            <div class="scrollbar-macosx">
                <div class="side_header_inner">
                    <div class="user-menu">
                        <ul class="menu-click">
                            <li>
                                <a href="#">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="images/team_square/01.jpg" alt="">
                                        </div>
                                        <div class="media-body media-middle">
                                            <h4>
                                                <?php print_r($_SESSION['login']['name']); ?>
                                            </h4>
                                            Administrator
                                        </div>
                                    </div>
                                </a>
                                <ul>
                                    <li>
                                        <a href="admin_profile.html">
                                            <i class="fa fa-user"></i>
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="admin_profile_edit.html">
                                            <i class="fa fa-edit"></i>
                                            Edit Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= URL . "views/admin-dashboard/logout.php" ?>">
                                            <i class="fa fa-sign-out"></i>
                                            Log Out
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <nav class="mainmenu_side_wrapper">
                        <h3 class="dark_bg_color">Dashboard</h3>
                        <ul class="menu-click">
                            <li>
                                <a href="<?= URL . "views/admin-dashboard/views/pages/dashboard.php" ?>">
                                    <i class="fa fa-th-large"></i>
                                    Dashboard
                                </a>
                            </li>
                        </ul>
                        <h3 class="dark_bg_color">Pages</h3>
                        <ul class="menu-click">
                            <li>
                                <a href="#">
                                    <i class="fa fa-file-text"></i>
                                    Services
                                </a>
                                <ul>
                                    <li>
                                        <a href="<?= URL . "views/admin-dashboard/views/pages/services/services.php" ?>">
                                            All Services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= URL . "views/admin-dashboard/views/pages/services/addservices.php" ?>">
                                            Add Service
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-suitcase"></i>
                                    Products
                                </a>
                                <ul>
                                    <li>
                                        <a href="<?= URL . "views/admin-dashboard/views/pages/products/products.php" ?>">
                                            Products
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= URL . "views/admin-dashboard/views/pages/products/addproduct.php" ?>">
                                            Add Product
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="admin_faq.html">
                                    <i class="fa fa-support"></i>
                                    FAQ
                                </a>
                            </li>
                        </ul>
                        <h3 class="dark_bg_color">UI Elements</h3>
                        <ul class="menu-click">
                            <li>
                                <a href="admin_tables.html">
                                    <i class="fa fa-table"></i>
                                    Tables
                                </a>
                            </li>
                            <li>
                                <a href="admin_forms.html">
                                    <i class="fa fa-check-square-o"></i>
                                    Forms
                                </a>
                            </li>
                            <li>
                                <a href="admin_bootstrap.html">
                                    <i class="fa fa-cog"></i>
                                    Bootstrap
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="with_padding grey text-center">
                        10GB of
                        <strong>250GB</strong> Free
                    </div>
                </div>
            </div>
        </header>
        <header class="page_header header_darkgrey">
            <div class="widget widget_search">
                <form method="get" class="searchform form-inline" action="<?= URL . "views/admin-dashbaord/core/search.php" ?>">
                    <div class="form-group">
                        <label class="screen-reader-text" for="widget-search-header">Search for:</label>
                        <input id="widget-search-header" type="text" name="search" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="theme_button color1">Search</button>
                </form>
            </div>
            <div class="pull-right big-header-buttons">
                <ul class="inline-dropdown inline-block">
                    <li class="nav-item">
                        <a href="<?= URL . "index.php" ?>" class="nav-link text-white">View Site</a>
                    </li>
                    <li class="dropdown user-dropdown-menu">
                        <a class="header-button" id="user-dropdown-menu" data-target="#" href="./" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                            <i class="fa fa-user grey"></i>
                            <span class="header-button-text">User</span>
                        </a>
                        <div class="dropdown-menu ls">
                            <ul class="nav darklinks">
                                <li>
                                    <a href="admin_profile.html">
                                        <i class="fa fa-user"></i>
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="admin_profile_edit.html">
                                        <i class="fa fa-edit"></i>
                                        Edit Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= URL . "views/admin-dashboard/logout.php" ?>">
                                        <i class="fa fa-sign-out"></i>
                                        Log Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown visible-xs-inline-block">
                        <a href="#" class="search_modal_button header-button">
                            <i class="fa fa-search grey"></i>
                            <span class="header-button-text">Search</span>
                        </a>
                    </li>
                </ul>
            </div>
        </header>
        <section class="ls with_bottom_border">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <ol class="breadcrumb darklinks">
                            <li>
                                <a href="<?= URL . "index.php" ?>">Homepage</a>
                            </li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="dashboard-page-title">Dashboard
                            <small>EDIT Services</small>
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?php if (isset($_SESSION['errors'])) : ?>
                            <?php foreach ($_SESSION['errors'] as $error) : ?>
                                <div class="alert alert-danger w-50 mx-auto mt-5 text-center">
                                    <p class="text-center p-0 m-0">
                                        <?= $error ?>
                                    </p>
                                </div>
                            <?php endforeach; ?>
                            <?php unset($_SESSION['errors']) ?>
                        <?php elseif (isset($_SESSION['success'])) : ?>
                            <div class="alert alert-success w-50 mx-auto mt-5 text-center">
                                <?= $_SESSION['success'] ?>
                                <?php unset($_SESSION['success']) ?>
                            </div>
                        <?php endif; ?>
                        <form action="<?= URL . "views/admin-dashboard/core/services/editservices.php" ?>" method="post" class="form-group addproduct" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $id ?>" class="form-control" placeholder="id">
                            <input type="text" name="name" value="<?= $service['name'] ?>" placeholder="Product Name" class="form-control">
                            <input type="number" step="0.01" min="1" max="1000000" name="price" value="<?= $service['price'] ?>" placeholder="Product price" class="form-control">
                            <img src="<?= URL . 'assets/imgs/images/services/' ?><?= $service['img'] ?>" alt="<?= $service['img'] ?>" width="200" style="margin-bottom: 20px;">
                            <input type="file" class="form-control" value="<?= $service['img'] ?>" name="img" placeholder="Product Img">
                            <button name="submit" type="submit">submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php
        //! Include Footer
        include INCLUDEURL . "views/admin-dashboard/views/inc/footer.php";
        ?>
    </div>
</div>