<?php
//! include Session
session_start();
//! Include Functions
include "../../core/functions.php";
//! Include Auth
if (!isset($_SESSION['login'])) {
    redirect("location: ../../../pages/error.php");
}
//! Include Products Functions
include "../../core/products/products.php";
//! Include Header
include "../inc/header.php";
?>
<form action="" method="post">
    <h1>add products form</h1>
</form>