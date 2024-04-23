<?php require "../views/components/head.php" ?>
<?php require "../views/components/navbar.php" ?>

<div class="container">
  <ul>
    <?php foreach ($books as $book) { ?>
      <li>
        <h2><?= $book["nosaukums"] ?></h2>
        <p>Author: <?= $book["autors"] ?></p>
        <p>Release date: <?= $book["izdosana"] ?></p>
        <p>Availability: <?= $book["available"] > 0 ? 'Available - ' . $book["available"] . ' copies' : 'Not Available' ?></p>
        <?php if ($_SESSION["role"] == "admin") { ?>
          <a href="/show?id=<?= $book['id'] ?>">Details</a>
        <?php } ?>
        <?php if (isset($_SESSION["user"])) { ?>
          <form method="POST" action="<?= $book["available"] > 0 ? '/borrow' : '/return' ?>">
            <button name="id" value="<?= $book['id'] ?>"><?= $book["available"] > 0 ? 'Borrow' : 'Return' ?></button>
          </form>
        <?php } ?>
        <?php if ($_SESSION["role"] == "admin") { ?>
          <form method="POST" action="/remove">
            <button name="id" value="<?= $book['id'] ?>">Delete</button>
          </form>
        <?php } ?>
      </li>
    <?php } ?>
  </ul>
</div>

<?php require "../views/components/footer.php" ?>