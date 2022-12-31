<?php
//! Include Connection
include "../../config/database.php";
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
}
?>
<!-- all functions for deleting and selecting and inserting to and from the database -->