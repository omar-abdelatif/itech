<?php
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
