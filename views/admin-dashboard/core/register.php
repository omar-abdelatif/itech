<?php
//! Include Session
session_start();
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
    if (empty($name)) {
        $errors[] = "Name Is Required";
    } elseif (strlen($name) < 3 || strlen($name) > 10) {
        $errors[] = "Name Should Be Between 3 and 10";
    }
    if (empty($password)) {
        $errors[] = "Password Is Required";
    } elseif (strlen($password) < 3) {
        $errors[] = "Password Should Be Greater Than 3 Char..";
    }
    if (empty($email)) {
        $errors[] = "Email Is Required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email Is Not Valid";
    } elseif (emailExistence($email)) {
        $errors[] = "Email Already Exist";
    }
    if ($cpass != $password) {
        $errors[] = "Password Doesn't Match";
    }
    if (empty($errors)) {
        insertUser($name, $email, $password);
        $_SESSION['success'] = "User Registed Successfully";
        header("location: ../signin.php");
    } else {
        $_SESSION['errors'] = $errors;
        redirect("location: ../signup.php");
    }
}