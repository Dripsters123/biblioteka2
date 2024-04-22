<?php
auth();
admin();

require "Validator.php";
require "Database.php";
$config = require("config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if (!Validator::string($_POST["nosaukums"], min: 1, max: 255)) {
        $errors["nosaukums"] = "Title cannot be empty or too long";
    }

    $available = isset($_POST["available"]) ? 1 : 0;

    if (empty($errors)) {
        $query = "UPDATE katalogs SET nosaukums = :nosaukums,autors = :autors,izdosana = :izdosana,available = :available
                  WHERE id = :id;";

        $params = [
            ":nosaukums" => $_POST["nosaukums"],
            ":autors" => $_POST["autors"],
            ":izdosana" => $_POST["izdosana"],
            ":available" => $available,
            ":id" => $_POST["id"]
        ];
        $db->execute($query, $params);

        header("Location: /books");
        die();
    }
}
$query = "SELECT * FROM katalogs WHERE id = :id";
$params = [":id" => $_GET["id"]];

$post = $db->execute($query, $params)->fetch();

$title = "Edit";

require "views/katalogs/edit.view.php";