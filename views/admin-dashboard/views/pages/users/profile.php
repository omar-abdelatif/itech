<?php
//! include Session
if (session_status() == PHP_SESSION_NONE) session_start();
//! Include Functions
include "../../../core/functions.php";
//! Include Header
include INCLUDEURL . "views/admin-dashboard/views/inc/header.php";
//! Include Connection
include INCLUDEURL . "views/admin-dashboard/config/database.php";
//! Include Auth
if (!isset($_SESSION['login'])) {
    redirect(ERROR . "views/pages/error.php");
}
//! Include Services Functions
include INCLUDEURL . "views/admin-dashboard/core/user.php";
//! Semi Functions
$getUsers = admin();
$getSocial = selectSocail();
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
        <form method="get" class="searchform search-form form-inline" action="<?= URL . "views/admin-dashboard/core/search.php" ?>">
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
                            <li class="active">Profile</li>
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
                            <small>Profile</small>
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="with_border with_padding">
                                    <div class="media big-left-media">
                                        <div class="media-left">
                                            <img src="<?= URL . 'assets/imgs/images/users/' ?><?= $getUsers['img'] ?>" alt="<?= $getUsers['img'] ?>">
                                        </div>
                                        <div class="media-body">
                                            <h4>
                                                <?= $getUsers['name'] ?>
                                                <small>Admin</small>
                                            </h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                aliquip ex ea commodo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <div class="with_border with_padding">
                                    <h4>
                                        User Info
                                    </h4>
                                    <ul class="list1 no-bullets">
                                        <li>
                                            <div class="media small-teaser">
                                                <div class="media-left media-middle">
                                                    <div class="teaser_icon label-warning round fontsize_16">
                                                        <i class="fa fa-globe"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <strong class="grey">
                                                        Location:
                                                    </strong>
                                                    <?= $getUsers['country'] ?>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media small-teaser">
                                                <div class="media-left media-middle">
                                                    <div class="teaser_icon label-success round fontsize_16">
                                                        <i class="fa fa-flag"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <strong class="grey">
                                                        Company:
                                                    </strong>
                                                    <?= $getUsers['comp_name'] ?>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media small-teaser">
                                                <div class="media-left media-middle">
                                                    <div class="teaser_icon label-info round fontsize_16">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <strong class="grey">
                                                        Position:
                                                    </strong>
                                                    <?= $getUsers['position'] ?>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="with_border with_padding">
                                    <h4>
                                        User Statistics
                                    </h4>
                                    <ul class="list1 no-bullets">
                                        <li>
                                            <div class="media small-teaser">
                                                <div class="media-left media-middle">
                                                    <div class="teaser_icon label-success fontsize_16">
                                                        <i class="fa fa-comments"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <strong class="grey">
                                                        Services:
                                                    </strong>
                                                    146
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media small-teaser">
                                                <div class="media-left media-middle">
                                                    <div class="teaser_icon label-success fontsize_16">
                                                        <i class="fa fa-comments"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <strong class="grey">
                                                        Products:
                                                    </strong>
                                                    146
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel-group bottommargin_0" id="contact-info-accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="icon-tab" data-toggle="collapse" data-parent="#contact-info-accordion" href="#user-info-collapse1">
                                                    <i class="highlight fontsize_16 fa fa-phone"></i>
                                                    Work Phone
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="user-info-collapse1" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <p>
                                                    <strong>
                                                        <?= $getUsers['work_num'] ?>
                                                    </strong>
                                                    (07:00-17:00 EST Mon-Fri)
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="icon-tab collapsed" data-toggle="collapse" data-parent="#contact-info-accordion" href="#user-info-collapse2">
                                                    <i class="highlight fontsize_16 fa fa-mobile"></i>
                                                    Mobile Phone
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="user-info-collapse2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>
                                                    <strong>
                                                        <?= $getUsers['phone_num'] ?>
                                                    </strong>
                                                    (07:00-17:00 EST Mon-Fri)
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="icon-tab collapsed" data-toggle="collapse" data-parent="#contact-info-accordion" href="#user-info-collapse3">
                                                    <i class="highlight fontsize_16 fa fa-envelope"></i>
                                                    E-mail address
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="user-info-collapse3" class="panel-collapse collapse">
                                            <div class="panel-body text-center">
                                                <p class="greylinks">
                                                    <a href="mailto:omaraboregela100@gmail.com?subject=Email from my website&body=Hello, How are you?">Send an email</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="icon-tab collapsed" data-toggle="collapse" data-parent="#contact-info-accordion" href="#user-info-collapse4">
                                                    <i class="highlight fontsize_16 fa fa-map-marker"></i>
                                                    Address
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="user-info-collapse4" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>
                                                    <?= $getUsers['work_add'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="icon-tab collapsed" data-toggle="collapse" data-parent="#contact-info-accordion" href="#user-info-collapse5">
                                                    <i class="highlight fontsize_16 fa fa-users"></i>
                                                    Social Networks
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="user-info-collapse5" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>
                                                    <a href="https://www.facebook.com/<?= $getSocial['facebook'] ?>" target="_blank" class="social-icon soc-facebook"></a>
                                                    <a href="https://wa.me/+2<?= $getSocial['whatsapp'] ?>" target="_blank" class="social-icon soc-whatsapp"></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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