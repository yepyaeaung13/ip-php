<?php

use Core\Database;

session_start();

if ($_SESSION['user']) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $id = $_GET['id'];

    $db->query("DELETE FROM users WHERE id=:id", ["id" => $id]);

    header('location: /accounts?delete=true');
} else {
    header('location: /login');
}
