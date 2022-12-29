<?php
//! Start Session
session_start();
//! Include Functions
include "core/functions.php";
//! Destroy Session
session_destroy();
//! Redirect
redirect('../../index.php');
