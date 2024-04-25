<?php require "../views/components/head.php" ?>
<?php require "../views/components/navbar.php" ?>

<div class="container">
  <div class="book-list">
    <?php foreach ($posts as $post) { ?>
      <div class="book-item ">
        <h2><?= $post["nosaukums"] ?></h2>
        <p>Author: <?= $post["autors"] ?></p>
        <p>Release date: <?= $post["izdosana"] ?></p>
        <p>Availability: <?= $post["available"] == 1 ? 'Available' : 'Not Available' ?></p>
        <?php if (isset($_SESSION["user"]) && $_SESSION["role"] == "admin") { ?>
          <div class="details">
            <a href="/show?id=<?= $post['id'] ?>">Edit</a>
          </div>
          <div class="button-group">
            <form method="POST" action="/remove" class="button-form">
              <button name="id" value="<?= $post['id'] ?>">Delete</button>
            </form>
            <form method="POST" action="<?= $post["available"] == 1 ? '/borrow' : '/return' ?>" class="button-form">
              <button name="id" value="<?= $post['id'] ?>"><?= $post["available"] == 1 ? 'Borrow' : 'Return' ?></button>
            </form>
          </div>
        <?php } elseif (isset($_SESSION["user"])) { ?>
            <form method="POST" action="<?= $post["available"] == 1 ? '/borrow' : '/return' ?>" class="button-form">
              <button name="id" value="<?= $post['id'] ?>"><?= $post["available"] == 1 ? 'Borrow' : 'Return' ?></button>
            </form>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</div>

<?php require "../views/components/footer.php" ?>
