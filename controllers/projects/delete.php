<?php

use Core\Database;

session_start();

if ($_SESSION['user']) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $id = $_GET['id'];
    $photoName1 = $_GET['name1'];
    $photoName2 = $_GET['name2'];
    $photoName3 = $_GET['name3'];

    // delete photo from folder 
    unlink($photoName1);
    unlink($photoName2);
    unlink($photoName3);

    $db->query('DELETE FROM projects WHERE id=:id', ['id' => $id]);

    header('location: /admin?delete=true');
} else {
    header('location: /login');
}
