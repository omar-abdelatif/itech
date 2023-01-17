<?php
//! Start Session
if (session_status() == PHP_SESSION_NONE) session_start();
//! Include Functions
include "core/functions.php";
//! Destroy Session
session_destroy();
//! Redirect
redirect(ERROR . 'index.php');