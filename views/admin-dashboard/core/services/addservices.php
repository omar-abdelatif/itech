<?php
//! include Session
if (session_status() == PHP_SESSION_NONE) session_start();
//! Include Functions
include "../functions.php";
//! Include Connection
include INCLUDEURL . "views/admin-dashboard/config/database.php";
//! Include Services Functions
include INCLUDEURL . "views/admin-dashboard/core/services/allservices.php";
//! Auth
if (!isset($_SESSION['login'])) {
    redirect(ERROR . "views/pages/error.php");
}
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
    if (empty($service_desc)) {
        $errors[] = "Description Is Required";
    }
    if (empty($errors)) {
        uploadImage($tmp_name, $location);
        insertService($service_name, $service_desc, $newAvatar);
        $_SESSION['success'] = "Service Registed Successfully";
        redirect(URL . "/views/admin-dashboard/views/pages/services/addservices.php");
    } else {
        $_SESSION['errors'] = $errors;
        redirect(ERROR . "views/admin-dashboard/views/pages/services/addservices.php");
    }
}