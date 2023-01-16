<?php
function connection(){
    return mysqli_connect("localhost", "root", "", "fixit");
}