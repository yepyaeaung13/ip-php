<?php

use Core\Database;

session_start();

if ($_SESSION['user']) {

    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $projects = $db->query('SELECT * FROM projects ORDER BY id DESC')->getAll();

    views("admin/index.view.php", [
        "projects" => $projects
    ]);
} else {
    header('location: /login');
}
