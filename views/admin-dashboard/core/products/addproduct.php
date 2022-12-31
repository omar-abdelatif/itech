<?php
//! include Session
session_start();
//! Include Connection
include "../../config/database.php";
//! Include Functions
include "../functions.php";

// add product insert functions

if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    $product_name = "";
    $product_price = "";
}

echo "hello from add product functions file";