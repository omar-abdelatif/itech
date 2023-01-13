<?php
//! Functions
function insertService($service_name, $service_desc, $avatar)
{
    $connection = connection();
    mysqli_query($connection, "INSERT INTO `services` (`name`, `description`, `img`) VALUES ('$service_name', '$service_desc', '$avatar')");
    $affected = mysqli_affected_rows($connection);
    if ($affected) {
        return true;
    } else {
        return false;
    }
}
function selectService($service_name, $service_desc)
{
    $connection = connection();
    $query = "SELECT * FROM `services` WHERE `name` = '$service_name' AND `description` = '$service_desc'";
    $res = mysqli_query($connection, $query);
    return mysqli_fetch_assoc($res);
}
function deleteService($id)
{
    $connection = connection();
    $query = "DELETE FROM `services` WHERE `id` = $id";
    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}
function updateService($id, $service_name, $service_desc, $img)
{
    $connection = connection();
    if (!empty($img)) {
        $extra = ", `img` = '$img'";
    } else {
        $extra = "";
    }
    $query = "UPDATE `services` SET `name` = '$service_name', `description` = '$service_desc' $extra WHERE `id` = $id";
    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}
function services()
{
    $connection = connection();
    $query = "SELECT * FROM `services` ORDER BY `id`";
    $res = mysqli_query($connection, $query);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
function getServiceById($id)
{
    $connection = connection();
    $selectsql = "SELECT * FROM `services` WHERE `id` = $id";
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
    $selectsql = "SELECT * FROM `services` WHERE `id` = $id";
    $rsSelect = mysqli_query($connection, $selectsql);
    $getRow = mysqli_fetch_assoc($rsSelect);
    $path = '../../../../assets/imgs/images/services/';
    $getImageName = $getRow['img'];
    $createDeletePath = $path . $getImageName;
    if (unlink($createDeletePath)) {
        $deleteSql = "DELETE FROM `services` WHERE `id` = $id";
        mysqli_query($connection, $deleteSql);
        mysqli_affected_rows($connection);
    }
}
?>