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
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    $product_name = $_POST['name'];
    $product_price = $_POST['price'];
    $avatar = $_FILES['img']['name'];
    $timestamp = time();
    $explode = explode(".", $avatar);
    $Ext = $explode[1];
    $newAvatar = $timestamp . "." . $Ext;
    $tmp_name = $_FILES['img']['tmp_name'];
    $path = '../../../../assets/imgs/images/products/';
    $location = $path . $newAvatar;
    //! Validations
    if (empty($product_name)) {
        $errors[] = "Name Is Required";
    }
    if (empty($product_price)) {
        $errors[] = "Price Is Required";
    }
    if (empty($errors)) {
        uploadImage($tmp_name, $location);
        insertProduct($product_name, $product_price, $newAvatar);
        $_SESSION['success'] = "Product Registed Successfully";
        header("location: ../../views/pages/addproduct.php");
    } else {
        $_SESSION['errors'] = $errors;
        redirect(ERROR . "views/pages/addproduct.php");
    }
}