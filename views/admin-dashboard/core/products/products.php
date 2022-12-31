<?php
//! Include Connection
include "../../config/database.php";

function insertProduct($name, $price)
{
    $connection = connection();
    mysqli_query($connection, "INSERT INTO `products` (`name`, `price`) VALUES ('$name', '$price')");
    $affected = mysqli_affected_rows($connection);
    if ($affected) {
        return true;
    } else {
        return false;
    }
}
function selectProduct($name, $price)
{
    $connection = connection();
    $query = "SELECT * FROM `products` WHERE `name` = '$name' AND `price` = '$price'";
    $res = mysqli_query($connection, $query);
    return mysqli_fetch_assoc($res);
}
function deleteProduct($id)
{
    $connection = connection();
    $query = "DELETE FROM `products` WHERE `id` = $id";
    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}
function updateProduct($id, $name, $price, $img)
{
    $connection = connection();
    if (!empty($img)) {
        $extra = ", `img` = '$img'";
    } else {
        $extra = "";
    }
    $query = "UPDATE `products` SET `name` = '$name', `price` = '$price' $extra WHERE `id` = $id";
    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}
function products()
{
    $connection = connection();
    $query = "SELECT * FROM `products`";
    $res = mysqli_query($connection, $query);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
function getProductById($id)
{
    $connection = connection();
    $selectsql = "SELECT * FROM `products` WHERE `id` = $id";
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
    $selectsql = "SELECT * FROM `products` WHERE `id` = $id";
    $rsSelect = mysqli_query($connection, $selectsql);
    $getRow = mysqli_fetch_assoc($rsSelect);
    $path = '../assets/img/';
    $getImageName = $getRow['img'];
    $createDeletePath = $path . $getImageName;
    if (unlink($createDeletePath)) {
        $deleteSql = "DELETE FROM `products` WHERE `id` = $id";
        mysqli_query($connection, $deleteSql);
        mysqli_affected_rows($connection);
    }
}

?>
<!-- all functions for deleting and selecting and inserting to and from the database -->