<?php

use Core\Database;

session_start();

$config = include base_path("config.php");
$db = new Database($config['database']);

$projects = $db->query("SELECT * FROM projects ORDER BY id DESC LIMIT 3")->getAll();

views("index.view.php", [
    "projects" => $projects
]);
