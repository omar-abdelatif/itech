<?php
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
function redirect($path){
    header("location: $path");
}