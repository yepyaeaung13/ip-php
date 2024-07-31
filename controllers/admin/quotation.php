<?php

use Core\Database;

session_start();

if (isset($_SESSION["user"])) {

    $config = include base_path("config.php");
    $db = new Database($config['database']);

    $quotations = $db->query("SELECT * FROM quotation")->getAll();

    views("admin/quotation.view.php", [
        "quotations" => $quotations
    ]);
} else {
    header("location: /login");
}
