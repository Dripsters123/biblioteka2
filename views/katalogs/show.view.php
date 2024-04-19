<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1><?= htmlspecialchars($post["nosaukums"] ." ". $post["autors"] ." ". $post["izdosana"] . " " . $post["available"]) ?></h1>

<?php if ($_SESSION["role"] == "admin") { ?>
  <a href="/edit?id=<?= $post["id"] ?>">Edit</a>
<?php } ?>

<?php require "views/components/footer.php" ?>
