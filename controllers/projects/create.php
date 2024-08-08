<?php

use Core\Database;

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_SESSION['user']) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $projectDate = $_POST['project_date'];
    $customer = $_POST['customer'];
    $location = $_POST['location'];
    $service = $_POST['service'];
    $categories = $_POST['categories'];
    $photoName1 = $_FILES['photo1']['name'];
    $photoName2 = $_FILES['photo2']['name'];
    $photoName3 = $_FILES['photo3']['name'];
    $tmpName1 = $_FILES['photo1']['tmp_name'];
    $tmpName2 = $_FILES['photo2']['tmp_name'];
    $tmpName3 = $_FILES['photo3']['tmp_name'];

    $photoSrc1 = "projects/{$photoName1}";
    $photoSrc2 = "projects/{$photoName2}";
    $photoSrc3 = "projects/{$photoName3}";

    if ($_FILES['photo1']['error'] !== 1 && $_FILES['photo2']['error'] !== 1 && $_FILES['photo3']['error'] !== 1) {
        move_uploaded_file($tmpName1, $photoSrc1);
        move_uploaded_file($tmpName2, $photoSrc2);
        move_uploaded_file($tmpName3, $photoSrc3);

        $db->query("INSERT INTO projects (date, customer, location, service, categories, photo1, photo2, photo3, created_at) VALUES (:date, :customer, :location, :service, :categories, :photo1, :photo2, :photo3, NOW())", [
            "date" => $projectDate,
            "customer" => $customer,
            "location" => $location,
            "service" => $service,
            "categories" => $categories,
            "photo1" => $photoSrc1,
            "photo2" => $photoSrc2,
            "photo3" => $photoSrc3,
        ]);

        header('location: /admin?create=true');
    } else {
        header("location: /admin?photoErr=true");
    }
} else {
    header('location: /login');
}
