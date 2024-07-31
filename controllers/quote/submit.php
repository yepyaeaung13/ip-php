<?php

use Core\Database;

session_start();

if (isset($_SESSION["user"])) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $config = include base_path("config.php");
        $db = new Database($config['database']);

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $project = $_POST['project'];
        $business = $_POST['business'];
        $message = $_POST['message'];
        $budget = $_POST['budget'];

        $db->query("INSERT INTO quotation (name, phone, project, business, message, budget) VALUES (:name, :phone, :project, :business, :message, :budget)", [
            "name" => $name,
            "phone" => $phone,
            "project" => $project,
            "business" => $business,
            "message" => $message,
            "budget" => $budget,
        ]);

        header("location: /contact?quotation=true");
    }
} else {
    header("location: /login");
}
