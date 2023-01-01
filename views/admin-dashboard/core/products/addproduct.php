<?php
//! include Session
session_start();
//! Include Connection
include "../../config/database.php";
//! Include Functions
include "../functions.php";
//! Include Products Functions
include "products.php";

if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    $product_name = $_POST['name'];
    $product_price = $_POST['price'];
    //! Validations
    if (empty($product_name)) {
        $errors[] = "Name Is Required";
    }
    if (empty($product_price)) {
        $errors[] = "Price Is Required";
    }
    if (empty($errors)) {
        insertProduct($product_name, $product_price);
        $_SESSION['success'] = "Product Registed Successfully";
        header("location: ../../views/pages/addproduct.php");
    } else {
        $_SESSION['errors'] = $errors;
        header("location: ../../views/pages/addproduct.php");
    }
}