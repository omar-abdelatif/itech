<?php
//! Include Session
if (session_status() == PHP_SESSION_NONE) session_start();
//! Incude Functions
include "../../core/functions.php";
//! Include Header
include INCLUDEURL . "views/admin-dashboard/views/inc/header.php";
//! Include Database
include INCLUDEURL . "views/admin-dashboard/config/database.php";
//! Include User Functions
include INCLUDEURL . "views/admin-dashboard/core/user.php";
//! Include Auth Admin
if (!isset($_SESSION['login'])) {
    redirect(ERROR . "views/pages/error.php");
}
$getUsers = admin();
?>
<div class="preloader">
    <div class="preloader_image"></div>
</div>
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">
            <i class="rt-icon2-cross2"></i>
        </span>
    </button>
    <div class="widget widget_search">
        <form method="get" class="searchform search-form form-inline" action="https://html.modernwebtemplates.com/fixit/">
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
                                            <img src="<?= URL . "assets/imgs/images/users/" ?><?= $getUsers['img'] ?> " alt="<?= $getUsers['img'] ?>">
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
                                        <a href="<?= URL . "views/admin-dashboard/views/pages/users/profile.php" ?>">
                                            <i class="fa fa-user"></i>
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= URL . "views/admin-dashboard/views/pages/users/editprofile.php" ?>">
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
                                <a href="">
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
                                <a href="">
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
                <form method="get" class="searchform form-inline" action="https://html.modernwebtemplates.com/fixit/">
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
                                    <a href="<?= URL . "views/admin-dashboard/views/pages/users/profile.php" ?>">
                                        <i class="fa fa-user"></i>
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= URL . "views/admin-dashboard/views/pages/users/editprofile.php" ?>">
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
                        <a href="#search_modal" class="search_modal_button header-button">
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
                            <small>main page</small>
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="teaser warning_bg_color counter-background-teaser text-center">
                            <span class="counter counter-background" data-from="0" data-to="1257" data-speed="2100">0</span>
                            <h3 class="counter highlight" data-from="0" data-to="1257" data-speed="2100">0</h3>
                            <p>Reviews / Month</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="teaser danger_bg_color counter-background-teaser text-center">
                            <span class="counter counter-background" data-from="0" data-to="346" data-speed="1500">0</span>
                            <h3 class="counter highlight" data-from="0" data-to="346" data-speed="1500">0</h3>
                            <p>Clients / Month</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="teaser success_bg_color counter-background-teaser text-center">
                            <span class="counter counter-background" data-from="0" data-to="216" data-speed="1900">0</span>
                            <h3 class="counter highlight" data-from="0" data-to="216" data-speed="1900">0</h3>
                            <p>Orders / Month</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="teaser info_bg_color counter-background-teaser text-center">
                            <span class="counter counter-background" data-from="0" data-to="15" data-speed="1800">0</span>
                            <h3 class="counter-wrap highlight" data-from="0" data-to="346" data-speed="1800">
                                <small>$</small>
                                <span class="counter" data-from="0" data-to="346" data-speed="1500">0</span>
                                <small class="counter-add">k</small>
                            </h3>
                            <p>Total Profit</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        //! Include Footer
        include INCLUDEURL . "views/admin-dashboard/views/inc/footer.php";;
        ?>
    </div>
</div>