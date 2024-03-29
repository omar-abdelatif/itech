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
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];
    //! Validation
    if ($password != $c_password) {
        $errors[] = "Password Doesn't Match";
    }
    if (empty($errors)) {
        updateSecurity($password);
        redirect(URL . "views/admin-dashboard/views/pages/users/editprofile.php");
    } else {
        $_SESSION['errors'] = $errors;
        redirect(URL . "views/admin-dashboard/views/pages/users/editprofile.php");
    }
}
