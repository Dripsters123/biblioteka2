<?php require "../views/components/head.php" ?>
<?php require "../views/components/navbar.php" ?>

<h1 class="centered"><?= htmlspecialchars($post["nosaukums"] ." ". $post["autors"] ." ". $post["izdosana"] . " - " . ($post["available"] == 1 ? 'Available' : 'Not Available')) ?></h1>

<?php if ($_SESSION["role"] == "admin") { ?>
  <a href="/edit?id=<?= $post["id"] ?>" class="edit-link">Edit</a>
<?php } ?>

<?php require "../views/components/footer.php" ?>
