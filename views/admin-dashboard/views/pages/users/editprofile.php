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
                            <li class="active">Edit Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Edit User
                            <small>profile</small>
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <form action="<?= URL . "views/admin-dashboard/core/users/userinfo.php" ?>" method="post" class="form-horizontal">
                            <div class="row flex-row">
                                <div class="col-md-6">
                                    <div class="with_border with_padding">
                                        <h4>User info</h4>
                                        <hr>
                                        <input type="hidden" value="<?= $getUsers['id'] ?>" name="id">
                                        <div class="row form-group">
                                            <label class="col-lg-3 control-label" for="user-profile-avatar">Select Avatar</label>
                                            <div class="col-lg-9">
                                                <input type="file" name="img" value="<?= $getUsers['img'] ?>" id="user-profile-avatar">
                                                <p class="help-block">Select your 200x200px avatar</p>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-lg-3 control-label">Admin name:</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="name" value="<?= $getUsers['name'] ?>" placeholder="Company Name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-lg-3 control-label">Country:</label>
                                            <div class="col-lg-9">
                                                <select class="form-control" name="country">
                                                    <option selected="">Select Country</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="USA">USA</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="France">France</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-lg-3 control-label">Company name:</label>
                                            <div class="col-lg-9">
                                                <input type="text" value="<?= $getUsers['comp_name'] ?>" name="comp_name" placeholder="Company Name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-lg-3 control-label">Position:</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="position" value="<?= $getUsers['position'] ?>" placeholder="Position" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group text-center">
                                            <div class="col-lg-12">
                                                <button type="submit" name="submit" class="theme_button wide_button w-100">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <form action="<?= URL . "views/admin-dashboard/core/users/contact.php" ?>" method="post" class="form-horizontal">
                            <div class="row flex-row">
                                <div class="col-md-6">
                                    <div class="with_border with_padding">
                                        <h4>Contact info</h4>
                                        <hr>
                                        <div class="row form-group">
                                            <label class="col-lg-3 control-label">Work number:</label>
                                            <div class="col-lg-9">
                                                <input type="tel" name="work_num" value="<?= $getUsers['work_num'] ?>" placeholder="Office Phone Number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-lg-3 control-label">Mobile number:</label>
                                            <div class="col-lg-9">
                                                <input type="tel" name="phone_num" value="<?= $getUsers['phone_num'] ?>" placeholder="Mobile Number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-lg-3 control-label">E-mail address:</label>
                                            <div class="col-lg-9">
                                                <input type="email" name="email" value="<?= $getUsers['email'] ?>" placeholder="Email Address" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-lg-3 control-label">Work address:</label>
                                            <div class="col-lg-9">
                                                <textarea rows="2" name="work_add" value="<?= $getUsers['work_add'] ?>" placeholder="Address" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div>
                                        <button type="submit" name="submit" class="theme_button wide_button">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <form action="<?= URL . "views/admin-dashboard/core/users/security.php" ?>" method="post" class="form-horizontal">
                            <div class="row flex-row">
                                <div class="col-md-6">
                                    <div class="with_border with_padding">
                                        <h4>Security</h4>
                                        <hr>
                                        <div class="row form-group">
                                            <label class="col-lg-3 control-label">New password:</label>
                                            <div class="col-lg-9">
                                                <input type="password" name="password" value="<?= $getUsers['password'] ?>" placeholder="Password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-lg-3 control-label">Repeat New password:</label>
                                            <div class="col-lg-9">
                                                <input type="password" placeholder="Confirm Password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div>
                                        <button type="submit" name="submit" class="theme_button wide_button">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <form action="<?= URL . "views/admin-dashboard/core/users/social.php" ?>" method="post" class="form-horizontal">
                            <div class="row flex-row">
                                <div class="col-md-6">
                                    <div class="with_border with_padding">
                                        <h4>Social Networks</h4>
                                        <hr>
                                        <div class="row form-group">
                                            <label class="col-lg-3 control-label">FaceBook:</label>
                                            <div class="col-lg-9">
                                                <input type="text" placeholder="Facebook Username" value="<?= $getSocial['facebook'] ?>" name="facebook" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-lg-3 control-label">Whatsapp:</label>
                                            <div class="col-lg-9">
                                                <input type="text" placeholder="Whatsapp Mobile Number" value="<?= $getSocial['whatsapp'] ?>" name="whatsapp" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div>
                                        <button type="submit" name="submit" class="theme_button wide_button">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
    //! Include Footer
    include INCLUDEURL . "views/admin-dashboard/views/inc/footer.php";
    ?>
</div>