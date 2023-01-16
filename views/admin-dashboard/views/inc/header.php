<?php
//! Include Path
$rootDirName = basename(dirname(dirname(dirname(dirname(__DIR__)))));
$explodes = explode("/", $_SERVER['REQUEST_URI']);
$Path = "";
foreach ($explodes as $item) {
    if ($item == $rootDirName) {
        $Path .= "$item/";
        break;
    }
    $Path .= "$item/";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>FixIt | Dashboard</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="Theme Color" content="#3f2">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= URL . "views/admin-dashboard/assets/style/bootstrap.min.css" ?>">
    <link rel="stylesheet" href="<?= URL . "views/admin-dashboard/assets/style/animations.css" ?>">
    <link rel="stylesheet" href="<?= URL . "views/admin-dashboard/assets/style/fonts.css" ?>">
    <link rel="stylesheet" href="<?= URL . "views/admin-dashboard/assets/style/main.css" ?>">
    <link rel="stylesheet" href="<?= URL . "views/admin-dashboard/assets/style/dashboard.css" ?>">
</head>

<body class="admin">