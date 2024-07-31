<?php

use Core\Database;

session_start();

if ($_SERVER['REQUEST_METHOD'] === "POST" && $_SESSION['user']) {

    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $id = $_POST['id'];
    $customer = $_POST['customer'];
    $service = $_POST['service'];
    $location = $_POST['location'];
    $categories = $_POST['categories'];
    $photo = $_POST['photo'];

    if ($_FILES['update_photo']['name'] !== "") {
        $updatePhotoName = $_FILES['update_photo']['name'];
        $updatePhotoTmp = $_FILES['update_photo']['tmp_name'];
        $updatePhotoSrc = "projects/{$updatePhotoName}";

        unlink($photo);

        move_uploaded_file($updatePhotoTmp, $updatePhotoSrc);

        $db->query("UPDATE `projects` SET `customer`=:customer,`location`=:location,`service`=:service,`categories`=:categories,`photo`=:photo,`update_at`=NOW() WHERE id=:id", [
            "customer" => $customer,
            "location" => $location,
            "service" => $service,
            "categories" => $categories,
            "photo" => $updatePhotoSrc,
            "id" => $id,
        ]);
    } else {
        $db->query("UPDATE `projects` SET `customer`=:customer,`location`=:location,`service`=:service,`categories`=:categories,`update_at`=NOW() WHERE id=:id", [
            "customer" => $customer,
            "location" => $location,
            "service" => $service,
            "categories" => $categories,
            "id" => $id,
        ]);
    }

    header('location: /admin?update=true');
} else {
    header('location: /login');
}
