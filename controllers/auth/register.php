<?php
guest();

require "../core/Validator.php";
require "../core/Database.php";
$config = require("../config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $db = new Database($config);

  $errors = [];

  if (!Validator::email($_POST["email"])) {
    $errors["email"] = "Wrong E-mail format";
  }
  if (!Validator::password($_POST["password"])) {
    $errors["password"] = "Password has not met the requirements";
  }

  $query = "SELECT * FROM users WHERE email = :email";
  $params = [":email" => $_POST["email"]];
  $result = $db->execute($query, $params)->fetch();

  if ($result) {
    $errors["email"] = "The account already exists";
  }

  if (empty($errors)) {
    $query = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $params = [
      ":email" => $_POST["email"],
      ":password" => password_hash($_POST["password"], PASSWORD_BCRYPT)
    ];
    $db->execute($query, $params);

    $_SESSION["flash"] = "You have succesfully logged in";
    header("Location: /login");
    die();
  }
}


$title = "Register";
require "../views/auth/register.view.php";