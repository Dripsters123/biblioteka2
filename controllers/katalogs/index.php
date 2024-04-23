<?php
auth();

require "../core/Database.php";
$config = require("../config.php");

$db = new Database($config);

$books = $db->execute("SELECT * FROM katalogs", [])->fetchAll(PDO::FETCH_ASSOC);
foreach ($books as $book) {
    $stmt = $db->execute("SELECT COUNT(*) as count FROM katalogs WHERE nosaukums = :nosaukums AND autors = :autors AND izdosana = :izdosana", ['nosaukums' => $book['nosaukums'], 'autors' => $book['autors'], 'izdosana' => $book['izdosana']]);
    $count = $stmt->fetch(PDO::FETCH_ASSOC)['count'];

    $stmt = $db->execute("UPDATE katalogs SET available = :available WHERE id = :id", ['available' => $count, 'id' => $book['id']]);
}

$title = "Grāmatas";
require "../views/katalogs/index.view.php";
?>
