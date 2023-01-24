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
function selectUser($email, $password)
{
    $connection = connection();
    $query = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
    $res = mysqli_query($connection, $query);
    return mysqli_fetch_assoc($res);
}
function deleteUser($id)
{
    $connection = connection();
    $query = "DELETE FROM `users` WHERE `id` = $id";
    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}
function updateUser($id, $name, $email, $password, $img)
{
    $connection = connection();
    if (!empty($img)) {
        $extra = ", `img` = '$img'";
    } else {
        $extra = "";
    }
    $query = "UPDATE `users` SET `name` = '$name', `email` = '$email', `password` = '$password' $extra WHERE `id` = $id";
    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}
function users()
{
    $connection = connection();
    $query = "SELECT * FROM `users`";
    $res = mysqli_query($connection, $query);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
function getUserById($id)
{
    $connection = connection();
    $selectsql = "SELECT * FROM `users` WHERE `id` = $id";
    $rsSelect = mysqli_query($connection, $selectsql);
    $getRow = mysqli_fetch_assoc($rsSelect);
    return $getRow;
}
function uploadImage($tmp_name, $location)
{
    if (move_uploaded_file($tmp_name, $location)) {
        return $location;
    }
}
function deleteWithImage($id)
{
    $connection = connection();
    $selectsql = "SELECT * FROM `users` WHERE `id` = $id";
    $rsSelect = mysqli_query($connection, $selectsql);
    $getRow = mysqli_fetch_assoc($rsSelect);
    $path = '../assets/img/';
    $getImageName = $getRow['img'];
    $createDeletePath = $path . $getImageName;
    if (unlink($createDeletePath)) {
        $deleteSql = "DELETE FROM `users` WHERE `id` = $id";
        mysqli_query($connection, $deleteSql);
        mysqli_affected_rows($connection);
    }
}
function getAllImage()
{
    $connection = connection();
    $selectsql = "SELECT `img` FROM `users`";
    $query = mysqli_query($connection, $selectsql);
    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}
// function updateContact(){
//  
// }