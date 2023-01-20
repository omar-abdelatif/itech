<?php
// Start Session
if (session_status() == PHP_SESSION_NONE) session_start();
// Path
$rootDirName = basename(dirname(dirname(dirname(__DIR__))));
$explodes = explode("/", $_SERVER['REQUEST_URI']);
$Path = "";
foreach ($explodes as $item) {
    if ($item == $rootDirName) {
        $Path .= "$item/";
        break;
    }
    $Path .= "$item/";
}
// Anchor Url
define("URL", "http://" . $_SERVER['SERVER_NAME'] . $Path);
// Include Url
define("INCLUDEURL", $_SERVER['DOCUMENT_ROOT'] . $Path);
// Error Url
define("ERROR", "http://" . $_SERVER['SERVER_NAME'] . $Path);

//! Functions
function dd($data)
{
    echo "<pre>";
    print_r($data);
    die;
}
function redirect($path)
{
    header("location: $path");
}
function emailExistence($email)
{
    $connection = connection();
    $select = "SELECT `email` FROM `users`";
    $query = mysqli_query($connection, $select);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    foreach ($result as $res) {
        if ($email == $res['email']) {
            return true;
        }
    }
}