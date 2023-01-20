<?php
//! Functions
function insertProduct($product_name, $product_price, $avatar)
{
    $connection = connection();
    mysqli_query($connection, "INSERT INTO `products` (`name`, `price`, `img`) VALUES ('$product_name', '$product_price', '$avatar')");
    $affected = mysqli_affected_rows($connection);
    if ($affected) {
        return true;
    } else {
        return false;
    }
}
function selectProduct($product_name, $product_price)
{
    $connection = connection();
    $query = "SELECT * FROM `products` WHERE `name` = '$product_name' AND `price` = '$product_price'";
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
function updateProduct($id, $product_name, $product_price, $img)
{
    $connection = connection();
    if (!empty($img)) {
        $extra = ", `img` = '$img'";
    } else {
        $extra = "";
    }
    $query = "UPDATE `products` SET `name` = '$product_name', `price` = '$product_price' $extra WHERE `id` = $id";
    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}
function products()
{
    $connection = connection();
    $query = "SELECT * FROM `products` ORDER BY `id`";
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
    $path = '../../../../assets/imgs/images/products/';
    $getImageName = $getRow['img'];
    $createDeletePath = $path . $getImageName;
    if (unlink($createDeletePath)) {
        $deleteSql = "DELETE FROM `products` WHERE `id` = $id";
        mysqli_query($connection, $deleteSql);
        mysqli_affected_rows($connection);
    }
}
function getAllImage()
{
    $connection = connection();
    $selectsql = "SELECT `img` FROM `products`";
    $query = mysqli_query($connection, $selectsql);
    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}