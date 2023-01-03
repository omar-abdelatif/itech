<?php
//! Open Seesion
session_start();
//! Include Auth
if (!isset($_SESSION['login'])) {
    header("location: ../../../pages/error.php");
}
//! Include Connection
include "../../config/database.php";
//! Include Products Functions
include "products.php";
//! Functions
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $product_name = $_POST['name'];
    $product_price = $_POST['price'];
    // $avatar = $_FILES['img']['name'];
    $avatar = time();
    $tmp_name = $_FILES['img']['tmp_name'];
    $type = $_FILES['img']['type'];
    $type = explode('/', $type);
    $extention = $type[1];
    $base_name = pathinfo($avatar, PATHINFO_FILENAME);
    $avatar = basename($base_name . '.' . $extention);
    $path = '../../../../assets/imgs/images/products/';
    $location = $path . $avatar;
    uploadImage($tmp_name, $location);
    updateProduct($id, $product_name, $product_price, $avatar);
    header("location: ../../views/pages/products.php");
    die;
}