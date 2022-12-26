<?php
//! Include Session
session_start();
//! Include Connection
include "../config/database.php";
//! Include Functions
include "functions.php";
//! Include User
include "user.php";

if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    $email = $_POST['email'];
    $password = $_POST['password'];
    //! Validation
    if (empty($email)) {
        $errors[] = "Email Is Required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email Is Not Valid";
    }
    if (empty($password)) {
        $errors[] = "Password Is Required";
    } elseif (strlen($password) < 3) {
        $errors[] = "Password Should Be Greater Than 3 Char..";
    }
    if (empty($errors)) {
        $result = selectUser($email, $password);
        $_SESSION['login'] = $result;
        redirect('../views/pages/index.php');
        exit;
    } else {
        $_SESSION['errors'] = $errors;
        redirect('signin.php');
        exit;
    }
}