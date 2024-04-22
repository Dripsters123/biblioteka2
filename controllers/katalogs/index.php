<?php
auth();

require "Database.php";
$config = require("config.php");

$query = "SELECT * FROM katalogs";
$params = [];

$db = new Database($config);

$posts = $db
    ->execute($query, $params)
    ->fetchAll();

$title = "Grāmatas";
require "views/katalogs/index.view.php";