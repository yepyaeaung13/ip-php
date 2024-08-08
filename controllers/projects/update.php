<?php

use Core\Database;

session_start();

if ($_SERVER['REQUEST_METHOD'] === "POST" && $_SESSION['user']) {

    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $id = $_POST['id'];
    $projectDate = $_POST['project_date'];
    $customer = $_POST['customer'];
    $service = $_POST['service'];
    $location = $_POST['location'];
    $categories = $_POST['categories'];
    $photo1 = $_POST['photo1'];
    $photo2 = $_POST['photo2'];
    $photo3 = $_POST['photo3'];

    $db->query("UPDATE `projects` SET `date`=:date, `customer`=:customer,`location`=:location,`service`=:service,`categories`=:categories,`update_at`=NOW() WHERE id=:id", [
        "date" => $projectDate,
        "customer" => $customer,
        "location" => $location,
        "service" => $service,
        "categories" => $categories,
        "id" => $id,
    ]);

    // check exist photo1 
    if ($_FILES['update_photo1']['name'] !== "") {

        $updatePhotoName1 = $_FILES['update_photo1']['name'];
        $updatePhotoTmp1 = $_FILES['update_photo1']['tmp_name'];
        $updatePhoto1 = "projects/{$updatePhotoName1}";

        move_uploaded_file($updatePhotoTmp1, $updatePhoto1);

        $db->query("UPDATE `projects` SET `photo1`=:photo1 WHERE id=:id", [
            "photo1" => $updatePhoto1,
            "id" => $id,
        ]);

        unlink($photo1);
    }
    // check exist photo2 
    if ($_FILES['update_photo2']['name'] !== "") {

        $updatePhotoName2 = $_FILES['update_photo2']['name'];
        $updatePhotoTmp2 = $_FILES['update_photo2']['tmp_name'];
        $updatePhoto2 = "projects/{$updatePhotoName2}";

        move_uploaded_file($updatePhotoTmp2, $updatePhoto2);

        $db->query("UPDATE `projects` SET `photo2`=:photo2 WHERE id=:id", [
            "photo2" => $updatePhoto2,
            "id" => $id,
        ]);

        unlink($photo2);
    }
    // check exist photo3 
    if ($_FILES['update_photo3']['name'] !== "") {

        $updatePhotoName3 = $_FILES['update_photo3']['name'];
        $updatePhotoTmp3 = $_FILES['update_photo3']['tmp_name'];
        $updatePhoto3 = "projects/{$updatePhotoName3}";

        move_uploaded_file($updatePhotoTmp3, $updatePhoto3);

        $db->query("UPDATE `projects` SET `photo3`=:photo3 WHERE id=:id", [
            "photo3" => $updatePhoto3,
            "id" => $id,
        ]);

        unlink($photo3);
    }

    header('location: /admin?update=true');
} else {
    header('location: /login');
}
