<?php
function insertUser($name, $email, $password, $cpass)
{
    $connection = connection();
    mysqli_query($connection, "INSERT INTO `users` (`name`, `email`, `password`, `img`) VALUES ('$name', '$email', '$password', '$cpass')");
    $affected = mysqli_affected_rows($connection);
    if ($affected) {
        return true;
    } else {
        return false;
    }
}
