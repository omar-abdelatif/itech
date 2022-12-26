<?php
//! Include Auth
// if (!isset($_SESSION['admin'])) {
//     header("location: ../../pages/error.php");
// }
//! Include Connection
include "../config/database.php";
//! Include User
include "user.php";
//! Include Functions
include "functions.php";

if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpass = $_POST['re-pass'];
    if (empty($errors)) {
        insertUser($name, $email, $password);
        $_SESSION['success'] = "User Inserted Successfully";
        header("location: ../signin.php");
        die;
    } else {
        $_SESSION['errors'] = $errors;
        header("location: signup.php");
        die;
    }
}