<?php
$rootDirName = basename(dirname(__DIR__));
$explodes = explode("/", $_SERVER['REQUEST_URI']);
$Path = "";
foreach ($explodes as $item) {
    if ($item == $rootDirName) {
        $Path .= "$item/";
        break;
    }
    $Path .= "$item/";
}
//! Anchor Url
define("URL", "http://" . $_SERVER['SERVER_NAME'] . $Path);
//! Include Url
define("INCLUDEURL", $_SERVER['DOCUMENT_ROOT'] . $Path);
//! Error Url
define("ERROR", "http://" . $_SERVER['SERVER_NAME'] . $Path);
