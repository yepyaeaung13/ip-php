<?php

use Core\Database;

session_start();

if ($_SESSION['user']) {

    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $users = $db->query("SELECT * FROM users")->getAll();

    views("admin/accounts.view.php", [
        "users" => $users
    ]);
} else {
    header('location: /login');
}
