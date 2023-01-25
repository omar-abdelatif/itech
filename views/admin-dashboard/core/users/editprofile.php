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
    $errors = [];
    $id = $_POST['id'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];
    //! Validation
    if ($password != $c_password) {
        $error[] = "Password Doesn't Match";
    }
    if (empty($errors)) {
    }
}
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    $facebook = $_POST['facebook'];
    $whatsapp = $_POST['whatsapp'];
}
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    $name = $_POST['name'];
    $comp_name = $_POST['comp_name'];
    $position = $_POST['position'];
    $country = $_POST['country'];
    $avatar = $_FILES['img']['name'];
    $type = $_FILES['img']['type'];
    $tmp_name = $_FILES['img']['tmp_name'];
}
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    $email = $_POST['email'];
    $work_add = $_POST['work_add'];
    $phone_num = $_POST['phone_num'];
    $work_num = $_POST['work_num'];
}