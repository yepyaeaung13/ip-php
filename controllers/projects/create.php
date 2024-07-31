<?php

use Core\Database;

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_SESSION['user']) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $customer = $_POST['customer'];
    $location = $_POST['location'];
    $service = $_POST['service'];
    $categories = $_POST['categories'];
    $photoName = $_FILES['photo']['name'];
    $tmpName = $_FILES['photo']['tmp_name'];

    $photoSrc = "projects/{$photoName}";
    move_uploaded_file($tmpName, $photoSrc);

    $db->query("INSERT INTO projects (customer, location, service, categories, photo, created_at) VALUES (:customer, :location, :service, :categories, :photo, NOW())", [
        "customer" => $customer,
        "location" => $location,
        "service" => $service,
        "categories" => $categories,
        "photo" => $photoSrc,
    ]);

    header('location: /admin?create=true');
} else {
    header('location: /login');
}
