<?php
auth();
admin();

require "Database.php";
$config = require("config.php");

$db = new Database($config);

$query = "SELECT * FROM katalogs WHERE id = :id";
$params = [":id" => $_GET["id"]];

$post = $db->execute($query, $params)->fetch();

$title = "Katalogs";

require "views/katalogs/show.view.php";