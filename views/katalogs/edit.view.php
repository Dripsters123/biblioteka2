<?php require "../views/components/head.php" ?>
<?php require "../views/components/navbar.php" ?>

<div class="book-form-container">
<form method="POST" class="book-form">
<h1 class="login-h1">Edit</h1>
    <input name="id" value="<?= $post["id"] ?>" type="hidden" />
    <label>Name:
        <input name="nosaukums" value="<?= $_POST["nosaukums"] ?? $post["nosaukums"] ?>" class="book-form-input"/>
        <?php if (isset($errors["nosaukums"])) { ?>
            <p class="invalid-data"><?= $errors["nosaukums"] ?></p>
        <?php } ?>
    </label>

    <label>Author:
        <input name="autors" value="<?= $_POST["autors"] ?? $post["autors"] ?>" class="book-form-input"/>
        <?php if (isset($errors["autors"])) { ?>
            <p class="invalid-data"><?= $errors["autors"] ?></p>
        <?php } ?>
    </label>
    <label>Release date:
        <input type="date" name="izdosana" value="<?= $_POST["izdosana"] ?? $post["izdosana"] ?>" class="book-form-input"/>
        <?php if (isset($errors["izdosana"])) { ?>
            <p class="invalid-data"><?= $errors["izdosana"] ?></p>
        <?php } ?>
    </label>
    <label>Availability:
        <input type="checkbox" name="available" value="<?= $_POST["available"] ?? $post["available"] ?>" class="book-form-input" />
        <?php if (isset($errors["available"])) { ?>
            <p class="invalid-data"><?= $errors["available"] ?></p>
        <?php } ?>
        <button>Save</button>
    </label>
</form>
        </div>
<?php require "../views/components/footer.php" ?>