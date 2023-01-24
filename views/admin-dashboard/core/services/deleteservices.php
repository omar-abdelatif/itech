<?php
//! Start Session
if (session_status() == PHP_SESSION_NONE) session_start();
//! Include Functions
include "../functions.php";
//! Include Connection
include INCLUDEURL . "views/admin-dashboard/config/database.php";
//! Include Product Functions
include INCLUDEURL . "views/admin-dashboard/core/services/allservices.php";
//! Include Auth
if (!isset($_SESSION['login'])) {
    redirect(ERROR . "views/pages/error.php");
}
//! Functions
if (isset($_GET['ser_id'])) {
    $id = $_GET['ser_id'];
    deleteWithImage($id);
    $_SESSION['success'] = "Product Deleted Successfully";
    redirect(URL . "views/admin-dashboard/views/pages/services/services.php");
}
