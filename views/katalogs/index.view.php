<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<div class="container">
  <div class="available-books">
    <h1>Available</h1>
    <ul>
      <?php foreach ($posts as $post) {
        if ($post["available"] == 1) { ?>
          <li>
            <?php if (isset($_SESSION["user"]) && $_SESSION["role"] != "admin") { ?>
              <?= $post["nosaukums"] . " / " . $post["autors"] . " / " . $post["izdosana"] ?>
              <form method="POST" action="/borrow">
                <button name="id" value="<?= $post['id'] ?>">Borrow</button>
              </form>
            <?php } else { ?>
              <a href="/show?id=<?= $post['id'] ?>">
                <?= $post["nosaukums"] . " / " . $post["autors"] . " / " . $post["izdosana"] ?>
              </a>
            <?php } ?>
            <?php if ($_SESSION["role"] == "admin") { ?>
              <form method="POST" action="/remove">
                <button name="id" value="<?= $post['id'] ?>">Delete</button>
              </form>
            <?php } ?>
          </li>
        <?php }
      } ?>
    </ul>
  </div>

  <div class="not-available-books">
    <h1>Not available</h1>
    <ul>
      <?php foreach ($posts as $post) {
        if ($post["available"] == 0) { ?>
          <li>
            <?php if (isset($_SESSION["user"]) && $_SESSION["role"] != "admin") { ?>
              <?= $post["nosaukums"] . " / " . $post["autors"] . " / " . $post["izdosana"] ?>
              <form method="POST" action="/return">
                <button name="id" value="<?= $post['id'] ?>">Return</button>
              </form>
            <?php } else { ?>
              <a href="/show?id=<?= $post['id'] ?>">
                <?= $post["nosaukums"] . " / " . $post["autors"] . " / " . $post["izdosana"] ?>
              </a>
            <?php } ?>
            <?php if ($_SESSION["role"] == "admin") { ?>
              <form method="POST" action="/remove">
                <button name="id" value="<?= $post['id'] ?>">Delete</button>
              </form>
            <?php } ?>
          </li>
        <?php }
      } ?>
    </ul>
  </div>
</div>

<?php require "views/components/footer.php" ?>
