<?php
//! Start Session
session_start();
//! Include Product Functions
include "../products/products.php";
//! Include Auth
if (!isset($_SESSION['login'])) {
    header("location: ../../../pages/error.php");
}
//! Functions
if (isset($_GET['pro_id'])) {
    $errors = [];
    $id = $_GET['pro_id'];
    //! Vaidation
    if (deleteProduct($id) == false) {
        $errors[] = "Something Went Wrong";
    }
    if (empty($errors)) {
        deleteProduct($id);
        $_SESSION['success'] = "Product Deleted Successfully";
        header("location: ../../views/pages/products.php");
    } else {
        $_SESSION['errors'] = $errors;
        header("location: ../../views/pages/products.php");
    }
}
