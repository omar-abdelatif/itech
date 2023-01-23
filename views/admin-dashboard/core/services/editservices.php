<?php
//! Open Session
// if (session_status() == PHP_SESSION_NONE) session_start();
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
    $id = $_POST['id'];
    $service_name = $_POST['name'];
    $service_desc = $_POST['description'];
    $avatar = $_FILES['img']['name'];
    $timestamp = time();
    $explode = explode(".", $avatar);
    $Ext = $explode[1];
    $img = $timestamp . "." . $Ext;
    $tmp_name = $_FILES['img']['tmp_name'];
    $path = '../../../../assets/imgs/images/services/';
    $location = $path . $img;
    uploadImage($tmp_name, $location);
    updateService($id, $service_name, $service_desc, $img);
    redirect(URL . "views/admin-dashboard/views/pages/services/editservices.php");
    die;
}