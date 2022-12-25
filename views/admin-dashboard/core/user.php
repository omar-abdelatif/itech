<?php
function insertUser($name, $email, $password)
{
    $connection = connection();
    mysqli_query($connection, "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')");
    $affected = mysqli_affected_rows($connection);
    if ($affected) {
        return true;
    } else {
        return false;
    }
}
