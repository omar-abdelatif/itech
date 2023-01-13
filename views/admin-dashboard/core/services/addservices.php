<?php
//! include Session
session_start();
//! Include Connection
include "../../config/database.php";
//! Include Functions
include "../functions.php";
//! Include Products Functions
include "allservices.php";
//! Functions
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    $service_name = $_POST['name'];
    $service_desc = $_POST['description'];
    $avatar = $_FILES['img']['name'];
    $timestamp = time();
    $explode = explode(".", $avatar);
    $Ext = $explode[1];
    $newAvatar = $timestamp . "." . $Ext;
    $tmp_name = $_FILES['img']['tmp_name'];
    $path = '../../../../assets/imgs/images/services/';
    $location = $path . $newAvatar;
    //! Validations
    if (empty($service_name)) {
        $errors[] = "Name Is Required";
    }
    if (empty($service_price)) {
        $errors[] = "Description Is Required";
    }
    if (empty($errors)) {
        uploadImage($tmp_name, $location);
        insertService($service_name, $service_price, $newAvatar);
        $_SESSION['success'] = "Service Registed Successfully";
        header("location: ../../views/pages/addservice.php");
    } else {
        $_SESSION['errors'] = $errors;
        header("location: ../../views/pages/addservice.php");
    }
}