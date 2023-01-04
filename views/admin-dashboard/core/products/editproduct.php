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
    $img = $_FILES['img']['name'];
    $path_info = pathinfo($avatar);
    $base_name = $path_info['filename'];
    $extension = $path_info['extension'];
    $timestamp = time();
    $tmp_name = $_FILES['img']['tmp_name'];
    $path = '../../../../assets/imgs/images/products/';
    $location = $path . $img;
    uploadImage($tmp_name, $location);
    updateProduct($id, $product_name, $product_price, $img);
    header("location: ../../views/pages/products.php");
    die;
}