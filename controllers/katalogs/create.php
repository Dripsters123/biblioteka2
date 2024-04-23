<?php
auth();
admin();

require "../core/Validator.php";
require "../core/Database.php";
$config = require("../config.php");
$db = new Database($config);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if (!Validator::string($_POST["nosaukums"], min: 1, max: 255)) {
        $errors["nosaukums"] = "Nosaukums cannot be empty or too long";
    }
    if (!Validator::string($_POST["autors"], min: 1, max: 255)) {
        $errors["autors"] = "Nosaukums cannot be empty or too long";
    }

    if (empty($errors)) {
        $query = "INSERT INTO katalogs (nosaukums,autors,izdosana,available)
          VALUES (:nosaukums,:autors,:izdosana,:available);";

        $params = [
            ":nosaukums" => $_POST["nosaukums"],
            ":autors" => $_POST["autors"],
            ":izdosana" => $_POST["izdosana"],
            ":available" => isset($_POST["available"]) ? 1 : 0
        ];


        $db->execute($query, $params);

        header("Location: /books");
        die();
    }
}


$title = "Create";
require "../views/katalogs/create.view.php";