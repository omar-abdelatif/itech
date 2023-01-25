<?php
function insertUser($name, $email, $password)
{
    $connection = connection();
    $query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
    mysqli_query($connection, $query);
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
function updateUser($id, $name, $email, $password)
{
    $connection = connection();
    $query = "UPDATE `users` SET `name` = '$name', `email` = '$email', `password` = '$password' WHERE `id` = $id";
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
function admin()
{
    $connection = connection();
    $query = "SELECT * FROM `users`";
    $res = mysqli_query($connection, $query);
    return mysqli_fetch_assoc($res);
}
function insertContact($work_num, $phone_num, $work_add)
{
    $connection = connection();
    $query = "INSERT INTO `users` (`work_num`, `phone_num`, `work_add`) VALUES ('$work_num', '$phone_num', '$work_add')";
    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}
function insertPersonal($position, $country, $comp_name, $avatar)
{
    $connection = connection();
    $query = "INSERT INTO `users` (`position`, `country`, `comp_name`, `img`) VALUES ('$position', '$country', '$comp_name', '$avatar')";
    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}
function insertSocial($facebook, $whatsapp)
{
    $connection = connection();
    $query = "INSERT INTO `users` (`facebook`, `whatsapp`) VALUES ('$facebook', '$whatsapp')";
    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}
function updateSecurity($id, $password)
{
    $connection = connection();
    $query = "UPDATE `users` SET `password` = '$password' WHERE `id` = $id";
    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}
function updateInfo(){
    
}