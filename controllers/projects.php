<?php

use Core\Database;

session_start();

$config = include base_path("config.php");
$db = new Database($config['database']);

$categories = [
    ['name' => "All", "value" => "all"],
    ['name' => "CCTV", "value" => "cctv"],
    ['name' => "WIFI & Network", "value" => "network"],
    ['name' => "Solar", "value" => "solar"],
    ['name' => "Access Control", "value" => "card-access"],
    ['name' => "Fire Alarm", "value" => "fire-alarm"],
    ['name' => "PABX", "value" => "pabx"],
    ['name' => "PA", "value" => "pa"],
    ['name' => "MATV & CATV", "value" => "matv"],
    ['name' => "GPS", "value" => "gps"],
];

$projects_per_page = 6;

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$title = isset($_GET['title']) ? $_GET['title'] : "all";

$offset = ($page - 1) * $projects_per_page;

if (isset($_GET["search"])) {
    $search = "%" . $_GET['search'] . "%";
    $projects = $db->query("SELECT * FROM projects WHERE customer LIKE '$search' ORDER BY id DESC")->getAll();
} else {
    if ($title == "all") {
        $projects = $db->query("SELECT * FROM projects ORDER BY id DESC LIMIT $projects_per_page OFFSET $offset")->getAll();
    } else {
        $projects = $db->query("SELECT * FROM projects WHERE categories=:categories ORDER BY id DESC LIMIT $projects_per_page OFFSET $offset", ["categories" => $title])->getAll();
    }
}

if ($title == "all") {
    $allProjects = $db->query('SELECT * FROM projects ORDER BY customer ASC')->getAll();
} else {
    $allProjects = $db->query('SELECT * FROM projects WHERE categories=:categories', ['categories' => $title])->getAll();
}

$total_page = ceil(count($allProjects) / $projects_per_page);




views("projects.view.php", [
    "categories" => $categories,
    "page" => $page,
    "title" => $title,
    "projects" => $projects,
    "allProjects" => $allProjects,
    "total_page" => $total_page,
]);
