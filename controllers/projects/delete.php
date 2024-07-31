<?php

use Core\Database;

session_start();

if ($_SESSION['user']) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $id = $_GET['id'];
    $photoName = $_GET['name'];

    // delete photo from folder 
    unlink($photoName);

    $db->query('DELETE FROM projects WHERE id=:id', ['id' => $id]);

    header('location: /admin?delete=true');
} else {
    header('location: /login');
}
