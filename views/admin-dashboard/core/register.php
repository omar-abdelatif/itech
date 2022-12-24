<?php
//! Include Auth
// if (!isset($_SESSION['admin'])) {
//     header("location: ../../pages/error.php");
// }
//! Include Connection
include "../config/database.php";
//! Include Functions
include "functions.php";
//! Include Validations
include "validations.php";
//! Include User
include "user.php";

if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpass = $_POST['re-pass'];
    if (empty($errors)) {
        $_SESSION['success'] = "User Inserted Successfully";
    } else {
        $_SESSION['errors'] = $errors;
        header("location: signup.php");
        die;
    }
}