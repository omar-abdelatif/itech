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
    $id = $_POST['id'];
    $product_name = $_POST['name'];
    $product_price = $_POST['price'];
    $avatar = $_FILES['img']['name'];
    $type = $_FILES['img']['type'];
    $timestamp = time();
    // $explode = explode(".", $avatar);
    $Ext = basename($type);
    $img = $timestamp . "." . $Ext;
    $tmp_name = $_FILES['img']['tmp_name'];
    $path = '../../../../assets/imgs/images/products/';
    $location = $path . $img;
    uploadImage($tmp_name, $location);
    updateProduct($id, $product_name, $product_price, $img);
    redirect(URL . "views/admin-dashboard/views/pages/products/products.php");
    die;
}