<?php
require "../core/Database.php";
$config = require("../config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = "UPDATE katalogs SET available = 0 WHERE id = :id";

    $params = [
        ":id" => $_POST["id"]
    ];
    $db->execute($query, $params);

    header("Location: /books");
    die();
};