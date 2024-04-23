<?php 
function auth()
{
    if (!isset($_SESSION["user"])) {
        header("Location: /login");
        die();
    }
}
function guest()
{
    if (isset($_SESSION["user"])) {
        header("Location: /");
        die();
    }
}
function admin()
{
    if ($_SESSION["role"] != "admin") {
        header("Location: /books");
        die();
    }
}


