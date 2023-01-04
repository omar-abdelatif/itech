<?php
//! Start Session
session_start();
//! Include Connection
include "../../config/database.php";
//! Include Product Functions
include "../products/products.php";
//! Include Auth
if (!isset($_SESSION['login'])) {
    header("location: ../../../pages/error.php");
}
//! Functions
if (isset($_GET['pro_id'])) {
    $id = $_GET['pro_id'];
    deleteWithImage($id);
    $_SESSION['success'] = "Product Deleted Successfully";
    header("location: ../../views/pages/products.php");
}
