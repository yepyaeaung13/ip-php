<?php

use Core\Database;

session_start();

if ($_SESSION['user'] && $_SERVER['REQUEST_METHOD'] === "POST") {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $name = $_POST['name'];
    $username = $_POST['username'];
    $role = $_POST['role'];
    $password = $_POST['password'];

    $db->query('INSERT INTO users (name, username, password, role, created_at) VALUES (:name,:username,:password,:role, NOW())', [
        "name" => $name,
        "username" => $username,
        "password" => $password,
        "role" => $role,
    ]);

    header("location: /accounts?create=true");
} else {
    header('location: /login');
}
