<?php
//! include Session
if (session_status() == PHP_SESSION_NONE) session_start();
//! Include Functions
include "../functions.php";
//! Include Connection
include INCLUDEURL . "views/admin-dashboard/config/database.php";
//! Include Products Functions
include INCLUDEURL . "views/admin-dashboard/core/products/products.php";
//! Auth
if (!isset($_SESSION['login'])) {
    redirect(ERROR . "views/pages/error.php");
}
//! Functions
if (isset($_GET['pro_id'])) {
    $id = $_GET['pro_id'];
    deleteWithImage($id);
    $_SESSION['success'] = "Product Deleted Successfully";
    redirect(URL . "views/admin-dashboard/views/pages/products/products.php");
}
