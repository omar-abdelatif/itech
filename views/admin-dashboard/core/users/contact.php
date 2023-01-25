<?php
//! Start Session
if (session_status() == PHP_SESSION_NONE) session_start();
//! Include Functions
include "../functions.php";
//! Include Connection
include INCLUDEURL . "views/admin-dashboard/config/database.php";
//! Include Users Function
include INCLUDEURL . "views/admin-dashboard/core/user.php";
//! Include Auth
if (!isset($_SESSION['login'])) {
    redirect(ERROR . "views/pages/error.php");
}
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $work_add = $_POST['work_add'];
    $work_num = $_POST['worknum'];
    $phone_num = $_POST['phone_num'];
    insertContact($work_num, $phone_num, $work_add);
    redirect(URL . "views/admin-dashboard/views/pages/users/editprofile.php");
}
