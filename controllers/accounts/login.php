<?php

use Core\Database;

$config = include base_path("config.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $db = new Database($config['database']);
        $query = "SELECT * FROM users WHERE username= :username";
        $user = $db->query($query, ["username" => $username])->find();

        if (isset($user) && $password === $user["password"]) {
            session_start();
            $_SESSION['user'] = $user;

            header('location: /admin');
        } else {
            header('location: /login?error=true');
        }
    } catch (\PDOException $e) {
        echo "connection failed " . $e->getMessage();
    }
}


views("login.view.php");
