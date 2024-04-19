<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>


<form method="POST">
    <input name="id" value="<?= $post["id"] ?>" type="hidden" />
    <label>Nosaukums:
        <input name="nosaukums" value="<?= $_POST["nosaukums"] ?? $post["nosaukums"] ?>" />
        <?php if (isset($errors["nosaukums"])) { ?>
            <p class="invalid-data"><?= $errors["nosaukums"] ?></p>
        <?php } ?>
    </label>

    <label>Autors:
        <input name="autors" value="<?= $_POST["autors"] ?? $post["autors"] ?>" />
        <?php if (isset($errors["autors"])) { ?>
            <p class="invalid-data"><?= $errors["autors"] ?></p>
        <?php } ?>
    </label>
    <label>norises vieta:
        <input type="date" name="izdosana" value="<?= $_POST["izdosana"] ?? $post["izdosana"] ?>" />
        <?php if (isset($errors["izdosana"])) { ?>
            <p class="invalid-data"><?= $errors["izdosana"] ?></p>
        <?php } ?>
    </label>
    <label>Pieejamiba:
        <input type="checkbox" name="available" value="<?= $_POST["available"] ?? $post["available"] ?>" />
        <?php if (isset($errors["available"])) { ?>
            <p class="invalid-data"><?= $errors["available"] ?></p>
        <?php } ?>
        <button>Saglabāt</button>
    </label>
</form>
<?php require "views/components/footer.php" ?>