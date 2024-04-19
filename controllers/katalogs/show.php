<?php
if (!isset($_SESSION["user"])) {
    header("Location: /login");
    die();
}
if ($_SESSION["role"] != "admin") {
    header("Location: /books");
    die();
}

require "Database.php";
$config = require("config.php");

$db = new Database($config);

$query = "SELECT * FROM katalogs WHERE id = :id";
$params = [":id" => $_GET["id"]];

$post = $db->execute($query, $params)->fetch();

$title = "Katalogs";

require "views/katalogs/show.view.php";