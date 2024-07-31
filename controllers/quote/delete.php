<?php

use Core\Database;

session_start();

if (isset($_SESSION['user'])) {
    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $id = $_GET['id'];

    $db->query('DELETE FROM quotation WHERE id=:id', [
        "id" => $id
    ]);

    header("location: /quotation?delete=true");
} else {
    header("location: /login");
}
