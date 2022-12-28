<?php
session_start();
include "../inc/header.php";
include "../inc/nav.php";
include "../../core/user.php";
echo "<pre>";
print_r($_SESSION['login']);
?>
<h1>Admin dashboard Page</h1>

<a href="../../signout.php">Signout</a>

<?php include "../inc/footer.php" ?>